<?php

// 1. addcslashes
// الوصف: تُضيف شرطة مائلة عكسية (\) قبل الأحرف المحددة
$str = "Hello World!";
echo addcslashes($str, 'A..z'), "\n"; // يضيف \ قبل كل حرف من A إلى z

// 2. addslashes
// الوصف: تُضيف شرطة مائلة قبل علامات الاقتباس
$str = "O'Reilly";
echo addslashes($str), "\n"; // النتيجة: O\'Reilly

// 3. bin2hex
// الوصف: تحويل البيانات الثنائية إلى تمثيل سداسي عشري
$str = "Hello";
echo bin2hex($str), "\n"; // 48656c6c6f

// 4. chop (مكافئ لـ rtrim)
// الوصف: إزالة الفراغات من نهاية النص
$str = "Hello World   ";
echo '[' . chop($str) . "]\n"; // [Hello World]

// 5. chr
// الوصف: تحويل رقم إلى الحرف المقابل في جدول ASCII
echo chr(65), "\n"; // A

// 6. chunk_split
// الوصف: تقسيم سلسلة نصية إلى أجزاء متساوية
$str = "HelloWorld";
echo chunk_split($str, 3, "-"), "\n"; // Hel-loW-orl-d-

// 7. convert_cyr_string
// الوصف: تحويل أحرف السيريلية بين مجموعات مختلفة
$str = "Привет";
echo convert_cyr_string($str, "w", "k"), "\n";

// 8. convert_uudecode
// الوصف: فك ترميز نصوص uuencode
$encoded = "begin 644 test.txt\n#0V%T\n`\nend\n";
echo convert_uudecode($encoded), "\n";

// 9. convert_uuencode
// الوصف: تحويل النصوص إلى uuencode
$str = "Hello World";
echo convert_uuencode($str), "\n";

// 10. count_chars
// الوصف: عد كل الأحرف المختلفة في النص
$str = "Hello";
print_r(count_chars($str, 1));

// 11. crc32
// الوصف: حساب CRC32 checksum لسلسلة
$str = "Hello";
echo crc32($str), "\n";

// 12. crypt
// الوصف: تشفير نص
echo crypt("mypassword", "sa"), "\n";

// 13. echo
// الوصف: عرض نص على الشاشة
echo "Hello World!\n";

// 14. explode
// الوصف: تحويل سلسلة إلى مصفوفة بناءً على فاصل
$str = "apple,banana,orange";
print_r(explode(",", $str));

// 15. fprintf
// الوصف: الكتابة إلى ملف مع تنسيق
$file = fopen("test.txt", "w");
fprintf($file, "عدد التفاح: %d\n", 5);
fclose($file);

// 16. get_html_translation_table
// الوصف: الحصول على جدول تحويل الأحرف الخاصة HTML
print_r(get_html_translation_table(HTML_ENTITIES));

// 17. hebrev
// الوصف: تحويل نص عبري إلى الاتجاه من اليمين لليسار
echo hebrev("שלום עולם"), "\n";

// 18. hebrevc
// الوصف: نفس hebrev لكن يحتفظ بالمسافات
echo hebrevc("שלום עולם"), "\n";

// 19. hex2bin
// الوصف: تحويل نص سداسي عشري إلى بايتات
echo hex2bin("48656c6c6f"), "\n"; // Hello

// 20. html_entity_decode
// الوصف: تحويل الكيانات HTML إلى أحرف
echo html_entity_decode("&lt;div&gt;Hello&lt;/div&gt;"), "\n";

// 21. htmlentities
// الوصف: تحويل الأحرف الخاصة إلى كيانات HTML
echo htmlentities("<div>Hello</div>"), "\n";

// 22. htmlspecialchars
// الوصف: تحويل بعض الأحرف إلى كيانات HTML (للحماية)
echo htmlspecialchars("<a href='test'>link</a>"), "\n";

// 23. htmlspecialchars_decode
// الوصف: فك تحويل htmlspecialchars
echo htmlspecialchars_decode("&lt;a href='test'&gt;link&lt;/a&gt;"), "\n";

