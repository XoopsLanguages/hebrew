<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: he

define('_MD_DEBUGBAR_DEBUG', 'ניפוי שגיאות');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'קבצים נכללים');
define('_MD_DEBUGBAR_PHP_VERSION', 'גרסת PHP');
define('_MD_DEBUGBAR_NONE', 'אין');
define('_MD_DEBUGBAR_ERRORS', 'שגיאות');
define('_MD_DEBUGBAR_DEPRECATED', 'מיושן');
define('_MD_DEBUGBAR_QUERIES', 'שאילתות');
define('_MD_DEBUGBAR_BLOCKS', 'בלוקים');
define('_MD_DEBUGBAR_EXTRA', 'נוסף');
define('_MD_DEBUGBAR_TIMERS', 'טיימרים');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s לקח %s שניות לטעינה.');
define('_MD_DEBUGBAR_TOTAL', 'סה"כ');
define('_MD_DEBUGBAR_NOT_CACHED', 'לא בקאש');
define('_MD_DEBUGBAR_CACHED', 'בקאש (מתחדש כל %s שניות)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(מחרוזת ריקה)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool TRUE');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'שאילתות מסד נתונים');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'שימוש בזיכרון');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d שאילתות');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d כפילויות)');
define('_MD_DEBUGBAR_BYTES', '%s בתים
נמצאו');
define('_MD_DEBUGBAR_DB_VERSION', 'גרסה %s');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- מספר שגיאה: %s הודעת שגיאה: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- שגיאה #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'חריגה');
define('_MD_DEBUGBAR_RAY_QUERY', 'שאילתה #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'איטי');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'חסום (בקובץ שמור %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'חסום (לא שמור)');
define('_MD_DEBUGBAR_RAY_DUMP', 'ייצוא');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'הקשר תבנית');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(אין משתני תבנית)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'המדריך "modules/debugbar/%s" לא נוצר');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'נכשל יצירת הספרייה "%s" במהלך העתקת הנכס');
