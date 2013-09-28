<?php
/**
*
* viewtopic [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ATTACHMENT'						=> 'קובץ מצורף',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'האפשרות לצירוף קבצים בוטלה.',

	'BOOKMARK_ADDED'		=> 'הנושא נוסף למועדפים בהצלחה.',
	'BOOKMARK_ERR'			=> 'הוספת הנושא למועדפים נכשלה. אנא נסה שנית.',
	'BOOKMARK_REMOVED'		=> 'הנושא הוסר מהמועדפים בהצלחה.',
	'BOOKMARK_TOPIC'		=> 'הוסף למועדפים',
	'BOOKMARK_TOPIC_REMOVE'	=> 'הסר ממועדפים',
	'BUMPED_BY'			=> 'הוקפץ לאחרונה על ידי %1$s בתאריך %2$s.',
	'BUMP_TOPIC'			=> 'הקפץ נושא',

	'CODE'					=> 'קוד',
	'COLLAPSE_QR'			=> 'הסתר תגובה מהירה',

	'DELETE_TOPIC'			=> 'מחק נושא',
	'DOWNLOAD_NOTICE'		=> 'אין לך את ההרשאות המתאימות על מנת לצפות בקובץ המצורף להודעה זאת.',

	'EDITED_TIMES_TOTAL'	=> 'נערך לאחרונה על ידי %1$s בתאריך %2$s, נערך %3$d פעמים בסך הכל.',
	'EDITED_TIME_TOTAL'		=> 'נערך לאחרונה על ידי %1$s בתאריך %2$s, נערך פעם אחת בסך הכל.', // phpBBHeb Group:: In original english there was ' %3$d', but in hebrew we don't really need to count one time with a number, just say "edited one time" and that`s it.
	'EMAIL_TOPIC'			=> 'שלח דואר אלקטרוני לחבר',
	'ERROR_NO_ATTACHMENT'	=> 'הקובץ המצורף שנבחר לא קיים יותר.',

	'FILE_NOT_FOUND_404'	=> 'הקובץ <strong>%s</strong> לא קיים.',
	'FORK_TOPIC'			=> 'העתק נושא',
	'FULL_EDITOR'	=> 'עורך מלא',

	'LINKAGE_FORBIDDEN'		=> 'אינך מורשה לצפות, להוריד או לתת קישור ל/מאתר זה.',
	'LOGIN_NOTIFY_TOPIC'	=> 'קיבלת הודעה על נושא זה, אנא התחבר על מנת לצפות בו.',
	'LOGIN_VIEWTOPIC'		=> 'המערכת דורשת ממך להיות רשום ומחובר כדי לצפות בנושא הזה.',

	'MAKE_ANNOUNCE'				=> 'הפוך להכרזה',
	'MAKE_GLOBAL'				=> 'הפוך לגלובלי',
	'MAKE_NORMAL'				=> 'הפוך לרגיל',
	'MAKE_STICKY'				=> 'הפוך לדביק',
	'MAX_OPTIONS_SELECT'		=> 'אתה יכול לבחור עד <strong>%d</strong> אפשרויות',
	'MAX_OPTION_SELECT'			=> 'אתה יכול לבחור רק אפשרות <strong>אחת</strong>',
	'MISSING_INLINE_ATTACHMENT'	=> 'הקובץ המצורף <strong>%s</strong> לא זמין יותר.',
	'MOVE_TOPIC'				=> 'העבר נושא',

	'NO_ATTACHMENT_SELECTED'=> 'לא בחרת קובץ מצורף להוריד או לצפייה.',
	'NO_NEWER_TOPICS'		=> 'אין נושאים חדשים יותר בפורום זה.',
	'NO_OLDER_TOPICS'		=> 'אין נושאים ישנים יותר בפורום זה.',
	'NO_UNREAD_POSTS'		=> 'אין הודעות שלא נקראו בנושא הזה.',
	'NO_VOTE_OPTION'		=> 'אתה מוכרח לבחור אפשרות להצבעה.',
	'NO_VOTES'				=> 'אין הצבעות',

	'POLL_ENDED_AT'			=> 'הסקר נגמר בתאריך %s',
	'POLL_RUN_TILL'			=> 'הסקר פעיל עד %s',
	'POLL_VOTED_OPTION'		=> 'הצבעת לאפשרות זאת',
	'PRINT_TOPIC'			=> 'גרסה להדפסה',

	'QUICK_MOD'				=> 'כלים מהירים',
	'QUICKREPLY'			=> 'תגובה מהירה',
	'QUOTE'					=> 'ציטוט',

	'REPLY_TO_TOPIC'		=> 'הגב לנושא',
	'RETURN_POST'			=> '%sחזור להודעה%s',

	'SHOW_QR'				=> 'תגובה מהירה',
	'SUBMIT_VOTE'			=> 'שלח הצבעתך',

	'TOTAL_VOTES'			=> 'סך הכול הצבעות',

	'UNLOCK_TOPIC'			=> 'פתח נושא',

	'VIEW_INFO'				=> 'פרטי ההודעה',
	'VIEW_NEXT_TOPIC'		=> 'הנושא הבא',
	'VIEW_PREVIOUS_TOPIC'	=> 'הנושא הקודם',
	'VIEW_RESULTS'			=> 'צפייה בתוצאות',
	'VIEW_TOPIC_POST'		=> 'הודעה אחת',
	'VIEW_TOPIC_POSTS'		=> '%d הודעות',
	'VIEW_UNREAD_POST'		=> 'הודעה ראשונה שלא נקראה',
	'VISIT_WEBSITE'			=> 'אתר',
	'VOTE_SUBMITTED'		=> 'הצבעתך נקלטה.',
	'VOTE_CONVERTED'		=> 'שינוי הצבעות לא נתמך בסקרים שהומרו.',
));

?>
