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
  'CONFIG_NOT_EXIST' => 'פריט ההגדרה "%s" לא קיים בצורה חריגה',
  'GROUP_NOT_EXIST' => 'הקבוצה "%s" לא קיימת בצורה חריגה',
  'MIGRATION_APPLY_DEPENDENCIES' => 'אשר את התלויות של %s.',
  'MIGRATION_DATA_DONE' => 'מידע מותקן %1$s; זמן: %2$.2f שניות',
  'MIGRATION_DATA_IN_PROGRESS' => 'מתקין מידע: %1$s; זמן: %2$.2f שניות',
  'MIGRATION_DATA_RUNNING' => 'מתקין מידע: %s.',
  'MIGRATION_EFFECTIVELY_INSTALLED' => 'ההגירה כבר התקינה בצורה אפקטיבית (דולג) את: %s',
  'MIGRATION_EXCEPTION_ERROR' => 'משהו לא עלה יפה במהלך הבקשה, וחריגה הוגשה. השינויים שבוצעו לפני השגיאה שוחזרו כמיטב יכולתנו,אבל כדאי שתבדוק את המערכת לשגיאות.',
  'MIGRATION_NOT_FULFILLABLE' => 'ההגירה של "%1$s" לא אפשרית, חסרה ההגירה "%2$s".',
  'MIGRATION_NOT_INSTALLED' => 'המיגרציה "%s" אינה מותקנת.',
  'MIGRATION_NOT_VALID' => '%s היא לא הגירה תקינה.',
  'MIGRATION_SCHEMA_DONE' => 'תכנון התקנה: %1$s; זמן: %2$.2f שניות',
  'MIGRATION_SCHEMA_IN_PROGRESS' => 'מתקין סכמה: %1$s; זמן: %2$.2f שניות',
  'MIGRATION_SCHEMA_RUNNING' => 'תכנון התקנה: %s.',
  'MIGRATION_REVERT_DATA_DONE' => 'מידע שוחזר: %1$s; זמן: %2$.2f שניות',
  'MIGRATION_REVERT_DATA_IN_PROGRESS' => 'משחזר מידע: %1$s; זמן: %2$.2f שניות',
  'MIGRATION_REVERT_DATA_RUNNING' => 'משחזר מידע: %s.',
  'MIGRATION_REVERT_SCHEMA_DONE' => 'סכמה שוחזרה: %1$s; זמן: %2$.2f שניות',
  'MIGRATION_REVERT_SCHEMA_IN_PROGRESS' => 'משחזר סכמה: %1$s; זמן: %2$.2f שניות',
  'MIGRATION_REVERT_SCHEMA_RUNNING' => 'משחזר סכמה: %s.',
  'MIGRATION_INVALID_DATA_MISSING_CONDITION' => 'מיגרציה לא תקינה. לפקודת תנאי חסר תנאי.',
  'MIGRATION_INVALID_DATA_MISSING_STEP' => 'מיגרציה לא תקינה. לפקודת תנאי חסרה קריאה תקינה לשלב מיגרציה.',
  'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE' => 'מיגרציה לא תקינה. לא ניתן היה לקרוא לפונקציה מותאמת אישית.',
  'MIGRATION_INVALID_DATA_UNKNOWN_TYPE' => 'מיגרציה לא תקינה. נמצא סוג כלי מיגרציה לא מוכר.',
  'MIGRATION_INVALID_DATA_UNDEFINED_TOOL' => 'מיגרציה לא תקינה. נמצא כלי מיגרציה לא מוגדר.',
  'MIGRATION_INVALID_DATA_UNDEFINED_METHOD' => 'מיגרציה לא תקינה. נמצאה שיטת כלי מיגרציה לא מוגדרת.',
  'MODULE_ERROR' => 'התרחשה שגיאה בעת יצירת המודול: %s',
  'MODULE_EXISTS' => 'מודול כבר קיים: %s',
  'MODULE_EXIST_MULTIPLE' => 'מספר מודולים עם שם מודול האב הנתון כבר קיימים: %s. נסה להשתמש במפתחות לפני/אחרי כדי להבהיר את מיקום המודול.',
  'MODULE_INFO_FILE_NOT_EXIST' => 'קובץ מידע חשוב  של מודול חסר: %2$s',
  'MODULE_NOT_EXIST' => 'מודול חיוני לא קיים: %s',
  'PARENT_MODULE_FIND_ERROR' => 'Unable to determine the parent module identifier: %s',
  'PERMISSION_NOT_EXIST' => 'הגדרות ההרשאה "%s" לא קיימות בצורה חריגה.',
  'ROLE_ASSIGNED_NOT_EXIST' => 'The permission role assigned to group "%1$s" unexpectedly does not exist. Role id: "%2$s"',
  'ROLE_NOT_EXIST' => 'תפקיד ההרשאות "%s" לא קיים בצורה חריגה.',
));
