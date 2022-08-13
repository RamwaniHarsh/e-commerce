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

$select_query_login_data = "select * from login_data where username='". $uname ."' and password='". $pass ."'";
$result = mysqli_query($conn,$select_query_login_data);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    $id = $row['id'];
    header("Location: Dashboard/dashboard.php?id=".$id);
}else{
    echo "<h1 style='color: red;'><center> Login Failed. Invalid Username or Password</h1>";
}

?>