<?php
/**
 * مرجع عملي: دوال المصفوفة Array functions في PHP مع شرح موجز وأمثلة تنفيذية.
 * يحتوي هذا الملف أمثلة لكل دالة طلبتها. يمكنك تشغيله عبر: php php_all_arrays_examples.php
 * ملاحظة: لبعض الدوال التي تعتمد على دوال مقارنة مخصصة، أضفت أمثلة بسيطة.
 */

echo "PHP Array Functions Reference - Examples\n\n";


// --------------------------------------------------
// array_change_key_case - تحويل مفاتيح المصفوفة إلى أحرف صغيرة/كبيرة
// Example:
echo "--- array_change_key_case example ---\n";
$arr = ["Name" => "Ali", "AGE" => 20];
print_r(array_change_key_case($arr, CASE_LOWER)); // مفاتيح صغيرة
print_r(array_change_key_case($arr, CASE_UPPER)); // مفاتيح كبيرة

echo "\n";

// --------------------------------------------------
// array_chunk - تقسيم المصفوفة إلى قطع أصغر
// Example:
echo "--- array_chunk example ---\n";
$arr = [1,2,3,4,5,6];
print_r(array_chunk($arr, 2)); // مصفوفة من أجزاء بحجم 2
echo "\n";

// --------------------------------------------------
// array_column - استخراج عمود من مصفوفة من الصفوف (multi-dim)
// Example:
echo "--- array_column example ---\n";
$data = [
    ["id"=>1, "name"=>"Ali"],
    ["id"=>2, "name"=>"Sara"]
];
print_r(array_column($data, 'name')); // ['Ali','Sara']
echo "\n";

// --------------------------------------------------
// array_combine - إنشاء مصفوفة من مفاتيح وقيم
// Example:
echo "--- array_combine example ---\n";
$keys = ['a','b','c'];
$vals = [1,2,3];
print_r(array_combine($keys, $vals));
echo "\n";

// --------------------------------------------------
// array_count_values - عدّ تكرار كل قيمة في المصفوفة
// Example:
echo "--- array_count_values example ---\n";
$vals = ['a','b','a','c','b','a'];
print_r(array_count_values($vals));
echo "\n";

// --------------------------------------------------
// array_diff - عناصر موجودة في الأولى وغير موجودة في الباقي (قيمي)
// Example:
echo "--- array_diff example ---\n";
$a = [1,2,3,4];
$b = [2,4];
print_r(array_diff($a,$b)); // [0=>1,2=>3]
echo "\n";

// --------------------------------------------------
// array_diff_assoc - الفرق مع مقارنة المفتاح والقيمة
// Example:
echo "--- array_diff_assoc example ---\n";
$a = ['a'=>1,'b'=>2];
$b = ['a'=>1,'b'=>3];
print_r(array_diff_assoc($a,$b)); // يبقي العنصر b لأن القيمة اختلفت
echo "\n";

// --------------------------------------------------
// array_diff_key - الفرق بالمفاتيح فقط
// Example:
echo "--- array_diff_key example ---\n";
$a = ['a'=>1,'b'=>2,'c'=>3];
$b = ['b'=>9];
print_r(array_diff_key($a,$b)); // يبقي a و c
echo "\n";

// --------------------------------------------------
// array_diff_uassoc - الفرق مع دالة مقارنة للمفاتيح (user-defined)
// Example:
echo "--- array_diff_uassoc example ---\n";
function key_cmp($k1, $k2) { return strcmp($k1, $k2); }
$a = ['a'=>1,'b'=>2];
$b = ['a'=>1];
print_r(array_diff_uassoc($a,$b,'key_cmp')); // يعتمد على cmp للمفاتيح
echo "\n";

// --------------------------------------------------
// array_diff_ukey - الفرق بالمفاتيح مع دالة مقارنة
// Example:
echo "--- array_diff_ukey example ---\n";
function cmp_keys($k1,$k2){ return strcmp($k1,$k2); }
$a=['aa'=>1,'b'=>2];
$b=['aa'=>1];
print_r(array_diff_ukey($a,$b,'cmp_keys'));
echo "\n";

// --------------------------------------------------
// array_fill - إنشاء مصفوفة مملوءة بقيمة
// Example:
echo "--- array_fill example ---\n";
print_r(array_fill(0,5,'x')); // خمسة عناصر 'x'
echo "\n";

