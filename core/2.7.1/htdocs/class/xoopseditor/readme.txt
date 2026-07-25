xoopseditor מספק קולקטיב של עורכים עבור XOOPS

מדריך למשתמש:

1 בדוק את הקבצים xoops_version.php תחת /xoopseditor/ כדי לוודא שהוא חדש יותר מהקבצים הנוכחיים שלך

2 העלה /xoopseditor/ אל /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 הגדר העדפות במידת הצורך
3.1 ./dhtmlext(כל העורכים)/language/: צור את קובץ השפה המקומי שלך מבוסס על english.php
3.3 ./dhtmlext(כל העורכים)/editor_registry.php: הגדר תצורות עבור העורך: סדר - הצג סדר במקרה שבו נעשה שימוש בבחירת עורך, 0 עבור מושבת; nohtml - עובד עבור תחביר שאינו HTML
3.3 ./FCKeditor/module/: העתק את הקבצים לתיקיות המודולים למקרה שנדרשות הרשאות העלאה, אחסון ועריכה ספציפיות למודול
3.3.1 ./FCKeditor/module/fckeditor.config.js: עבור אפשרויות עורך, בדרך כלל אין צורך לשנות את זה
3.3.2 ./FCKeditor/module/fckeditor.connector.php: כדי לציין את התיקיה לגלישה בקבצים (והעלאת אחסון) => XOOPS/uploads/XOOPS_FCK_FOLDER/, התיקיה נדרשת ליצירה ידנית
3.3.3 ./FCKeditor/module/fckeditor.upload.php: ציין הרשאת העלאה והעלאת אחסון
3.4 XOOPS/uploads/fckeditor/: ליצירת התיקיה אם FCKeditor מופעל, משמש להעלאות מהן לא צוינה תיקיית ההעלאה
3.5 ./tinymce/tinymce/jscripts/: הורד את קבצי השפה המקומית שלך מ-http://tinymce.moxiecode.com/language.php

4 בדוק שמות קבצים: עבור מערכת תלוית רישיות, ודא ששמות הקבצים נכונים באופן מילולי, כלומר, "FCKeditor" אינו זהה ל-"fckeditor"

5 בדוק /xoopseditor/sampleform.inc.php לקבלת מדריך פיתוח
