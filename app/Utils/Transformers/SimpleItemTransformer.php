<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/27/17 3:41 PM
 */

namespace App\Utils\Transformers;
use App\Item;

class SimpleItemTransformer extends ItemTransformer
{
    public function transform(Item $item)
    {
        return [
            'id'             => $item->id,
            'dota_id'        => $item->dota_id,
            'base_class'     => $item->base_class,
            'name'           => $item->name
        ];
    }
}