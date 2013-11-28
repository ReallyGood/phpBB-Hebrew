<?php
/** 
*
* acp_forums [Hebrew]
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'איפוס אוטומטי לפי תאריכי ההודעות',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'מספר ההודעות האחרון באשכול שלאחריו הנושא יוסר.',
	'AUTO_PRUNE_FREQ'			=> 'איפוס אוטומטי תקופתי',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'מספר הימים בין אירועי האיפוס.',
	'AUTO_PRUNE_VIEWED'			=> 'איפוס הודעות אוטומטי לפי תאריכי הצפיות האחרונות בהודעה',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'מספר הימים שעברו מאז הצפייה באשכול בפעם האחרונה שלאחריה הנושא יוסר.',

	'CONTINUE'						=> 'המשך',
	'COPY_PERMISSIONS'				=> 'העתק הרשאות מ',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'כדי לזרז את תהליך יצירת הפורום החדש, אתה יכול להעתיק הרשאות מפורום קיים.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'כאשר נוצר, הפורום יקבל את אותן ההרשאות בדומה לפורום שבחרת. אם לא נבחר פורום, הפורום לא יוצג עד לכאשר הרשאותיו יוגדרו.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'אם בחרת בהעתקת הרשאות, הפורום יקבל את אותן ההרשאות כמו הפורום שבחרת כאן. זה יעתיק כל הרשאה שהגדרת קודם לכן לפורום זה להרשאות הפורום שבחרת כאן. אם לא נבחר פורום ההרשאות הראשיות ישמרו.',
	'COPY_TO_ACL'					=> 'לחלופין, אתה יכול גם %sלהגדיר הרשאות חדשות%s לפורום זה.',
	'CREATE_FORUM'					=> 'צור פורום חדש',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'מחק טבלה או העבר לפורום',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'מחק תת פורום או העבר לפורום',
	'DEFAULT_STYLE'						=> 'סגנון ברירת המחדל',
	'DELETE_ALL_POSTS'					=> 'מחק הודעות',
	'DELETE_SUBFORUMS'					=> 'מחק תת פורומים והודעות',
	'DISPLAY_ACTIVE_TOPICS'				=> 'הפעל נושאים פעילים',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'אם סימנת כן נושאים פעילים בתת פורום שנבחר יוצגו מתחת לקטגוריה זו.',

	'EDIT_FORUM'					=> 'ערוך פורום',
	'ENABLE_INDEXING'				=> 'הפעל חיפוש ראשי',
	'ENABLE_INDEXING_EXPLAIN'		=> 'אם סימנת כן הודעות שנרשמו בפורום זה ייכללו בחיפוש.',
	'ENABLE_POST_REVIEW'			=> 'אפשר סקירת הודעה',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'אם סימנת כן משתמשים יכולים לסקור את ההודעה שלהם אם הודעות חדשות נכתבו לנושא בזמן שהם כתבו את הודעתם. מומלץ לא לאפשר אפשרות זו לפורומי צ\'ט.',
	'ENABLE_QUICK_REPLY'			=> 'אפשר תגובה מהירה',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'אפשר תגובה מהירה בפורום זה. הגדרה זו לא תילקח בחשבון אם תגובה מהירה מבוטלת בכל המערכת. תגובה מהירה תוצג רק למשתמשים בעלי הרשאת כתיבה בפורום זה.',
	'ENABLE_RECENT'					=> 'הצג נושאים פעילים',
	'ENABLE_RECENT_EXPLAIN'			=> 'אם סימנת כן נושאים פעילים שנכתבו בפורום זה יופיעו ברשימת הנושאים הפעילים.',
	'ENABLE_TOPIC_ICONS'			=> 'אפשר סמלי נושא',

	'FORUM_ADMIN'						=> 'ניהול פורום',
	'FORUM_ADMIN_EXPLAIN'				=> 'במערכת phpBB3 הכול פועל על בסיס פורומים. קטגוריה הוא בסך הכול סוג מיוחד של פורום. כל פורום יכול להכיל מספר לא מוגבל של תתי־פורומים ואתה יכול להחליט אם לאפשר שליחת הודעות או לא בכל אחד מהם. כאן אתה יכול להוסיף, לערוך, למחוק, לנעול, לשחרר נעילות ולהגדיר אפשרויות נוספות אחרות בכל פורום ופורום. אם ההודעות והנושאים לא מסונכרנים בפורום תוכל לסנכרן אותו מחדש. <strong>על מנת שפורומים חדשים שנוצרו יוצגו, עליך קודם להעתיק או לקבוע הרשאות חדשות מתאימות בעבורם.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'אפשר איפוס אוטומטי',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'מאפס את הפורום ואת הנושאים בפורום, הגדר את הזמן הנפוץ בו האיפוס האוטומטי יפעל, למטה.',
	'FORUM_CREATED'						=> 'הפורום נוצר בהצלחה.',
	'FORUM_DATA_NEGATIVE'				=> 'הגדרת האיפוס לא יכולה להיות שלילית.',
	'FORUM_DESC_TOO_LONG'				=> 'תיאור הפורום ארוך מדי, התיאור יכול להיות מקסימום 4000 תווים.',
	'FORUM_DELETE'						=> 'מחק פורום',
	'FORUM_DELETE_EXPLAIN'				=> 'הטופס למטה יאפשר לך למחוק פורום. אם בפורום ישנם הודעות או נושאים אתה יכול להחליט לאיפה ברצונך לשייכם לפני המחיקה.',
	'FORUM_DELETED'						=> 'הפורום נמחק בהצלחה.',
	'FORUM_DESC'						=> 'תיאור',
	'FORUM_DESC_EXPLAIN'				=> 'כל קוד HTML שנכנס יסומן.',
	'FORUM_EDIT_EXPLAIN'				=> 'הטופס למטה יאפשר לך לערוך את הפורום. שים לב שהגדרות הניהול ומספר ההודעות מוגדרות עלי ידי הרשאות הפורום לכל משתמש או קבוצת משתמשים.',
	'FORUM_IMAGE'						=> 'תמונת הפורום',
	'FORUM_IMAGE_EXPLAIN'				=> 'מיקום, רלוונטי כאשר התמונה נמצאת בתיקייה הראשית של המערכת.',
	'FORUM_IMAGE_NO_EXIST'				=> 'התמונה שנבחרה לפורום לא קיימת',
	'FORUM_LINK_EXPLAIN'				=> 'כתובת מלאה (כולל הפרוטוקול, כדוגמת: <samp>http://</samp>) ליעד, שבלחיצה על הפורום שתיקח את המשתמש, e.g.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'כיוון מחדש של מעקב אחר הקישור',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'סופר את מספר הפעמים שהפורום המקושר נלחץ.',
	'FORUM_NAME'						=> 'שם הפורום',
	'FORUM_NAME_EMPTY'					=> 'אתה חייב להכניס שם לפורום זה.',
	'FORUM_PARENT'						=> 'הפורום הראשי',
	'FORUM_PASSWORD'					=> 'ססמת הפורום',
	'FORUM_PASSWORD_CONFIRM'			=> 'אימות ססמת הפורום',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'צריך להזין רק כאשר ישנה ססמה לפורום.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'הגדר ססמה לפורום זה, השתמש בהרשאות המערכת בהעדפות.',
	'FORUM_PASSWORD_UNSET'				=> 'הסר את ססמת הפורום',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'סמן אם ברצונך להסיר את ססמת הפורום.',
	'FORUM_PASSWORD_OLD'				=> 'ססמת הפורום משתמשת בשיטת הצפנה ישנה וצריכה להשתנות.',
	'FORUM_PASSWORD_MISMATCH'			=> 'הססמאות שהכנסת אינן תואמות.',
	'FORUM_PRUNE_SETTINGS'				=> 'הגדרות איפוס הפורום',
	'FORUM_RESYNCED'					=> 'הפורום “%s” סונכרן בהצלחה',
	'FORUM_RULES_EXPLAIN'				=> 'חוקי הפורום מוצגים בכל עמוד בתוך הפורום שהזנת.',
	'FORUM_RULES_LINK'					=> 'קישור לחוקי הפורום',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'באפשרותך להזין את כתובת העמוד/ההודעה שמכילה בתוכה את חוקי הפורום. הגדרות אלה יעקפו את טקסט החוקי הפורום שבחרת.',
	'FORUM_RULES_PREVIEW'				=> 'תצוגה מקדימה לחוקי הפורום',
	'FORUM_RULES_TOO_LONG'				=> 'חוקי הפורום יכולים להכיל מקסימום 4000 תווים.',
	'FORUM_SETTINGS'					=> 'הגדרות הפורום',
	'FORUM_STATUS'						=> 'מצב הפורום',
	'FORUM_STYLE'						=> 'סגנון הפורום',
	'FORUM_TOPICS_PAGE'					=> 'נושאים בעמוד',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'אם אין אפס ערך זה יעקוף הגדרות ברירת המחדל של נושאים בעמוד.',
	'FORUM_TYPE'						=> 'סוג הפורום',
	'FORUM_UPDATED'						=> 'מידע הפורום עודכן בהצלחה.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'תוכל לשנות פורום בו ניתן לשלוח הודעות המכיל תתי־פורומים לקישור. אנא העבר את כל תתי־הפורומים מחוץ לפורום זה לפני שתמשיך, מפני שלאחר השינוי לקישור לא תוכל יותר לראות את תתי־הפורומים המקושרים כרגע לפורום זה.',

	'GENERAL_FORUM_SETTINGS'	=> 'הגדרות פורום כלליות',

	'LINK'					=> 'קישור',
	'LIST_INDEX'			=> 'רשום תת פורום ברשימת הפורומים הראשית',
	'LIST_INDEX_EXPLAIN'	=> 'הצג את פורום זה בעמוד הראשי ובכל מקום אחר כקישור באזור של פורום האב שלו אם פורום האב מוגדר כ”רשום תת פורום ברשימה“ האפשרות מאושרת.',
	'LIST_SUBFORUMS'		=> 'רשום תת פורום ברשימה',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'הצג את תת הפורומים של פורום זה בעמוד הראשי ובכל מקום אחר כקישור באזור הפורום. אם הפורום מוגדר כ”רשום תת פורום ברשימת הפורומים הראשית“ האפשרות מאושרת.',
	'LOCKED'				=> 'נעול',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'הפורום שבחרת להעביר אליו את ההודעות אינו יכול לקבל הודעות נוספות. אנא בחר פורום אחר.',
	'MOVE_POSTS_TO'					=> 'העבר הודעות ל',
	'MOVE_SUBFORUMS_TO'				=> 'העבר תת פורומים ל',

	'NO_DESTINATION_FORUM'			=> 'לא בחרת פורום בכדי להעביר את טבלאות אלו.',
	'NO_FORUM_ACTION'				=> 'לא הוגדרה פעולה למה שקרה עם טבלאות הפורום.',
	'NO_PARENT'						=> 'אין פורום ראשי',
	'NO_PERMISSIONS'				=> 'אל תעתיק הרשאות',
	'NO_PERMISSION_FORUM_ADD'		=> 'אין לך ההרשאות ליצור פורום.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'אין לך ההרשאות למחוק פורום.',

	'PARENT_IS_LINK_FORUM'		=> 'הפורום הראשי שבחרת הנו פורום מקושר. פורומים מקושרים אינם יכולים להחזיק פורומים, אנא בחר פורום או קטגוריה אחרת שתהיה הפורום הראשי שיחזיק פורום זה.',
	'PARENT_NOT_EXIST'			=> 'הפורום הראשי אינו קיים.',
	'PRUNE_ANNOUNCEMENTS'		=> 'איפוס הכרזות',
	'PRUNE_STICKY'				=> 'איפוס דביקים',
	'PRUNE_OLD_POLLS'			=> 'איפוס סקרים ישנים',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'הסר נושאים עם סקרים ללא הצבעות שעברו את מספר הימים שהוקצב להם.',
	
	'REDIRECT_ACL'	=> 'כעת באפשרות %sלהגדיר הרשאות%s לפורום זה.',

	'SYNC_IN_PROGRESS'			=> 'מחדש פורום',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'מרחק חידוש הפורום כעת %1$d/%2$d.',

	'TYPE_CAT'			=> 'קטגוריה',
	'TYPE_FORUM'		=> 'פורום',
	'TYPE_LINK'			=> 'קישור',

	'UNLOCKED'			=> 'פתוח',
));
