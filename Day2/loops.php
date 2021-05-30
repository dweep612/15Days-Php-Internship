<?php

// Variables
$a = 80;

// if-else loop
echo "if-else loop<br/>";
if ($a == 50) {
    echo "a = 50";
} else if ($a > 50) {
    echo "a > 50";
} else {
    echo "a < 50";
}

// switch loop
$b = 2;

echo "<br/><br/>switch loop<br/>";

switch ($b) {
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    default:
        echo "Please select number between 1 to 3";
}

?>