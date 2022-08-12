<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- bootstrap css -->
<!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 -->    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- main template css file -->
    <link rel="stylesheet" href="CSS/mainStyle.css">
    <link rel="stylesheet" href="CSS/aboutUs.css">
    <link rel="stylesheet" href="CSS/ourCourses.css">

    <!-- Font awesome library -->
    <link rel="stylesheet" href="CSS/all.min.css">
    <!-- render all elements normally -->
    <link rel="stylesheet" href="CSS/normalize.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 -->
 <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- start header -->
<div class="header">
    <div class="container">
        <a href="#" class="logo">Coursify</a>
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            <li><a href="index.php#blog">Blog</a></li>
            <li><a href="#OtherLinks">Other Links</a>
                <!--  start mega menu -->
                <div class="mega-menu">
                    <div class="image">
                        <img src="images/landingPageImage-02.png" alt="">
                    </div>
                    <ul class="links">
                        <li><a href="index.php#testimonials"><i class="fa-regular fa-comment-dots"></i>Testimonials</a></li>
                        <li><a href="aboutUs.html#services"><i class="fa-solid fa-bolt"></i>Features</a></li>
                        <li><a href="aboutUs.html#pricing"><i class="fa-regular fa-rectangle-list"></i>Pricing Plans</a></li>
                        <li><a href="index.php#blog"><i class="fa-regular fa-paste"></i>Articles</a></li>
                        <li><a href="index.php#team"><i class="fa-solid fa-user-group"></i>Team Members</a></li>
                        <li><a href="index.php#categories"><i class="fa-solid fa-list-ul"></i>Categories</a></li>
                    </ul>
                    <ul class="links">
                        <li><a href="ourCourses.php#courses"><i class="fa-solid fa-fire"></i>Recommended courses</a></li>
                        <li><a href="ourCourses.php#our-skills"><i class="fa-regular fa-square-plus"></i>Skills you can improve</a></li>
                        <li><a href="index.php#events"><i class="fa-regular fa-calendar-check"></i>Last Events</a></li>
                        <li><a href="index.php#stats"><i class="fa-solid fa-signal"></i>Our Statistics</a></li>
                        <li><a href="contact.php#discount"><i class="fa-solid fa-percent"></i>Ask for a discount</a></li>
                        <li><a href="index.php#subscribe"><i class="fa-regular fa-newspaper"></i>Newletter subscription</a></li>
                    </ul>
                </div>

                <!--  end mega menu -->
            </li>
            <li><a href="contact.php#contact">Contact Us</a></li>
            <li><a href="login_signup.php">Sign In</a></li>
            <li><a href="login_signup.php">Sign Up</a></li>

        </ul>
    </div>
