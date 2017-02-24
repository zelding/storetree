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
    public static $shareable = ['ITEM_NOT_SHAREABLE', 'ITEM_PARTIALLY_SHAREABLE', 'ITEM_FULLY_SHAREABLE', 'ITEM_FULLY_SHAREABLE_STACKING'];

    public static $itemQuality = ['consumable', 'component', 'common', 'rare', 'epic', 'artifact'];

    public static $disassemble = ['DOTA_ITEM_DISASSEMBLE_NEVER', 'DOTA_ITEM_DISASSEMBLE_ALWAYS'];

    public static $targetType = ['DOTA_UNIT_TARGET_HERO', 'DOTA_UNIT_TARGET_BASIC'];

    public static $declaration = ['DECLARE_PURCHASES_TO_TEAMMATES', 'DECLARE_PURCHASES_IN_SPEECH', 'DECLARE_PURCHASES_TO_SPECTATORS'];

    public static $varTypes = ['FIELD_INTEGER', 'FIELD_FLOAT'];
}