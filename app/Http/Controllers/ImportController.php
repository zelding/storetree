<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 10/12/17 9:42 AM
 */

namespace App\Http\Controllers;

use App\Service\ImportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Zedling\DotaKV\Parser;

class ImportController extends Controller
{
    protected $parser;

    public function __construct()
    {
        $this->parser = new Parser();
    }

    public function index(Request $request)
    {
        $files = Storage::disk('local')->allFiles("import/" . Auth::getUser()->id);

        $kvData = [];

        foreach( $files as $file ) {
            $fileData  = Storage::get( $file );

            $kvData += $this->parser->load($fileData);
        }

        $grouped = app( ImportService::class )->groupEntities($kvData);
        $parsed  = app( ImportService::class )->loadParsedKvArray($grouped);
        app(ImportService::class)->createEntities($parsed);

        /*$preview = "";
        if ( !empty($parsed) ) {
            foreach($parsed as $item) {
                $preview .= View::make('templates/previews/item', [
                    'item'   => $item
                ])->render();
            }
        }*/

        return view('import/index', [
            "kvData"  => $kvData ?? [],
            "grouped" => $grouped,
            "parsed"  => $parsed
        ]);
    }

    public function upload(Request $request)
    {
        if ( $request->hasFile('uploadedFile') )
        {
            $file = $request->file('uploadedFile');

            $new = Storage::disk('local')->putFileAs(
                "import/" . Auth::getUser()->id,
                $file,
                $file->getClientOriginalName()
            );

            $kvFileC = Storage::get($new);

            $kvData = $this->parser->load($kvFileC);
        }

        return view('import/index', [
            "kvData"  => $kvData ?? [],
            "request" => $request
        ]);
    }
}
