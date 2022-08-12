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
    <title>Reset Password</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Reset Password</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="email" required />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" required name="password"/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" required name="confirmPassword"/>
            </div>
           
           
            <input type="submit"  value="reset Password" class="btn solid" name="resetPass"/>
        
          </form>


            <?php

            if(isset($_POST['resetPass'])){
                $email=$_POST['email'];
                $pass=$_POST['password'];
                $conPass=$_POST['confirmPassword'];


                try {
                    if ($pass !== $conPass) {
                        echo "<div style='text-align: center'><p style='color: red'>Passwords Don't Match!Try Again :)</p></div>";
                    } else {
                        $pass = password_hash($pass, PASSWORD_DEFAULT);
                        $DB1 = new mysqli('localhost', 'root', '', 'db');
                        $S = "select * from users1 ";
                        $received = $DB1->query($S);
                        for ($i = 0; $i < $received->num_rows; $i++) {
                            $row = $received->fetch_array();

                            $cid = $row[3];

                            $str1 = " UPDATE `users1` SET `usersPWD`= '$pass' WHERE `usersEmail`='$email'";
                            $DB1->query($str1);


                        }

                        $DB1->commit();
                        $DB1->close();
                        header("Location: try.php");

                    }
                }
                catch(Exception $e1){

                }
            }
            ?>
            <!-------------------------------------------->

        </div>
        
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <img src="images/9 SCENE.svg"  class="image" alt="" />
        </div>





  </body>
</html>