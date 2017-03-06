<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/6/17 1:55 PM
 */

namespace App\Http\Requests;

use \Symfony\Component\HttpFoundation\ParameterBag as Request;

trait SelectCleaner
{
    //protected $fields = [];

    public function clean(Request $request)
    {
        foreach($request->all() as $field => $values) {
            if ( in_array($field, $this->fields) && !empty($request->get($field)) ) {

                $request->set($field, $this->formatInput($values));
            }
        }

        return $request;
    }

    /**
     * @param array $values
     *
     * @return array
     */
    protected function formatInput(array $values)
    {
        //to allow multiple from the same value, javascript prepends values with \d$
        //they need to be removed
        return array_map(function ($x){
            if ( str_contains($x, '$') ) {
                $x = substr($x,strpos($x, '$') + 1);
            }

            return $x;
        },$values);
    }
}