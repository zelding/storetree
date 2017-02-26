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
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Recipe
 *
 * @property int $id
 * @property int $item_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $components
 * @property-read \App\Item $recipeFor
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereUpdatedAt($value)
 */
	class Recipe extends \Eloquent {}
}

namespace App{
/**
 * App\Stat
 *
 * @property int $id
 * @property string $name
 * @property string $var_type
 * @property string $dota_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereDotaName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereVarType($value)
 */
	class Stat extends \Eloquent {}
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
 * @mixin \Eloquent
 */
	class Shop extends \Eloquent {}
}

namespace App{
/**
 * App\Item
 *
 * @property int $id
 * @property int $dota_id
 * @property string $base_class
 * @property bool $max_level
 * @property bool $base_level
 * @property bool $is_consumable
 * @property bool $is_base_item
 * @property bool $is_boss_item
 * @property bool $is_recipe
 * @property bool $is_killable
 * @property bool $is_sellable
 * @property bool $is_purchasable
 * @property bool $is_droppable
 * @property bool $in_backpack
 * @property string $name
 * @property string $description
 * @property int $cost
 * @property bool $stack_size
 * @property string $model
 * @property bool $fight_recap
 * @property string $quality
 * @property string $share
 * @property bool $stock_max
 * @property int $stock_time
 * @property bool $stock_initial
 * @property bool $start_charges
 * @property bool $show_charges
 * @property bool $needs_charges
 * @property bool $is_autocast
 * @property bool $is_alertable
 * @property string $alert_text
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $buildsInto
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $components
 * @property-read mixed $components_cost
 * @property-read mixed $total_cost
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Shop[] $shops
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereAlertText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereBaseClass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereBaseLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDotaId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereFightRecap($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereInBackpack($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsAlertable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsAutocast($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsBaseItem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsBossItem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsConsumable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsDroppable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsKillable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsPurchasable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsRecipe($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsSellable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereMaxLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereModel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereNeedsCharges($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereQuality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereShare($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereShowCharges($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStackSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStartCharges($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStockInitial($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStockMax($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStockTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $is_permanent
 * @property \Illuminate\Database\Eloquent\Collection|\App\Recipe[] $recipes
 * @property \Illuminate\Database\Eloquent\Collection|\App\Stat[] $stats
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsPermanent($value)
 */
	class Item extends \Eloquent {}
}

