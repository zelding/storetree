<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/27/17 8:45 AM
 */

namespace App\Http\Controllers\Api\External;
use App\Ability;
use App\Item;
use App\ItemLocale;
use App\Stat;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

use App\Utils\Transformers\ItemTransformer;

use Illuminate\Support\Facades\Auth;
use League\Fractal\Manager;
use App\Utils\BaseSerializer;
use League\Fractal\Resource\Item as ResourceItem;

class Controller
{
    /** @var \App\User */
    protected $currentUser;

    /** @var Application */
    protected $app;

    /** @var Manager */
    protected $fractal;

    public function __construct(Application $app)
    {
        $this->app         = $app;
        $this->currentUser = Auth::guard('api')->user();
        $this->fractal     = new Manager();

        $this->fractal->setSerializer(new BaseSerializer());
    }

    public function test(Request $request)
    {
        $item = Item::find(262);

        $data = new ResourceItem($item, new ItemTransformer());
        $this->fractal->parseIncludes('recipes.components');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    public function errorResponse($code = 404, $message = "", $fields = [])
    {
        return response()->json(
            [
                'code'    => $code,
                'message' => [$message],
                'fields'  => $fields
            ],
            $code,
            [],
            480
        );
    }
}
