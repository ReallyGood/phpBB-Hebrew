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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
		'CLI_CONFIG_CANNOT_CACHED'			=> 'הדלק את הגדרה זו, אם אפשרויות ההגדרה משתנות תדיר עד כדי כך, שזה לא יעיל לשמור את מטמונן.',

		'CLI_CONFIG_CURRENT'				=> 'ערך ההגדרה הנוכחי, השתמש ב-0 ו-1 על מנת לציין ערכים בוליאניים',

		'CLI_CONFIG_DELETE_SUCCESS'			=> 'ההגדרה %s נמחקה בהצלחה .',

		'CLI_CONFIG_NEW'					=> 'ערך חדש להגדרה, השתמש ב-0 ו-1 בשביל לציין ערכים בוליאניים.',

	'CLI_CONFIG_NOT_EXISTS'				=> 'ההגדרה %s לא קיימת',
	'CLI_CONFIG_OPTION_NAME'			=> 'שמה של האפשרות של ההגדרה',
		'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'הדלק את אפשרות זו, אם הערך אמור להיות מודפס מבלי לצרף שורה חדשה בסיומו.',

	'CLI_CONFIG_INCREMENT_BY'			=> 'הכמות שבה יש להגדיל',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'ההגדרה %s הוגדלה בהצלחה',
	'CLI_CONFIG_SET_FAILURE'			=> 'לא ניתן היה לשנות את ההגדרה %s ',
	'CLI_CONFIG_SET_SUCCESS'			=> 'שינוי ההגדרה %s עלה יפה ',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'מדפיס רשימה של משימות cron מוכנות ולא מוכנות.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'מריץ את כל המשימות המכונות.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'שם המשימה שתורץ',
		'CLI_DESCRIPTION_DB_MIGRATE'				=> 'עדכן את מאגר הנתונים על ידי אישור הגירות.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'מוחק אפשרות הגדרה',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'מכבה את התוספת הספציפית.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'מדליק את התוספת הספציפית.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'מוצא הגירות שלא תלויות אחת בשנייה.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'מוצא את הערך של אפשרות של הגדרה',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'מגדיל את הערך של האפשרות של ההגדרה',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'מארגן ברשימה את כל התוספות שבמאגר ובקבצי המערכת.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'הפעל במצב בטוח (ללא תוספות).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'הפעל את ה-shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'מטהר את התוספת.',
		'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'מחשב מחדש את ה-user_email_hash column של טבלת users',

		'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'מציב ערך של אפשרות של הגדרה רק אם הישן תואם את הערך הנוכחי',

	'CLI_DESCRIPTION_SET_CONFIG'				=> 'מציב ערך של אפשרות של הגדרה',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'לא ניתן היה לבטל את התוספת  %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'התוספת %s כובתה בהצלחה ',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'לא ניתן היה להדליק את התוספת %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'התוספת %s הופעלה בהצלחה ',
	'CLI_EXTENSION_NAME'				=> 'שמה של התוספת',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'לא ניתן היה לאפס את התוספת %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'התוספת %s אופסה בהצלחה',
	'CLI_EXTENSION_NOT_FOUND'			=> 'לא נמצאו תוספות.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'זמין',
	'CLI_EXTENSIONS_DISABLED'			=> 'מכובה',
	'CLI_EXTENSIONS_ENABLED'			=> 'דלוק',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'גיבובי המיילים חושבו מחדש בהצלחה.',
));
