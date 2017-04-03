<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/30/17 9:04 AM
 */

namespace App\Utils\Transformers;
use App\Item;
use App\Stat;
use League\Fractal;

class StatTransformer extends Fractal\TransformerAbstract
{
    public function transform(Stat $stat)
    {
        $data = [
            'id'         => $stat->id,
            'name'       => $stat->name,
            'var_name'   => $stat->var_name,
            'var_type'   => $stat->var_type,
            'dota_name'  => $stat->dota_name,
            'stat_group' => $stat->stat_group,
            'is_percent' => $stat->is_percent,
        ];

        if( isset($stat->value) ) {
            $data['value'] = $stat->value;
        }

        return $data;
    }
}