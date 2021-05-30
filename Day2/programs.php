<?php

// Palindrome
echo "Palindrome";
$a=404;
$b=$a;
$rev=0;
while($a>0){
      $temp=$a%10;
      $rev=($rev*10)+$temp;
      $a=(int)($a/10);
}
  
if($rev==$b){
      echo "<br/>Number is Palindrome";
} else{
      echo "<br/>Number is Not Palindrome";
}

// Even/Odd
echo "<br/><br/>Even/Odd<br/>";
$a = 20;
if($a%2 == 0) {
    echo "$a is a even number";
} else {
    echo "$a is a odd number";
}

// Leap Year
echo "<br/><br/>Leap Year<br/>";
$year = 2020;
if($year%4 == 0) {
    echo "$year is a leap year";
} else {
    echo "$a is not a leap year";
}

// Prime Number
echo "<br/><br/>Prime Number<br/>";
$num = 5;
$n= $num/2;
$flag=0;
for($i=2; $i<=$n; $i++) {
    if($num%$i == 0) {
        echo "$num is not prime number";
        $flag = 1;
        break;
    }
}
if($flag == 0) {
    echo "$num is prime number";
}

?>