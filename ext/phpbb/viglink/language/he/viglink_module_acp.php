<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array (
  'ACP_VIGLINK_SETTINGS' => 'VigLink הגדרות',
  'ACP_VIGLINK_SETTINGS_EXPLAIN' => 'VigLink הינו שירות צד שלישי שמאפשר לך להרוויח מקישורים שהמשתמשים בפורום שלך מפרסמים, ללא שינוי בחוויות המשתמש שלהם. כשמתמש לוחץ על קישור לאתר אחר שמכיל מוצר או אפשרות לרכישה, אותו אתר משלם תמורה ל VigLink, שחלקה נתרמת ל PHPBB או מועברת אלייך, לבחירתך.',
  'ACP_VIGLINK_SETTINGS_CHANGE' => 'ניתן לשנות הגדרות אלו בכל עת דרך לוח "<a href="%1$s">הגדרות VigLink</a>".',
  'ACP_VIGLINK_SUPPORT_EXPLAIN' => 'לאחר שליחת ההגדרות המועדפות עליך למטה בלחיצה על כפתור השליחה, לא תועבר עוד לדף זה.',
  'ACP_VIGLINK_ENABLE' => 'הפעל VigLink',
  'ACP_VIGLINK_ENABLE_EXPLAIN' => 'מפעיל את שירותי VigLink',
  'ACP_VIGLINK_EARNINGS' => 'העבר את ההכנסות לעצמך (אופציונאלי)',
  'ACP_VIGLINK_EARNINGS_EXPLAIN' => 'באפשרותך לממש את ההכנסות שלך על‑ידי הרשמה לחשבון VigLink Convert.',
  'ACP_VIGLINK_DISABLED_PHPBB' => 'שירותי VigLink הושבתו על‑ידי phpBB.',
  'ACP_VIGLINK_CLAIM' => 'ממש את ההכנסות שלך',
  'ACP_VIGLINK_CLAIM_EXPLAIN' => 'באפשרותך לממש את הכנסות הפורום מקישורים ממומנים של VigLink, במקום לתרום את ההכנסות לפרויקט phpBB. לניהול הגדרות החשבון, הירשם לחשבון "VigLink Convert" באמצעות לחיצה על "המרת חשבון".',
  'ACP_VIGLINK_CONVERT_ACCOUNT' => 'המרת חשבון',
  'ACP_VIGLINK_NO_CONVERT_LINK' => 'לא ניתן היה לאחזר את קישור חשבון ה‑VigLink Convert.',
));
