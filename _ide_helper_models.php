<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Shop
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereUpdatedAt($value)
 */
	class Shop extends \Eloquent {}
}

namespace App{
/**
 * App\Item
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $cost
 * @property bool $stack_size
 * @property bool $is_consumable
 * @property bool $is_base_item
 * @property bool $is_boss_item
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property bool $is_recipe
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $components
 * @property-read mixed $components_cost
 * @property-read mixed $total_cost
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Shop[] $shops
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsBaseItem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsBossItem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsConsumable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsRecipe($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStackSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