// --------------------------------------------------
// array_fill_keys - ملء مفاتيح بقيمة واحدة
// Example:
echo "--- array_fill_keys example ---\n";
print_r(array_fill_keys(['a','b','c'], 0));
echo "\n";

// --------------------------------------------------
// array_filter - تصفية المصفوفة حسب دالة شرطية
// Example:
echo "--- array_filter example ---\n";
$nums = [1,2,3,4,5,6];
print_r(array_filter($nums, fn($n)=> $n%2===0)); // عناصر زوجية
echo "\n";

// --------------------------------------------------
// array_flip - عكس المفاتيح مع القيم (القيم يجب أن تكون قابلة لمفاتيح)
// Example:
echo "--- array_flip example ---\n";
print_r(array_flip(['a'=>1,'b'=>2])); // [1=>'a',2=>'b']
echo "\n";

// --------------------------------------------------
// array_intersect - التقاطع بحسب القيمة
// Example:
echo "--- array_intersect example ---\n";
print_r(array_intersect([1,2,3],[2,3,4])); // [1=>2,2=>3]
echo "\n";

// --------------------------------------------------
// array_intersect_assoc - التقاطع بالمفتاح والقيمة
// Example:
echo "--- array_intersect_assoc example ---\n";
print_r(array_intersect_assoc(['a'=>1,'b'=>2], ['a'=>1,'b'=>3])); // يبقي a فقط
echo "\n";

// --------------------------------------------------
// array_intersect_key - التقاطع بالمفاتيح فقط
// Example:
echo "--- array_intersect_key example ---\n";
print_r(array_intersect_key(['a'=>1,'b'=>2], ['b'=>0])); // يبقي b
echo "\n";

// --------------------------------------------------
// array_intersect_uassoc - التقاطع مع cmp للمفاتيح
// Example:
echo "--- array_intersect_uassoc example ---\n";
function my_cmp($a,$b){ return $a<=>$b; }
print_r(array_intersect_uassoc(['a'=>1], ['a'=>1], 'my_cmp'));
echo "\n";

// --------------------------------------------------
// array_intersect_ukey - التقاطع مع cmp للمفاتيح
// Example:
echo "--- array_intersect_ukey example ---\n";
function keycmp($k1,$k2){ return strcmp($k1,$k2); }
print_r(array_intersect_ukey(['a'=>1], ['a'=>1], 'keycmp'));
echo "\n";

// --------------------------------------------------
// array_is_list - هل المصفوفة قائمة (مفاتيح رقمية متسلسلة من 0)
// Example:
echo "--- array_is_list example ---\n";
var_dump(array_is_list([10,20,30])); // true
var_dump(array_is_list(['a'=>1])); // false
echo "\n";

// --------------------------------------------------
// array_key_exists - هل يوجد مفتاح معين في المصفوفة
// Example:
echo "--- array_key_exists example ---\n";
var_dump(array_key_exists('name', ['name'=>'Ali']));
echo "\n";

// --------------------------------------------------
// array_key_first - أول مفتاح في المصفوفة
// Example:
echo "--- array_key_first example ---\n";
echo array_key_first(['a'=>1,'b'=>2])."\n";
echo "\n";

// --------------------------------------------------
// array_key_last - آخر مفتاح في المصفوفة
// Example:
echo "--- array_key_last example ---\n";
echo array_key_last(['a'=>1,'b'=>2])."\n";
echo "\n";

// --------------------------------------------------
// array_keys - إرجاع مفاتيح المصفوفة
// Example:
echo "--- array_keys example ---\n";
print_r(array_keys(['a'=>1,'b'=>2]));
echo "\n";

// --------------------------------------------------
// array_map - تطبيق دالة على كل عنصر (يرجع مصفوفة جديدة)
// Example:
echo "--- array_map example ---\n";
$nums=[1,2,3];
print_r(array_map(fn($x)=>$x*$x, $nums));
echo "\n";

// --------------------------------------------------
// array_merge - دمج مصفوفتين/أكثر (يعيد فهرسة القيم الرقمية)
// Example:
echo "--- array_merge example ---\n";
print_r(array_merge([1,2], [3,4], ['a'=>5]));
echo "\n";

// --------------------------------------------------
// array_merge_recursive - دمج متداخل - إذا تكررت المفاتيح تُصبح القيم مصفوفة
// Example:
echo "--- array_merge_recursive example ---\n";
print_r(array_merge_recursive(['a'=>1], ['a'=>2])); // a => [1,2]
echo "\n";

