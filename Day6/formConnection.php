<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

// Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

if($_POST) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    $query = mysqli_query(
        $connection,
        "insert into tbl_user(user_name, user_gender, user_mobile) values('$name', '$gender', '$mobile')"
    ) or die("Error: ".mysqli_error($connection));
    
    if($query) {
        echo "<script>alert('Record Added!')</script>";
    }
}

?>

<html>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Name: <input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Gender: <input type="text" name="gender" required></td>
            </tr>
            <tr>
                <td>Mobile: <input type="number" name="mobile" required></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>