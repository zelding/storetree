<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemLocale;
use App\Utils\Constants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

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
        $separate     = $request->get('separate') ?? false;
        $createTrans  = $request->get('trans') ?? false;
        $createFiles  = $request->get('itemData') ?? false;
        $basePath     = "/tmp/storetree/export/";
        $itemPath     = $basePath."items";
        $transPath    = $basePath."trans";

        if ( empty($items) || (!$createFiles && !$createTrans) ) {
            return redirect(route('export.index'))->with('warning', 'Pick something');
        }

        $models = Item::with('shops','recipes.components', 'usedInRecipes.for', 'stats', 'ability', 'locale')
            ->whereIn('id', $items)
            ->orderBy('dota_id')
            ->get();

        if ( $createFiles ) {
            if ( $separate ) {
                try {
                    foreach ( $models as $item ) {
                        /** @var Item $item */
                        $data = view('templates/item', [
                            'items' => $models
                        ]
                        );

                        file_put_contents($itemPath . "/{$item->base_class}.txt", $data);
                    }
                }
                catch ( \Exception $ex ) {
                    return redirect(route('export.index'))->withException($ex);
                }
            }
            else {
                $this->createDirs($basePath);

                try {
                    $data = view('templates/all_items', [
                        'items' => $models
                    ]
                    );

                    file_put_contents($basePath . "npc_custom_items.txt", $data);
                }
                catch ( \Exception $ex ) {
                    return redirect(route('export.index'))->withException($ex);
                }
            }
        }

        if ( $createTrans ) {
            $langs = $request->get('langs_selected') ?? [];
            if ( $separate ) {

            }
            else {
                foreach( Constants::$languages as $lang => $name ) {
                    if ( in_array($lang, $langs) ) {
                        foreach ( $models as $item ) {
                            $locale = $item->locale->first(function ($value, $key) use ($lang) {
                                /** @var ItemLocale $value */
                                return $value->language_id == $lang;
                            });

                            if ( !$locale instanceof ItemLocale ) {
                                $locale = $item->locale->first();
                            }

                            /** @var Item $item */
                            $data = view('templates/all_tooltips', [
                                'items'     => $models,
                                'locale'    => $locale,
                                'lang_name' => $name
                            ]);

                            file_put_contents($transPath . "/addon_" . strtolower($name) . ".txt", $data);
                        }
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
            }
        }

        // Zip archive will be created only after closing object
        $zip->close();

        return response()->download("/tmp/storetree/export.zip");
    }

    private function createDirs($path)
    {
        if ( file_exists($path)) {
            return true;
        }

        return mkdir($path, 0777, true);
    }
}