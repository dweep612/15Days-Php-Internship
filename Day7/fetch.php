<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

// Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$query = mysqli_query(
    $connection,
    "select * from tbl_user"
) or die("Error: ".mysqli_error($connection));

// Function 1 - fetch data as a numerical array
$row = mysqli_fetch_row($query);
print_r($row);
echo "<br/>";
echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];

// Function 2 - fetch data as a numerical and associative array
$row = mysqli_fetch_array($query);
echo "<pre>";
print_r($row);
echo "</pre>";
echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];
echo "<br/>";
echo $row['user_id']." ".$row['user_name']." ".$row['user_gender']." ".$row['user_mobile'];

?>