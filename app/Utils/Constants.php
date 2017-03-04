<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 2/20/17 6:09 PM
 */

namespace App\Utils;

final class Constants
{
    public static $languages   = [1 => 'English', 2 => 'German', 3 => 'Spanish', 4=> 'Chinese', 5 => 'Portuguese', 6 => 'Russian'];

    public static $shareable   = ['ITEM_NOT_SHAREABLE', 'ITEM_PARTIALLY_SHAREABLE', 'ITEM_FULLY_SHAREABLE', 'ITEM_FULLY_SHAREABLE_STACKING'];

    public static $itemQuality = ['consumable', 'component', 'common', 'rare', 'epic', 'artifact'];

    public static $disassemble = ['DOTA_ITEM_DISASSEMBLE_NEVER', 'DOTA_ITEM_DISASSEMBLE_ALWAYS'];

    public static $declaration = ['DECLARE_PURCHASES_TO_TEAMMATES', 'DECLARE_PURCHASES_IN_SPEECH', 'DECLARE_PURCHASES_TO_SPECTATORS'];

    public static $varTypes    = ['FIELD_INTEGER', 'FIELD_FLOAT'];

    public static $abilityBehavior = ['DOTA_ABILITY_BEHAVIOR_NO_TARGET','DOTA_ABILITY_BEHAVIOR_UNIT_TARGET','DOTA_ABILITY_BEHAVIOR_POINT','DOTA_ABILITY_BEHAVIOR_PASSIVE','DOTA_ABILITY_BEHAVIOR_CHANNELLED','DOTA_ABILITY_BEHAVIOR_TOGGLE','DOTA_ABILITY_BEHAVIOR_AURA','DOTA_ABILITY_BEHAVIOR_AUTOCAST','DOTA_ABILITY_BEHAVIOR_HIDDEN','DOTA_ABILITY_BEHAVIOR_AOE','DOTA_ABILITY_BEHAVIOR_NOT_LEARNABLE','DOTA_ABILITY_BEHAVIOR_ITEM','DOTA_ABILITY_BEHAVIOR_DIRECTIONAL','DOTA_ABILITY_BEHAVIOR_IMMEDIATE','DOTA_ABILITY_BEHAVIOR_NOASSIST','DOTA_ABILITY_BEHAVIOR_ATTACK','DOTA_ABILITY_BEHAVIOR_ROOT_DISABLES','DOTA_ABILITY_BEHAVIOR_UNRESTRICTED','DOTA_ABILITY_BEHAVIOR_DONT_ALERT_TARGET','DOTA_ABILITY_BEHAVIOR_DONT_RESUME_MOVEMENT','DOTA_ABILITY_BEHAVIOR_DONT_RESUME_ATTACK','DOTA_ABILITY_BEHAVIOR_NORMAL_WHEN_STOLEN','DOTA_ABILITY_BEHAVIOR_IGNORE_BACKSWING','DOTA_ABILITY_BEHAVIOR_IGNORE_PSEUDO_QUEUE','DOTA_ABILITY_BEHAVIOR_RUNE_TARGET','DOTA_ABILITY_BEHAVIOR_IGNORE_CHANNEL','DOTA_ABILITY_BEHAVIOR_OPTIONAL_UNIT_TARGET','DOTA_ABILITY_BEHAVIOR_OPTIONAL_NO_TARGET'];
    public static $abilityBehaviorDescription = ["Doesn't need a target to be cast. Ability fires off as soon as the button is pressed.","Needs a target to be cast on. Requires AbilityUnitTargetTeam and AbilityUnitTargetType,see Targeting","Can be cast anywhere the mouse cursor is If a unit is clicked it will just be cast where the unit was standing","Cannot be cast","Channeled ability. If the user moves or is silenced/stunned the ability is interrupted.","Can be toggled On and Off.","Ability is an aura. Not really used other than to tag the ability as such.","Can be cast automatically. Usually doesn't work by itself in anything that it's not an ATTACK ability.","Can't be cast and won't show up on the HUD.","Can draws a radius where the ability will have effect. Like POINT but with a an area of effect display. Makes use of AoERadius","Cannot be learned by clicking on the HUD Example: Invoker abilities","Ability is tied up to an item. There is no need to use this,the game will internally assign this behavior to any 'item_datadriven'","Has a direction from the hero. Example: Mirana Arrow or Pudge Hook.","Can be used instantly without going into the action queue.","Ability has no reticle assist. ?","Is an attack and cannot hit attack-immune targets.","Cannot be used when rooted","Ability is allowed when commands are restricted. Example: Lifestealer Consume","Does not alert enemies when target-cast on them. Example: Spirit Breaker Charge","Should not resume movement when it completes. Only applicable to no-target,non-immediate abilities.","Ability should not resume command-attacking the previous target when it completes. Only applicable to no-target,non-immediate abilities and unit-target abilities.","Ability still uses its normal cast point when stolen. Example: Meepo Poof,Furion Teleport.","Ability ignores backswing pseudoqueue.","Can be executed while stunned,casting,or force-attacking. Only applicable to toggled abilities. Example: Morph","Targets runes.","Doesn't cancel abilities with _CHANNELLED behavior","Bottle and Wards.","??"];
    public static $abilityType = ['DOTA_ABILITY_TYPE_BASIC', 'DOTA_ABILITY_TYPE_ULTIMATE', 'DOTA_ABILITY_TYPE_ATTRIBUTES', 'DOTA_ABILITY_TYPE_HIDDEN'];

