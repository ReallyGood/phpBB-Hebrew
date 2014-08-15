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
	'EXTENSION'					=> 'תוסף',
	'EXTENSIONS'				=> 'תוספות',
	'EXTENSIONS_ADMIN'			=> 'מנהל התוספות',
	'EXTENSIONS_EXPLAIN'		=> 'מנהלים התוספות הוא כלי במערכת הphpBB שלך שמאפשרת לך למנהל את כל התוספות שלך, מצבם וצפיה במידע אודותם.',
	'EXTENSION_INVALID_LIST'	=> 'The “%s” extension is not valid.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'The selected extension is not available for this board, please verify your phpBB and PHP versions are allowed (see the details page).',
	'EXTENSION_DIR_INVALID'		=> 'The selected extension has an invalid directory structure and cannot be enabled.',

	'DETAILS'				=> 'פרטים',

	'EXTENSIONS_DISABLED'	=> 'בטל תוספות',
	'EXTENSIONS_ENABLED'	=> 'הפעל תוספות',

	'EXTENSION_DELETE_DATA'	=> 'מחק מידע',
	'EXTENSION_DISABLE'		=> 'בטל',
	'EXTENSION_ENABLE'		=> 'הפעל',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Deleting an extension’s data removes all of its data and settings. The extension files are retained so it can be enabled again.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Disabling an extension retains its files, data and settings but removes any functionality added by the extension.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Enabling an extension allows you to use it on your board.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'The extension’s data is currently being deleted. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'The extension is currently being disabled. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'The extension is currently being enabled. Please do not leave or refresh this page until it is completed.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'The extension’s data was deleted successfully',
	'EXTENSION_DISABLE_SUCCESS'		=> 'The extension was disabled successfully',
	'EXTENSION_ENABLE_SUCCESS'		=> 'The extension was enabled successfully',

	'EXTENSION_NAME'		=> 'שם התוסף',
	'EXTENSION_ACTIONS'		=> 'פעולות',
	'EXTENSION_OPTIONS'		=> 'אפשרויות',
		'EXTENSION_UPDATE_HEADLINE'	=> 'עדכון תוספת',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>בטל את התוספת</li>
			<li>מחק את הקבצים של התוספת מקבצי המערכת</li>
			<li>העלה את הקבצים החדשים</li>
			<li>הפעל את התוספת</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'מחיקה מלאה של תוספת מהמערכת',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>בטל את התוספת</li>
			<li>מחק את המידע של התוספת</li>
			<li>מחק את הקבצים של התוספת מקבצי המערכת</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Are you sure that you wish to delete the data associated with “%s”?<br /><br />This removes all of its data and settings and cannot be undone!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Are you sure that you wish to disable the “%s” extension?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Are you sure that you wish to enable the “%s” extension?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Are you sure that you wish to force the use of unstable version?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Return to the extension list',

	'EXT_DETAILS'			=> 'פרטי התוספת',
	'DISPLAY_NAME'			=> 'שם מוצג',
	'CLEAN_NAME'			=> 'שם נקי',
	'TYPE'					=> 'סוג',
	'DESCRIPTION'			=> 'תיאור',
	'VERSION'				=> 'גרסא',
	'HOMEPAGE'				=> 'דף הבית',
	'PATH'					=> 'File Path',
	'TIME'					=> 'זמן שחרור',
	'LICENSE'				=> 'רשיון',

	'REQUIREMENTS'			=> 'דרישות',
	'PHPBB_VERSION'			=> 'גרסת phpBB',
	'PHP_VERSION'			=> 'גרסת PHP',
	'AUTHOR_INFORMATION'	=> 'מידע אודות היוצר',
	'AUTHOR_NAME'			=> 'שם',
	'AUTHOR_EMAIL'			=> 'דואר אלקטורני',
	'AUTHOR_HOMEPAGE'		=> 'דף הבית',
	'AUTHOR_ROLE'			=> 'תפקיד',
	
	'NOT_UP_TO_DATE'		=> '%s is not up to date',
	'UP_TO_DATE'			=> '%s is up to date',
	'ANNOUNCEMENT_TOPIC'	=> 'Release Announcement',
	'DOWNLOAD_LATEST'		=> 'Download Version',
	'NO_VERSIONCHECK'		=> 'No version check information given.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'בדוק שוב את כל הגרסאות',
	'FORCE_UNSTABLE'					=> 'תמיד בדוק גרסאות לא יציבות',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'הגדרות בודק הגרסאות',

	'META_FIELD_NOT_SET'	=> 'Required meta field %s has not been set.',
	'META_FIELD_INVALID'	=> 'Meta field %s is invalid.',
));
