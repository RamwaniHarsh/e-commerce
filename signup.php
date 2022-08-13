<?php
require('connection.inc.php');
require('functions.inc.php');

$fname = $_POST['f-name'];
$lname = $_POST['l-name'];
$user = $_POST['u-name'];
$pass = $_POST['upass'];
$repass = $_POST['reupass'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['dateofbirth'];
$education = $_POST['education'];
$designation = $_POST['designation'];
$mobile = $_POST['mobilenumber'];
$email = $_POST['emailid'];

if(empty($user)){
    header("Location: index.php?error=Username is Required");
    exit();
}
if(! ($pass == $repass)){
    header("Location: index.php?error=Password Does not Match");
    exit();
}

$con=mysqli_connect("localhost","root","","project");
if($con===false){
    die("Failed to query Database ".mysql_error());
}

$sql = "insert into registration(fname, lname, uname, password, gender, dob, education, designation, mobile, email) values ('".$fname."','".$lname."','".$user."','".$pass."','".$gender."','".$date_of_birth."','".$education."','".$designation."','".$mobile."','".$email."')";
$result = mysqli_query($con,$sql) or die (mysqli_error($con));

if($result){
    echo "record inserted successfully";
}else{
    echo "record not inserted ".mysqli_error();
}

$sql2 = "insert into login(username, password, email) values ('".$user."','".$pass."','".$email."')";
$result2 = mysqli_query($con,$sql2);

if($result2){
    header("Location: dashboard.php");
    // echo "Login record inserted successfully";
}else{
    echo " record not inserted .mysqli_error()";
}

?>