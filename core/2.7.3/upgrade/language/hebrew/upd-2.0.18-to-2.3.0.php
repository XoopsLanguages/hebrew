<?php
// _LANGCODE: he
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'נתיבים פיזיים של XOOPS');
define('LEGEND_DATABASE', 'סט תווים של מסד נתונים');

define('XOOPS_LIB_PATH_LABEL', 'ספריית הספרייה XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'ספריית קבצי נתונים XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'סט תווים של מסד נתונים ואיסוף');
define('DB_COLLATION_HELP', 'החל מ-4.12 MySQL תומך בערכת תווים מותאמים אישית ובאיסוף. עם זאת, זה מורכב יותר מהצפוי, אז אל תעשה שום שינוי אלא אם כן אתה בטוח בבחירתך.');
define('DB_COLLATION_NOCHANGE', 'אל תשנה');

define('XOOPS_PATH_FOUND', 'נמצא נתיב.');
define('ERR_COULD_NOT_ACCESS', 'לא ניתן לגשת לתיקיה שצוינה. אנא ודא שהוא קיים וניתן לקריאה על ידי השרת.');
define('CHECKING_PERMISSIONS', 'בודק הרשאות קובץ וספרייה...');
define('ERR_NEED_WRITE_ACCESS', 'יש לתת לשרת גישת כתיבה לקבצים ולתיקיה הבאים<br>(כלומר <em>chmod 777 directory_name</em> בשרת UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s אינו ניתן לכתיבה.');
define('IS_WRITABLE', '%s ניתן לכתיבה.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'שגיאה בכתיבת תוכן ל-mainfile.php, כתוב את התוכן ל-mainfile.php באופן ידני.');
