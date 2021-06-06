<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

// Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$id = $_GET['deleteid'];

$query = mysqli_query(
    $connection,
    "update tbl_student set is_delete=1 where st_id='${id}'"
) or die("Error: ".mysqli_error($connection));

if($query) {
    echo "<script>alert('Data Deleted!');window.location='studenttable.php';</script>";
}

?>