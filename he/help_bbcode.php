<?php
/** 
*
* help_bbcode [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'מבוא'
	),
	array(
		0 => 'מה זה BBCode?',
		1 => 'BBCode הוא גרסה מיוחדת של HTML. למעשה אתה יכול להשתמש ב־BBCode בהודעות שלך בפורום לפי קביעת המנהל הראשי. בנוסף אתה יכול לכבות את BBCode בכל הודעה דרך טופס השליחה. BBCode עצמו דומה בסגנון ל־HTML, התגים תחומים בסוגריים מרובעים [ ו־] במקום &lt; ו־&gt; והוא מציע שליטה גבוהה יותר מעבר למה ואיך משהו מוצג. תלוי בערכה בה אתה משתמש, הוספת BBCode להודעות שלך אפילו פשוט יותר בעזרת ממשק לחיצה הנמצא מעל אזור טופס השליחה. יחד עם זאת תוכל למצוא את המדריך הבא כשימושי.'
	),
	array(
		0 => '--',
		1 => 'עיצוב טקסט'
	),
	array(
		0 => 'כיצד ליצור טקסט מודגש, נטוי ובעל קו תחתי',
		1 => 'BBCode כולל תגים המאפשרים לך לשנות את הסגנון הבסיסי של הטקסט במהירות. תוכל לבצע זאת בדרכים הבאות: <ul><li>על מנת להדגיש טקסט השתמש בתגים <strong>[b][/b]</strong>, למשל <br /><br /><strong>[b]</strong>שלום<strong>[/b]</strong><br /><br />יציג <strong>שלום</strong></li><li>לטקסט בעל קו תחתי השתמש בתגים <strong>[u][/u]</strong>, למשל:<br /><br /><strong>[u]</strong>בוקר טוב<strong>[/u]</strong><br /><br />יציג <span style="text-decoration: underline">בוקר טוב</span></li><li>לטקסט נטוי השתמש בתגים <strong>[i][/i]</strong>, למשל<br /><br />זה <strong>[i]</strong>נהדר!<strong>[/i]</strong><br /><br />יציג זה <i>נהדר!</i></li></ul>'
	),
	array(
		0 => 'כיצד לשנות צבע או גודל טקסט',
		1 => 'כדי לשנות את הצבע או הגודל של הטקסט ניתן להשתמש בתגים הבאים. שים לב שאופן הצגת בפלט תלוי בדפדפן ומערכת המשתמשים: <ul><li>שינוי צבע הטקסט מתבצע באמצעות התגים <strong>[color=][/color]</strong>. תוכל לציין שם צבע רגיל (למשל red לאדום, blue לכחול, yellow לצהוב, וכד\') או בתחליף הקוד ההקסדצימלי, למשל #FFFFFF, #000000. לדוגמה, כדי ליצור טקסט אדום תוכל להשתמש:<br /><br /><strong>[color=red]</strong>שלום!<strong>[/color]</strong><br /><br />או<br /><br /><strong>[color=#FF0000]</strong>שלום!<strong>[/color]</strong><br /><br />שניהם יציגו את הפלט <span style="color:red">שלום!</span></li><li>שינוי גודל הטקסט מתבצע בדרך דומה בעזרת <strong>[size=][/size]</strong>. תג זה תלוי בערכה בה המשתמש בחר אך התבנית המומלצת עם ערך מספרי המייצג את גודל הטקסט באחוזים, החל מ־20 (קטן מאוד) ועד ל־200 (גדול מאוד) כברירת מחדל. לדוגמה:<br /><br /><strong>[size=30]</strong>קטן<strong>[/size]</strong><br /><br />יציג <span style="font-size:30%;">קטן</span><br /><br />ואלו:<br /><br /><strong>[size=200]</strong>ענק!<strong>[/size]</strong><br /><br />יציג <span style="font-size:200%;">ענק!</span></li></ul>'
	),
	array(
		0 => 'האם אני יכול לשלב תגי עיצוב?',
		1 => 'כן, כמובן שאתה יכול, לדוגמה כדי למשך תשומת לב תוכל לכתוב:<br /><br /><strong>[size=200][color=red][b]</strong>הסתכלו עלי!<strong>[/b][/color][/size]</strong><br /><br />אשר יציג <span style="color:red;font-size:200%;"><strong>הסתכלו עלי!</strong></span><br /><br />אינינו ממליצים להציג הרבה טקסט אשר נראה כך! זכור שזו האחריות שלך, השולח, לוודא שהתגים נסגרים כראוי. למשל הצורה הבאה שגויה:<br /><br /><strong>[b][u]</strong>זה שגוי<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'ציטוט והצגת טקסט ברוחב מתוקן'
	),
	array(
		0 => 'ציטוט טקסט בתגובות',
		1 => 'ישנן שני דרכים בהן תוכל לצטט טקסט, עם אזכור או בלי.<ul><li>כאשר אתה משתמש באפשרות הציטוט כדי להגיב להודעה במערכת אתה צריך להשים לב שתוכן ההודעה נוסף לחלון ההודעה תחום בתגים <strong>[quote=&quot;&quot;][/quote]</strong>. שיטה זו מאפשרת לך לצטט עם אזכור לאדם או לכל דבר אחר אשר אתה בוחר להכניס! לדוגמה כדי לצטט טקסט אשר מר בלובי כתב אתה צריך להזין:<br /><br /><strong>[quote=&quot;מר בלובי&quot;]</strong>הטקסט שמר בלובי קטן יהיה כאן<strong>[/quote]</strong><br /><br />בתוצאה הפלט יוסיף אוטומטית &quot;מר בלובי כתב:&quot; לפני הטקסט עצמו. זכור שאתה <strong>חייב</strong> לכלול את גרשי הציטוט &quot;&quot; סביב השם אותו אתה מצטט, הם אינם רשות.</li><li>השיטה השנייה מאפשרת לך לצטט משהו באופן עיוור. כדי להשתמש בשיטה זו תחום את הטקסט בתגים <strong>[quote][/quote]</strong>. כאשר אתה צופה בהודעה אתה פשוט תראה את הטקסט בחלון ציטוט.</li></ul>'
	),
	array(
		0 => 'ציטוט קוד או נתונים בעלי רוחב מתוקן',
		1 => 'אם אתה רוצה להציג חלק מקוד או אפילו כל דבר הדורש רוחב מתוקן, למשל גופן מסוג Courier אתה צריך לתחום את הטקסט בתגים <strong>[code][/code]</strong>, למשל<br /><br /><strong>[code]</strong>echo &quot;זהו קוד&quot;;<strong>[/code]</strong><br /><br />כל הסגנונות אשר בשימוש בתוך התגים <strong>[code][/code]</strong> נשמרות אשר אתה צופה בהן מאוחר יותר. ניתן להפעיל הדגשת תחביר PHP בעזרת <strong>[code=php][/code]</strong> ומומלץ לעשות זאת בעד שליחת קוד PHP כדי לשפר את איכות הקריאה.'
	),
	array(
		0 => '--',
		1 => 'יצירת רשימות'
	),
	array(
		0 => 'יצירת רשימה לא מסודרת',
		1 => 'BBCode תומך בשני סוגים של רשימות, לא מסודרות ומסודרות. הם ביסודם זהים לשווה ערכם ב־HTML. רשימה לא מסודרת מציגה כל רכיב ברשימה שלך ברציפות אחד אחרי השני יחד עם תו תבליט. כדי ליצור רשימה לא מסודרת השתמש ב־<strong>[list][/list]</strong> והגדר כל פריט ברשימה עם <strong>[*]</strong>. לדוגמה, כדי ליצור את רשימת הצבעים האהובים עליך הזן:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>אדום<br /><strong>[*]</strong>כחול<br /><strong>[*]</strong>צהוב<br /><strong>[/list]</strong><br /><br />הקוד יצור את הרשימה הבאה:<ul><li>אדום</li><li>כחול</li><li>צהוב</li></ul>'
	),
	array(
		0 => 'יצירת רשימה מסודרת',
		1 => 'הסוג השני של רשימה, רשימה מסודרת, מאפשר לך לבחור מה יוצג לפני כל פריט ברשימה. כדי ליצור רשימה מסודרת השתמש ב־<strong>[list=1][/list]</strong> כדי ליצור רשימה ממוספרת או לחלופין השתמש ב־<strong>[list=a][/list]</strong> לרשימה המסודרת לפי אותיות לועזיות. כמו ברשימה לא מסודרת, הרכיבים מצוינים עם <strong>[*]</strong>. לדוגמה:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>לך לחנות<br /><strong>[*]</strong>קנה מחשב חדש<br /><strong>[*]</strong>קלל את המחשב כאשר הוא קורס<br /><strong>[/list]</strong><br /><br />יצור את הרשימה הבאה:<ol style="list-style-type: decimal;"><li>לך לחנות</li><li>קנה מחשב חדש</li><li>קלל את המחשב כאשר הוא קורס</li></ol>ואלו לרשימה המסודרת לפי אותיות לועזיות תוכל להשתמש ב:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>התשובה האפשרית הראשונה<br /><strong>[*]</strong>התשובה האפשרית השנייה<br /><strong>[*]</strong>התשובה האפשרית השלישית<br /><strong>[/list]</strong><br /><br />אשר יציג<ol style="list-style-type: lower-alpha"><li>התשובה האפשרית הראשונה</li><li>התשובה האפשרית השנייה</li><li>התשובה האפשרית השלישית</li></ol>'
	),
		// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'יצירת קישורים'
	),
	array(
		0 => 'קישור לאתר אחר',
		1 => 'phpBB BBCode תומך במספר דרכים ליצירת קישורים.<ul><li>האפשרות הראשונה משתמשת בתגים <strong>[url=][/url]</strong>, מה שאתה מזין לאחר הסימן = ישמש בתור הכתובת. לדוגמה כדי לקשר לאתר phpBB.co.il תוכל להשתמש:<br /><br /><strong>[url=http://www.phpbb.co.il/]</strong>בקר ב־phpBB!<strong>[/url]</strong><br /><br />הקוד יצור את הקישור הבא, <a href="http://www.phpbb.co.il/">בקר ב־phpBB!</a> שים לב שהחלון יפתח באותו חלון או בחלון חדש לפי העדפות דפדפן המשתמש.</li><li>אם אתה רוצה שהכתובת עצמה תוצג כקישור תוכל לעשות זאת כך:<br /><br /><strong>[url]</strong>http://www.phpbb.co.il/<strong>[/url]</strong><br /><br />הקוד יצור את הקישור הבא, <a href="http://www.phpbb.co.il/">http://www.phpbb.co.il/</a></li><li>בנוסף phpBB מאופיינית במשהו הנקרא <i>קישורי קסם</i>, אשר יהפוך כל כתובת בעלת תחביר נכון לקישור ללא הצורך לציין אף תג או אפילו את http:// המוביל. לדוגמה הקלדת www.phpbb.co.il בהודעה שלך יהפוך אוטומטית אל <a href="http://www.phpbb.co.il/">www.phpbb.co.il</a> כאשר אתה צופה בהודעה.</li><li>אותו הדבר מתייחס במידה שווה לכתובות דואר אלקטרוני, אתה יכול לציין כתובת מפורשות למשל:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />יציג <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> או שאתה פשוט יכול להקליד no.one@domain.adr בהודעה שלך והכתובת תומר אוטומטית כאשר תצפה בה.</li></ul>יחד עם כל תגי ה־BBCode תוכל לתחום כתובות סביב כל אחד מהתגים האחרים כמו <strong>[img][/img]</strong> (ראה רישום הבא), <strong>[b][/b]</strong>, וכד\'. כמו בתגי העיצוב אתה חייב לוודא שסדר הפתיחה והסגירה של התגים נכון, למשל:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">אינו</span> נכון וכך תוכל לגרום להודעה שלך להימחק.'
	),
	array(
		0 => '--',
		1 => 'הצגת תמונות בהודעות'
	),
	array(
		0 => 'הוספת תמונה להודעה',
		1 => 'phpBB BBCode כולל תג להוספת תמונות להודעות. אתה חייב לזכור שני דברים חשובים בזמן השימוש בתג. הרבה משתמשים לא אוהבים תמונות רבות המוצגות בהודעות והדבר השני הוא שהתמונה חייבת להיות זמינה ברשת (היא לא יכול להיות על המחשב שלך למשל, אלא אם כן אתה מריץ שרת!). כדי להציג תמונה אתה חייב לתחום את הכתובת המצביע לתמונה עם התגים <strong>[img][/img]</strong>. לדוגמה:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />כפי שצוין בחלק הכתובות מעל אתה יכול לתחום תמונה בתגים <strong>[url][/url]</strong> אם אתה רוצה, למשל<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />יצור:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'הוספת קבצים מצורפים להודעה',
		1 => 'ניתן להכניס כעת קבצים מצורפים בכל מקום בהודעה בעזרת תגי ה־BBCode <strong>[attachment=][/attachment]</strong>, אם אפשרות צירוף הקבצים פעילה על־ידי המנהל הראשי של המערכת ואם יש לך את הגישות המתאימות לצירוף קבצים. בתוך מסך השליחה ישנה תיבת רשימה נגללת (בהתאמה לכפתור) להוספת קבצים מצורפים בתוך השורה.'
	),
	array(
		0 => '--',
		1 => 'עניינים אחרים'
	),
	array(
		0 => 'האם אני יכול להוסיף תגים משלי?',
		1 => 'אם אתה מנהל ראשי במערכת זו ובעל הגישות המתאימות, אתה יכול להוסיף תגי BBCode נוספים דרך החלק תגי BBCode מותאמים אישית.'
	)
);

?>