// 24. implode
// الوصف: تحويل مصفوفة إلى نص مفصول بفاصل
$arr = ["apple","banana"];
echo implode(",",$arr), "\n";

// 25. join (مكافئ implode)
echo join(" & ", $arr), "\n";

// 26. lcfirst
// الوصف: تحويل الحرف الأول من النص إلى حرف صغير
echo lcfirst("Hello World"), "\n";

// 27. levenshtein
// الوصف: حساب المسافة بين سلسلتين (عدد التعديلات)
echo levenshtein("hello","hallo"), "\n";

// 28. localeconv
// الوصف: إرجاع إعدادات تنسيق الأرقام للعملة
print_r(localeconv());

// 29. ltrim
// الوصف: إزالة الفراغات أو أحرف معينة من بداية النص
echo '['.ltrim("   hello").']', "\n";

// 30. md5
// الوصف: توليد تجزئة MD5 من نص
echo md5("Hello"), "\n";

// 31. md5_file
// الوصف: توليد MD5 من محتوى ملف
file_put_contents("test.txt","Hello");
echo md5_file("test.txt"), "\n";

// 32. metaphone
// الوصف: إرجاع الصيغة الصوتية للكلمة (للمطابقة الصوتية)
echo metaphone("Hello"), "\n";

// 33. money_format (deprecated)
// الوصف: تنسيق رقم كعملة (غير متوفر في PHP 8+)
setlocale(LC_MONETARY, 'en_US');
echo money_format('%.2n', 1234.56), "\n";

// 34. nl2br
// الوصف: تحويل السطور الجديدة إلى <br>
echo nl2br("Hello\nWorld"), "\n";

// 35. number_format
// الوصف: تنسيق رقم
echo number_format(12345.678,2), "\n";

// 36. ord
// الوصف: تحويل الحرف إلى كود ASCII
echo ord("A"), "\n";

// 37. parse_str
// الوصف: تحليل سلسلة URL إلى متغيرات
parse_str("name=John&age=25",$output);
print_r($output);

// 38. print
// الوصف: طباعة نص
print "Hello Print\n";

// 39. printf
// الوصف: طباعة نص مع تنسيق
printf("عدد التفاح: %d\n",5);

// 40. quoted_printable_decode
// الوصف: فك ترميز نصوص quoted-printable
echo quoted_printable_decode("Hello=20World=21"), "\n";

// 41. quoted_printable_encode
// الوصف: ترميز نصوص quoted-printable
echo quoted_printable_encode("Hello World!"), "\n";

// 42. quotemeta
// الوصف: إضافة شرطات قبل الأحرف الخاصة في التعبيرات العادية
echo quotemeta("Hello. [World]!"), "\n";

// 43. rtrim
// الوصف: إزالة الفراغات أو أحرف معينة من نهاية النص
echo '['.rtrim("Hello   ").']', "\n";

// 44. setlocale
// الوصف: تحديد إعدادات اللغة المحلية
setlocale(LC_ALL,'en_US.UTF-8');

// 45. sha1
// الوصف: توليد SHA1 من نص
echo sha1("Hello"), "\n";

// 46. sha1_file
// الوصف: توليد SHA1 من محتوى ملف
echo sha1_file("test.txt"), "\n";

// 47. similar_text
// الوصف: حساب عدد الأحرف المتشابهة بين نصين
similar_text("Hello","Hallo",$percent);
echo $percent."%\n";

// 48. soundex
// الوصف: الحصول على كود صوتي للكلمة
echo soundex("Hello"), "\n";

// 49. sprintf
// الوصف: تنسيق نص وإرجاعه كسلسلة
echo sprintf("عدد التفاح: %d",5), "\n";

// 50. sscanf
// الوصف: قراءة بيانات من نص حسب تنسيق
sscanf("John 25","%s %d",$name,$age);
echo "$name - $age\n";

// 51. str_contains
echo str_contains("Hello World","World") ? "Yes\n":"No\n";

