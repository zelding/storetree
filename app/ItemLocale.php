<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ItemLocale
 *
 * @property int $id
 * @property bool $language_id
 * @property int $item_id
 * @property string $name
 * @property string $description
 * @property string $lore
 * @property string $note
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Item $item
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereLanguageId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereLore($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ItemLocale whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ItemLocale extends Model
{
    protected $table = 'item_locale';

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function getPrintableDescAttribute()
    {
        return str_replace(["\n", "\n\r", "\r"], "\\n", $this->description);
    }
}
