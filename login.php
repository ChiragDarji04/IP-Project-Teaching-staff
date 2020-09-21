<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to form page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: form.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to form page
                            header("location: form.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
    <title>Login</title>
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
                <div class="form-title-div d-flex justify-content-center ">
                    <h1 id="form-title">LOGIN</h1>
                </div>
                <!-- <p>Please fill in your credentials to login.</p> -->
                <div class="form_container">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div
                            class="d-flex justify-content-center input-group mb-4 form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <div><input type="text" name="username" placeholder="Username..." class="form-control"
                                    value="<?php echo $username; ?>"></div>
                            <div class="help-block"><?php echo $username_err; ?></div>

                        </div>
                        <div
                            class="d-flex justify-content-center input-group mb-2 form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <div><input type="password" name="password" placeholder="Password..." class="form-control">
                            </div>

                            <div class="help-block"><?php echo $password_err; ?></div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container form-group">
                            <input type="submit" class="btn btn-primary login_btn" value="Login">
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-center links">
                                <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>