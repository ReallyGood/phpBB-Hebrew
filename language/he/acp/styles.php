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

$lang = array_merge($lang, array (
  'ACP_STYLES_EXPLAIN' => 'כאן ניתן לנהל את הסגנונות הזמינים במערכת.<br>שים לב שלא ניתן להסיר את הסגנון “<strong>prosilver</strong>” מאחר שהוא סגנון ברירת המחדל של phpBB וסגנון ההורה הראשי.',
  'CANNOT_BE_INSTALLED' => 'לא ניתן להתקין',
  'CONFIRM_UNINSTALL_STYLES' => 'האם אתה בטוח שברצונך להסיר את הסגנונות שנבחרו?',
  'COPYRIGHT' => 'זכויות יוצרים',
  'DEACTIVATE_DEFAULT' => 'לא ניתן להשבית את סגנון ברירת המחדל.',
  'DELETE_FROM_FS' => 'מחק ממערכת הקבצים',
  'DELETE_STYLE_FILES_FAILED' => 'שגיאה במחיקת הקבצים עבור הסגנון "%s".',
  'DELETE_STYLE_FILES_SUCCESS' => 'הקבצים עבור הסגנון "%s" נמחקו.',
  'DETAILS' => 'פרטים',
  'INHERITING_FROM' => 'יורש מ־',
  'INSTALL_STYLE' => 'התקן סגנון',
  'INSTALL_STYLES' => 'התקן סגנונות',
  'INSTALL_STYLES_EXPLAIN' => 'כאן ניתן להתקין סגנונות חדשים.<br>אם אינך מוצא סגנון מסוים ברשימה למטה, בדוק שהוא כבר מותקן. אם אינו מותקן, בדוק שהוא הועלה כראוי.',
  'INVALID_STYLE_ID' => 'מזהה סגנון לא תקין.',
  'NO_MATCHING_STYLES_FOUND' => 'לא נמצאו סגנונות התואמים לחיפוש שלך.',
  'NO_UNINSTALLED_STYLE' => 'לא זוהו סגנונות לא מותקנים.',
  'PURGED_CACHE' => 'המטמון נוקה.',
  'REQUIRES_STYLE' => 'סגנון זה דורש שהסגנון "%s" יהיה מותקן.',
  'STYLE_ACTIVATE' => 'הפעל',
  'STYLE_ACTIVE' => 'פעיל',
  'STYLE_DEACTIVATE' => 'השבת',
  'STYLE_DEFAULT' => 'קבע כסגנון ברירת מחדל',
  'STYLE_DEFAULT_CHANGE_INACTIVE' => 'עליך להפעיל את הסגנון לפני שניתן לקבוע אותו כסגנון ברירת מחדל.',
  'STYLE_ERR_INVALID_PARENT' => 'סגנון הורה לא תקין.',
  'STYLE_ERR_NAME_EXIST' => 'סגנון בשם זה כבר קיים.',
  'STYLE_ERR_STYLE_NAME' => 'עליך להזין שם לסגנון זה.',
  'STYLE_INSTALLED' => 'הסגנון "%s" הותקן.',
  'STYLE_INSTALLED_RETURN_INSTALLED_STYLES' => 'חזור לרשימת הסגנונות המותקנים',
  'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES' => 'התקן סגנונות נוספים',
  'STYLE_NAME' => 'שם הסגנון',
  'STYLE_NAME_RESERVED' => 'לא ניתן להתקין את הסגנון "%s" מאחר שהשם שמור.',
  'STYLE_NOT_INSTALLED' => 'הסגנון "%s" לא הותקן.',
  'STYLE_PATH' => 'נתיב הסגנון',
  'STYLE_UNINSTALL' => 'הסר',
  'STYLE_UNINSTALL_DEPENDENT' => 'לא ניתן להסיר את הסגנון "%s" מאחר שיש לו סגנון(ים) בן/בנים אחד או יותר.',
  'STYLE_UNINSTALLED' => 'הסגנון "%s" הוסר בהצלחה.',
  'STYLE_PHPBB_VERSION' => 'גרסת phpBB',
  'STYLE_USED_BY' => 'בשימוש על־ידי (כולל רובוטים)',
  'STYLE_VERSION' => 'גרסת הסגנון',
  'UNINSTALL_PROSILVER' => 'לא ניתן להסיר את הסגנון “prosilver”.',
  'UNINSTALL_DEFAULT' => 'לא ניתן להסיר את סגנון ברירת המחדל.',
  'BROWSE_STYLES_DATABASE' => 'עיין במסד נתוני הסגנונות',
));
