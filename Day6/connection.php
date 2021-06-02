<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

// Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$query = mysqli_query(
    $connection,
    "insert into tbl_user(user_name, user_gender, user_mobile) values('Marry', 'Female', 8798798797)"
) or die("Error: ".mysqli_error($connection));

if($query) {
    echo "<script>alert('Record Added!')</script>";
}

?>