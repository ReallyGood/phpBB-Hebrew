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
	'ADD_ATTACHMENT'			=> 'צירוף קובץ',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'אם אתה מעוניין לצרף קובץ אחד או יותר, הזן את הפרטים שלהלן.',
	'ADD_FILE'					=> 'צרף קובץ',
	'ADD_POLL'					=> 'יצירת סקר',
	'ADD_POLL_EXPLAIN'			=> 'אם אינך מעוניין להוסיף סקר לנושא שלך, השאר את השדות ריקים.',
	'ALREADY_DELETED'			=> 'סליחה אך ההודעה כבר נמחקה.',
	'ATTACH_DISK_FULL'			=> 'אין מספיק מקום פנוי בכונן על מנת לצרף את הקובץ המצורף.',
	'ATTACH_QUOTA_REACHED'		=> 'סליחה אך מכסת הקבצים המצורפים של המערכת התמלאה.',
	'ATTACH_SIG'				=> 'צרף חתימה (חתימות ניתנות לשינוי דרך לוח הבקרה למשתמש)',

	'BBCODE_A_HELP'				=> 'הוספת קובץ מצורף: [attachment=]שם הקובץ[/attachment]',
	'BBCODE_B_HELP'				=> 'טקסט מודגש: [b]טקסט[/b]',
	'BBCODE_C_HELP'				=> 'תצוגת קוד: [code]קוד[/code]',
	'BBCODE_D_HELP'				=> 'פלאש: [flash=רוחב,גובה]כתובת[/flash]',
	'BBCODE_F_HELP'				=> 'גודל גופן: [small=85]טקסט קטן[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>כבוי</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>פעיל</em>',
	'BBCODE_I_HELP'				=> 'טקסט נטוי: [i]טקסט[/i]',
	'BBCODE_L_HELP'				=> 'רשימה: [list][*]טקסט[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'פריט רשימה: [*]טקסט',
	'BBCODE_O_HELP'				=> 'רשימה מסודרת:  לדוגמא [list=1][*]נקודה ראשונה[/list] או [list=a][*]נקודה א[/list]',
	'BBCODE_P_HELP'				=> 'הוספת תמונה: [img]כתובת התמונה[/img]',
	'BBCODE_Q_HELP'				=> 'טקסט מצוטט: [quote]טקסט[/quote]',
	'BBCODE_S_HELP'				=> 'צבע גופן: [color=red]טקסט[/color] או [color=#FF0000]טקסט[/color]',
	'BBCODE_U_HELP'				=> 'טקסט עם קו תחתון: [u]טקסט[/u]',
	'BBCODE_W_HELP'				=> 'הוספת כתובת: [url]כתובת[/url] או [url=כתובת]טקסט לקישור[/url]',
	'BBCODE_Y_HELP'				=> 'רשימה: הוספת פריט רשימה',
	'BUMP_ERROR'				=> 'אתה לא יכול להקפיץ נושא זה בזמן קצר כל כך מאז ההודעה האחרונה.',

	'CANNOT_DELETE_REPLIED'		=> 'סליחה אך אתה יכול למחוק רק הודעות שלא קיבלו תגובה.',	
	'CANNOT_EDIT_POST_LOCKED'	=> 'הודעה זו ננעלה. אתה לא יכול לערוך יותר את ההודעה.',
	'CANNOT_EDIT_TIME'			=> 'אתה לא יכול לערוך או למחוק יותר את הודעה זו.',
	'CANNOT_POST_ANNOUNCE'		=> 'סליחה אבל אתה לא יכול לשלוח הכרזות.',
	'CANNOT_POST_STICKY'		=> 'סליחה אבל אתה לא יכול לשלוח נושאים דביקים.',
	'CHANGE_TOPIC_TO'			=> 'שנה את סוג נושא ל',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'ההודעה שלך מכילה תו אחד.',
		2	=> 'ההודעה שלך מכילה %1$d תווים.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'החתימה שלך מכילה תו אחד.',
		2	=> 'החתימה שלך מכילה %1$d תווים.',
	),
	'CLOSE_TAGS'				=> 'סגור תגים',
	'CURRENT_TOPIC'				=> 'נושא נוכחי',

	'DELETE_FILE'				=> 'מחק קובץ',
	'DELETE_MESSAGE'			=> 'מחק הודעה',
	'DELETE_MESSAGE_CONFIRM'	=> 'האם אתה בטוח שאתה רוצה למחוק את הודעה זו?',
	'DELETE_OWN_POSTS'			=> 'סליחה אבל אתה יכול למחוק רק את ההודעות שלך.',
	'DELETE_PERMANENTLY'		=> 'מחק לצמיתות',
	'DELETE_POST_CONFIRM'		=> 'האם אתה בטוח שאתה רוצה למחוק את ההודעה הזאת?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'האם אתה בטוח שאתה רוצה למחוק <strong>לצמיתות</strong> את ההודעה הזאת?',
	'DELETE_POST_PERMANENTLY'	=> 'מחק את ההודעה הזו לצמיתות כך שלא יהיה ניתן לשחזר אותה',
	'DELETE_POSTS_CONFIRM'		=> 'אתה בטוח שאתה רוצה למחוק את הודעות אלו?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'האם אתה בטוח שאתה רוצה למחוק <strong>לצמיתות</strong> את הודעות אלו?',
	'DELETE_REASON'				=> 'סיבה להעברה לסל המחזור',
	'DELETE_REASON_EXPLAIN'		=> 'הסיבה המוגדרת תוצג למנהלים',
	'DELETE_POST_WARN'			=> 'מחק את הודעה זו',
	'DELETE_TOPIC_CONFIRM'		=> 'האם אתה בטוח שאתה רוצה למחוק את נושא זה?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'מחק את הנושא הזה לצמיתות כך שלא יהיה ניתן לשחזר אותו',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'האם אתה בטוח שאתה רוצה למחוק <strong>לצמיתות</strong> את הנושא הזה?',
	'DELETE_TOPICS_CONFIRM'		=> 'אתה בטוח שאתה רוצה למחוק את נושאים אלו?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'האם אתה בטוח שאתה רוצה למחוק <strong>לצמיתות</strong> את נושאים אלו?',
	'DISABLE_BBCODE'			=> 'כבה BBCode',
	'DISABLE_MAGIC_URL'			=> 'אל תהפוך קישורים ללחיצים',
	'DISABLE_SMILIES'			=> 'כבה סמיילים',
	'DISALLOWED_CONTENT'		=> 'ההעלאה נדחתה מכיוון שהקובץ זוהה כקובץ חשוד.',
	'DISALLOWED_EXTENSION'		=> 'הסיומת %s אינה מורשת.',
	'DRAFT_LOADED'				=> 'טיוטה נטענה אל אזור השליחה, תוכל לסיים את ההודעה כעת.<br />הטיוטה תמחק לאחר שליחת ההודעה.',
	'DRAFT_LOADED_PM'			=> 'טיוטה נטענה אל אזור השליחה, תוכל לסיים את ההודעה הפרטית כעת.<br />הטיוטה תמחק לאחר שליחת ההודעה הפרטית.',
	'DRAFT_SAVED'				=> 'הטיוטה נשמרה בהצלחה.',
	'DRAFT_TITLE'				=> 'כותרת הטיוטה',

	'EDIT_REASON'				=> 'סיבה לעריכת ההודעה',
	'EMPTY_FILEUPLOAD'			=> 'הקובץ שהועלה ריק.',
	'EMPTY_MESSAGE'				=> 'אתה חייב להזין הודעה בעת שליחה.',
	'EMPTY_REMOTE_DATA'			=> 'הקובץ לא ניתן להעלאה, נסה להעלות את הקובץ בעצמך.',

	'FLASH_IS_OFF'				=> '[flash] <em>כבוי</em>',
	'FLASH_IS_ON'				=> '[flash] <em>פעיל</em>',
	'FLOOD_ERROR'				=> 'אתה לא יכול לשלוח הודעה נוספת בזמן קצר כל כך מאז ההודעה האחרונה.',
	'FONT_COLOR'				=> 'צבע גופן',
	'FONT_COLOR_HIDE'			=> 'הסתר צבע גופן',
	'FONT_HUGE'					=> 'ענק',
	'FONT_LARGE'				=> 'גדול',
	'FONT_NORMAL'				=> 'רגיל',
	'FONT_SIZE'					=> 'גודל גופן',
	'FONT_SMALL'				=> 'קטן',
	'FONT_TINY'					=> 'קטנטן',

	'GENERAL_UPLOAD_ERROR'		=> 'לא ניתן לצרף קובץ ל־%s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>כבוי</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>פעיל</em>',
	'INVALID_FILENAME'			=> '%s אינו שם קובץ חוקי.',

	'LOAD'						=> 'טען',
	'LOAD_DRAFT'				=> 'טען טיוטה',
	'LOAD_DRAFT_EXPLAIN'		=> 'כאן אתה יכול לבחור את הטיוטה שאתה רוצה להמשיך לכתוב. ההודעה הנוכחית שלך תבוטל, כל תוכן ההודעה הנוכחית ימחק. צפייה, עריכה ומחיקת טיוטות בלוח הבקרה למשתמש שלך.',
	'LOGIN_EXPLAIN_BUMP'		=> 'אתה צריך להתחבר כדי להבליט נושאים בפורום זה.',
	'LOGIN_EXPLAIN_DELETE'		=> 'אתה צריך להתחבר כדי למחוק הודעות בפורום זה.',
	'LOGIN_EXPLAIN_POST'		=> 'אתה צריך להתחבר כדי לשלוח הודעות בפורום זה.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'אתה צריך להתחבר כדי לצטט הודעות בפורום זה.',
	'LOGIN_EXPLAIN_REPLY'		=> 'אתה צריך להתחבר כדי להגיב לנושאים בפורום זה.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'אפשר להשתמש בפונט עד לגודל %d',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'קבצי הפלאש שלך יכולים להיות עד גובה של פיקסל אחד.',
		2	=> 'קבצי הפלאש שלך יכולים להיות עד גובה של %d פיקסלים.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'קבצי הפלאש שלך יכולים להיות עד רוחב של פיקסל אחד.',
		2	=> 'קבצי הפלאש שלך יכולים להיות עד רוחב של %d פיקסלים.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'התמונות שלך יכולות להיות עד גובה של פיקסל אחד.',
		2	=> 'התמונות שלך יכולות להיות עד גובה של %d פיקסלים.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'התמונות שלך יכולות להיות עד רוחב של פיקסל אחד.',
		2	=> 'התמונות שלך יכולות להיות עד רוחב של %d פיקסלים.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'הכנס את ההודעה שלך כאן, היא יכולה לכלול לא יותר מ<strong>תו אחד</strong>.',
		2	=> '.הכנס את ההודעה שלך כאן, היא יכולה לכלול לא יותר מ<strong>%d</strong> תווים',
	),
	'MESSAGE_DELETED'			=> 'ההודעה נמחקה בהצלחה.',
	'MORE_SMILIES'				=> 'צפה בסמיילים נוספים',

	'NOTIFY_REPLY'				=> 'הודע לי כאשר תגובה נשלחת',
	'NOT_UPLOADED'				=> 'הקובץ לא ניתן להעלאה.',
	'NO_DELETE_POLL_OPTIONS'	=> 'אתה לא יכול למחוק אפשרויות סקר קיימות.',
	'NO_PM_ICON'				=> 'ללא סמל להודעה פרטית',
	'NO_POLL_TITLE'				=> 'אתה חייב להזין כותרת לסקר.',
	'NO_POST'					=> 'ההודעה המבוקשת לא נמצאה.',
	'NO_POST_MODE'				=> 'לא צוין מצב נושא.',

	'PARTIAL_UPLOAD'			=> 'הקובץ הועלה באופן חלקי בלבד.',
	'PHP_SIZE_NA'				=> 'גודל הקובץ המצורף גדול מדי.<br />לא ניתן לקבל את הגודל המרבי המוגדר על־ידי PHP בקובץ php.ini.',
		'PHP_SIZE_OVERRUN'			=> 'גודל הקובץ המצורף גדול מדי, הגודל המרבי להעלאה הוא %1$d %2$s.<br />שים לב שהגודל נקבע בקובץ php.ini ואינו ניתן לשינוי.',
	'PLACE_INLINE'				=> 'הכנס בשורה',
	'POLL_DELETE'				=> 'מחק סקר',
	'POLL_FOR'					=> 'הרץ סקר למשך',
	'POLL_FOR_EXPLAIN'			=> 'הכנס 0 לסקר ללא הגבלת תוקף.',
	'POLL_MAX_OPTIONS'			=> 'אפשרויות למשתמש',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'זהו מספר האפשרויות שכל משתמש יוכל לבחור בזמן הצבעה.',
	'POLL_OPTIONS'				=> 'אפשרויות סקר',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'מקם כל אפשרות בשורה חדשה. אתה יכול להזין אפשרות <strong>אחת</strong>.',
		2	=> 'מקם כל אפשרות בשורה חדשה. אתה יכול להזין עד <strong>%d</strong> אפשרויות.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'מקם כל אפשרות בשורה חדשה. אתה יכול להזין אפשרות <strong>אחת</strong>. אם תסיר או תוסיף אפשרויות חדשות כל ההצבעות הקודמות יתאפסו.',
		2	=> 'מקם כל אפשרות בשורה חדשה. אתה יכול להזין עד <strong>%d</strong> אפשרויות. אם תסיר או תוסיף אפשרויות חדשות כל ההצבעות הקודמות יתאפסו.',
	),
	'POLL_QUESTION'				=> 'שאלת הסקר',
	'POLL_TITLE_TOO_LONG'		=> 'כותרת הסקר חייבת להכיל פחות מ־100 תווים.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'הגודל המפורק של כותרת הסקר שלך גדול מדי, נסה להסיר תגי BBCodes או סמיילים.',
	'POLL_VOTE_CHANGE'			=> 'אפשר הצבעה מחדש',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'אם פעיל משתמשים יוכלו לשנות את הצבעתם.',
	'POSTED_ATTACHMENTS'		=> 'קבצים מצורפים',
	'POST_APPROVAL_NOTIFY'		=> 'אתה תקבל דואר אלקטרוני כאשר ההודעה תאושר.',
	'POST_CONFIRMATION'			=> 'אישור הודעה',
	'POST_CONFIRM_EXPLAIN'		=> 'כדי למנוע הודעות הנשלחות באופן אוטומטי המערכת דורשת ממך להזין קוד אישור. הקוד מוצג בתמונה אשר אתה אמור לראות להלן. אם אינך מצליח לקרוא את הקוד מכל סיבה שהיא צור קשר עם %sהמנהל הראשי%s.',
	'POST_DELETED'				=> 'ההודעה נמחקה בהצלחה.',
	'POST_EDITED'				=> 'ההודעה נערכה בהצלחה.',
	'POST_EDITED_MOD'			=> 'ההודעה נערכה בהצלחה, אך היא צריכה לקבל אישור ממנהל לפני שתוצג לקהילה. ',
	'POST_GLOBAL'				=> 'גלובלי',
	'POST_ICON'					=> 'סמל ההודעה',
	'POST_NORMAL'				=> 'רגיל',
	'POST_REVIEW'				=> 'תקציר ההודעה',
	'POST_REVIEW_EDIT'			=> 'סקירת הודעה',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'ההודעה שונתה על ידי משתמש אחר בזמן שערכת אותה. יכול להיות שתרצה לסקור את ההודעה בגרסה הנוכחית שלה ולתקן את העריכה שלך.',
	'POST_REVIEW_EXPLAIN'		=> 'לפחות הודעה אחת נשלחה בנושא זה. תוכל לסקור את ההודעה בתמציתיות.',
	'POST_STORED'				=> 'ההודעה נשלחה בהצלחה.',
	'POST_STORED_MOD'			=> 'ההודעה נשלחה בהצלחה, אך היא צריכה לקבל אישור ממנהל לפני שתוצג לקהילה.',
	'POST_TOPIC_AS'				=> 'שלח נושא בתור',
	'PROGRESS_BAR'				=> 'פס התקדמות',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'ניתן להטמיע עד ציטוט אחד בתוך ציטוט אחר.',
		2	=> 'ניתן להטמיע עד %d ציטוטים אחד בתוך השני.',
	),
	'QUOTE_NO_NESTING'			=> 'לא ניתן להטמיע ציטוטים בתוך ציטוטים אחרים.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'הקובץ הנבחר לא הועלה בהצלחה בגלל שהבקשה לקחה יותר מדי זמן.',
	'SAVE'						=> 'שמור',
	'SAVE_DATE'					=> 'נשמר ב',
	'SAVE_DRAFT'				=> 'שמור טיוטה',
	'SAVE_DRAFT_CONFIRM'		=> 'שים לב שטיוטות שנשמרו כוללות את הכותרת וההודעה בלבד, כל פריטים אחרים יוסרו. אתה רוצה לשמור את הטיוטה שלך כעת?',
	'SMILIES'					=> 'סמיילים',
	'SMILIES_ARE_OFF'			=> 'סמיילים <em>כבויים</em>',
	'SMILIES_ARE_ON'			=> 'סמיילים <em>פעילים</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'זמן הגבלה להכרזה/דביק',
	'STICK_TOPIC_FOR'			=> 'נושא מודבק למשך',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'הזן 0 לנושא דביק/הכרזה ללא הגבלת תוקף. אנא שים לב כי מספר זה הוא יחסי לתאריך פרסום ההודעה.',
	'STYLES_TIP'				=> 'טיפ: ניתן להחיל סגנונות בקלות על טקסט שנבחר.',

	'TOO_FEW_CHARS'				=> 'ההודעה שלך מכילה מעט מדי תווים. ',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'אתה צריך להזין לפחות תו אחד.',
		2	=> 'אתה צריך להזין לפחות %d תווים.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'עליך להזין לפחות שתי אפשרויות בסקר. ',
	'TOO_MANY_ATTACHMENTS'		=> 'לא ניתן להוסיף עוד קובץ מצורף, המקסימום הוא %d.',
	'TOO_MANY_CHARS'			=> 'ההודעה שלך מכילה יותר מדי תווים. ',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'מספר התווים המקסימלי שמאופשר הנו %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'ניסית להזין יותר מדי אפשרויות סקר.',
	'TOO_MANY_SMILIES'			=> 'ההודעה שלך מכילה יותר מדי סמיילים. המספר המרבי של סמיילים המורשה הוא %d.',
	'TOO_MANY_URLS'				=> 'ההודעה שלך מכילה יותר מדי כתובות. המספר המרבי של כתובות המורשה הוא %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'אתה לא יכול לציין יותר אפשרויות לכל משתמש ממספר אפשרויות הסקר.',
	'TOPIC_BUMPED'				=> 'הנושא הוקפץ בהצלחה.',

	'UNAUTHORISED_BBCODE'		=> 'אתה לא יכול להשתמש בתגי ה־BBCode הבאים: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'כדי להחליף את מצב הנושא מגלובלי לרגיל, אתה צריך לבחור את הפורום אשר אתה רוצה שבו הנושא יוצג.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'ההודעה שלך מכילה את התווים הלא נתמכים הבאים:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'הנושא שלך מכיל את התווים הלא נתמכים הבאים:<br />%s',
	'UPDATE_COMMENT'			=> 'עדכן תיאור',
	'URL_INVALID'				=> 'הכתובת שציינת אינה חוקית.',
	'URL_NOT_FOUND'				=> 'הקובץ שצוין לא נמצא.',
	'URL_IS_OFF'				=> '[url] <em>כבוי</em>',
	'URL_IS_ON'					=> '[url] <em>פעיל</em>',
	'USER_CANNOT_BUMP'			=> 'אתה לא יכול להבליט נושאים בפורום זה.',
	'USER_CANNOT_DELETE'		=> 'אתה לא יכול למחוק הודעות בפורום זה.',
	'USER_CANNOT_EDIT'			=> 'אתה לא יכול לערוך הודעות בפורום זה.',
	'USER_CANNOT_REPLY'			=> 'אתה לא יכול להגיב בפורום זה.',
	'USER_CANNOT_FORUM_POST'	=> 'אתה לא יכול לבצע אפשרויות שליחה בפורום זה מפני שהפורום אינו תומך בהן.',

	'VIEW_MESSAGE'				=> '%sצפה בהודעה ששלחת זה עתה%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sצפה בהודעה הפרטית ששלחת זה עתה%s',

	'WRONG_FILESIZE'			=> 'הקובץ גדול מדי, הגודל המרבי המורשה הוא %1$d %2$s.',
	'WRONG_SIZE'				=> 'התמונה חייבת להיות לפחות ברוחב של %1$s,בגובה של %2$s ולכל היותר ברוחב של %3$s ובגובה של %4$s. התמונה שנשלחה ברוחב של %5$s ובגובה של %6$s.',
));
