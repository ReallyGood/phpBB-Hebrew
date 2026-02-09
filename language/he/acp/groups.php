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
  'ACP_GROUPS_MANAGE_EXPLAIN' => 'בדף זה תוכל לערוך את כל קבוצות המשתמשים הקיימות בפורום שלך, אתה יכול למחוק, ליצור ולערוך קבוצות קיימות. בנוסף, אתה יכול לבחור ראש קבוצה, לשנות את מצב הקבוצה בין פתוח/מוסתר/סגור ולקבוע את שם ותיאור הקבוצה.',
  'ADD_GROUP_CATEGORY' => 'הוסף קטגוריה',
  'ADD_USERS' => 'הוסף משתמשים',
  'ADD_USERS_EXPLAIN' => 'כאן אתה יכול להוסיף משתמשים חדשים לקבוצה. אתה יכול לבחור אם קבוצה זו תהפוך לברירת המחדל החדשה של המשתמשים שיבחרו. בנוסף באפשרותך להפוך אותם לראשי קבוצה. אנא הכנס כל שם משתמש עם רווח בין שם לשם.',
  'COPY_PERMISSIONS' => 'העתק הרשאות מ',
  'COPY_PERMISSIONS_EXPLAIN' => 'כשהקבוצה תיווצר הרשאותיה יהיו כהרשאות של הקבוצה שבחרת כאן.',
  'CREATE_GROUP' => 'צור קבוצה חדשה',
  'GROUPS_NO_MEMBERS' => 'לקבוצה זו אין חברים',
  'GROUPS_NO_MODS' => 'לא נבחר ראש קבוצה',
  'GROUP_APPROVE' => 'אשר חבר',
  'GROUP_APPROVED' => 'חברים מאושרים',
  'GROUP_AVATAR' => 'הסמל האישי של הקבוצה',
  'GROUP_AVATAR_EXPLAIN' => 'תמונה זו תופיע בלוח הבקרה של ניהול הקבוצה.',
  'GROUP_CATEGORY_NAME' => 'שם הקטגוריה',
  'GROUP_CLOSED' => 'סגור',
  'GROUP_COLOR' => 'צבע הקבוצה',
  'GROUP_COLOR_EXPLAIN' => 'הגדר את צבע שמות המשתמש של חברי הקבוצה, השאר ריק להגדרות הרגילות.',
  'GROUP_CONFIRM_ADD_USERS' =>
  array (
    1 => 'האם אתה בטוח שברצונך להוסיף את המשתמש %2$s לקבוצה?',
    2 => 'האם אתה בטוח שברצונך להוסיף את המשתמשים %2$s לקבוצה?',
  ),
  'GROUP_CREATED' => 'הקבוצה נוצרה בהצלחה.',
  'GROUP_DEFAULT' => 'קבע קבוצה זו כברירת מחדל לחבר',
  'GROUP_DEFS_UPDATED' => 'קבוצת ברירת המחדל נקבעה לכל החברים שנבחרו.',
  'GROUP_DELETE' => 'הסר חבר מהקבוצה',
  'GROUP_DELETED' => 'הקבוצה נמחקה וקבוצות ברירת המחדל של המשתמשים נקבעו בהצלחה.',
  'GROUP_DEMOTE' => 'הורד מדרגת מנהל קבוצה',
  'GROUP_DESC' => 'תיאור הקבוצה',
  'GROUP_DETAILS' => 'פרטי הקבוצה',
  'GROUP_EDIT_EXPLAIN' => 'כאן ניתן לערוך קבוצה קיימת. ניתן לשנות את שמה, תיאורה וסוגה (פתוחה, סגורה וכו׳). כמו כן ניתן להגדיר אפשרויות כלליות לקבוצה כגון צבע, דרגה ועוד. שינויים שיבוצעו כאן יגברו על ההגדרות הנוכחיות של המשתמשים. שים לב שחברי הקבוצה יכולים לעקוף הגדרות של סמל הקבוצה, אלא אם הוגדרו הרשאות משתמש מתאימות.',
  'GROUP_ERR_USERS_EXIST' => 'המשתמשים שצוינו כבר חברים בקבוצה זו.',
  'GROUP_FOUNDER_MANAGE' => 'ניהול על־ידי מייסדים בלבד',
  'GROUP_FOUNDER_MANAGE_EXPLAIN' => 'הגבל את ניהול הקבוצה למייסדים בלבד. משתמשים בעלי הרשאות קבוצה עדיין יוכלו לראות את הקבוצה ואת חבריה.',
  'GROUP_HIDDEN' => 'מוסתרת',
  'GROUP_LANG' => 'שפת הקבוצה',
  'GROUP_LEAD' => 'ראשי קבוצה',
  'GROUP_LEADERS_ADDED' => 'ראשי קבוצה חדשים נוספו בהצלחה.',
  'GROUP_LEGEND' => 'הצג קבוצה במקרא',
  'GROUP_LIST' => 'חברים נוכחיים',
  'GROUP_LIST_EXPLAIN' => 'זוהי רשימה מלאה של כל המשתמשים החברים בקבוצה זו. ניתן להסיר חברים (למעט בקבוצות מיוחדות מסוימות) או להוסיף חדשים לפי הצורך.',
  'GROUP_MEMBERS' => 'חברי הקבוצה',
  'GROUP_MEMBERS_EXPLAIN' => 'זוהי רשימה מלאה של כל חברי קבוצת המשתמשים. היא כוללת אזורים נפרדים לראשי קבוצה, ממתינים וחברים קיימים. מכאן ניתן לנהל את כל היבטי החברות בקבוצה ואת תפקידיהם. כדי להסיר ראש קבוצה אך להשאירו כחבר, השתמש ב״הורדה מדרגה״ במקום מחיקה. באופן דומה, השתמש ב״קידום״ כדי להפוך חבר קיים לראש קבוצה.',
  'GROUP_MESSAGE_LIMIT' => 'מגבלת הודעות פרטיות לקבוצה לכל תיקייה',
  'GROUP_MESSAGE_LIMIT_EXPLAIN' => 'הגדרה זו גוברת על מגבלת ההודעות לכל תיקייה ברמת המשתמש. הערך המרבי מבין כל קבוצות המשתמש קובע את הערך בפועל.<br />קבע ערך 0 כדי להחיל את הגדרת המערכת הכללית על כל משתמשי הקבוצה.',
  'GROUP_MODS_ADDED' => 'ראשי קבוצה חדשים נוספו בהצלחה.',
  'GROUP_MODS_DEMOTED' => 'ראשי קבוצה הורדו מדרגה בהצלחה.',
  'GROUP_MODS_PROMOTED' => 'חברי קבוצה קודמו בהצלחה.',
  'GROUP_NAME' => 'שם הקבוצה',
  'GROUP_NAME_TAKEN' => 'שם הקבוצה שהזנת כבר נמצא בשימוש, אנא בחר שם אחר.',
  'GROUP_OPEN' => 'פתוחה',
  'GROUP_PENDING' => 'חברים ממתינים',
  'GROUP_MAX_RECIPIENTS' => 'מספר נמענים מרבי מותר לכל הודעה פרטית',
  'GROUP_MAX_RECIPIENTS_EXPLAIN' => 'מספר הנמענים המרבי המותר בהודעה פרטית. הערך המרבי מבין כל קבוצות המשתמש קובע את הערך בפועל.<br />קבע ערך 0 כדי להחיל את הגדרת המערכת הכללית על כל משתמשי הקבוצה.',
  'GROUP_OPTIONS_SAVE' => 'אפשרויות כלליות לקבוצה',
  'GROUP_PROMOTE' => 'קדם לראש קבוצה',
  'GROUP_RANK' => 'דרגת הקבוצה',
  'GROUP_RECEIVE_PM' => 'הקבוצה יכולה לקבל הודעות פרטיות',
  'GROUP_RECEIVE_PM_EXPLAIN' => 'שים לב שקבוצות מוסתרות אינן יכולות לקבל הודעות, ללא קשר להגדרה זו.',
  'GROUP_REQUEST' => 'בקשה',
  'GROUP_SETTINGS_SAVE' => 'הגדרות כלליות לקבוצה',
  'GROUP_SKIP_AUTH' => 'פטור ראש קבוצה מהרשאות',
  'GROUP_SKIP_AUTH_EXPLAIN' => 'אם מופעל, ראש הקבוצה לא יירש עוד הרשאות מהקבוצה.',
  'GROUP_SPECIAL' => 'מוגדרת מראש',
  'GROUP_TEAMPAGE' => 'הצג קבוצה בדף הצוות',
  'GROUP_TYPE' => 'סוג הקבוצה',
  'GROUP_TYPE_EXPLAIN' => 'קובע אילו משתמשים יכולים להצטרף לקבוצה זו או לצפות בה.',
  'GROUP_UPDATED' => 'העדפות הקבוצה עודכנו בהצלחה.',
  'GROUP_USERS_ADDED' => 'משתמשים חדשים נוספו לקבוצה בהצלחה.',
  'GROUP_USERS_EXIST' => 'המשתמשים שנבחרו כבר חברים בקבוצה.',
  'GROUP_USERS_REMOVE' => 'Users removed from group and new defaults set successfully.',
  'GROUP_USERS_INVALID' => 'לא נוספו משתמשים לקבוצה משום שהמשתמשים הבאים אינם קיימים: %s',
  'LEGEND_EXPLAIN' => 'אלו הקבוצות המוצגות במקרא הקבוצות:',
  'LEGEND_SETTINGS' => 'הגדרות מקרא',
  'LEGEND_SORT_GROUPNAME' => 'מיין מקרא לפי שם הקבוצה',
  'LEGEND_SORT_GROUPNAME_EXPLAIN' => 'כאשר אפשרות זו פעילה, הסדר שלהלן אינו נלקח בחשבון.',
  'MANAGE_LEGEND' => 'נהל את מקרא הקבוצות',
  'MANAGE_TEAMPAGE' => 'נהל את דף הצוות',
  'MAKE_DEFAULT_FOR_ALL' => 'קבע כקבוצת ברירת מחדל לכל החברים',
  'MEMBERS' => 'חברים',
  'NO_GROUP' => 'לא צוינה קבוצה.',
  'NO_GROUPS_ADDED' => 'טרם נוספו קבוצות.',
  'NO_GROUPS_CREATED' => 'טרם נוצרו קבוצות.',
  'NO_PERMISSIONS' => 'אל תעתיק הרשאות',
  'NO_USERS' => 'לא הזנת משתמשים.',
  'NO_USERS_ADDED' => 'לא נוספו משתמשים לקבוצה.',
  'NO_VALID_USERS' => 'לא הזנת משתמשים המתאימים לפעולה זו.',
  'PENDING_MEMBERS' => 'ממתינים',
  'SELECT_GROUP' => 'בחר קבוצה',
  'SPECIAL_GROUPS' => 'קבוצות מוגדרות מראש',
  'SPECIAL_GROUPS_EXPLAIN' => 'קבוצות מוגדרות מראש הן קבוצות מיוחדות, לא ניתן למחוק או לשנות אותן ישירות. עם זאת, ניתן להוסיף משתמשים ולשנות הגדרות בסיסיות.',
  'TEAMPAGE' => 'דף הצוות',
  'TEAMPAGE_DISP_ALL' => 'כל החברויות',
  'TEAMPAGE_DISP_DEFAULT' => 'קבוצת ברירת המחדל של המשתמש בלבד',
  'TEAMPAGE_DISP_FIRST' => 'החברות הראשונה בלבד',
  'TEAMPAGE_EXPLAIN' => 'אלו הקבוצות המוצגות בדף הצוות:',
  'TEAMPAGE_FORUMS' => 'הצג פורומים מנוהלים',
  'TEAMPAGE_FORUMS_EXPLAIN' => 'אם מוגדר ככן, למנהלים יוצג רשימת כל הפורומים שבהם יש להם הרשאות ניהול. פעולה זו עשויה להיות כבדה מאוד על מסד הנתונים בפורומים גדולים.',
  'TEAMPAGE_MEMBERSHIPS' => 'הצג חברויות משתמשים',
  'TEAMPAGE_SETTINGS' => 'הגדרות דף הצוות',
  'TOTAL_MEMBERS' => 'חברים',
  'USERS_APPROVED' => 'המשתמשים אושרו בהצלחה.',
  'USER_DEFAULT' => 'ברירת מחדל למשתמש',
  'USER_DEF_GROUPS' => 'קבוצות שהוגדרו על־ידי משתמשים',
  'USER_DEF_GROUPS_EXPLAIN' => 'אלו קבוצות שנוצרו על־ידך או על־ידי מנהל אחר במערכת. ניתן לנהל את החברויות, לערוך את מאפייני הקבוצה ואף למחוק אותה.',
  'USER_GROUP_DEFAULT' => 'קבע כקבוצת ברירת מחדל',
  'USER_GROUP_DEFAULT_EXPLAIN' => 'בחירה ב״כן״ תקבע קבוצה זו כקבוצת ברירת המחדל עבור המשתמשים שנוספו.',
  'USER_GROUP_LEADER' => 'קבע כראש קבוצה',
));
