<?php

// $_GET, $_POST, $_REQUEST - Methods
// ['controlname']

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gen = $_POST['gen'];
$contact = $_POST['contact'];

echo "<table>";

echo "Name: $name <br/>";
echo "Email: $email <br/>";
echo "Age: $age <br/>";
echo "Gender: $gen <br/>";
echo "Contact: $contact <br/>";

echo "</table>";
?>