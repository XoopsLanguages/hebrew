<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','הרשאות');
define('_MD_A_MYMENU_MYPREFERENCES','העדפות');
// index.php
define('_AM_TH_DATETIME', 'זמן');
define('_AM_TH_USER', 'משתמש');
define('_AM_TH_IP', 'IP');
define('_AM_TH_סוכן', 'AGENT');
define('_AM_TH_TYPE', 'סוג');
define('_AM_TH_DESCRIPTION', 'תיאור');
define('_AM_TH_BADIPS','IPs גרוע<br><br><span style="font-weight:normal;">כתוב כל IP שורה<br>ריק פירושו שכל כתובות ה-IP מותרות</span>');
define('_AM_TH_GROUP1IPS','כתובות IP מותרות לקבוצה=1<br><br><span style="font-weight:normal;">כתוב כל IP שורה.<br>192.168. פירושו 192.168.*<br>ריק פירושו שכל כתובות ה-IP מותרות</span>');
define('_AM_LABEL_COMPACTLOG', 'יומן קומפקטי');
define('_AM_BUTTON_COMPACTLOG', 'דחוס!');
define('_AM_JS_COMPACTLOGCONFIRM', 'רשומות משוכפלות (IP, סוג) יוסרו');
define('_AM_LABEL_REMOVEALL', 'הסר את כל הרשומות');
define('_AM_BUTTON_REMOVEALL', 'הסר הכל!');
define('_AM_JS_REMOVEALLCONFIRM', 'כל היומנים מוסרים לחלוטין. אתה באמת בסדר?');
define('_AM_LABEL_REMOVE', 'הסר את הרשומות שנבדקו:');
define('_AM_BUTTON_REMOVE', 'הסר!');
define('_AM_JS_REMOVECONFIRM', 'להסיר בסדר?');
define('_AM_MSG_IPFILESUPDATED', 'קבצים עבור כתובות IP עודכנו');
define('_AM_MSG_BADIPSCANTOPEN', 'לא ניתן לפתוח את הקובץ עבור רע IP');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'לא ניתן לפתוח את הקובץ לאפשר group=1');
define('_AM_MSG_REMOVED', 'הרשומות הוסרו');
define('_AM_MSG_DELFAILED', 'נכשל מחיקת הרשומות');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'הפוך את ספריית ההגדרות לכתיבה: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'מנהל קידומות');
define('_AM_MSG_DBUPDATED', 'מסד הנתונים עודכן בהצלחה!');
define('_AM_CONFIRM_DELETE', 'כל הנתונים יוסרו. בְּסֵדֶר?');
define('_AM_TXT_HOWTOCHANGEDB',"אם ברצונך לשנות קידומת,<br> ערוך את %s/data/secure.php באופן ידני.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'לא מאובטח');
define('_AM_ADV_TRUSTPATHPUBLIC', 'אם אתה יכול לראות תמונה -NG- או שהקישור מחזיר דף רגיל, ה-XOOPS_TRUST_PATH שלך לא ממוקם כראוי. המקום הטוב ביותר עבור XOOPS_TRUST_PATH הוא מחוץ ל-DocumentRoot. אם אינך יכול לעשות זאת, עליך לשים את ‎.htaccess (DENY FROM ALL) ממש מתחת ל-XOOPS_TRUST_PATH בתור הדרך השנייה הטובה ביותר.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'בדוק שקבצי PHP בתוך TRUST_PATH מוגדרים לקריאה בלבד (היא חייבת להיות שגיאה 404,403 או 500)');
define('_AM_ADV_REGISTERGLOBALS',"אם 'פועל', הגדרה זו מזמינה מגוון התקפות הזרקה. אם אתה יכול, הגדר את 'register_globals off' ב-php.ini, או אם זה לא אפשרי, צור או ערוך .htaccess בספריית XOOPS שלך:");
define('_AM_ADV_ALLOWURLFOPEN',"אם 'ON', הגדרה זו מאפשרת לתוקפים לבצע סקריפטים שרירותיים בשרתים מרוחקים.<br>רק מנהל יכול לשנות אפשרות זו.<br>אם אתה מנהל, ערוך את php.ini או httpd.conf.<br><b>דוגמה של httpd.conf:<br> &n php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br> אחרת, תבע את זה בפני המנהלים שלך.");
define('_AM_ADV_USETRANSSID',"אם 'מופעל', מזהה ההפעלה שלך יוצג בתגי עוגן וכו'.<br>כדי למנוע פריצת הפעלה, הוסף שורה ל-.htaccess ב-XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"הגדרה זו מזמינה 'הזרקות SQL'.<br>אל תשכח להפעיל את 'לחיטוי כוח *' בהעדפות של מודול זה.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'עבור אל מנהל הקידומת');
define('_AM_ADV_MAINUNPATCHED', 'עליך לערוך את ה-mainfile.php שלך כפי שנכתב ב-README.');
define('_AM_ADV_DBFACTORYPATCHED', 'מפעל מסד הנתונים שלך מוכן להזרקת DBLayer Trapping אנטי-SQL');
define('_AM_ADV_DBFACTORYUNPATCHED', 'מפעל מסד הנתונים שלך אינו מוכן להזרקת DBLayer Trapping אנטי-SQL. יש צורך בכמה תיקונים.');
define('_AM_ADV_SUBTITLECHECK', 'בדוק אם Protector עובד טוב');
define('_AM_ADV_CHECKCONTAMI', 'זיהום');
define('_AM_ADV_CHECKISOCOM', 'תגובות מבודדות');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'והצב בה את השורה למטה:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'קידומת');
define('_AM_PROTECTOR_TABLES', 'טבלאות');
define('_AM_PROTECTOR_UPDATED', 'עודכן');
define('_AM_PROTECTOR_COPY', 'העתק');
define('_AM_PROTECTOR_ACTIONS', 'פעולות');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'חסום את כתובות ה-IP ברשומות שנבדקו:');
define('_AM_BUTTON_BAN_BY_IP', 'IP חסום!');
define('_AM_JS_BANCONFIRM', 'IP חסימות בסדר?');
define('_AM_MSG_BANNEDIP', 'כתובות IP חסומות');
define('_AM_ADMINSTATS_TITLE', 'סיכום יומן Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'חודש שעבר');
define('_AM_ADMINSTATS_LAST_WEEK', 'שבוע שעבר');
define('_AM_ADMINSTATS_LAST_DAY', 'אתמול');
define('_AM_ADMINSTATS_LAST_HOUR', 'השעה האחרונה');

//2.7.1 backfilled translations
define('_AM_TH_AGENT', 'AGENT');
