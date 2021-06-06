<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

// Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

if(!isset($_GET['editid']) || empty($_GET['editid'])) {
    header("location:table.php");
}

$id = $_GET['editid'];

$editq = mysqli_query(
    $connection,
    "select * from tbl_user where user_id='{$id}'"
) or die("Error: ".mysqli_error($connection));

$data = mysqli_fetch_array($editq);

if($_POST) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    $uq = mysqli_query(
        $connection,
        "update tbl_user set user_name='{$name}', user_gender='{$gender}', user_mobile='{$mobile}' where user_id='{$id}'"
    ) or die("Error: ".mysqli_error($connection));
    
    if($uq) {
        echo "<script>alert('Data Updated!');window.location='table.php';</script>";
    }
}

?>

<html>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Name: <input type="text" name="name" value="<?php echo $data['user_name']; ?>" required></td>
            </tr>
            <tr>
                <td>Gender: <input type="radio" name="gender" value="Male" <?php if($data['user_gender']=='Male') {echo "checked";} ?> required>Male <input type="radio" name="gender" value="Female" <?php if($data['user_gender']=='Female') {echo "checked";} ?> required>Female</td>
            </tr>
            <tr>
                <td>Mobile: <input type="number" value="<?php echo $data['user_mobile']; ?>"" name="mobile" required></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Update">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
