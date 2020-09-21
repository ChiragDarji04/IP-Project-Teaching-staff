<?php 
include "config.php";
?>

<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = $password; // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #7abecc !important;
        }

        .h-100 {
            display: flex !important;
            justify-content: center !important;
        }

        .user_card {
            width: 500px;
            margin: auto;
            background: #74cfbf;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }

        .form_container {
            margin-top: 40px;
            margin-bottom: 10px;
        }

        #form-title {
            color: #ffffff;
        }

        .login_btn {
            width: 100%;
            background: #33ccff !important;
            color: white !important;
            margin: 20px;
            font-size: x-large;
            border: 0px !important;
        }

        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .login_btn:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .login_container {
            padding: 0 2rem;
            width: 100%;
            height: 6rem;
        }

        .input-group-text {
            background: #f7ba5b !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
            font-size: x-large;

        }

        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .input-group,
        input[type="text"],
        input[type="password"] {
            width: 100%;
            height: 4rem;
            font-size: x-large;
        }
        @media (max-width:600px) {
            .h-100{
                width: 110%;
            }
             
        }
    </style>
</head>

<body>
    <div class="container h-100">
        <div class="h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <h3 id="form-title">REGISTER ACCOUNT</h3>
                </div>
                <div class="d-flex justify-content-center form_container">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div
                            class="d-flex justify-content-center  input-group mb-4 form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <div><input type="text" name="username" placeholder="Username..." class="form-control"
                                    value="<?php echo $username; ?>"></div>
                            <div class="help-block"><?php echo $username_err; ?></div>
                        </div>
                        <div
                            class="d-flex justify-content-center input-group mb-4 form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <div><input type="password" name="password" placeholder="Password..." class="form-control"
                                    value="<?php echo $password; ?>"></div>
                            <div class="help-block"><?php echo $password_err; ?></div>
                        </div>
                        <div
                            class="d-flex justify-content-center input-group mb-4 form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <div><input type="password" name="confirm_password" placeholder="Confirm Password..."
                                    class="form-control" value="<?php echo $confirm_password; ?>"></div>
                            <div class="help-block"><?php echo $confirm_password_err; ?></div>
                        </div>
                        <div class="form-group d-flex justify-content-center mt-3 login_container">
                            <input type="submit" class="btn btn-primary login_btn" value="Submit">
                            <!-- <input type="reset" class="btn btn-default login_btn" value="Reset"> -->
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-center links">
                                <p>Already have an account? <a href="login.php">Login here</a>.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>