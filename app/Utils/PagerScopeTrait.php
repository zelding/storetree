<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 4/3/17 9:15 AM
 */

namespace App\Utils;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

trait PagerScopeTrait
{
    /**
     * @param Builder $query
     * @param Request $request
     *
     * @return Builder
     */
    public function scopePager($query, Request $request)
    {
        $page = 0;
        $step = 25;

        if ( $request->exists('page') ) {
            $page = $request->get('page');

            if ( $request->exists('step') ) {
                $step = $request->get('step');
            }

            $query->skip($page * $step)->take($step);
        }

        return $query;
    }
}