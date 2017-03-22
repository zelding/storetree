<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/22/17 1:16 PM
 */

namespace App\Http\Controllers;

use App\Item;
use App\Service\ItemService;
use App\Utils\Constants;
use Illuminate\Http\Request;

class UtilsController extends Controller
{
    public function index()
    {

        return view('util/index', [
            "freeIDs" => $this->getFreeDotaIDs()
        ]);
    }

    /**
     * @return int[]
     */
    private function getFreeDotaIDs()
    {
        $items = Item::where('dota_id', '>', 2000)
            ->orderBy('dota_id')
            ->get();

        $dotaIDList = $items->pluck('dota_id')->toArray();
        $all        = range(2000, 3999);
        $free       = array_values(array_diff($all, $dotaIDList));

        unset($all, $dotaIDList);

        $result       = [];
        $lastValue    = reset($free);
        $currentIndex = 0;

        //group them into sequential ranges
        for($i = 1; $i < count($free); $i++) {

            if ( ($lastValue + 1) !== $free[ $i ] ) {
                $currentIndex++;
            }

            if ( !array_key_exists($currentIndex, $result) ) {
                $result[ $currentIndex ] = [];
            }

            $result[ $currentIndex ][] = $free[ $i ];

            $lastValue = $free[ $i ];
        }

        return $result;
    }

}