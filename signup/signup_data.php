<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        $signup_data = [
        "f_name" => $_POST['f-name'],
        "l_name" => $_POST['l-name'],
        "u_name" => $_POST['u-name'],
        "u_pass" => $_POST['u-pass'],
        "gender" => $_POST['gender'],
        "dob" => $_POST['dateofbirth'],
        "education" => $_POST['education'],
        "designation" => $_POST['designation'],
        "mobile" => $_POST['mobilenumber'],
        "email" => $_POST['emailid'],
        "addr_type" => $_POST['address-type'],
        "nat_type" => $_POST['na-type'],
        "sta_type" => $_POST['st-type'],
        "city" => $_POST['city'],
        "address_line" => $_POST['address-line'],
        "block_no" => $_POST['block-no'],
        "pin_number" => $_POST['pin-no'],
        ];

        // print_r($signup_data);
        // header("Location:index.php?signup-successfully");
        $conn = mysqli_connect($hostname,$username,$password,$dbname);

        $select_query_user_data = mysqli_query( $conn,"select * from user_data where username='". $signup_data['u_name'] ."'");
        $select_query_login_data = mysqli_query( $conn,"select * from user_login_data where username='". $signup_data['u_name'] ."'");
        $insert_query_user_data = "insert into user_data (first_name, last_name, username, password, gender, dateofbirth, education, designation, mobile, email, address_type, nationality, state, city, address_line, block_no, pin_no) VALUES ('". $signup_data['f_name'] ."','". $signup_data['l_name'] ."','". $signup_data['u_name'] ."','". $signup_data['u_pass'] ."','". $signup_data['gender'] ."','". $signup_data['dob'] ."','". $signup_data['education'] ."','". $signup_data['designation'] ."',". $signup_data['mobile'] .",'". $signup_data['email'] ."','". $signup_data['addr_type'] ."','". $signup_data['nat_type'] ."','". $signup_data['sta_type'] ."','". $signup_data['city'] ."','". $signup_data['address_line'] ."','". $signup_data['block_no'] ."',". $signup_data['pin_number'] .")";
        $insert_query_login_data = "insert into user_login_data (username, password, mobile, email) VALUES ('". $signup_data['u_name'] ."','". $signup_data['u_pass'] ."',". $signup_data['mobile'] .",'". $signup_data['email'] ."')";

        $check_user_data = mysqli_num_rows($select_query_user_data);
        $check_login_data = mysqli_num_rows($select_query_login_data);
        if(($check_user_data > 0) && ($check_login_data > 0)){
                header("Location: /harsh2/test/signup/signup.php?error=userexist");
        }else{
                $result1 = mysqli_query($conn,$insert_query_user_data) or die("Error Querying Database.....");
                $result2 = mysqli_query($conn,$insert_query_login_data) or die("Error Querying Database.....");
                header("Location: /harsh2/test/index.php");
                mysqli_close($conn); 
        }
        



        // if(($conn -> query($insert_query_user_data) == TRUE) && ($conn -> query($insert_query_login_data) == TRUE )){
                // echo "Record Inserted Successfully";
                // header("Location: /index.php");
        // }else{
                // "Error : ". $sql ."<br>". $conn->error;
        // }
        // $conn -> close();
?>