// --------------------------------------------------
// array_multisort - فرز متعدد المصفوفات مترابطة
// Example:
echo "--- array_multisort example ---\n";
$a=[3,1,2]; $b=['c','a','b'];
array_multisort($a, $b);
print_r($a); print_r($b);
echo "\n";

// --------------------------------------------------
// array_pad - زيادة طول المصفوفة بحشو بقيمة معينة
// Example:
echo "--- array_pad example ---\n";
print_r(array_pad([1,2], 5, 0)); // [1,2,0,0,0]
echo "\n";

// --------------------------------------------------
// array_pop - إزالة آخر عنصر وإرجاعه
// Example:
echo "--- array_pop example ---\n";
$a=[1,2,3];
echo array_pop($a)."\n"; print_r($a);
echo "\n";

// --------------------------------------------------
// array_product - حاصل ضرب عناصر المصفوفة
// Example:
echo "--- array_product example ---\n";
echo array_product([2,3,4])."\n"; // 24
echo "\n";

// --------------------------------------------------
// array_push - دفع عناصر لنهاية المصفوفة
// Example:
echo "--- array_push example ---\n";
$a=[1];
array_push($a,2,3);
print_r($a);
echo "\n";

// --------------------------------------------------
// array_rand - اختيار مفتاح عشوائي أو أكثر
// Example:
echo "--- array_rand example ---\n";
$a=['a','b','c'];
$k = array_rand($a);
echo $k, ' => ', $a[$k], "\n";
echo "\n";

// --------------------------------------------------
// array_reduce - اختزال المصفوفة لقيمة واحدة باستخدام دالة
// Example:
echo "--- array_reduce example ---\n";
echo array_reduce([1,2,3], fn($carry,$item)=>$carry+$item, 0)."\n";
echo "\n";

// --------------------------------------------------
// array_replace - استبدال عناصر في مصفوفة بأخرى حسب المفتاح
// Example:
echo "--- array_replace example ---\n";
print_r(array_replace(['a'=>1,'b'=>2], ['b'=>9]));
echo "\n";

// --------------------------------------------------
// array_replace_recursive - استبدال متداخل للمصفوفات متعددة الأبعاد
// Example:
echo "--- array_replace_recursive example ---\n";
print_r(array_replace_recursive(['a'=>['x'=>1]], ['a'=>['x'=>9]]));
echo "\n";

// --------------------------------------------------
// array_reverse - عكس ترتيب المصفوفة
// Example:
echo "--- array_reverse example ---\n";
print_r(array_reverse([1,2,3]));
echo "\n";

// --------------------------------------------------
// array_search - البحث عن قيمة وإرجاع أول مفتاح مطابق
// Example:
echo "--- array_search example ---\n";
echo array_search(2, [1,2,3])."\n"; // 1 (المفتاح)
echo "\n";

// --------------------------------------------------
// array_shift - إزالة أول عنصر وإرجاعه
// Example:
echo "--- array_shift example ---\n";
$a=[1,2,3];
echo array_shift($a)."\n"; print_r($a);
echo "\n";

// --------------------------------------------------
// array_slice - استخراج جزء من المصفوفة دون تغيير الأصل
// Example:
echo "--- array_slice example ---\n";
print_r(array_slice([0,1,2,3,4], 1, 3)); // [1,2,3]
echo "\n";

// --------------------------------------------------
// array_splice - حذف/استبدال جزء وتعديل المصفوفة الأصلية
// Example:
echo "--- array_splice example ---\n";
$a=[0,1,2,3,4];
array_splice($a, 1, 2, ['x','y']); // يحذف 1 و 2 ثم يدخل x,y
print_r($a);
echo "\n";

// --------------------------------------------------
// array_sum - مجموع عناصر المصفوفة
// Example:
echo "--- array_sum example ---\n";
echo array_sum([1,2,3])."\n";
echo "\n";

// --------------------------------------------------
// array_udiff - الفرق بإستخدام دالة مقارنة للمحتوى
// Example:
echo "--- array_udiff example ---\n";
function cmp($a,$b){ return $a <=> $b; }
print_r(array_udiff([1,2],[2,3],'cmp'));
echo "\n";

// --------------------------------------------------
// array_udiff_assoc - الفرق مع assoc و cmp للمحتوى
// Example:
echo "--- array_udiff_assoc example ---\n";
function cmpv($a,$b){ return $a <=> $b; }
print_r(array_udiff_assoc(['a'=>1], ['a'=>2], 'cmpv'));
echo "\n";

