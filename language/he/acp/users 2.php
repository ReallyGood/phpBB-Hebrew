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
	'ADMIN_SIG_PREVIEW'		=> 'תצוגת חתימה',
	'AT_LEAST_ONE_FOUNDER'	=> 'אתה לא יכול לשנות את המייסד למשתמש רגיל. חובה שיהיה מייסד אחד לפחות הפעיל במערכת זו. אם אתה רוצה לשנת את מצב המשתמשים המייסדים, אפשר קודם למשתמש אחר להיות מייסד.',

	'BAN_ALREADY_ENTERED'	=> 'החסימה הופעלה בהצלחה, אך הרשימה לא התעדכנה.',
	'BAN_SUCCESSFUL'		=> 'החסימה הופעלה בהצלחה.',

	'CANNOT_BAN_ANONYMOUS'			=> 'אינך רשאי לחסום חשבון אנונימי. הרשאות לחשבון אנונימי ניתן להגדיר תחת תגית ההרשאות.',
	'CANNOT_BAN_FOUNDER'			=> 'אינך מורשה לחסום חשבון של מייסד.',
	'CANNOT_BAN_YOURSELF'			=> 'אינך מורשה לחסום את עצמך.',
	'CANNOT_DEACTIVATE_BOT'			=> 'אינך מורשה לבטל חשבונות רובוטים. אנא בטל את הרובוט מעמוד הרובוטים במקום.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'אינך מורשה לבטל חשבונות מייסדים.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'אינך מורשה לבטל את החשבון שלך.',
	'CANNOT_FORCE_REACT_BOT'		=> 'אינך מורשה לדרוש הפעלה מחדש לחשבונות רובוטים. אנא הפעל מחדש את הרובוט מעמוד הרובוטים במקום.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'אינך מורשה לדרוש הפעלה מחדש לחשבונות מייסדים.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'אינך מורשה לדרוש הפעלה מחדש לחשבון שלך.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'אתה לא יכול להסיר את חשבון משתמש האורח.',
	'CANNOT_REMOVE_FOUNDER'			=> 'אינך מורשה להסיר חשבונות של מייסדים.',
	'CANNOT_REMOVE_YOURSELF'		=> 'אינך מורשה להסיר חשבון של עצמך.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'אתה לא יכול לאפשר למשתמשים מהם אתה מתעלם להיות מייסדים.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'אתה צריך להפעיל את המשתמשים לפני שאתה מאפשר להם להיות מייסדים, רק משתמשים פעילים ניתנים.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'אתה נדרש למלא שדה זה רק אם אתה מעוניין לשנות את הדואר האלקטרוני של המתשמש.',

	'DELETE_POSTS'			=> 'מחק הודעות',
	'DELETE_USER'			=> 'מחק משתמש',
	'DELETE_USER_EXPLAIN'	=> 'אנא שים לב שמחיקת משתמש הינה לתמיד ואין אפשרות לשיחזור. הודעות פרטיות שנשלחו על־ידי משתמש זה ולא נקראו ימחקו ולא יהיו זמינות אצל הנמען',

	'FORCE_REACTIVATION_SUCCESS'	=> 'ההפעלה מחדש בוצעה בהצלחה.',
	'FOUNDER'						=> 'מייסד',
	'FOUNDER_EXPLAIN'				=> 'למייסדים יש את כל ההרשאות המנהליות ואינם יכולים להיחסם, להימחק או להשתנות על ידי משתמשים שאינם מייסדים.',

	'GROUP_APPROVE'					=> 'אשר משתמש',
	'GROUP_DEFAULT'					=> 'קבע קבוצה זו כברירת מחדל למשתמש',
	'GROUP_DELETE'					=> 'מחק משתמש מהקבוצה',
	'GROUP_DEMOTE'					=> 'הורד מדרגת ראש קבוצה',
	'GROUP_PROMOTE'					=> 'קדם לראש קבוצה',

	'IP_WHOIS_FOR'			=> '%s זיהוי על פי האייפי עבור',

	'LAST_ACTIVE'			=> 'פעיל לאחרונה',

	'MOVE_POSTS_EXPLAIN'	=> 'בחר את הפורום אליו אתה רוצה להעביר את ההודעות של המשתמש.',

	'NO_SPECIAL_RANK'		=> 'לא צוינה דרגה',
	'NO_WARNINGS'			=> 'אין אזהרות.',
	'NOT_MANAGE_FOUNDER'	=> 'ניסית לנהל משתמש בדרגת מייסד, רק מייסדים אחרים לנהל משתמש שהוא מייסד.',

	'QUICK_TOOLS'			=> 'כלים מהירים',

	'REGISTERED'			=> 'רשומים',
	'REGISTERED_IP'			=> 'רשומים מ־IP',
	'RETAIN_POSTS'			=> 'שמור הודעות',

	'SELECT_FORM'			=> 'בחר טופס',
	'SELECT_USER'			=> 'בחר משתמש',

	'USER_ADMIN'					=> 'ניהול משתמשים',
	'USER_ADMIN_ACTIVATE'			=> 'הפעל משתמש',
	'USER_ADMIN_ACTIVATED'			=> 'המשתמש הופעל בהצלחה.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'הסמל האישי של המשתמש נמחק בהצלחה.',
	'USER_ADMIN_BAN_EMAIL'			=> 'חסום באמצעות דואר אלקטרוני',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'כתובת דואר אלקטרוני חסומה דרך ניהול משתמש',
	'USER_ADMIN_BAN_IP'				=> 'חסום באמצעות IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'כתובת IP חסומה דרך ניהול משתמש',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'שם המשתמש נחסם על ידי ניהול משתמשים',
	'USER_ADMIN_BAN_USER'			=> 'חסום באמצעות שם משתמש',
	'USER_ADMIN_DEACTIVATE'			=> 'בטל חשבון',
	'USER_ADMIN_DEACTIVED'			=> 'המשתמש בוטל בהצלחה.',
	'USER_ADMIN_DEL_ATTACH'			=> 'מחק את כל הקבצים המצורפים',
	'USER_ADMIN_DEL_AVATAR'			=> 'מחק סמל אישי',
	'USER_ADMIN_DEL_OUTBOX'			=> 'רוקן תיבת הודעות פרטיות יוצאות',
	'USER_ADMIN_DEL_POSTS'			=> 'מחק את כל ההודעות',
	'USER_ADMIN_DEL_SIG'			=> 'מחק חתימה',
	'USER_ADMIN_EXPLAIN'			=> 'כאן אתה יכול לשנות את פרטי המשתמשים ואפשרויות מסוימות.',
	'USER_ADMIN_FORCE'				=> 'הכרח הפעלת משתמש מחדש',
	'USER_ADMIN_LEAVE_NR'			=> 'הסר מנרשמו לאחרונה',
	'USER_ADMIN_MOVE_POSTS'			=> 'העבר את כל ההודעות',
	'USER_ADMIN_SIG_REMOVED'		=> 'החתימה נמחקה מהצלחה מהמשתמש.',
	'USER_ATTACHMENTS_REMOVED'		=> 'נמחקו כל הקבצים של המשתמש.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'הסמל האישי לא ניתן להצגה מכיוון שסמלים אישיים נהפכו ללא מורשים.',
	'USER_AVATAR_UPDATED'			=> 'עודכנו בהצלחה פרטי הסמל האישי של המשתמש.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'לא ניתן להציג את הסמל האישי מכיוון שסוגו נהפך ללא מורשה.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'שדות מותאמים אישית בכרטיס אישי של המשתמש',
	'USER_DELETED'					=> 'משתמש נמחק בהצלחה.',
	'USER_GROUP_ADD'				=> 'הוסף משתמש לקבוצה',
	'USER_GROUP_NORMAL'				=> 'קבוצות משתמש שהמשתמש חבר בהם',
	'USER_GROUP_PENDING'			=> 'קבוצות משתמשים במצב ניסיון',
	'USER_GROUP_SPECIAL'			=> 'קבוצות מוגדרות מראש שהמשתמש חבר בהם',
	'USER_LIFTED_NR'				=> 'מעמד הנרשם לאחרונה הוסר בהצלחה מן המשתמש.',
	'USER_NO_ATTACHMENTS'			=> 'אין קבצים מצורפים להצגה.',
	'USER_NO_POSTS_TO_DELETE'			=> 'למשתמש זה אין הודעות לשמירה או למחיקה.',
	'USER_OUTBOX_EMPTIED'			=> 'תיבת ההודעות הפרטיות של המשתמש רוקנה בהצלחה.',
	'USER_OUTBOX_EMPTY'				=> 'תיבת ההודעות הפרטיות היוצאות של המשתמש כבר הייתה ריקה.',
	'USER_OVERVIEW_UPDATED'			=> 'פרטי משתמש עודכנו.',
	'USER_POSTS_DELETED'			=> 'הודעות המשתמש נמחקו בהצלחה.',
	'USER_POSTS_MOVED'				=> 'הודעות המשתמש הועברו לפורום הרצוי בהצלחה.',
	'USER_PREFS_UPDATED'			=> 'העדפות משתמש עודכנו.',
	'USER_PROFILE'					=> 'כרטיס אישי של משתמש',
	'USER_PROFILE_UPDATED'			=> 'הכרטיס האישי של המשתמש עודכן.',
	'USER_RANK'						=> 'דרגת משתמש',
	'USER_RANK_UPDATED'				=> 'דרגת המשתמש עודכנה.',
	'USER_SIG_UPDATED'				=> 'חתימת המשתמש עודכנה.',
	'USER_WARNING_LOG_DELETED'		=> 'אין מידע זמין. ככל הנראה יומן המעקב נמחק.',
	'USER_TOOLS'					=> 'כלים בסיסיים',
));
