<?php

$numArr = array(10, 20, 30, 40, 50);

echo "count: ".count($numArr);

$assArr = array("PHP", "Nodejs", "Reactjs", "PHP");

$newarr = array_count_values($assArr);
echo "<br/><br/>array_count_values: <br/>";
foreach ($newarr as $key => $value) {
    echo "$key => $value <br/>";
}

echo "<br/>array_sum: ".array_sum($numArr);

echo "<br/><br/>array_product: ".array_product($numArr);

echo "<br/><br/>array_reverse: ";
$revArr = array_reverse($numArr);
echo "<pre>";
print_r($revArr);
echo "</pre>";

echo "in_array: ";
$temp = in_array("PHP", $assArr);
echo $temp;

echo "<br/><br/>array_rand: ";
$arrayIndex = array_rand($numArr);
echo $numArr[$arrayIndex];

echo "<br/><br/>array_unique: ";
echo "<pre>";
print_r(array_unique($assArr));
echo "</pre>";

echo "array_merge: ";
$mergeArr = array_merge($numArr, $assArr);
echo "<pre>";
print_r($mergeArr);
echo "</pre>";

echo "array_search: ";
$check = array_search("Nodejs", $assArr);
echo $check;

echo "<br/><br/>range: ";
$arr = range("10", "20");
foreach ($arr as $value) {
    echo "$value, ";
}

$arr = array(50, 10, 100, 80, 30);

echo "<br/><br/>sort:";
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "rsort:";
rsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "asort:";
asort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr = array(
    "P" => "PHP",
    "N" => "Nodejs",
    "R" => "Reactjs",
    "D" => "Django"
);

echo "ksort: <br/>";
ksort($arr);
foreach ($arr as $key => $value) {
    echo "$key => $value <br/>";
}

echo "<br/>krsort: <br/>";
krsort($arr);
foreach ($arr as $key => $value) {
    echo "$key => $value <br/>";
}

echo "<br/>shuffle: <br/>";
shuffle($assArr);
foreach ($assArr as $value) {
    echo "$value <br/>";
}

echo "<br/>array_key_exists: ";
echo array_key_exists('P', $arr);

echo "<br/><br/>array_change_key_case: ";
$lower = array_change_key_case($arr, CASE_LOWER);
echo "<pre>";
print_r($lower);
echo "</pre>";

echo "array_combine: ";
$arr1 = array("Watermelon", "Mango");
$arr2 = array("Red", "Green");
$combine = array_combine($arr1, $arr2);
echo "<pre>";
print_r($combine);
echo "</pre>";

echo "end: ";
echo end($assArr);

echo "<br/><br/>compact: ";
$firstname = "Alex";
$lastname = "Johnson";
$compact = compact("firstname", "lastname");
echo "<pre>";
print_r($compact);
echo "</pre>";

echo "array_flip: ";
$flipArray = array_flip($arr);
echo "<pre>";
print_r($flipArray);
echo "</pre>";

echo "array_diff: ";
$arr1 = array("PHP", "Nodejs", "Reactjs");
$arr2 = array("PHP", "Django", "Reactjs");
$diff = array_diff($arr1, $arr2);
echo "<pre>";
print_r($diff);
echo "</pre>";

echo "array_intersect: ";
$arr1 = array(
    0 => "PHP", 
    1 => "Nodejs", 
    2 => "Reactjs"
);
$arr2 = array(
    3 => "PHP", 
    4 => "Django", 
    5 => "Reactjs"
);
$intersect = array_intersect($arr1, $arr2);
echo "<pre>";
print_r($intersect);
echo "</pre>";

echo "array_values: ";
$arrValues = array_values($arr);
foreach ($arrValues as $key => $value) {
   echo "<br/> $key => $value";
}

echo "<br/><br/>array_push: ";
array_push($numArr, 60, 70);
echo "<pre>";
print_r($numArr);
echo "</pre>";

echo "array_pop: ";
array_pop($numArr);
echo "<pre>";
print_r($numArr);
echo "</pre>";

echo "explode: ";
$string = "I Love PHP";
$arr1 = explode(" ", $string);
echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "implode: ";
$arr1 = array("I", "Love", "PHP.");
$string = implode(" ", $arr1);
echo "$string";

?>