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
    "select * from tbl_student where st_id='{$id}'"
) or die("Error: ".mysqli_error($connection));

$data = mysqli_fetch_array($editq);

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

    $uq = mysqli_query(
        $connection,
        "update tbl_student set st_name='{$name}', st_gender='{$gender}', st_dob='{$dob}', st_bloodgroup='{$bg}', st_email='{$email}', st_mobile='{$mobile}', st_address='{$address}', st_state='{$state}', st_country='{$country}', st_pincode='{$pincode}' where st_id='{$id}'"
    ) or die("Error: ".mysqli_error($connection));
    
    if($uq) {
        echo "<script>alert('Data Updated!');window.location='studentTable.php';</script>";
    }
}

?>

<html>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Name: <input type="text" name="name" value="<?php echo $data['st_name']; ?>" required></td>
            </tr>
            <tr>
                <td>Gender: 
                    <select name="gender" id="gender">
                        <option value="Male" <?php if($data['st_gender']=='Male') {echo "selected";} ?> >Male</option>
                        <option value="Female" <?php if($data['st_gender']=='Female') {echo "selected";} ?>>Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth: <input type="date" name="dob" value="<?php echo $data['st_dob']; ?>" required></td>
            </tr>
            <tr>
                <td>Blood Group: 
                    <select name="bg" id="bg">
                        <option value="A+" <?php if($data['st_bloodgroup']=='A+') {echo "selected";} ?> >A+</option>
                        <option value="B+" <?php if($data['st_bloodgroup']=='B+') {echo "selected";} ?> >B+</option>
                        <option value="AB+" <?php if($data['st_bloodgroup']=='AB+') {echo "selected";} ?> >AB+</option>
                        <option value="AB-" <?php if($data['st_bloodgroup']=='AB-') {echo "selected";} ?> >AB-</option>
                        <option value="O+" <?php if($data['st_bloodgroup']=='O+') {echo "selected";} ?> >O+</option>
                        <option value="O-" <?php if($data['st_bloodgroup']=='O-') {echo "selected";} ?> >O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email: <input type="email" name="email" value="<?php echo $data['st_email']; ?>" required></td>
            </tr>
            <tr>
                <td>Mobile: <input type="number" name="mobile" value="<?php echo $data['st_mobile']; ?>" required></td>
            </tr>
            <tr>
                <td>Address: <textarea name="address" id="address" cols="50" rows="3" required><?php echo $data['st_address']; ?></textarea></td>
            </tr>
            <tr>
                <td>State: <input type="text" name="state" value="<?php echo $data['st_state']; ?>" required></td>
            </tr>
            <tr>
                <td>Country: <input type="text" name="country" value="<?php echo $data['st_country']; ?>" required></td>
            </tr>
            <tr>
                <td>Pincode: <input type="number" name="pincode" value="<?php echo $data['st_pincode']; ?>" required></td>
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
