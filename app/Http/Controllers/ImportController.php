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
        // wtf am i doing here with disks
        $files = Storage::disk('local')->allFiles("import/" . Auth::getUser()->id);

        $kvData = [];
        $wordCounts = [];

        foreach( $files as $file ) {
            $fileData  = Storage::get( $file );

            $kvData += $this->parser->load($fileData);
        }

        $grouped = app( ImportService::class )->groupEntities($kvData);
        $parsed  = app( ImportService::class )->loadParsedKvArray($grouped);
        app(ImportService::class)->createEntities($parsed);

        foreach( $files as $file ) {
            Storage::delete( $file );
        }

        return view('import/index', [
            "kvData"  => $kvData ?? [],
            "grouped" => $grouped,
            "parsed"  => $parsed,
            "counts"  => $wordCounts
        ]);
    }

    public function upload(Request $request)
    {
        if ( $request->files->get('uploadedFile') )
        {
            $files = $request->files->get('uploadedFile');

            if ( is_array($files) ) {
                $data = "";
                foreach($files as $file) {
                    $new = Storage::disk('local')->putFileAs(
                        "import/".Auth::getUser()->id,
                        $file,
                        $file->getClientOriginalName()
                    );

                    $data .= Storage::get($new);
                }

                $kvData = $this->parser->load($data);
            }
            else {
                $new = Storage::disk('local')->putFileAs(
                    "import/".Auth::getUser()->id,
                    $files,
                    $files->getClientOriginalName()
                );

                $kvFileC = Storage::get($new);

                $kvData = $this->parser->load($kvFileC);
            }
        }

        return view('import/index', [
            "kvData"  => $kvData ?? [],
            "request" => $request
        ]);
    }
}
