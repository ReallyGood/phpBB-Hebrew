<?php
/** 
*
* acp_attachments [Hebrew]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @author 2008 - phpBB הישראלי - phpBB.co.il
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'כאן אתה יכול להגדיר את ההגדרות הראשית של צירוף הקבצים והקטגוריות המיוחדות הקשורות.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'כאן אתה יכול להוסיף, למחוק, לשנות או לכבות את קבוצות הסיומות. אפשרויות נוספות כוללות את קביעת הסיומות לקבוצות, שינוי מנגנון ההורדה והגדרת סמל ההעלאה אשר יוצר לפני קובץ מצורף ששייך לקבוצה.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'כאן אתה יכול לנהל את הסיומות המורשות. כדי להפעיל את הסיומות, עבור אל לוח ניהול קבוצות הסיומות. אנו ממליצים במיוחד לא לאפשר סיומות של קבצי תסריט (כמו <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, ועוד…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'כאן אתה יכול לראות את הקבצים ללא שולח. הדבר מתרחש בדרך כלל כאשר משתמשים מצרפים קבצים אך לא שולחים את ההודעה. אתה יכול למחוק את הקבצים או לצרף אותם להודעות קיימות. צירוף להודעות דורש מספר ID של הודעה חוקי, אתה חייב לקבוע מספר ID זה בעצמך. כך יקבע הקובץ המצורף להודעה שהזנת.',
	'ADD_EXTENSION'						=> 'הוסף סיומת',
	'ADD_EXTENSION_GROUP'				=> 'הוסף קבוצת סיומות',
	'ADMIN_UPLOAD_ERROR'				=> 'שגיאות בעת ניסיון לצרף קבצים: “%s”.',
	'ALLOWED_FORUMS'					=> 'פורומים מורשים',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'ניתן לשלוח את הסיומות שנקבעו לפורומים הנבחרים (או כולם אם נבחר).',
	'ALLOWED_IN_PM_POST'				=> 'מורשה',
	'ALLOW_ATTACHMENTS'					=> 'אפשר קבצים מצורפים',
	'ALLOW_ALL_FORUMS'					=> 'אפשר בכל הפורומים',
	'ALLOW_IN_PM'						=> 'מורשה בהודעות פרטיות',
	'ALLOW_PM_ATTACHMENTS'				=> 'אפשר קבצים מצורפים בהודעות פרטיות',
	'ALLOW_SELECTED_FORUMS'				=> 'רק הפורומים הנבחרים להלן',
	'ASSIGNED_EXTENSIONS'				=> 'סיומות שנקבעו',
	'ASSIGNED_GROUP'					=> 'קבוצת סיומות שנקבעה',
	'ATTACH_EXTENSIONS_URL'				=> 'סיומות',
	'ATTACH_EXT_GROUPS_URL'				=> 'קבוצות סיומות',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'גודל קובץ מרבי',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'גודל מרבי של כל קובץ. אם הערך הוא 0, המגבלה היחידה נקבעת בהגדרות ה־PHP בשרת.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'גודל קובץ מרבי להודעה פרטית',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'גודל מרבי של קובץ, מצורף להודעה הפרטית, כאשר 0 הנו בלתי מוגבל.',
	'ATTACH_ORPHAN_URL'					=> 'קבצים מצורפים ללא שולח',
	'ATTACH_POST_ID'					=> 'מספר ID של הודעה',
	'ATTACH_POST_TYPE'					=> 'סוג ההודעה',
	'ATTACH_QUOTA'						=> 'מכסת קבצים מצורפים כללית',
	'ATTACH_QUOTA_EXPLAIN'				=> 'שטח אחסון מרבי זמין לקבצים מצורפים למערכת השלמה, כאשר 0 הנו בלתי מוגבל.',
	'ATTACH_TO_POST'					=> 'צרף קובץ להודעה',

	'CAT_FLASH_FILES'			=> 'קבצי פלאש',
	'CAT_IMAGES'				=> 'תמונות',
	'CAT_QUICKTIME_FILES'		=> 'קבצי מדיה של Quicktime',
	'CAT_RM_FILES'				=> 'קבצי מדיה של RealMedia',
	'CHECK_CONTENT'				=> 'בדוק קבצים מצורפים',
	'CHECK_CONTENT_EXPLAIN'		=> 'בדפדפנים מסוימים ניתנת האפשרות לגרום לדפדפן לטעות בסוג הקובץ של הקבצים שמעלים לשרת. סימון אפשרות זו תוודא שקבצים ידועים שעשויים לגרום למצב כזה ידחו באופן אוטומטי.',
	'CAT_WM_FILES'				=> 'קבצי מדיה של Windows מדיה',
	'CREATE_GROUP'				=> 'צור קבוצה חדשה',
	'CREATE_THUMBNAIL'			=> 'צור תמונה מוקטנת',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'צור תמונה קטנה בכל הפתרונות האפשריים.',

	'DEFINE_ALLOWED_IPS'			=> 'הגדר כתובות IP/שמות שרתים מורשים',
	'DEFINE_DISALLOWED_IPS'			=> 'הגדר כתובות IP/שמות שרתים לא מורשים',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'כדי לציין כמה כתובות IP או שמות שרתים, הזן כל אחד מהם בשורה חדשה. כדי לציין טווח של כתובות IP, ציין את ההתחלה והסיום עם מקף (-), כדי לציין סימן כולל ציין “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'אתה יכול להסיר (או לבטל שחרור) למספר כתובות IP במהלך אחד עם השילוב המתאים של עכבר ומקלדת למחשב והדפדפן שלך. לכתובת IP ששוחררו יש רקע כחול.',
	'DISPLAY_INLINED'				=> 'הצג תמונה בשורה',
	'DISPLAY_INLINED_EXPLAIN'		=> 'אם נקבע ללא, תמונות מצורפות יוצגו כקישורים.',
	'DISPLAY_ORDER'					=> 'סדר תצוגת קבצים מצורפים',
	'DISPLAY_ORDER_EXPLAIN'			=> 'הצג קבצים מצורפים מסודרים לפי זמן.',
	
	'EDIT_EXTENSION_GROUP'			=> 'ערוך קבוצת סיומות',
	'EXCLUDE_ENTERED_IP'			=> 'הפעל כדי לשחרר את כתובת ה־IP/שם השרת שהוזן.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'שחרר כתובת IP מרשימת כתובות ה־IP/שמות השרתים המורשים',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'שחרר כתובת IP מרשימת כתובות ה־IP/שמות השרתים הלא מורשים',
	'EXTENSIONS_UPDATED'			=> 'הסיומות עודכנו בהצלחה.',
	'EXTENSION_EXIST'				=> 'הסיומת %s כבר קיימת.',
	'EXTENSION_GROUP'				=> 'קבוצת סיומות',
	'EXTENSION_GROUPS'				=> 'קבוצות סיומות',
	'EXTENSION_GROUP_DELETED'		=> 'קבוצת הסיומות נמחקה בהצלחה.',
	'EXTENSION_GROUP_EXIST'			=> 'קבוצת הסיומות %s כבר קיימת.',
	'EXT_GROUP_ARCHIVES'			=> 'ארכיונים',
	'EXT_GROUP_DOCUMENTS'			=> 'מסמכים',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'קבצים הניתנים להורדה',
	'EXT_GROUP_FLASH_FILES'			=> 'קבצי פלאש',
	'EXT_GROUP_IMAGES'				=> 'תמונות',
	'EXT_GROUP_PLAIN_TEXT'			=> 'טקסט רגיל',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime מדיה',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real מדיה',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows מדיה',

	'GO_TO_EXTENSIONS'		=> 'עבור למסך ניהול הסיומות',
	'GROUP_NAME'			=> 'שם הקבוצה',

	'IMAGE_LINK_SIZE'			=> 'ממדים לקישור תמונה',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'הצג תמונה מצורפת כטקסט מקושר אם תמונה גדולה יותר מגודל זה. כדי לכבות אפשרות זו, קבע את הערכים ל־0 פיקסלים על 0 פיקסלים.',
	'IMAGICK_PATH'				=> 'נתיב ל־Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'נתיב מלא ליישום המרה imagemagick, למשל <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'מספר מרבי של קבצים מצורפים לכל הודעה',
	'MAX_ATTACHMENTS_PM'			=> 'מספר מרבי של קבצים מצורפים לכל הודעה פרטית',
	'MAX_EXTGROUP_FILESIZE'			=> 'גודל קובץ מרבי',
	'MAX_IMAGE_SIZE'				=> 'ממדי תמונה מרביים',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'גודל מרבי של תמונות מצורפות. קבע את שני הערכים ל־0 פיקסלים על 0 פיקסלים כדי לכבות את בדיקת הממדים.',
	'MAX_THUMB_WIDTH'				=> 'רוחב מרבי לתמונה מוקטנת בפיקסלים',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'תמונה מוקטנת הנוצרת לא תעבור את הרוחב הנקבע כאן.',
	'MIN_THUMB_FILESIZE'			=> 'גודל קובץ מינימלי לתמונה מוקטנת',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'אל תיצור תמונה מוקטנת לתמונות היותר קטנות מגודל זה.',
	'MODE_INLINE'					=> 'בשורה',
	'MODE_PHYSICAL'					=> 'פיסי',

	'NOT_ALLOWED_IN_PM'			=> 'מאופשר רק בהודעות',
	'NOT_ALLOWED_IN_PM_POST'	=> 'לא מאופשר',
	'NOT_ASSIGNED'				=> 'לא נקבע',
	'NO_EXT_GROUP'				=> 'ללא',
	'NO_EXT_GROUP_NAME'			=> 'לא הוזנה קבוצת משתמשים',
	'NO_EXT_GROUP_SPECIFIED'	=> 'לא צוינה קבוצת סיומות.',
	'NO_FILE_CAT'				=> 'ללא',
	'NO_IMAGE'					=> 'ללא תמונה',
	'NO_THUMBNAIL_SUPPORT'		=> 'תמיכה בתמונות מוקטנות כבויה. לפעילות טובה יותר סיומת הספריה הגראפית צריכה להיות זמינה או imagemagick צריכה להיות מותקנת. שניהן לא נמצאו.',
	'NO_UPLOAD_DIR'				=> 'תיקיית הקבצים שציינת לא קיימת.',
	'NO_WRITE_UPLOAD'			=> 'תיקיית הקבצים שציינת לא ניתנת לכתיבה. אנא שנה את הגישות על מנת לאפשר לשרת לכתוב אליה.',

	'ONLY_ALLOWED_IN_PM'	=> 'מאופשר רק בהודעות פרטיות',
	'ORDER_ALLOW_DENY'		=> 'אפשר',
	'ORDER_DENY_ALLOW'		=> 'דחה',

	'REMOVE_ALLOWED_IPS'		=> 'הסר או בטל שחרור מרשימת כתובות ה־IP/שמות השרתים <em>המורשים</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'הסר או בטל שחרור מרשימת כתובות ה־IP/שמות השרתים <em>הלא מורשים</em>',

	'SEARCH_IMAGICK'				=> 'אתר Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'אפשר/דחה רשימה',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'שנה את התנהגות ברירת המחדל כאשר אבטחת ההורדות פעילה של האפשר/דחה רשימה לזו של <strong>רשימה לבנה</strong> (אפשר) או <strong>רשימה שחורה</strong> (דחה).',
	'SECURE_DOWNLOADS'				=> 'הפעל אבטחת הורדות',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'כאשר אפשרות זו פעילה, ההורדות מוגבלות לכתובות IP/שמות שרתים שאתה מגדיר.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'אבטחת ההורדות לא פעילה. ההגדרות הבאות ישפיעו לאחר הפעלת אבטחת ההורדות.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'רשימת ה־IP עודכנה בהצלחה.',
	'SECURE_EMPTY_REFERRER'			=> 'אפשר מקשר ריק',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'אבטחת ההורדות מבוססת על מקשרים. האם אתה רוצה לאפשר להורדות להשמיט את המקשר?',
	'SETTINGS_CAT_IMAGES'			=> 'הגדרות קטגורית תמונות',
	'SPECIAL_CATEGORY'				=> 'קטגוריה מיוחדת',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'קטגוריות מיוחדות נבדלות בדרך בהן הן מוצגות בהודעות.',
	'SUCCESSFULLY_UPLOADED'			=> 'הועלה בהצלחה.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'קבוצת הסיומות נוספה בהצלחה.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'קבוצת הסיומות עודכנה בהצלחה.',

	'UPLOADING_FILES'				=> 'מעלה קבצים',
	'UPLOADING_FILE_TO'				=> 'מעלה קובץ “%1$s” להודעה מספר %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'אין לך את הגישה להעלות קבצים לפורום “%s”.',
	'UPLOAD_DIR'					=> 'תיקיית קבצים',
	'UPLOAD_DIR_EXPLAIN'			=> 'נתיב לאחסון הקבצים המצורפים. שים לב שאם תשנה את התיקייה לאחר שיש בה כבר קבצים מצורפים, תצטרך להעביר אותם למיקום החדש ידנית.',
	'UPLOAD_ICON'					=> 'סמל העלאה',
	'UPLOAD_NOT_DIR'				=> 'המיקום לקבצים שציינת אינו נראה כתיקייה.',
));