</div>
<!-- end header -->
<!-- Start Video -->
 <div class="video">
    <video autoplay muted loop>
      <source src="video2.mp4" type="video/mp4" />
    </video>
  </div>
  <!-- End Video -->

  <!-- Start Discount -->
  <div class="discount" id="discount">
    <div class="image">
      <div class="content">
        <h2>You Can Have A Discount</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur, recusandae
          ratione provident necessitatibus, cumque delectus commodi fuga praesentium beatae. Totam vel similique
          laborum dicta aperiam odit doloribus corporis.
        </p>
        
      </div>
    </div>
    <div class="form">
      <div class="content">
        <h2>Request A Discount</h2>
        <form action="contact.php#discount" method="POST">
          <input required class="input" type="text" placeholder="Your Name" name="nameDis" />
          <input required class="input" type="email" placeholder="Your Email" name="emailDis" />
          <input  class="input" type="text" placeholder="Your Phone" name="mobileDis" />
          <textarea required class="input" placeholder="Tell Us About Your Needs" name="messageDis"></textarea>
          <input type="submit" name="submitDiscount"value="Send" />
        </form>

      </div>
      
            <!-- start php -->
            <?php
            if(isset($_POST['submitDiscount'])&& isset($_POST['nameDis']) && isset($_POST['emailDis'])&&isset($_POST['mobileDis'])&&isset($_POST['messageDis'])){
                $nameDis=$_POST['nameDis'];
                $emailDis=$_POST['emailDis'];
                $mobileDis=$_POST['mobileDis'];
                $messageDis=$_POST['messageDis'];
                $index = 0;
                try{
                $DB=new mysqli('localhost','root','','db');
                $str="INSERT INTO `discountrequests`(`requestId`, `Name`, `Mobile`, `Email`, `Message`) VALUES ('".$index."',' ".$nameDis."',' ".$mobileDis."',' ".$emailDis."',' ".$messageDis."')";
                $DB->query($str);
                $DB->commit();
                $DB->close();
                echo "<div text-align='center'><p>Your request will be reviewed soon!</p></div>";

                    }catch(Exception $e) {
                        echo "<div text-align='center'><p>Error Happened</p></div>";
                    }
                        }

        ?>
        <!-- end php -->
    </div>

  </div>
  <!-- End Discount -->

      <!-- Start Contact -->
      <div class="contact" id="contact">
        <div class="container">
          <div class="main-heading">
            <h2>Contact Us</h2>
            <p>
              Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget
              tincidunt.
            </p>
          </div>
          <div class="content">
            <form action="contact.php#contact" method="POST">
              <input required class="main-input" type="text" name="name" placeholder="Your Name" />
              <input required class="main-input" type="email" name="mail" placeholder="Your Email" />
              <textarea required class="main-input" name="message" placeholder="Your Message"></textarea>
              <input type="submit" value="Send Message" name="submitContact" />
            </form>
            <div class="info">
              <h4>Get In Touch</h4>
              <span class="phone"> +972 593 907 273</span>
              <span class="phone">+972 256 185 756</span>
              <h4>Our Location</h4>
              <address>Palestine<br />Nablus<br />An-Najah University<br />Engineering Faculty</address>
            </div>


                     
          </div>
           <!-- start php -->
          <?php
            if(isset($_POST['submitContact'])&& isset($_POST['name']) && isset($_POST['mail'])&&isset($_POST['message'])){
                $name=$_POST['name'];
                $mail=$_POST['mail'];
                $message=$_POST['message'];
                $index = 0;
                try{
                $DB=new mysqli('localhost','root','','db');
                $str=" INSERT INTO `contactrequests` (`requestId`, `Name`, `Email`, `Messge`) VALUES ('".$index."',' ".$name."',' ".$mail."',' ".$message."')";
                $DB->query($str);
                $DB->commit();
                $DB->close();
                echo "<p>Your message will be reviewed soon!</p>";

                    }catch(Exception $e) {
                        echo "error happened";
                    }
                        }

        ?>
        <!-- end php -->

        </div>
      </div>
      <!-- End Contact -->

      <!-- Start Footer -->
      <div class="footer">
        <div class="container">
          <div class="box">
            <a href="#" class="logo">Coursify</a>
            <ul class="social">
              <li>
                <a href="#" class="facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#" class="twitter">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#" class="youtube">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
            <p class="text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus nulla rem, dignissimos iste aspernatur
            </p>
          </div>
            <div class="box">
                <ul class="links">
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="index.php#blog">Blog</a></li>
                    <li><a href="index.php#features">Features</a></li>
                    <li><a href="aboutUs.html#pricing">Pricing Plans</a></li>
                    <li><a href="contact.php#discount">Ask for a discount</a></li>
                </ul>
            </div>
          <div class="box">
            <div class="line">
              <i class="fas fa-map-marker-alt fa-fw"></i>
              <div class="info">Palestine, Nablus, NNU</div>
            </div>
            <div class="line">
              <i class="far fa-clock fa-fw"></i>
              <div class="info">Business Hours: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 09:00 AM To 05:00 PM</div>
            </div>
            <div class="line">
              <i class="fas fa-phone-volume fa-fw"></i>
              <div class="info">
                <span>+972 593 907 273</span>
                <span>+972 256 185 756</span>
              </div>
            </div>
          </div>
          <div class="box footer-gallery">
            <img src="images/gallery/1.jpg" alt="" />
            <img src="images/gallery/2.jpg" alt="" />
            <img src="images/gallery/3.jpg" alt="" />
            <img src="images/gallery/4.jpg" alt="" />
            <img src="images/gallery/5.jpg" alt="" />
            <img src="images/gallery/6.jpg" alt="" />
          </div>
        </div>
        <p class="copyright">Copyright &#169 2022 Coursify All Rights Reserved, By Sondos Hijab & Dina Mashayekh</p>
      </div>
      <!-- End Footer -->


</body>
</html>