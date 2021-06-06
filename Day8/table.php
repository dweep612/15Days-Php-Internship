<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

// Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$query = mysqli_query(
    $connection,
    "select * from tbl_user where is_delete=0"
) or die("Error: ".mysqli_error($connection));

echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='edit.php?editid={$row['user_id']}'>Edit</a> | <a href='delete.php?deleteid={$row['user_id']}'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";

echo "<br/>";
echo "<a href='insertData.php'>Insert Data</a>";

?>