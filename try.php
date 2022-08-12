<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Coursify/index.php");
    exit;
}

// Include config file
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "db";

$link = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if(isset($_POST["submitsignin"])) {

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
        $_SESSION["username"] = $username;
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
        $sql = "SELECT usersId, usersName, usersPWD FROM users1 WHERE usersName = ?";

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

                            // Redirect user to welcome page
                            header("location: Coursify/index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/stylelogin.css" />

    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" required name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" required name="password"/>

            </div>
            <a href="resetPass.php">Forgot Password?</a>
            <input type="submit" name="submitsignin" value="Sign In" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

        
          <form action="" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="password" />
            </div>
            <input type="submit" name="submitsignup" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>

          </form>

<?php

            function emptyInputSignup($name, $email, $password)
            {
                $result = false;
                if (empty($name) || empty($email) || empty($password))
                    $result = true;

                else
                    $result = false;

                return $result;
            }

            function invalidEmail($email)
            {
                $result = false;
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $result = true;
                } else {
                    $result = false;
                }
                return $result;
            }

            function uidExists($conn, $name, $email)
            {
                $result = false;
                $sql = "SELECT * FROM users1 WHERE usersName = ? or usersEmail = ?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "Statement Failed";
                }

                mysqli_stmt_bind_param($stmt, "ss", $name, $email);
                mysqli_stmt_execute($stmt);

                $resultData = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($resultData)) {
                    return $row;
                } else {
                    $result = false;
                    return $result;
                }
                mysqli_stmt_close($stmt);
            }

            $usernamedb = "root";
            $passworddb = "";
            $database = new PDO("mysql:host=localhost; dbname=db;",$usernamedb,$passworddb);





            if(isset($_POST['submitsignup'])){
                $name =$_POST['username'] ;
                $password =$_POST['password'] ;
                $password = password_hash($password, PASSWORD_DEFAULT);
                $email = $_POST['email'];

                if(emptyInputSignup($name, $email, $password) !== false){
                echo "<div style='text-align: center; color:red;'><p>Empty Input</p></div>";
            }

            elseif(invalidEmail($email) !== false){

              echo '<div style="text-align: center"><p style="color: red">Invalid Email!
              </p></div>';
            }


            else {

                $checkEmail = $database->prepare("SELECT * FROM users1 WHERE usersEmail = :EMAIL");
                $email = $_POST['email'];
                $checkEmail->bindParam("EMAIL",$email);
                $checkEmail->execute();

                if($checkEmail->rowCount()>0){
                    echo '<div style="text-align: center"><p style="color: red">This account is already used (your email is used before)!
      </p></div>';
                }else{

                    $addUser = $database->prepare("INSERT INTO 
                users1(usersName,usersPWD,usersEmail,SECURITY_CODE)
                 VALUES(:NAME,:PASSWORD,:EMAIL,:SECURITY_CODE)");


                    $addUser->bindParam("NAME",$name);
                    $addUser->bindParam("PASSWORD",$password);
                    $addUser->bindParam("EMAIL",$email);
                    $securityCode = md5(date("h:i:s"));
                    $addUser->bindParam("SECURITY_CODE",$securityCode);

                    if($addUser->execute()){
                        echo '<div style="text-align: center"><p style="color: #0a53be; font-size: 15px;">
            You have signed up successfully, Check your email so you can confirm your registration!
          </p></div>';

                        require_once "mail.php";
                        $mail->addAddress($email);
                        $mail->Subject = "رمز التحقق من بريد الكتروني";
                        $mail->Body = '<h1> شكرا لتسجيلك في موقعنا</h1>'
                            . "<div> رابط التحقق من الحساب" . "<div>" .
                            "<a href='http://localhost/coursify_website/active.php?code=".$securityCode  . "'>
           " . "http://localhost/coursify_website/active.php?code=" .$securityCode . "</a>";
                        ;
                        $mail->setFrom("sondoshijab9102001@gmail.com", "Coursify Website Email Confirmation");
                        $mail->send();


                    }else{
                        echo '<div class="alert alert-danger" role="alert">
            Something Wrong Happened!
          </div>';
                    }

            }


                }

            }
            ?>
        </div>
        
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>

            
          </div>
          <img src="images/9 SCENE.svg"  class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/4 SCENE.svg"  class="image" alt="" />
        </div>
      </div>
    </div>


    <script src="app.js"></script>
  </body>
</html>