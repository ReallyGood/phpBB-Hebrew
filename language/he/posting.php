<?php
/** 
*
* posting [Hebrew]
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
	'BBCODE_S_HELP'				=> 'צבע גופן: [color=red]טקסט[/color] עצה: אתה יכול להשתמש גם בcolor=#FF0000',
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
	'CLOSE_TAGS'				=> 'סגור תגים',
	'CURRENT_TOPIC'				=> 'נושא נוכחי',

	'DELETE_FILE'				=> 'מחק קובץ',
	'DELETE_MESSAGE'			=> 'מחק הודעה',
	'DELETE_MESSAGE_CONFIRM'	=> 'האם אתה בטוח שאתה רוצה למחוק את הודעה זו?',
	'DELETE_OWN_POSTS'			=> 'סליחה אבל אתה יכול למחוק רק את ההודעות שלך.',
	'DELETE_PERMANENTLY'		=> 'Delete permanently',
	'DELETE_POST_CONFIRM'		=> 'Are you sure you want to delete this post?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete this post?',
	'DELETE_POST_PERMANENTLY'	=> 'Permanently delete this post so it can not be recovered',
	'DELETE_POSTS_CONFIRM'		=> 'Are you sure you want to delete these posts?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete these posts?',
	'DELETE_REASON'				=> 'Soft delete reason',
	'DELETE_REASON_EXPLAIN'		=> 'The specified reason for deletion will be visible to moderators.',
	'DELETE_POST_WARN'			=> 'Delete this post',
	'DELETE_TOPIC_CONFIRM'		=> 'Are you sure you want to delete this topic?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Permanently delete this topic so it can not be recovered',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete this topic?',
	'DELETE_TOPICS_CONFIRM'		=> 'Are you sure you want to delete these topics?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete these topics?',
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

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Your flash files may only be up to %d pixel high.',
		2	=> 'Your flash files may only be up to %d pixels high.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Your flash files may only be up to %d pixel wide.',
		2	=> 'Your flash files may only be up to %d pixels wide.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Your images may only be up to %1$d pixel high.',
		2	=> 'Your images may only be up to %1$d pixels high.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Your images may only be up to %d pixel wide.',
		2	=> 'Your images may only be up to %d pixels wide.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Enter your message here, it may contain no more than <strong>%d</strong> character.',
		2	=> 'Enter your message here, it may contain no more than <strong>%d</strong> characters.',
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
	'POLL_FOR_EXPLAIN'			=> 'Enter 0 for a never ending poll.',
	'POLL_MAX_OPTIONS'			=> 'Options per user',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'This is the number of options each user may select when voting.',
	'POLL_OPTIONS'				=> 'Poll options',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option. If you remove or add options all previous votes will be reset.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
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
	'POST_REVIEW_EXPLAIN'		=> 'לפחות הודעה אחת נשלחה בנושא זה. תוכל לסקור את ההודעה בתמציתיות.',
	'POST_REVIEW_EDIT'			=> 'סקירת הודעה',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'ההודעה שונתה על ידי משתמש אחר בזמן שערכת אותה. יכול להיות שתרצה לסקור את ההודעה בגרסה הנוכחית שלה ולתקן את העריכה שלך.',
	'POST_STORED'				=> 'ההודעה נשלחה בהצלחה.',
	'POST_STORED_MOD'			=> 'ההודעה נשלחה בהצלחה, אך היא צריכה לקבל אישור ממנהל לפני שתוצג לקהילה.',
	'POST_TOPIC_AS'				=> 'שלח נושא בתור',
	'PROGRESS_BAR'				=> 'פס התקדמות',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'You may embed only %d quote within each other.',
		2	=> 'You may embed only %d quotes within each other.',
	),

	'SAVE'						=> 'שמור',
	'SAVE_DATE'					=> 'נשמר ב',
	'SAVE_DRAFT'				=> 'שמור טיוטה',
	'SAVE_DRAFT_CONFIRM'		=> 'שים לב שטיוטות שנשמרו כוללות את הכותרת וההודעה בלבד, כל פריטים אחרים יוסרו. אתה רוצה לשמור את הטיוטה שלך כעת?',
	'SMILIES'					=> 'סמיילים',
	'SMILIES_ARE_OFF'			=> 'סמיילים <em>כבויים</em>',
	'SMILIES_ARE_ON'			=> 'סמיילים <em>פעילים</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'זמן הגבלה להכרזה/דביק',
	'STICK_TOPIC_FOR'			=> 'נושא מודבק למשך',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Enter 0 for a never ending Sticky/Announcement. Please note that this number is relative to the date of the post.',
	'STYLES_TIP'				=> 'Tip: Styles can be applied quickly to selected text.',

	'TOO_FEW_CHARS'				=> 'Your message contains too few characters.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Your message contains %1$d character. The minimum number of characters you need to enter is %2$d.',
		2	=> 'Your message contains %1$d characters. The minimum number of characters you need to enter is %2$d.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'You must enter at least two poll options.',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maximum.',
	'TOO_MANY_CHARS'			=> 'Your message contains too many characters.',
	'TOO_MANY_CHARS_POST'		=> array(
		2	=> 'Your message contains %1$d characters. The maximum number of allowed characters is %2$d.',
	),
	'TOO_MANY_CHARS_SIG'		=> array(
		2	=> 'Your signature contains %1$d characters. The maximum number of allowed characters is %2$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'ניסית להזין יותר מדי אפשרויות סקר.',
	'TOO_MANY_SMILIES'			=> 'ההודעה שלך מכילה יותר מדי סמיילים. המספר המרבי של סמיילים המורשה הוא %d.',
	'TOO_MANY_URLS'				=> 'ההודעה שלך מכילה יותר מדי כתובות. המספר המרבי של כתובות המורשה הוא %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'אתה לא יכול לציין יותר אפשרויות לכל משתמש ממספר אפשרויות הסקר.',
	'TOPIC_BUMPED'				=> 'הנושא הוקפץ בהצלחה.',

	'UNAUTHORISED_BBCODE'		=> 'אתה לא יכול להשתמש בתגי ה־BBCode הבאים: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'כדי להחליף את מצב הנושא מגלובלי לרגיל, אתה צריך לבחור את הפורום אשר אתה רוצה שבו הנושא יוצג.',
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

	'WRONG_FILESIZE'			=> 'הקובץ גדול מדי, הגודל המרבי המורשה הוא %1d %2s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$s wide, %2$s high and at most %3$s wide and %4$s high. The submitted image is %5$s wide and %6$s high.',
));
