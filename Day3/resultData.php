<?php

$name = $_POST['name'];
$py = $_POST['py'];
$ad = $_POST['ad'];
$mp = $_POST['mp'];
$cs = $_POST['cs'];
$cc = $_POST['cc'];

echo "<table>";

echo "Name: $name <br/><br/>";
echo "<b>Marks</b> <br/>";
echo "Python: $py <br/>";
echo "Advance Java: $ad <br/>";
echo "Microprocessor: $mp <br/>";
echo "Cyber Security: $cs <br/>";
echo "Cloud Computing: $cc <br/>";

$total = ($py + $ad + $mp + $cs + $cc);

echo "<br/><b>Total<b>: $total<br/>";

$percentage = ($total/5);

echo "Percentage: $percentage<br/>";

if($percentage >= 80) {
    echo "<font color='green'><b>$name has pass the exam with first class rank.</b></font>";
} else if($percentage >= 70) {
    echo "<font color='yellow'><b>$name has pass the exam with second class rank.</b></font>";
} else if ($percentage >= 50) {
    echo "<font color='blue'><b>$name has pass the exam.</b></font>";
} else {
    echo "<font color='red'><b>$name has fail the exam.</b></font>";
}

echo "</table>";
?>