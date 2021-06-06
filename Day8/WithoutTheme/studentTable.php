<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

// Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$query = mysqli_query(
    $connection,
    "select * from tbl_student where is_delete=0"
) or die("Error: ".mysqli_error($connection));

echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Date of Birth</th>";
echo "<th>Bloodgroup</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
echo "<th>Address</th>";
echo "<th>State</th>";
echo "<th>Country</th>";
echo "<th>Pincode</th>";
echo "<th>Action</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_bloodgroup']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_state']}</td>";
    echo "<td>{$row['st_country']}</td>";
    echo "<td>{$row['st_pincode']}</td>";
    echo "<td><a href='editStudent.php?editid={$row['st_id']}'>Edit</a> | <a href='deleteStudent.php?deleteid={$row['st_id']}'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";

echo "<br/>";
echo "<a href='insertStudent.php'>Insert Data</a>";

?>