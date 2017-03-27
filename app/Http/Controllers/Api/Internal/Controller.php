<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/27/17 8:45 AM
 */

namespace App\Http\Controllers\Api\Internal;
use App\Ability;
use App\Item;
use App\ItemLocale;
use App\Stat;
use Illuminate\Http\Request;

use App\Utils\Transformers\ItemTransformer;

use League\Fractal\Manager;
use App\Utils\BaseSerializer;
use League\Fractal\Resource\Item as ResourceItem;

class Controller
{
    public function test(Request $request)
    {
        $item = Item::find(310);

        $manager = new Manager();
        $manager->setSerializer(new BaseSerializer());
        $data = new ResourceItem($item, new ItemTransformer());
        $manager->parseIncludes('recipes.components');

        return response()->json(
            $manager->createData($data)->toArray(),
            200,
            [],
            480
        );
    }
}
