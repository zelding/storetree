<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemLocale;
use App\Service\ItemService;
use App\Utils\Constants;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Debug\Exception\FatalErrorException;

class ExportController extends Controller
{
    public function index()
    {
        $items = Item::where('is_recipe', 0)
            ->orderBy('name')
            ->get();

        $languages = Constants::$languages;

        unset(
            $languages[2],
            $languages[3],
            $languages[4],
            $languages[5]
        );

        return view('templates/index', [
            'items'     => $items,
            'languages' => $languages
        ]);
    }

    public function run(Request $request)
    {
        $items        = $request->get('items') ?? [];
        $createTrans  = $request->get('trans') ?? false;
        $createFiles  = $request->get('itemData') ?? false;
        $basePath     = "/tmp/storetree/export/";
        $itemPath     = $basePath."items";
        $transPath    = $basePath."trans";

        $newItems      = [];
        $overrideItems = [];

        if ( empty($items) || (!$createFiles && !$createTrans) ) {
            return redirect(route('export.index'))->with('warning', 'Pick something');
        }

        $models = Item::with(
            ['stats' => function ($query) {
                /** @var Builder $query */
                $query->orderBy('order', 'asc');
            }],
            'shops',
            'recipes.components',
            'usedInRecipes.for',
            'ability')
                ->whereIn('id', $items)
                ->where('is_recipe', 0)
                //->exportRequest($request)
                ->orderBy('dota_id')
                ->get();

        foreach( $models as &$item ) {
            app(ItemService::class)->resolveItemInheritedStats($item);
        }

        if ( $createFiles ) {
            $this->createDirs($itemPath);

            try {
                foreach ( $models as $item ) {
                    //Log::info("exporting: {$item->base_class}");

                    /** @var Item $item */
                    $data = view('templates/item', [
                        'recipes' => $item->recipes,
                        'item' => $item
                    ]);

                    $fileName = $itemPath."/{$item->base_class}.txt";

                    file_put_contents($fileName, $data);

                    if ($item->is_override) {
                        $overrideItems[] = "items/{$item->base_class}.txt";
                    }
                    else {
                        $newItems[] = "items/{$item->base_class}.txt";
                    }
                }

                $data = view('templates/all_items', [
                    'items' => $newItems
                ]);

                file_put_contents($basePath . "npc_items_custom.txt", $data);

                $data = view('templates/all_items', [
                    'items' => $overrideItems
                ]);

                file_put_contents($basePath . "npc_items_override.txt", $data);
            }
            catch ( \Exception $ex ) {
                return redirect(route('export.index'))->withException($ex);
            }

        }

        if ( $createTrans ) {
            $langs = $request->get('langs_selected') ?? [];

            foreach( Constants::$languages as $lang => $name ) {
                if (in_array($lang, $langs)) {
                    foreach ( $models as $item ) {
                        $locale = $item->locale->first(
                            function ($value, $key) use ($lang) {
                                /** @var ItemLocale $value */
                                return $value->language_id == $lang;
                            }
                        );

                        if ( !$locale instanceof ItemLocale ) {
                            $locale = $item->locale->first();
                        }

                        /** @var Item $item */
                        $data = view('templates/all_tooltips', [
                            'items'     => $models,
                            'locale_id' => $lang,
                            'lang_name' => $name
                        ]);

                        $data = mb_convert_encoding($data, "UCS-2LE", 'auto');

                        file_put_contents($transPath . "/addon_" . strtolower($name) . ".txt", $data);
                    }
                }
            }
        }

        // Create recursive directory iterator
        /** @var \SplFileInfo[] $files */
        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($basePath),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        // Initialize archive object
        $zip = new \ZipArchive();
        $zip->open("/tmp/storetree/export.zip", \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        $zippedFiles = [];

        foreach ($files as $name => $file)
        {
            // Skip directories (they would be added automatically)
            if (!$file->isDir())
            {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($basePath));

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);

                $zippedFiles[] = $filePath;
            }
        }

        // Zip archive will be created only after closing object
        $zip->close();

        foreach( $zippedFiles as $fn ) {
            unlink($fn);
        }

        return response()->download("/tmp/storetree/export.zip");
    }

    private function createDirs($path)
    {
        if ( file_exists($path) ) {
            return true;
        }

        return mkdir($path, 0777, true);
    }
}
