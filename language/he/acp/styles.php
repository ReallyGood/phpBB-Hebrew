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

$lang = array_merge($lang, array(
	'ACP_STYLES_EXPLAIN'	=> 'Here you can manage the available styles on your board. You may alter existing styles, delete, deactivate, reactivate, install new ones. You can also see what a style will look like using the preview function. Also listed is the total user count for each style, note that overriding user styles will not be reflected here.',

	'CANNOT_BE_INSTALLED'			=> 'Cannot be installed',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Are you sure you wish to uninstall selected styles?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'אינך יכול להפוך את עיצוב ברירת המחדל ללא לפעיל',
	'DELETE_FROM_FS'			=> 'מחק מקבצי המערכת',
	'DELETE_STYLE_FILES_FAILED'	=> 'Error deleting files for style "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Files for style "%s" have been deleted.',
	'DETAILS'					=> 'Details',

	'IMAGESET_ADDED'			=> 'ערכת תמונה חדשה נוספה לקבצי המערכת.',
	'IMAGESET_ADDED_DB'			=> 'ערכת תמונה חדשה נוספה לבסיס הנתונים.',
	'IMAGESET_DELETED'			=> 'ערכת התמונה נמחקה בהצלחה.',
	'IMAGESET_DELETED_FS'		=> 'ערכת התמונה נמחקה בהצלחה מבסיס הנתונים, אך קבצים מסוימים עלולים להישאר בין קבצי המערכת',
	'IMAGESET_DETAILS_UPDATED'	=> 'פרטי ערכת התמונה עודכנו בהצלחה.',
	'IMAGESET_ERR_ARCHIVE'		=> 'אנא בחר מתודת ארכיון.',
	'IMAGESET_ERR_COPY_LONG'	=> 'זכויות היוצרים אינם יכולים להכיל יותר מ־60 תווים',
	'IMAGESET_ERR_NAME_CHARS'	=> 'שם ערכת התמונה יכול להכיל רק מספרים, אותיות, התווים, -, +, _ ורווח.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'שם ערכת התמונה שבחרת כבר קיים במערכת',
	'IMAGESET_ERR_NAME_LONG'	=> 'שם ערכת התמונה אינו יכול להכיל יותר מ־30 תווים',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'הארכיון שבחרת אינו מכיל ערכת תמונה תקינה.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'אתה חייב לקבוע שם עבור ערכת תמונה זו.',
	'IMAGESET_EXPORT'			=> 'ייצא ערכת תמונה',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'כאן אתה יכול לייצא ערכות תמונה בתור ארכיון. הארכיון יכיל את כל המידע הדרוש להתקנת ערכת התמונה בפורום אחר. באפשרותך לבחור אם להוריד את קובץ הארכיון ישירות או למקם אותו בתיקיית האחסון שלך ולהוריד אותו דרך FTP.',
	'IMAGESET_EXPORTED'			=> 'ערכת התמונה יוצאה בהצלחה ואוחסנה במיקום %s.',
	'IMAGESET_NAME'				=> 'שם ערכת תמונה',
	'IMAGESET_REFRESHED'		=> 'ערכת התמונה רועננה בהצלחה.',
	'IMAGESET_UPDATED'			=> 'ערכת התמונה עודכנה בהצלחה',

	'INHERITING_FROM'			=> 'Inherits from',
	'INSTALL_STYLE'				=> 'Install style',
	'INSTALL_STYLES'			=> 'Install styles',
	'INSTALL_STYLES_EXPLAIN'	=> 'Here you can install new styles.<br />If you cannot find a specific style in list below, check to make sure style is already installed. If it is not installed, check if it was uploaded correctly.',
	'INVALID_STYLE_ID'			=> 'Invalid style ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'No styles match your query.',
	'NO_UNINSTALLED_STYLE'		=> 'No uninstalled styles detected.',

	'PURGED_CACHE'				=> 'Cache was purged.',

	'REQUIRES_STYLE'			=> 'This style requires the style "%s" to be installed.',

	'STYLE_ACTIVATE'			=> 'Activate',
	'STYLE_ACTIVE'				=> 'Active',
	'STYLE_DEACTIVATE'			=> 'Deactivate',
	'STYLE_DEFAULT'				=> 'Make default style',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'You must activate style before making it default style.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Invalid parent style.',
	'STYLE_ERR_NAME_EXIST'		=> 'A style with that name already exists.',
	'STYLE_ERR_STYLE_NAME'		=> 'You must supply a name for this style.',
	'STYLE_INSTALLED'			=> 'Style "%s" has been installed.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Return to installed styles list',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Install more styles',
	'STYLE_NAME'				=> 'Style name',
	'STYLE_NOT_INSTALLED'		=> 'Style "%s" was not installed.',
	'STYLE_PATH'				=> 'Style path',
	'STYLE_UNINSTALL'			=> 'Uninstall',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style "%s" cannot be uninstalled because it has one or more child styles.',
	'STYLE_UNINSTALLED'			=> 'Style "%s" uninstalled successfully.',
	'STYLE_USED_BY'				=> 'Used by (including robots)',

	'UNINSTALL_DEFAULT'		=> 'You cannot uninstall the default style.',

));
