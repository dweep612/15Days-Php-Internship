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
    $dob = $_POST['dob'];
    $bg = $_POST['bg'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];

    $query = mysqli_query(
        $connection,
        "insert into tbl_student(st_name, st_gender, st_dob, st_bloodgroup, st_email, st_mobile, st_address, st_state, st_country, st_pincode) values('$name', '$gender', '$dob', '$bg', '$email', '$mobile', '$address', '$state', '$country', '$pincode')"
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
                <td>Gender: 
                    <select name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth: <input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td>Blood Group: 
                    <select name="bg" id="bg">
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email: <input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Mobile: <input type="number" name="mobile" required></td>
            </tr>
            <tr>
                <td>Address: <textarea name="address" id="address" cols="50" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>State: <input type="text" name="state" required></td>
            </tr>
            <tr>
                <td>Country: <input type="text" name="country" required></td>
            </tr>
            <tr>
                <td>Pincode: <input type="number" name="pincode" required></td>
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