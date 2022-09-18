<?php

$uname = $_POST['u-name'];
$pass = $_POST['u-pass'];


$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

$select_query_user_login_data = "select * from user_login_data where username='". $uname ."' and password='". $pass ."'";
$result_user = mysqli_query($conn,$select_query_user_login_data);
$row1 = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
$count_user = mysqli_num_rows($result_user);

$select_query_admin_login_data = "select * from admin_login_data where username='". $uname ."' and password='". $pass ."'";
$result_admin = mysqli_query($conn,$select_query_admin_login_data);
$row2 = mysqli_fetch_array($result_admin,MYSQLI_ASSOC);
// echo $row2['username'];
// $count_admin = mysqli_num_rows($result_admin);

if($row2['username'] == $uname && $row2['password'] == $pass){
    header("Location: admin.php");
}else{ 
    if($count_user == 1){
        $id = $row1['id'];
        header("Location: Dashboard/dashboard.php?id=".$id);
    }else{
        echo "<h1 style='color: red;'><center> Login Failed. Invalid Username or Password</h1>";
    }
}
?>