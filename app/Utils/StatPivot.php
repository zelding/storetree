<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 2/24/17 2:49 PM
 */

namespace App\Utils;
use Illuminate\Database\Eloquent\Relations\Pivot;

class StatPivot extends Pivot
{
    public function getOrderAttribute()
    {
        return $this->order;
    }

    public function setOrderAttribute($order)
    {
        $this->order = $order;
    }

    public function getValueAttribute()
    {
        return json_decode(json_decode($this->attributes['value']));
    }

    public function setValueAttribute($value)
    {
        $this->attributes['value'] = json_encode($value);

        return $this;
    }
}