// 52. str_ends_with
echo str_ends_with("Hello World","World") ? "Yes\n":"No\n";

// 53. str_getcsv
print_r(str_getcsv("a,b,c"));

// 54. str_ireplace
echo str_ireplace("world","PHP","Hello World"), "\n";

// 55. str_pad
echo str_pad("Hi",10,"-",STR_PAD_BOTH), "\n";

// 56. str_repeat
echo str_repeat("Hello-",3), "\n";

// 57. str_replace
echo str_replace("world","PHP","Hello world"), "\n";

// 58. str_rot13
echo str_rot13("Hello"), "\n";

// 59. str_shuffle
echo str_shuffle("Hello"), "\n";

// 60. str_split
print_r(str_split("Hello"));

// 61. str_starts_with
echo str_starts_with("Hello World","Hello") ? "Yes\n":"No\n";

// 62. str_word_count
print_r(str_word_count("Hello World",1));

// 63. strcasecmp
echo strcasecmp("Hello","hello"), "\n";

// 64. strchr
echo strchr("Hello World","W"), "\n";

// 65. strcmp
echo strcmp("Hello","hello"), "\n";

// 66. strcoll
echo strcoll("a","b"), "\n";

// 67. strcspn
echo strcspn("Hello World","o"), "\n";

// 68. strip_tags
echo strip_tags("<b>Hello</b> World"), "\n";

// 69. stripcslashes
echo stripcslashes("Hello\\ World"), "\n";

// 70. stripslashes
echo stripslashes("O\\'Reilly"), "\n";

// 71. stripos
echo stripos("Hello World","world"), "\n";

// 72. stristr
echo stristr("Hello World","WORLD"), "\n";

// 73. strlen
echo strlen("Hello"), "\n";

// 74. strnatcasecmp
echo strnatcasecmp("file2","file10"), "\n";

// 75. strnatcmp
echo strnatcmp("file2","file10"), "\n";

// 76. strncasecmp
echo strncasecmp("Hello","hello",5), "\n";

// 77. strncmp
echo strncmp("Hello","hello",5), "\n";

// 78. strpbrk
echo strpbrk("Hello World","aeiou"), "\n";

// 79. strpos
echo strpos("Hello World","World"), "\n";

// 80. strrchr
echo strrchr("Hello World","o"), "\n";

// 81. strrev
echo strrev("Hello"), "\n";

// 82. strripos
echo strripos("Hello World","O"), "\n";

// 83. strrpos
echo strrpos("Hello World","o"), "\n";

// 84. strspn
echo strspn("Hello World","Helo"), "\n";

// 85. strstr
echo strstr("Hello World","World"), "\n";

// 86. strtok
$token = strtok("Hello World"," ");
while($token!==false){
    echo $token,"\n";
    $token = strtok(" ");
}

// 87. strtolower
echo strtolower("HELLO"), "\n";

// 88. strtotime
echo strtotime("2025-11-29"), "\n";

// 89. strtoupper
echo strtoupper("hello"), "\n";

// 90. strtr
echo strtr("Hello","el","ip"), "\n";

// 91. substr
echo substr("Hello World",6), "\n";

// 92. substr_compare
echo substr_compare("Hello World","World",6,5), "\n";

// 93. substr_count
echo substr_count("Hello World World","World"), "\n";

// 94. substr_replace
echo substr_replace("Hello World","PHP",6,5), "\n";

// 95. trim
echo '['.trim(" Hello ").']', "\n";

// 96. ucfirst
echo ucfirst("hello"), "\n";

// 97. ucwords
echo ucwords("hello world"), "\n";

// 98. vfprintf
$file = fopen("test.txt","w");
vfprintf($file,"%s %d\n",["Apples",5]);
fclose($file);

// 99. vprintf
vprintf("%s %d\n",["Apples",5]);

// 100. vsprintf
echo vsprintf("%s %d\n",["Apples",5]);

// 101. wordwrap
echo wordwrap("Hello World!",5,"\n"), "\n";

?>
