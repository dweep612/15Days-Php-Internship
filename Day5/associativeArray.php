<?php

// Associative Array - Key => Value

// Method 1
$a[0] = 10;
$a["p"] = "Php";
$a["php"] = "Web Development";
$a[5] = "Five";
$a[10] = 10.50;


// Method 2 - Always use this method, this is proper method to use array in php.
$a = array (
    0 => 10,
    "p" => "Php",
    "php" => "Web Development",
    5 => "Five",
    10 => 10.50
);

echo "Php for ".$a["php"];

foreach ($a as $value) {
    echo "<br/>Value is $value";
}

foreach ($a as $key => $value) {
    echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}

// Inbuilt functions toDebug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>