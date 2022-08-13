<!DOCTYPE html>
<html lang="en">
<head>
<style>
	.error
{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: bold;
  background-color: rgb(245, 58, 58);
  color: white;
  padding: 10px;
  width: 95%;
  border-radius: 5px;  
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Regisration Form</title> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="signup.php" method="POST">
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
                            <label>UserName</label>
                            <input type="text" name="u-name" placeholder="Enter your username" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="upass" placeholder="Enter password" required>
                        </div>

                        <div class="input-field">
                            <label>Retype Password</label>
                            <input type="password" name="reupass" placeholder="Enter password" required>
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
                            <input type="email" name="emailid" placeholder="Enter your email" required>
                        </div>
   
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>

                    <h4><a href="login.php">Click Here for Login</a></h4>
                
                </div>

            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <select required>
                                <option disabled selected>Select Address Type</option>
                                <option>Permanent</option>
                                <option>Temporary</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter your city" required>
                        </div>

                        <div class="input-field">
                            <label>Block Number / Flat No. / House No. </label>
                            <input type="number" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>PIN code</label>
                            <input type="number" placeholder="Enter PIN number" required>
                        </div>
                    </div>
                </div>

                <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                <input type="submit" value="submit">
                <?php if(isset($_GET['error'])) { ?>
					<div class="error"><?php echo $_GET['error']; ?></div>
                <?php } ?>
                
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>