// --------------------------------------------------
// array_udiff_uassoc - الفرق مع دوال مقارنة للمفتاح والقيمة
// Example:
echo "--- array_udiff_uassoc example ---\n";
function cmpv2($a,$b){ return $a<=>$b; }
function cmpk2($a,$b){ return strcmp($a,$b); }
print_r(array_udiff_uassoc(['a'=>1], ['a'=>2], 'cmpv2', 'cmpk2'));
echo "\n";

// --------------------------------------------------
// array_uintersect - التقاطع مع دالة مقارنة للقيمة
// Example:
echo "--- array_uintersect example ---\n";
function cmpv3($a,$b){ return $a<=>$b; }
print_r(array_uintersect([1,2],[2,3],'cmpv3'));
echo "\n";

// --------------------------------------------------
// array_uintersect_assoc - التقاطع assoc مع دالة مقارنة للقيمة
// Example:
echo "--- array_uintersect_assoc example ---\n";
function cmpv4($a,$b){ return $a<=>$b; }
print_r(array_uintersect_assoc(['a'=>1], ['a'=>1], 'cmpv4'));
echo "\n";

// --------------------------------------------------
// array_uintersect_uassoc - التقاطع بدوال مقارنة قيمة ومفتاح
// Example:
echo "--- array_uintersect_uassoc example ---\n";
function cmpv5($a,$b){ return $a<=>$b; }
function cmpk5($a,$b){ return strcmp($a,$b); }
print_r(array_uintersect_uassoc(['a'=>1], ['a'=>1], 'cmpv5', 'cmpk5'));
echo "\n";

// --------------------------------------------------
// array_unique - إزالة العناصر المكررة (يحتفظ بالمفاتيح الأصلية)
// Example:
echo "--- array_unique example ---\n";
print_r(array_unique([1,2,2,3,1]));
echo "\n";

// --------------------------------------------------
// array_unshift - إضافة عناصر لبداية المصفوفة
// Example:
echo "--- array_unshift example ---\n";
$a=[2,3];
array_unshift($a,1);
print_r($a);
echo "\n";

// --------------------------------------------------
// array_values - إرجاع قيم المصفوفة فقط (إعادة فهرسة)
// Example:
echo "--- array_values example ---\n";
print_r(array_values(['a'=>1,'b'=>2]));
echo "\n";

// --------------------------------------------------
// array_walk - تطبيق دالة على كل عنصر (فعالية جانبية)
// Example:
echo "--- array_walk example ---\n";
$a=[1,2,3];
array_walk($a, function(&$v, $k){ $v *= 2; });
print_r($a);
echo "\n";

// --------------------------------------------------
// array_walk_recursive - نسخة متداخلة لتطبيق دالة على كل عنصر
// Example:
echo "--- array_walk_recursive example ---\n";
$a = ['x'=>1,'y'=>['z'=>2]];
array_walk_recursive($a, function(&$v){ $v = $v * 10; });
print_r($a);
echo "\n";

// --------------------------------------------------
// arsort - فرز تنازلي حسب القيمة مع المحافظة على المفاتيح
// Example:
echo "--- arsort example ---\n";
$a=['a'=>3,'b'=>1,'c'=>2];
arsort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// asort - فرز تصاعدي حسب القيمة مع المحافظة على المفاتيح
// Example:
echo "--- asort example ---\n";
$a=['a'=>3,'b'=>1,'c'=>2];
asort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// compact - إنشاء مصفوفة من المتغيرات المسماة
// Example:
echo "--- compact example ---\n";
$name='Ali'; $age=30;
print_r(compact('name','age'));
echo "\n";

// --------------------------------------------------
// count - عدد عناصر المصفوفة (alias sizeof)
// Example:
echo "--- count example ---\n";
echo count([1,2,3])."\n"; echo sizeof([1,2,3])."\n";
echo "\n";

// --------------------------------------------------
// current - إرجاع العنصر الحالي للمؤشر الداخلي
// Example:
echo "--- current example ---\n";
$a=[10,20,30];
echo current($a)."\n";
echo "\n";

// --------------------------------------------------
// each - (مهملة) إرجاع العنصر الحالي ثم تقدّم المؤشر — غير موصى بها
// Example:
echo "--- each example ---\n";
// each() deprecated in PHP 7.2+ - لا تستخدمها.
echo "\n";

