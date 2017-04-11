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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>ההרשאות מקובצות ומשתייכות לארבעה חלקים עיקריים, שהם:</p>

		<h2>הרשאות גלובליות</h2>
		<p>הן בשימוש לשליטה בהרשאה ברמה גלובלית ושייכות למערכת הפורום בשלמותה. הן בנוסף מתחלקות להרשאות של משתמש, הרשאות של קבוצה, מנהלים ראשיים ומנהלים גלובליים.</p>

		<h2>הרשאות לפי פורומים</h2>
		<p>הן בשימוש לשליטה בהרשאה בכל פורום. הן בנוסף נחלקות להרשאות פורום, מנהלי פורום, הרשאות פורום של משתמש והרשאות פורום של קבוצה.</p>

		<h2>כללי הרשאות</h2>
		<p>הן בשימוש ליצירת ערכות שונות של הרשאות לסוגי ההרשאה השונים אשר אחר כך יכולים להיקבע לפי כלל. כללי ברירת המחדל אמורים להיות הניהול הראשי של מערכות פורומים גדולות וקטנות, אך בכל אחד מארבעת החלקים, אתה יכול להוסיף/לערוך/למחוק כללים כפי שתרצה.</p>

		<h2>משימות הרשאה</h2>

		<br />

		<p>למידע נוסף על קביעה וניהול הרשאות במערכת phpBB, קרא את <a href="http://www.phpbb.co.il/viewtopic.php?f=28&t=21412">המדריך לקביעת הרשאות</a> — שתורגם על־ידי Berlo.</p>
	',

	'ACL_NEVER'				=> 'לעולם לא',
	'ACL_SET'				=> 'הגדרת הרשאות',
	'ACL_SET_EXPLAIN'		=> 'ההרשאות מבוססות על מערכת פשוטה של <strong>כן</strong>/<strong>לא</strong>. הגדרת אפשרות ל<strong>לעולם לא</strong> למשתמש או קבוצת משתמשים עוברת על כל הערכים האחרים אשר נקבעו להם. אם אינך מעוניין לקבוע ערך לאפשרות למשתמש או לקבוצה, בחר <strong>לא</strong>. אם ערכים נקבעו לאפשרות במקום אחר הם ישומשו בעדיפות ראשונה, אלא אם כן <strong>לעולם לא</strong> נקבע. כל הפריטים מסומנים (עם תיבת סימון לפניהם) יעתיקו את ההרשאה שהגדרת.',
	'ACL_SETTING'			=> 'הגדרה',

	'ACL_TYPE_A_'			=> 'הרשאות ניהול ראשי',
	'ACL_TYPE_F_'			=> 'הרשאות פורום',
	'ACL_TYPE_M_'			=> 'הרשאות ניהול',
	'ACL_TYPE_U_'			=> 'הרשאות משתמש',

	'ACL_TYPE_GLOBAL_A_'	=> 'הרשאות ניהול ראשי',
	'ACL_TYPE_GLOBAL_U_'	=> 'הרשאות משתמש',
	'ACL_TYPE_GLOBAL_M_'	=> 'הרשאות מנהל גלובלי',
	'ACL_TYPE_LOCAL_M_'		=> 'הרשאות מנהל פורום',
	'ACL_TYPE_LOCAL_F_'		=> 'הרשאות פורום',

	'ACL_NO'				=> 'לא',
	'ACL_VIEW'				=> 'צופה בהרשאות',
	'ACL_VIEW_EXPLAIN'		=> 'כאן אתה יכול לראות את ההרשאות הפעילות למשתמש/לקבוצה. ריבוע אדום מציין כי למשתמש/לקבוצה אין את ההרשאה, ריבוע ירוק מסמן כי למשתמש/לקבוצה יש את ההרשאה.',
	'ACL_YES'				=> 'כן',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'כאן ניתן לקבוע הרשאות מנהל ראשי למשתמשים או לקבוצות. רק משתמשים עם הרשאות מנהל ראשי יכולים לראות את לוח בקרה למנהלים ראשיים.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'כאן ניתן לקבוע משתמשים וקבוצות בתור מנהלי פורומים. כדי לקבוע למשתמשים הרשאה לפורומים, להגדיר הרשאות ניהול גלובלי או מנהלים ראשיים יש להשתמש בעמוד המתאים.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'כאן ניתן לקבוע את ההרשאה לפורומים למנהלים ולקבוצות. כדי לקבוע מנהלים או להגדיר מנהלים ראשיים יש להשתמש בעמוד המתאים.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'כאן ניתן להעתיק הרשאות פורום מפורום אחד לפורום אחד או יותר אחרים.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'כאן ניתן לקבוע הרשאות מנהל גלובלי למשתמשים או קבוצות. מנהלים אלו הם כמו מנהלים רגילים אך יש להם הרשאה לכל הפורומים במערכת.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'כאן ניתן לקבוע הרשאות פורום לקבוצות.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'כאן ניתן לקבוע הרשאות גלובליות לקבוצות – הרשאות משתמש, הרשאות מנהל גלובלי והרשאות מנהל ראשי. הרשאות משתמש כוללות יכולות כמו שימוש בסמלים אישיים, שליחת הודעות פרטיות, וכדומה. הרשאות מנהל גלובלי כוללות יכולות כמו אישות הודעות, ניהול נושאים, ניהול חסימות, וכדומה, ולבסוף הרשאות מנהל ראשי כוללות יכולות כמו שינוי הרשאות, הגדרת תגי BBCode מותאמים אישית, ניהול פורומים, וכדומה. הרשאות משתמש יחיד מומלץ לשנות במקרים נדירים, השיטה המועדפת היא הכנסת משתמשים לקבוצות וקביעת הרשאות לקבוצה.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'כאן אתה יכול לנהל את הכללים להרשאות הניהול הראשי. הכללים הם הרשאות פעילות, אם אתה משנה כלל, הרכיבים אשר להם הכלל נקבע ישנו את ההרשאות שלהם גם כן.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'כאן אתה יכול לנהל את הכללים להרשאות הפורום. הכללים הם הרשאות פעילות, אם אתה משנה כלל, הרכיבים אשר להם הכלל נקבע ישנו את ההרשאות שלהם גם כן.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'כאן אתה יכול לנהל את הכללים להרשאות הניהול. הכללים הם הרשאות פעילות, אם אתה משנה כלל, הרכיבים אשר להם הכלל נקבע ישנו את ההרשאות שלהם גם כן.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'כאן אתה יכול לנהל את הכללים להרשאות משתמש. הכללים הם הרשאות פעילות, אם אתה משנה כלל, הרכיבים אשר להם הכלל נקבע ישנו את ההרשאות שלהם גם כן.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'כאן אתה יכול לקבוע הרשאות פורום למשתמשים.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'כאן אתה יכול לקבוע הרשאות גלובליות למשתמשים – הרשאות משתמש, הרשאות מנהל גלובלי והרשאות מנהל ראשי. הרשאות משתמש כוללות יכולות כמו שימוש בסמלים אישיים, שליחת הודעות פרטיות, וכדומה. הרשאות מנהל גלובלי כוללות יכולות כמו אישות הודעות, ניהול נושאים, ניהול חסימות, וכדומה, ולבסוף הרשאות מנהל ראשי כוללות יכולות כמו שינוי הרשאות, הגדרת תגי BBCode מותאמים אישית, ניהול פורומים, וכדומה. הרשאות משתמש יחיד מומלץ לשנות במקרים נדירים, השיטה המועדפת היא הכנסת משתמשים לקבוצות וקביעת הרשאות לקבוצה.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'כאן אתה יכול לצפות בהרשאות הניהול הראשי הפעילות אשר נקבעו למשתמשים/לקבוצות הנבחרים.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'כאן אתה יכול לצפות בהרשאות הניהול הגלובלי אשר נקבעו למשתמשים/לקבוצות הנבחרים.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'כאן אתה יכול לצפות בהרשאות הפורום אשר נקבעו למשתמשים/לקבוצות ולפורומים הנבחרים.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'כאן אתה יכול לצפות בהרשאות מנהל הפורום אשר נקבעו למשתמשים/לקבוצות ולפורומים הנבחרים.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'כאן אתה יכול לצפות בהרשאות המשתמש הפעילות אשר נקבעו למשתמשים/לקבוצות הנבחרים.',

	'ADD_GROUPS'				=> 'הוסף קבוצות',
	'ADD_PERMISSIONS'			=> 'הוסף הרשאות',
	'ADD_USERS'					=> 'הוסף משתמשים',
	'ADVANCED_PERMISSIONS'		=> 'הרשאות מתקדמות',
	'ALL_GROUPS'				=> 'בחר את כל הקבוצות',
	'ALL_NEVER'					=> 'הכול <strong>לעולם לא</strong>',
	'ALL_NO'					=> 'הכול <strong>לא</strong>',
	'ALL_USERS'					=> 'בחר את כל המשתמשים',
	'ALL_YES'					=> 'הכול <strong>כן</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'החל את כל ההרשאות',
	'APPLY_PERMISSIONS'			=> 'החל הרשאות',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'ההרשאות והכלל המוגדרים לפריטי זה יפעלו לפריט זה וכל הפריטים המסומנים בלבד.',
	'AUTH_UPDATED'				=> 'ההרשאות עודכנו.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'האם אתה בטוח שאתה רוצה להמשיך עם הפעולה? אנא שים לב שזה ישכתב כל הרשאה קיימת ביעדים שנבחרו.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'פורום המקור ממנו אתה רוצה להעתיק הרשאות.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'פורום היעד אשר אליו אתה רוצה להעתיק הרשאות שיחולו עליו.',
	'COPY_PERMISSIONS_FROM'					=> 'העתק הרשאות מ',
	'COPY_PERMISSIONS_TO'					=> 'החל הרשאות ל',

	'CREATE_ROLE'				=> 'צור כלל',
	'CREATE_ROLE_FROM'			=> 'השתמש בהגדרות של…',
	'CUSTOM'					=> 'מותאם אישית…',

	'DEFAULT'					=> 'ברירת מחדל',
	'DELETE_ROLE'				=> 'מחק כלל',
	'DELETE_ROLE_CONFIRM'		=> 'אתה בטוח שאתה רוצה להסיר כלל זה? הרכיבים להם הכלל נקבע <strong>לא</strong> יאבדו את הגדרות ההרשאה שלהם.',
	'DISPLAY_ROLE_ITEMS'		=> 'צפה ברכיבים המשתמשים בכלל זה',

	'EDIT_PERMISSIONS'			=> 'ערוך הרשאות',
	'EDIT_ROLE'					=> 'ערוך כלל',

	'GROUPS_NOT_ASSIGNED'		=> 'אין קבוצה הנקבעה לכלל זה',

	'LOOK_UP_GROUP'				=> 'אתר קבוצת משתמשים',
	'LOOK_UP_USER'				=> 'אתר משתמש',

	'MANAGE_GROUPS'		=> 'ניהול קבוצות',
	'MANAGE_USERS'		=> 'ניהול משתמשים',

	'NO_AUTH_SETTING_FOUND'		=> 'הגדרות הרשאה לא הוגדרו.',
	'NO_ROLE_ASSIGNED'			=> 'אין כלל שנקבע…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'הגדרה לכלל זה לא משנה את ההרשאות. אם אתה רוצה לבטל/להסיר את כל ההרשאות אתה צריך להשתמש בקישור “הכול <strong>לא</strong>”.',
	'NO_ROLE_AVAILABLE'			=> 'אין כלל זמין',
	'NO_ROLE_NAME_SPECIFIED'	=> 'הזן לכלל שם.',
	'NO_ROLE_SELECTED'			=> 'לא ניתן למצוא את הכלל.',
	'NO_USER_GROUP_SELECTED'	=> 'לא בחרת אף משתמש או קבוצה.',

	'ONLY_FORUM_DEFINED'	=> 'הגדרת רק פורומים בבחירה שלך. בחר גם לפחות משתמש אחד או קבוצה אחת.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'ההרשאות והכלל יפעלו גם לכל הפריטים המסומנים',
	'PLUS_SUBFORUMS'				=> '+תתי־פורומים',

	'REMOVE_PERMISSIONS'			=> 'הסר הרשאות',
	'REMOVE_ROLE'					=> 'הסר כלל',
	'RESULTING_PERMISSION'			=> 'תוצאת הרשאה',
	'ROLE'							=> 'כלל',
	'ROLE_ADD_SUCCESS'				=> 'הכלל נוסף בהצלחה.',
	'ROLE_ASSIGNED_TO'				=> 'משתמשים/קבוצות שנקבעו ל%s',
	'ROLE_DELETED'					=> 'הכלל הוסר בהצלחה.',
	'ROLE_DESCRIPTION'				=> 'תיאור הכלל',

	'ROLE_ADMIN_FORUM'			=> 'ניהול ראשי של פורום',
	'ROLE_ADMIN_FULL'			=> 'ניהול ראשי מלא',
	'ROLE_ADMIN_STANDARD'		=> 'ניהול ראשי רגיל',
	'ROLE_ADMIN_USERGROUP'		=> 'ניהול ראשי של משתמשים וקבוצות',
	'ROLE_FORUM_BOT'			=> 'הרשאת בוט',
	'ROLE_FORUM_FULL'			=> 'הרשאה מלאה',
	'ROLE_FORUM_LIMITED'		=> 'הרשאה מוגבלת',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'הרשאה מוגבלת + סקרים',
	'ROLE_FORUM_NOACCESS'		=> 'ללא הרשאה',
	'ROLE_FORUM_ONQUEUE'		=> 'חצי ניהול',
	'ROLE_FORUM_POLLS'			=> 'הרשאה רגילה + סקרים',
	'ROLE_FORUM_READONLY'		=> 'הרשאה לקריאה בלבד',
	'ROLE_FORUM_STANDARD'		=> 'הרשאה רגילה',
	'ROLE_FORUM_NEW_MEMBER'		=> 'הרשאת משתמש שנרשם לאחרונה',
	'ROLE_MOD_FULL'				=> 'מנהל מלא',
	'ROLE_MOD_QUEUE'			=> 'חצי מנהל',
	'ROLE_MOD_SIMPLE'			=> 'מנהל פשוט',
	'ROLE_MOD_STANDARD'			=> 'מנהל רגיל',
	'ROLE_USER_FULL'			=> 'כל המאפיינים',
	'ROLE_USER_LIMITED'			=> 'מאפיינים מוגבלים',
	'ROLE_USER_NOAVATAR'		=> 'ללא סמל אישי',
	'ROLE_USER_NOPM'			=> 'ללא הודעות פרטיות',
	'ROLE_USER_STANDARD'		=> 'מאפיינים רגילים',
	'ROLE_USER_NEW_MEMBER'		=> 'מאפיינים למשתמש שנרשם לאחרונה',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'יכול לגשת לניהול הפורום והגדרות הרשאת הפורום.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'בעל הרשאה לכל אפשרויות הניהול הראשי של המערכת.<br />לא מומלץ.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'בעל הרשאה לרוב מאפייני הניהול הראשי אבל לא מורשה להשתמש בכלים הקשורים למערכת או לשרת.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'יכול לנהל קבוצות ומשתמשים: יכול לשנות הרשאות, הגדרות, לנהל חסימות, ולנהל דירוגים.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'כלל זה מומלץ לבוטים ועכבישי חיפוש.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'יכול להשתמש בכל מאפייני הפורום, כולל שליחה של הכרזות ודביקים. יכול בנוסף להתעלם מהגבלת ההצפה.<br />לא מומלץ למשתמשים רגילים.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'יכול להשתמש בכמה מאפייני פורום, אבל לא יכול לצרף קבצים או להשתמש באייקונים של ההודעות.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'כמו הרשאה מוגבלת אך יכול גם ליצור סקרים.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'לא יכול לראות ולא לגשת לפורום.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'יכול להשתמש ברוב מאפייני הפורום כולל צירוף קבצים, אבל הודעות ונושאים צריכים לקבל אישור על־ידי מנהל.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'כמו הרשאה רגילה אבל יכול גם ליצור סקרים.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'יכול לקרוא בפורום, אבל לא יכול ליצור נושאים חדשים או להגיב להודעות.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'יכול להשתמש ברוב מאפייני הפורום כולל צירוף קבצים ומחיקת הנושאים של עצמו, אבל לא יכול לנעול נושאים של עצמו, ולא יכול ליצור סקרים.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'כלל למשתמשים מהקבוצה המיוחדת משתמשים שנרשמו לאחרונה; מכיל הרשאות <strong>לעולם לא</strong> כדי לחסום אפשרויות ממשתמשים חדשים.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'יכול להשתמש בכל מאפייני הניהול, כולל חסימה.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'יכול להשתמש בחצי ניהול כדי לאשר ולערוך הודעות, אבל שום דבר אחר.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'יכול להשתמש בפעולות נושא בסיסיות בלבד. לא יכול לשלוח אזהרות או להשתמש בחצי ניהול.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'יכול להשתמש ברוב כלי הניהול, אבל לא יכול לחסום משתמשים או לשנות את כותב ההודעה.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'יכול להשתמש בכל מאפייני הפורום הזמינים למשתמשים, כולל שינוי שם המשתמש או התעלמות מהגבלת ההצפה.<br />לא מומלץ.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'יכול לגשת לכמה ממאפייני המשתמש. צירוף קבצים, שליחת הודעות דואר אלקטרוני, או הודעות מיידיות לא מורשים.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'בעל מאפיין מוגבל שנקבע ולא מורשה להשתמש במאפיין הסמלים האישיים.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'בעל מאפיין מוגבל שנקבע, ולא מורשה להשתמש בהודעות פרטיות.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'יכול לגשת לרוב אך לא לכל מאפייני המשתמש. לא יכול לשנות שם משתמש או להתעלם מהגבלת ההצפה, למשל.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'כלל למשתמשים מהקבוצה המיוחדת משתמשים שנרשמו לאחרונה; מכיל הרשאות <strong>לעולם לא</strong> כדי לחסום אפשרויות ממשתמשים חדשים.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'אתה יכול להזין תיאור קצר של מה הכלל עושה או מה הוא אומר. הטקסט שאתה מזין כאן יוצג גם במסכי ההרשאות.',
	'ROLE_DESCRIPTION_LONG'			=> 'תיאור הכלל אורך מדי, הגבל אותו ל־4000 תווים.',
	'ROLE_DETAILS'					=> 'פרטי הכלל',
	'ROLE_EDIT_SUCCESS'				=> 'הכלל נערך בהצלחה.',
	'ROLE_NAME'						=> 'שם הכלל',
	'ROLE_NAME_ALREADY_EXIST'		=> 'כלל הנקרא <strong>%s</strong> כבר קיים לסוג ההרשאה המצוין.',
	'ROLE_NOT_ASSIGNED'				=> 'כלל עדיין לא נקבע.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'הפורומים הנבחרים לא קיימים.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'הקבוצות הנבחרות לא קיימות.',
	'SELECTED_USER_NOT_EXIST'		=> 'המשתמשים הנבחרים לא קיימים.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'הפורום אשר אתה בוחר כולל את כל תתי־הפורומים שלו בבחירה.',
	'SELECT_ROLE'					=> 'בחר כלל…',
	'SELECT_TYPE'					=> 'בחר סוג',
	'SET_PERMISSIONS'				=> 'קבע הרשאות',
	'SET_ROLE_PERMISSIONS'			=> 'קבע הרשאות כלל',
	'SET_USERS_PERMISSIONS'			=> 'קבע הרשאות משתמש',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'קבע הרשאות פורום של משתמש',

	'TRACE_DEFAULT'					=> 'כברירת מחדל כל הרשאה היא <strong>לא</strong> (מבוטלת). ההרשאה יכולה להשתנות על־ידי הגדרות אחרות.',
	'TRACE_FOR'						=> 'אתר ל',
	'TRACE_GLOBAL_SETTING'			=> '%s (גלובלי)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'הרשאת הקבוצה נקבעה ל<strong>לעולם לא</strong> כמו התוצאה הכוללת כך שהתוצאה הקודמת נשמרה.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'הרשאת הקבוצה לפורום זה נקבעה ל<strong>לעולם לא</strong> כמו התוצאה הכוללת כך שהתוצאה הקודמת נשמרה.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'הרשאת הקבוצה נקבעה ל<strong>לעולם לא</strong> אשר הופכת לערך הכולל החדש מפני שהוא עדיין לא נקבע (נקבע ל<strong>לא</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'הרשאת הקבוצה לפורום זה נקבעה ל<strong>לעולם לא</strong> אשר הופכת לערך הכולל החדש מפני שהוא עדיין לא נקבע (נקבע ל<strong>לא</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'הרשאת הקבוצה נקבעה ל<strong>לעולם לא</strong> אשר משנה את הכוללת <strong>כן</strong> ל<strong>לעולם לא</strong> למשתמש זה.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'הרשאת הקבוצה לפורום זה נקבעה ל<strong>לעולם לא</strong> אשר משנה את הכוללת <strong>כן</strong> ל<strong>לעולם לא</strong> למשתמש זה.',
	'TRACE_GROUP_NO'				=> 'ההרשאה היא <strong>לא</strong> לקבוצה זו כך שהערך הכולל הקודם נשמר.',
	'TRACE_GROUP_NO_LOCAL'			=> 'ההרשאה היא <strong>לא</strong> לקבוצה זו בתוך פורום זה כך שהערך הכולל הקודם נשמר.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'הרשאת הקבוצה נקבעה ל<strong>כן</strong> אבל הכוללת <strong>לעולם לא</strong> לא ניתנת לשינוי.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'הרשאת הקבוצה לפורום זה נקבעה ל<strong>כן</strong> אבל הכוללת <strong>לעולם לא</strong> לא ניתנת לשינוי.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'הרשאת הקבוצה נקבעה ל<strong>כן</strong> אשר הופכת לערך הכולל החדש מפני שהוא עדיין לא נקבע (נקבע ל<strong>לא</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'הרשאת הקבוצה לפורום זה נקבעה ל<strong>כן</strong> אשר הופכת לערך הכולל החדש מפני שהוא עדיין לא נקבע (נקבע ל<strong>לא</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'הרשאת הקבוצה נקבעה ל<strong>כן</strong> וההרשאה הכוללת כבר נקבעה ל<strong>כן</strong>, כך שהתוצאה הכוללת נשמרה.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'הרשאת הקבוצה לפורום זה נקבעה ל<strong>כן</strong> וההרשאה הכוללת כבר נקבעה ל<strong>כן</strong>, כך שהתוצאה הכוללת נשמרה.',
	'TRACE_PERMISSION'				=> 'אתר הרשאה – %s',
	'TRACE_RESULT'					=> 'אתר תוצאה',
	'TRACE_SETTING'					=> 'אתר הגדרה',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'הרשאת המשתמש העצמאית של הפורום נקבעה ל<strong>כן</strong> אבל ההרשאה הכוללת כבר נקבעה ל<strong>כן</strong>, כך שהתוצאה הכוללת נשמרה. %sאתר הרשאה גלובלית%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'הרשאת המשתמש העצמאית של הפורום נקבעה ל<strong>כן</strong> אשר עוברת על התוצאה המקומית הנוכחית <strong>לעולם לא</strong>. %sאתר הרשאה גלובלית%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'הרשאת המשתמש העצמאית של הפורום נקבעה ל<strong>לעולם לא</strong> אשר לא משפיעה על ההרשאה המקומית. %sאתר הרשאה גלובלית%s',

	'TRACE_USER_FOUNDER'					=> 'המשתמש הנו מייסד, לכן תמיד הרשאות המנהל מוגדרות ל<strong>כן</strong>.',
	'TRACE_USER_KEPT'						=> 'הרשאת המשתמש היא <strong>לא</strong> כך שהערך הכולל הקודם נשמר.',
	'TRACE_USER_KEPT_LOCAL'					=> 'הרשאת המשתמש לפורום זה היא <strong>לא</strong> כך שהערך הכולל הקודם נשמר.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'הרשאת המשתמש נקבעה ל<strong>לעולם לא</strong> והערך הכולל נקבע ל<strong>לעולם לא</strong>, כך ששום דבר לא השתנה.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'הרשאת המשתמש לפורום זה נקבעה ל<strong>לעולם לא</strong> והערך הכולל נקבע ל<strong>לעולם לא</strong>, כך ששום דבר לא השתנה.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'הרשאת המשתמש נקבעה ל<strong>לעולם לא</strong> אשר הופכת לערך הכולל מפני שהוא נקבע ללא.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'הרשאת המשתמש לפורום זה נקבעה ל<strong>לעולם לא</strong> אשר הופכת לערך הכולל מפני שהוא נקבע ללא.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'הרשאת המשתמש נקבעה ל<strong>לעולם לא</strong> ומשנה את הקודמת <strong>כן</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'הרשאת המשתמש לפורום זה נקבעה ל<strong>לעולם לא</strong> ומשנה את הקודמת <strong>כן</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'הרשאת המשתמש היא <strong>לא</strong> והערך הכולל נקבע ללא כך שכברירת מחדל הוא <strong>לעולם לא</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'הרשאת המשתמש לפורום זה היא <strong>לא</strong> והערך הכולל נקבע ללא כך שכברירת מחדל הוא <strong>לעולם לא</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'הרשאת המשתמש נקבעה ל<strong>כן</strong> אבל הכוללת <strong>לעולם לא</strong> לא ניתנת לשינוי.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'הרשאת המשתמש לפורום זה נקבעה ל<strong>כן</strong> אבל הכוללת <strong>לעולם לא</strong> לא ניתנת לשינוי.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'הרשאת המשתמש נקבעה ל<strong>כן</strong> אשר הופכת לערך הכולל מפני שהוא נקבע ל<strong>לא</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'הרשאת המשתמש לפורום זה נקבעה ל<strong>כן</strong> אשר הופכת לערך הכולל מפני שהוא נקבע ל<strong>לא</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'הרשאת המשתמש נקבעה ל<strong>כן</strong> והערך הכולל נקבע ל<strong>כן</strong>, כך ששום דבר לא השתנה.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'הרשאת המשתמש לפורום זה נקבעה ל<strong>כן</strong> והערך הכולל נקבע ל<strong>כן</strong>, כך ששום דבר לא השתנה.',
	'TRACE_WHO'								=> 'מי',
	'TRACE_TOTAL'							=> 'סך הכל',

	'USERS_NOT_ASSIGNED'			=> 'אין משתמשים שנקבעו לכלל זה',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'הוא חבר בקבוצות המוגדרות מראש הבאות',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'הוא חבר בקבוצות המשתמש המוגדרות הבאות',

	'VIEW_ASSIGNED_ITEMS'	=> 'ראה פריטים שנקבעו',
	'VIEW_LOCAL_PERMS'		=> 'הרשאות מקומיות',
	'VIEW_GLOBAL_PERMS'		=> 'הרשאות גלובליות',
	'VIEW_PERMISSIONS'		=> 'ראה הרשאות',

	'WRONG_PERMISSION_TYPE'				=> 'סוג ההרשאה הנבחרת שגויה.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'הגדרת ההרשאות נכתבו בפורמט לא תקין, phpBB לא יכול לעבד אותם כראוי.',
));
