
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            background-color: rgb(245, 58, 58);
            color: white;
            padding: 10px;
            width: 100%;
            border-radius: 5px;  
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">  
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #022dba;">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="login.php" method="POST">
                    <div class="input-field">
                        <input type="text" name="u-name" placeholder="Enter your Username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="u-pass" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        <a href="forgot/forgot_ui.php" class="text">Forgot password?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="signup/signup.php" class="text signup-link">Signup Now</a>
                        <?php if(isset($_GET['error'])) { ?>
					<div class="error"><?php echo $_GET['error']; ?></div>
                <?php } ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</html>