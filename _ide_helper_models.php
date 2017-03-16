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
 * @property-read \App\Item $for
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read string[] $components_string
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
 * @property string $var_name
 * @property string $dota_name
 * @property string $stat_group
 * @property bool $is_percent
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
 * @mixin \Eloquent
 * @property-read string $var_string
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereIsPercent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereStatGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereVarName($value)
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
 * @property-read string $printable_desc
 */
	class ItemLocale extends \Eloquent {}
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
 * @property string $script
 * @property array $shop_tags
 * @property array $aliases
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $buildsInto
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $components
 * @property-read int $components_cost
 * @property-read int $total_cost
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Shop[] $shops
 * @method static \Illuminate\Database\Query\Builder|\App\Item find($id)
 * @method static \Illuminate\Database\Query\Builder|\App\Item findOrFail($id)
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
 * @property-read string $dota_class
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Recipe[] $recipes
 * @property-write mixed $class
 * @property \Illuminate\Database\Eloquent\Collection|\App\Stat[] $stats
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Recipe[] $usedInRecipes
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsPermanent($value)
 * @property string $disassemble
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ability[] $ability
 * @property-read string $printable_desc
 * @property-read null|Recipe $recipe
 * @property-read ItemLocale $selected_locale
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ItemLocale[] $locale
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDisassemble($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereAliases($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereScript($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereShopTags($value)
 */
	class Item extends \Eloquent {}
}

namespace App{
/**
 * App\Ability
 *
 * @property int $id
 * @property string $name
 * @property string $base_class
 * @property array $behaviour
 * @property string $type
 * @property string $texture_name
 * @property bool $deny_self_cast
 * @property bool $cast_hidden
 * @property array $target_team
 * @property array $target_type
 * @property array $target_flags
 * @property string $damage_type
 * @property string $damage
 * @property array $mana_cost
 * @property array $gold_cost
 * @property array $cooldown
 * @property array $cast_range
 * @property array $cast_point
 * @property array $cast_range_buffer
 * @property array $channel_time
 * @property array $channel_mana_cost
 * @property array $duration
 * @property string $cooldown_group
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereBaseClass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereBehaviour($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastHidden($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastPoint($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastRange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastRangeBuffer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereChannelManaCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereChannelTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCooldown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCooldownGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDamage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDamageType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDenySelfCast($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDuration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereGoldCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereManaCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTargetFlags($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTargetTeam($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTargetType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTextureName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $magic_stick
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereMagicStick($value)
 */
	class Ability extends \Eloquent {}
}
