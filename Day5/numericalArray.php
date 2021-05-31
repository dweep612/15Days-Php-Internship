<?php

// Numerical Array

// Method 1
$a[0] = 5;
$a[1] = 50;
$a[2] = 5.50;
$a[3] = "A";
$a[4] = "5";

// Method 2 - Index Dynamic Array
$a[] = 5;
$a[] = 50;
$a[] = 5.50;
$a[] = "A";
$a[] = "5";

// Method 3 - Always use this method, this is proper method to use array in php.
$a = array(5, 50, 5.50, "A", "5");

// Print
echo $a[1];

// Print whole array using for loop
echo "<br/>for loop";
for($i=0; $i < count($a); $i++) {
    echo "<br/> $a[$i]";
}

// Print whole array using while loop
echo "<br/>while loop";
$i = 0;
while ($i < count($a)) {
    echo "<br/> $a[$i]";
    $i++;
}

// Print whole array using do-while loop
echo "<br/>do-while loop";
$i = 0;
do {
    echo "<br/> $a[$i]";
    $i++;
} while ($i < count($a));

// Inbuilt functions toDebug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>