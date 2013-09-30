<?php
/** 
* acp_permissions (phpBB Permission Set) [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'פעולות',
		'content'		=> 'תוכן',
		'forums'		=> 'פורומים',
		'misc'			=> 'שונות',
		'permissions'	=> 'הרשאות',
		'pm'			=> 'הודעות פרטיות',
		'polls'			=> 'סקרים',
		'post'			=> 'הודעה',
		'post_actions'	=> 'פעולות הודעה',
		'posting'		=> 'פרסום',
		'profile'		=> 'פרופיל',
		'settings'		=> 'הגדרות',
		'topic_actions'	=> 'פעולות נושא',
		'user_group'	=> 'משתמשים וקבוצות',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'הרשאות משתמש',
		'a_'			=> 'הרשאות מנהל ראשי',
		'm_'			=> 'הרשאות מנהל',
		'f_'			=> 'הרשאות פורום',
		'global'		=> array(
			'm_'			=> 'הרשאות מנהל גלובלי',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'רשאי לצפות בפרופילים, רשימת המשתמשים, ורשימת המחוברים', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'רשאי לשנות שם משתמש', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'רשאי לשנות ססמה', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'רשאי לשנות את כתובת הדואר האלקטרוני', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'רשאי לשנות את תמונת התצוגה', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'רשאי לשנות את קבוצת ברירת המחדל', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'רשאי לצרף קבצים', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'רשאי להוריד קבצים', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'רשאי לשמור טיוטות', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'רשאי לנטרל מילים מצונזרות', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'רשאי להשתמש בחתימה', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'רשאי לשלוח הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'רשאי לשלוח הודעות לכמה משתמשים', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'רשאי לשלוח הודעות לקבוצות', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'רשאי לקרוא הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'רשאי לערוך הודעות פרטיות עצמיות', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'רשאי למחוק הודעות פרטיות מהתיקייה האישית', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'רשאי להעביר הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'רשאי לשלוח בדואר אלקטרוני הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'רשאי להדפיס הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'רשאי לצרף קבצים בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'רשאי להוריד קבצים בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'רשאי להשתמש בBBcode בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'רשאי להשתמש בסמיילים בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'רשאי להשתמש בתג [img] בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'רשאי להשתמש בתג [flash] בהודעות פרטיות', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'רשאי לשלוח דואר אלקטרוני', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'רשאי לשלוח הודעות פרטיות', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'רשאי להתעלם מהגבלת ההצפה', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'רשאי להסתיר מצב מחובר', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'רשאי לראות משתמשים מוסתרים מחוברים', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'רשאי לחפש בפורום', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'רשאי לראות פורום', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'רשאי לקרוא בפורום', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'רשאי להוסיף נושא חדש', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'רשאי להגיב לנושאים', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'רשאי להשתמש באייקונים', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'רשאי לכתוב הכרזות', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'רשאי לכתוב הודעות דביקות', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'רשאי ליצור סקרים', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'רשאי להצביע לסקרים', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'רשאי לשנות את ההצבעה', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'רשאי לצרף קבצים', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'רשאי להוריד קבצים', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'רשאי להשתמש בחתימה', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'רשאי להשתמש בBBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'רשאי להשתמש בסמיילים', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'רשאי להשתמש בתג [img]', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'רשאי להשתמש בתג [flash] ', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'רשאי לערוך את הודעותיו', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'רשאי למחוק את הודעותיו', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'רשאי לנעול נושאים שפתח', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'רשאי להקפיץ נושאים', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'רשאי לדווח על הודעות', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'רשאי להירשם לפורום', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'רשאי להדפיס נושא', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'רשאי לשלוח בדואר אלקטרוני נושאים', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'רשאי לחפש בפורום', 'cat' => 'misc'),
	'acl_f_ignoreflood'	=> array('lang' => 'רשאי לבטל הגבלת הצפה', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'ספירת הודעות במונה ההודעות<br /><em>שים לב כי הגדרה זו תחול רק על הודעות חדשות.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'רשאי לכתוב הודעה ללא אישור', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'רשאי לערוך הודעות', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'רשאי למחוק הודעות', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'רשאי לאשר הודעות', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'רשאי לסגור ולמחוק דיווחים', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'רשאי לשנות את מחבר ההודעה', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'רשאי להעביר נושאים', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'רשאי לנעול נושאים', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'רשאי לפצל נושאים', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'רשאי למזג נושאים', 'cat' => 'topic_actions'),

'acl_m_info'	=> array('lang' => 'רשאי לראות פרטי הודעה', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'רשאי להזהיר<br /><em>הגדרה זו נקבעת באופן גלובלי בלבד. היא אינה שייכת לפורום מסוים.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'רשאי לנהל חסימות<br /><em>הגדרה זו נקבעת באופן גלובלי בלבד. היא אינה שייכת לפורום מסוים.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'רשאי לשנות הגדרות מערכת/לבדוק עבור עדכונים', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'רשאי לשנות שרת/הגדרות תקשורת', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'רשאי לשנות הגדרות Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'רשאי לראות הגדרות PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'רשאי לנהל פורומים', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'רשאי להוסיף פורומים חדשים', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'רשאי למחוק פורומים', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'רשאי לאפס פורומים', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'רשאי לשנות סמיילים ואייקונים לנושא/הודעה', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'רשאי לשנות צנזורים', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'רשאי להגדיר תגי BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'רשאי לשנות הגדרות קובץ מצורף', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'רשאי לנהל משתמשים<br /><em>הגדרה זו כוללת גם צפייה בדפדפן המשתמשים בתוך רשימת המשתמשים המחוברים.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'רשאי למחוק/לאפס משתמשים', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'רשאי לנהל קבוצות', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'רשאי להוסיף קבוצות חדשות', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'רשאי למחוק קבוצות', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'רשאי לנהל דרגות', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'רשאי לנהל שדות מותאמים אישית בפרופיל', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'רשאי לנהל שמות משתמש לא מורשים', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'רשאי לנהל חסימות', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'רשאי לראות הרשאות מוסתרות', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'רשאי לשנות הרשאות לקבוצות מסוימות', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'רשאי לשנות הרשאות למשתמשים מסוימים', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'רשאי לשנות הרשאות מחלקה לפורום', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'רשאי לשנות הרשאות מחלקה למנהלים', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'רשאי לשנות הרשאות מחלקה למנהל הראשי', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'רשאי לשנות הרשאות מחלקה למשתמש', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'רשאי לנהל כללים', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'רשאי להשתמש בהרשאות אחרות', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'רשאי לנהל עיצובים', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'רשאי לראות מעקב פעולות', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'רשאי למחוק מעקב פעולות', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'רשאי לנהל מודולים', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'רשאי לנהל חבילות שפה', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'רשאי לשלוח כמות גדולה של דואר אלקטרוני', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'רשאי לנהל רובוטים', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'רשאי לנהל סיבות דיווח/חסימה', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'רשאי לגבות/לשחזר בסיס נתונים', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'רשאי לנהל חיפוש מאגר נתונים והגדרות', 'cat' => 'misc'),
));

?>