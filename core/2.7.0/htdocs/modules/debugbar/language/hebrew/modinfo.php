<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: he

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'דיווח שגיאות וניתוח ביצועים באמצעות PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'הצג DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'הפעל Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'הפעל לשונית קבצים נכללים');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'הצג את כל קבצי PHP שנטענו במהלך הבקשה');
define('_MI_DEBUGBAR_SLOWQUERY', 'סף שאילתה איטית (שניות)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'שאילתות איטיות יותר מוצגות באדום (לדוגמה 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'רישום שאילתות');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'כל השאילתות או רק איטיות ושגיאות');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'כל השאילתות');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'רק איטיות ושגיאות');

define('_MI_DEBUGBAR_RAY_ENABLE', 'הפעל שילוב Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'שלח נתוני ניפוי לאפליקציית Ray');

define('_MI_DEBUGBAR_ADMENU1', 'דף הבית');
define('_MI_DEBUGBAR_MENU_ABOUT', 'אודות');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'חזרה לניהול של ');
\define('_MI_DEBUGBAR_OVERVIEW', 'סקירה כללית');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'כתב ויתור');
\define('_MI_DEBUGBAR_LICENSE', 'רישיון');
\define('_MI_DEBUGBAR_SUPPORT', 'תמיכה');