    public static $targetTeam  = ['DOTA_UNIT_TARGET_TEAM_BOTH','DOTA_UNIT_TARGET_TEAM_ENEMY','DOTA_UNIT_TARGET_TEAM_FRIENDLY','DOTA_UNIT_TARGET_TEAM_NONE','DOTA_UNIT_TARGET_TEAM_CUSTOM'];
    public static $targetType  = ['DOTA_UNIT_TARGET_ALL','DOTA_UNIT_TARGET_HERO','DOTA_UNIT_TARGET_BASIC','DOTA_UNIT_TARGET_MECHANICAL','DOTA_UNIT_TARGET_BUILDING','DOTA_UNIT_TARGET_TREE','DOTA_UNIT_TARGET_CREEP','DOTA_UNIT_TARGET_COURIER','DOTA_UNIT_TARGET_NONE','DOTA_UNIT_TARGET_OTHER','DOTA_UNIT_TARGET_CUSTOM'];
    public static $targetFlags = ['DOTA_UNIT_TARGET_FLAG_NONE','DOTA_UNIT_TARGET_FLAG_DEAD','DOTA_UNIT_TARGET_FLAG_MELEE_ONLY','DOTA_UNIT_TARGET_FLAG_RANGED_ONLY','DOTA_UNIT_TARGET_FLAG_MANA_ONLY','DOTA_UNIT_TARGET_FLAG_CHECK_DISABLE_HELP','DOTA_UNIT_TARGET_FLAG_NO_INVIS','DOTA_UNIT_TARGET_FLAG_MAGIC_IMMUNE_ENEMIES','DOTA_UNIT_TARGET_FLAG_NOT_MAGIC_IMMUNE_ALLIES 	','DOTA_UNIT_TARGET_FLAG_NOT_ATTACK_IMMUNE','DOTA_UNIT_TARGET_FLAG_FOW_VISIBLE','DOTA_UNIT_TARGET_FLAG_INVULNERABLE','DOTA_UNIT_TARGET_FLAG_NOT_ANCIENTS','DOTA_UNIT_TARGET_FLAG_NOT_CREEP_HERO','DOTA_UNIT_TARGET_FLAG_NOT_DOMINATED','DOTA_UNIT_TARGET_FLAG_NOT_ILLUSIONS','DOTA_UNIT_TARGET_FLAG_NOT_NIGHTMARED','DOTA_UNIT_TARGET_FLAG_NOT_SUMMONED','DOTA_UNIT_TARGET_FLAG_OUT_OF_WORLD','DOTA_UNIT_TARGET_FLAG_PLAYER_CONTROLLED','DOTA_UNIT_TARGET_FLAG_PREFER_ENEMIES'];

    public static $damageType  = ['DAMAGE_TYPE_MAGICAL', 'DAMAGE_TYPE_PHYSICAL', 'DAMAGE_TYPE_PURE'];
}