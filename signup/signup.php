<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";
    $conn = mysqli_connect($hostname,$username,$password,$dbname);

    $query1 = "select * from tbl_countries";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "select * from tbl_states";
    $result2= mysqli_query($conn, $query2);
    
    $country = "";
    $state = "";
    $city = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error
{   
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    background-color: rgb(245, 58, 58);
    color: white;
    padding: 10px;
    width: 25%;
    border-radius: 5px;  
}
#message {
  display: none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 10px;
}
.valid {
    display: block;
    color: green;
}

.valid:before {
    display: block;
    position: relative;
    left: -35px;
    content: "&#10004;";
}

.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&#10006;";
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/harsh2/test/css/style1.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Regisration Form</title> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="signup_data.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="f-name" placeholder="Enter your first name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="l-name" placeholder="Enter your last name" required>
                        </div>

                        <div class="input-field">
                            <label>User Name</label>
                            <input type="text" name="u-name" placeholder="Enter your Username" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" id="psw" name="u-pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>
                           
                        </div>
                        

                        <div class="input-field">
                            <label>Confirm Password</label>
                            <input type="password" id="psw" name="confirm-name" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Confirm password" required>
                        </div>
                        <div class="pavalidate" id="message">
                            <h3>Password must contain the following: </h3>
                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                            <p id="number" class="invalid">A <b>number</b></p>
                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                        </div> 
                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                                       
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dateofbirth" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Education</label>
                            <select required name="education">
                                <option disabled selected>Select Education</option>
                                <option>B.Tech.</option>
                                <option>B.COM</option>
                                <option>B.B.A.</option>
                                <option>B.A.</option>
                                <option>B.Ed.</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Designation</label>
                            <input type="text" name="designation" placeholder="Enter your current designation" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobilenumber" placeholder="Enter mobile number" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="emailid" placeholder="Enter your email id" required>
                        </div>
   
                    </div>

                    <?php if(isset($_GET['error'])) { ?>
					<div class="error "><?php echo $_GET['error']; ?>
                            <div class="error-circle">X</div>
                    </div>
                <?php } ?>
                    <button type="$this" class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button> 
                    
                </div>

            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <select required name="address-type">
                                <option disabled selected>Select Address Type</option>
                                <option>Permanent</option>
                                <option>Temporary</option>
                                
                            </select>
                        </div> 

                        <div class="input-field">
                            <label>Nationality Type</label>
                            <select required name="na-type">
                                <option disabled selected>Select Nationality Type</option>
                                <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                                <option value="<?php echo $row1[2]; ?>"><?php echo $row1[2]; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <select required name="st-type" id="st-type" onchange="myFunction()">
                                <option disabled selected>Select State</option>
                                <?php while($row2 = mysqli_fetch_array($result2)):; ?>
                                <option value="<?php echo $row2[1]; ?>"><?php echo $row2[1]; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>


                        <?php
                             // $row2 = mysqli_fetch_array($result2);
                        // while($row2){
                        //     $state = $row2[0];
                        //     if($state[0]){
                                

                        //         $state_query = "select * from tbl_cities where state_id = '".$state_change."'";
                        //         $result3 = mysqli_query($conn, $state_query);
                        //     }
                        // }
                        $query3 = "select * from tbl_cities ORDER BY name ASC";
                        $result3 = mysqli_query($conn, $query3);
                        ?>
                        


                        <div class="input-field">
                            <label>City </label>
                            <select required name="city">
                                <option disabled selected>Select City</option>
                                <?php while($row3 = mysqli_fetch_array($result3)):; ?>
                                <option value="<?php echo $row3[1]; ?>"><?php echo $row3[1]; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Address Line 2</label>
                            <textarea placeholder="Enter Your Address" id="address" name="address-line" rows="3" cols="3" required></textarea>
                        </div>
                        
                        <div class="input-field">
                            <label>Block Number / Flat No. / House No. </label>
                            <input type="text" name="block-no" placeholder="Enter block number" required>
                        </div>
                        

                        <div class="input-field">
                            <label>PIN code</label> 
                            <input type="number" name="pin-no" placeholder="Enter PIN number" required>
                        </div>
                    </div>
                </div>

                <div class="backBtn">
                    <i class="uil uil-navigator"></i>
                    <span class="btnText">Back</span>
                </div>

                <div class="input-field">
                    <input type="submit" value="submit">
                        <?php if(isset($_GET['error'])) { ?>
					<div class="error"><?php echo $_GET['error']; ?></div>
                <?php } ?>
                </div>
                <h4><a href="/index.php">Click Here for Login</a></h4>
            </div>
        </form>
    </div>

    <script src="/harsh2/test/js/script1.js"></script>
    <script>
        alert("I am an alert box!");
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>
</html>