// --------------------------------------------------
// end - تحريك المؤشر إلى آخر عنصر وإرجاعه
// Example:
echo "--- end example ---\n";
$a=[1,2,3];
echo end($a)."\n";
echo "\n";

// --------------------------------------------------
// extract - إنشاء متغيّرات محلية من مفاتيح المصفوفة
// Example:
echo "--- extract example ---\n";
$arr=['name'=>'Ali','age'=>25];
extract($arr);
echo $name . ' - ' . $age ."\n";
echo "\n";

// --------------------------------------------------
// in_array - هل القيمة موجودة في المصفوفة
// Example:
echo "--- in_array example ---\n";
var_dump(in_array(2, [1,2,3]));
echo "\n";

// --------------------------------------------------
// key - إرجاع المفتاح الحالي للمؤشر الداخلي
// Example:
echo "--- key example ---\n";
$a=['a'=>1,'b'=>2];
echo key($a)."\n";
echo "\n";

// --------------------------------------------------
// krsort - فرز المفاتيح تنازليًا
// Example:
echo "--- krsort example ---\n";
$a=['b'=>2,'a'=>1];
krsort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// ksort - فرز المفاتيح تصاعديًا
// Example:
echo "--- ksort example ---\n";
$a=['b'=>2,'a'=>1];
ksort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// list - تفريغ عناصر مصفوفة إلى متغيرات
// Example:
echo "--- list example ---\n";
list($x,$y) = [5,10];
echo $x . ',' . $y ."\n";
echo "\n";

// --------------------------------------------------
// natcasesort - فرز طبيعي غير حساس للحالة
// Example:
echo "--- natcasesort example ---\n";
$a=['a1','A10','a2'];
natcasesort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// natsort - فرز طبيعي حساس للحالة
// Example:
echo "--- natsort example ---\n";
$a=['a1','a10','a2'];
natsort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// next - الانتقال إلى العنصر التالي للمؤشر الداخلي
// Example:
echo "--- next example ---\n";
$a=[1,2,3];
next($a);
echo current($a)."\n";
echo "\n";

// --------------------------------------------------
// pos - مرادف current()
// Example:
echo "--- pos example ---\n";
$a=[7,8,9];
echo pos($a)."\n";
echo "\n";

// --------------------------------------------------
// prev - التحرك للمؤشر السابق
// Example:
echo "--- prev example ---\n";
$a=[1,2,3];
next($a); prev($a);
echo current($a)."\n";
echo "\n";

// --------------------------------------------------
// range - إنشاء مصفوفة من نطاق أعداد/حروف
// Example:
echo "--- range example ---\n";
print_r(range(1,5));
print_r(range('a','d'));
echo "\n";

// --------------------------------------------------
// reset - إعادة المؤشر لأول عنصر وإرجاعه
// Example:
echo "--- reset example ---\n";
$a=[1,2,3];
next($a);
echo reset($a)."\n";
echo "\n";

// --------------------------------------------------
// rsort - فرز تنازلي بدون حفظ المفاتيح
// Example:
echo "--- rsort example ---\n";
$a=[3,1,2];
rsort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// shuffle - خلط المصفوفة عشوائياً
// Example:
echo "--- shuffle example ---\n";
$a=[1,2,3,4];
shuffle($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// sizeof - نفس count()
// Example:
echo "--- sizeof example ---\n";
echo sizeof([1,2,3])."\n";
echo "\n";

// --------------------------------------------------
// sort - فرز تصاعدي بدون حفظ المفاتيح
// Example:
echo "--- sort example ---\n";
$a=[3,1,2];
sort($a);
print_r($a);
echo "\n";

// --------------------------------------------------
// uasort - فرز حسب قيمة بدالة مخصصة مع حفظ المفاتيح
// Example:
echo "--- uasort example ---\n";
$a=['a'=>3,'b'=>1];
uasort($a, function($x,$y){ return $x<=>$y; });
print_r($a);
echo "\n";

// --------------------------------------------------
// uksort - فرز حسب المفتاح بدالة مخصصة
// Example:
echo "--- uksort example ---\n";
$a=['b'=>2,'a'=>1];
uksort($a, 'strcmp');
print_r($a);
echo "\n";

// --------------------------------------------------
// usort - فرز حسب القيمة بدالة مخصصة
// Example:
echo "--- usort example ---\n";
$a=[3,1,2];
usort($a, function($x,$y){ return $x<=>$y; });
print_r($a);
echo "\n";
echo "End of examples.\n";
?>