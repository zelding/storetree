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
 * @property string|null $api_token
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\User whereApiToken($value)
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
 * App\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
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
 * @property-read array $value
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
 * @method static \Illuminate\Database\Query\Builder pager(\Illuminate\Http\Request $request)
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
 * @property bool $is_override
 * @property string $name
 * @property string $description
 * @property int $cost
 * @property bool $stack_size
 * @property string $model
 * @property bool $fight_recap
 * @property string $quality
 * @property string $share
 * @property int $stock_max
 * @property int $stock_time
 * @property int $stock_initial
 * @property bool $start_charges
 * @property bool $show_charges
 * @property bool $needs_charges
 * @property bool $is_autocast
 * @property bool $is_alertable
 * @property string $alert_text
 * @property string $script
 * @property array $shop_tags
 * @property array $aliases
 * @property null|Item $lvl1Recipe
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Item[] $buildsInto
 * @property-read \Illuminate\Database\Eloquent\Collection|Item[] $components
 * @property-read int $components_cost
 * @property-read int $total_cost
 * @property-read \Illuminate\Database\Eloquent\Collection|Shop[] $shops
 * @method static Builder|Item find($id)
 * @method static Builder|Item findOrFail($id)
 * @method static Builder|Item whereAlertText($value)
 * @method static Builder|Item whereBaseClass($value)
 * @method static Builder|Item whereBaseLevel($value)
 * @method static Builder|Item whereCost($value)
 * @method static Builder|Item whereCreatedAt($value)
 * @method static Builder|Item whereDescription($value)
 * @method static Builder|Item whereDotaId($value)
 * @method static Builder|Item whereFightRecap($value)
 * @method static Builder|Item whereId($value)
 * @method static Builder|Item whereInBackpack($value)
 * @method static Builder|Item whereIsAlertable($value)
 * @method static Builder|Item whereIsAutocast($value)
 * @method static Builder|Item whereIsBaseItem($value)
 * @method static Builder|Item whereIsBossItem($value)
 * @method static Builder|Item whereIsConsumable($value)
 * @method static Builder|Item whereIsDroppable($value)
 * @method static Builder|Item whereIsKillable($value)
 * @method static Builder|Item whereIsPurchasable($value)
 * @method static Builder|Item whereIsRecipe($value)
 * @method static Builder|Item whereIsSellable($value)
 * @method static Builder|Item whereMaxLevel($value)
 * @method static Builder|Item whereModel($value)
 * @method static Builder|Item whereName($value)
 * @method static Builder|Item whereNeedsCharges($value)
 * @method static Builder|Item whereQuality($value)
 * @method static Builder|Item whereShare($value)
 * @method static Builder|Item whereShowCharges($value)
 * @method static Builder|Item whereStackSize($value)
 * @method static Builder|Item whereStartCharges($value)
 * @method static Builder|Item whereStockInitial($value)
 * @method static Builder|Item whereStockMax($value)
 * @method static Builder|Item whereStockTime($value)
 * @method static Builder|Item whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $is_permanent
 * @property-read string $dota_class
 * @property-read \Illuminate\Database\Eloquent\Collection|Recipe[] $recipes
 * @property-write mixed $class
 * @property \Illuminate\Database\Eloquent\Collection|Stat[] $stats
 * @property-read \Illuminate\Database\Eloquent\Collection|Recipe[] $usedInRecipes
 * @method static \Illuminate\Database\Query\Builder|Item whereIsPermanent($value)
 * @property string $disassemble
 * @property array $declarations
 * @property-read \Illuminate\Database\Eloquent\Collection|Ability[] $ability
 * @property-read string $printable_desc
 * @property-read null|Recipe $recipe
 * @property-read ItemLocale $selected_locale
 * @property-read \Illuminate\Database\Eloquent\Collection|ItemLocale[] $locale
 * @method static \Illuminate\Database\Query\Builder|Item whereDisassemble($value)
 * @method static Builder exportRequest(Request $request)
 * @method static Builder pager(Request $request)
 * @property-read null|Item $lvl1_recipe
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereAliases($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDeclarations($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsOverride($value)
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
 * @property bool $is_override
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static Builder|Ability whereBaseClass($value)
 * @method static Builder|Ability whereBehaviour($value)
 * @method static Builder|Ability whereCastHidden($value)
 * @method static Builder|Ability whereCastPoint($value)
 * @method static Builder|Ability whereCastRange($value)
 * @method static Builder|Ability whereCastRangeBuffer($value)
 * @method static Builder|Ability whereChannelManaCost($value)
 * @method static Builder|Ability whereChannelTime($value)
 * @method static Builder|Ability whereCooldown($value)
 * @method static Builder|Ability whereCooldownGroup($value)
 * @method static Builder|Ability whereCreatedAt($value)
 * @method static Builder|Ability whereDamage($value)
 * @method static Builder|Ability whereDamageType($value)
 * @method static Builder|Ability whereDenySelfCast($value)
 * @method static Builder|Ability whereDuration($value)
 * @method static Builder|Ability whereGoldCost($value)
 * @method static Builder|Ability whereId($value)
 * @method static Builder|Ability whereManaCost($value)
 * @method static Builder|Ability whereName($value)
 * @method static Builder|Ability whereTargetFlags($value)
 * @method static Builder|Ability whereTargetTeam($value)
 * @method static Builder|Ability whereTargetType($value)
 * @method static Builder|Ability whereTextureName($value)
 * @method static Builder|Ability whereType($value)
 * @method static Builder|Ability whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $magic_stick
 * @property-read \Illuminate\Database\Eloquent\Collection|Item[] $items
 * @method static |Ability whereMagicStick($value)
 * @method static Builder pager(Request $request)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereIsOverride($value)
 */
	class Ability extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $perms
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\ItemLocale
 *
 * @property int $id
 * @property int $language_id
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

