<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursify</title>
    <!-- main template css file -->
    <link rel="stylesheet" href="CSS/mainStyle.css">
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
    <!--Add PHP to insert course-->


    <script src="js/main.js"></script>
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
                <li><a href="try.php">Sign In</a></li>
                <li><a href="try.php">Sign Up</a></li>

            </ul>
        </div>
    </div>
    <!-- end header -->  
    <!-- start landing -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Welcome To Coursify!</h1>
                <p>Start learning the world’s best courses. 
                    Find what fascinates you as you explore these course creation classes!
                </p>
                
            </div>
            <div class="image"><img src="images/landing2.png" alt=""></div>
        </div>
        <a href="#blog" class="go-down">
            <i class="fa-solid fa-angles-down"></i>
        </a>
    </div>
    <!-- end landing -->
    <!-- start Blog parts -->
    <!-- try blog from admin -->

    <?php
try{

    echo "<div class='ad_container'>";
    $connect=new mysqli('localhost','root','','db');
    $S="select * from blogs ";
    $received= $connect->query($S);

    echo "<div class='blog' id='blog'>";
    echo "<h2 class='main-title'>Our Blog</h2>";
    echo "<div class='container'>";


    for($i=0;$i<$received->num_rows;$i++) {
        $row = $received->fetch_array();


        $blogId=$row[0];
        $blogName=$row[1];
        $blogDesc=$row[2];
        $ccn=ltrim($row[3]," ../images/");

        echo   "<div class='box'>";
        echo   "<img src='images/$ccn'>";
        echo   "<div class='content'>";
        echo   "<h3>$blogName</h3>";
        echo   "<p>$blogDesc</p>";
        echo   "</div>";
        echo   "<div class='info'>";
        echo   "<a href='#'>Read More</a>";
        echo   "<i class='fa-solid fa-arrow-right'></i>";
        echo   "</div>";
        echo   "</div>";

}
    echo   "</div>";
    echo   "</div>";
}
catch(Exception $e1){

}

        ?>
    </div>
</div>

        <!---------------------------------------------->

    <!-- end Blog parts -->
    <!-- start gallery -->
    <div class="gallery" id="gallery">
        <h2 class="main-title">Gallery</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="images/gallery/1.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/gallery/2.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/gallery/3.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/gallery/4.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/gallery/5.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/gallery/6.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->

    <!-- start Features -->
    <!-- Strong Reporting
    Online Course Catalogs
    Self Registration -->
    <div class="features" id="features">
        <h2 class="main-title">Our Special Features</h2>
        <div class="container">
            <div class="box Reporting">
                <div class="image-holder">
                    <img src="images/features/2@2x.png" alt="">
                </div>
                <h2>Strong Reporting</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum optio nemo tempora est quas voluptate ducimus voluptatem neque, dolor totam animi nulla eligendi repellat non. </p>
                <a href="#">More</a>
            </div>

            <div class="box Catalogs">
                <div class="image-holder">
                    <img src="images/features/1@2x.png" alt="">
                </div>
                <h2>Online Course Catalogs</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum optio nemo tempora est quas voluptate ducimus voluptatem neque, dolor totam animi nulla eligendi repellat non.</p>
                <a href="#">More</a>
            </div>

            <div class="box Registration">
                <div class="image-holder">
                    <img src="images/features/3@2x.png" alt="">
                </div>
                <h2>Self Registration</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum optio nemo tempora est quas voluptate ducimus voluptatem neque, dolor totam animi nulla eligendi repellat non.</p>
                <a href="#">More</a>
            </div>
        </div>
    </div>
    <!-- end Features  -->


    <!-- start testimonials -->
    <div class="testimonials" id="testimonials">
        <h2 class="main-title">Testimonials</h2>
        <div class="container">
            
            <div class="box">
                <img src="images/testimonials/barney.jpeg" alt="">
                <h3>Barney Stinson</h3>
                <span class="title">Web Development Course</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestiae dolorem vel numquam doloribus magni impedit libero commodi nobis labore! 
                    Fuga incidunt.</p>
            </div>
        


       
            <div class="box">
                <img src="images/testimonials/Tracy (1).jpg" alt="">
                <h3>Tracy McConnell</h3>
                <span class="title">Python Course</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestiae dolorem vel numquam doloribus magni impedit libero commodi nobis labore! 
                    Fuga incidunt.</p>
                </div>
        


      
            <div class="box">
                <img src="images/testimonials/ted.jpg" alt="">
                <h3>Ted Mosby</h3>
                <span class="title">Problem Solving Course</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestiae dolorem vel numquam doloribus magni impedit libero commodi nobis labore! 
                    Fuga incidunt.</p>
            </div>



            <div class="box">
                <img src="images/testimonials/Robin (1).jpg" alt="">
                <h3>Robin Scherbatsky</h3>
                <span class="title">Flutter Course</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestiae dolorem vel numquam doloribus magni impedit libero commodi nobis labore! 
                    Fuga incidunt.</p>
                </div>
       

   
            <div class="box">
                <img src="images/testimonials/Marshall (1).jpg" alt="">
                <h3>Marshall Eriksen</h3>
                <span class="title">React Native Course</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestiae dolorem vel numquam doloribus magni impedit libero commodi nobis labore! 
                    Fuga incidunt.</p>
                </div>



            <div class="box">
                <img src="images/testimonials/lily (1).jpg" alt="">
                <h3>Lily Aldrin</h3>
                <span class="title">Javascript Course</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestiae dolorem vel numquam doloribus magni impedit libero commodi nobis labore! 
                     Fuga incidunt.</p>
            </div>
        </div>
        
    </div>
    <!-- end testimonials -->


    <!-- start team members -->
    <div class="team" id="team">
        <h2 class="main-title">Team Members</h2>
        <div class="container">
            <div class="box">
                <div class="data">
                    <img src="images/team/sondos (1) Cropped.jpg" alt="">
                    <div class="social">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <div class="info">
                    <h3>Sondos Hijab</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                       </p>
                </div>
            </div>


            <div class="box">
                <div class="data">
                    <img src="images/team/dina.jpg" alt="">
                    <div class="social">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <div class="info">
                    <h3>Dina Mashayekh</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur  elit. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end team members -->

   <!--  start Categories -->
   <div class="categories" id="categories">
       <h2 class="main-title">Categories</h2>
       <div class="container">
           <div class="box">
            <i class="fas fa-code fa-4x"></i>
            <h3>Coding</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
           </div>


           <div class="box">
            <i class="fas fa-bullhorn fa-4x"></i>
            <h3>Digital Marketing</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
           </div>


           <div class="box">
            <i class="fas fa-solar-panel fa-4x"></i>
            <h3>Power and Energy</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
           </div>


           <div class="box">
            <i class="fas fa-robot fa-4x"></i>
            <h3>Robotics and Automation</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
           </div>


           <div class="box">
            <i class="fas fa-globe fa-4x"></i>
            <h3>Languages</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
           </div>


           <div class="box">
            <i class="fab fa-researchgate fa-4x"></i>
            <h3>Scientific Research</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
           </div>


       </div>
   </div>
   <!--  end Categories -->



   <!-- Start Events -->
   <div class="events" id="events">
    <h2 class="main-title">Latest Events</h2>
    <div class="container">
      <img src="images/techGeeks-02-02.png" alt="" />
      <div class="info">
        <div class="time">
          <div class="unit">
            <span>15</span>
            <span>Days</span>
          </div>
          <div class="unit">
            <span>08</span>
            <span>Hours</span>
          </div>
          <div class="unit">
            <span>45</span>
            <span>Minutes</span>
          </div>
          <div class="unit">
            <span>55</span>
            <span>Seconds</span>
          </div>
        </div>
        <h2 class="title">Tech Geeks Event 2022</h2>
        <p class="description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut adipisci quam
          ratione aliquam excepturi nulla in harum, veritatis porro
        </p>
      </div>


      <div class="subscribe" id="subscribe">
        <form action="index.php#subscribe" method="POST">
          <input type="email" placeholder="Enter Your Email" name="emailAdd" />
          <input type="submit" name="submit" />
        </form>

                <?php
        if(isset($_POST['submit'])&& isset($_POST['emailAdd'])){
            $emailAdd=$_POST['emailAdd'];
            $index = 0;
            try{

        $DB=new mysqli('localhost','root','','db');
        $str=" INSERT INTO `subs` (`Id`, `Email`) VALUES  ('".$index."',' ".$emailAdd."')";
        $DB->query($str);
        $DB->commit();
        $DB->close();
        echo "<div align='center'><p>You're added to our subscribers' list successfully</p></div>";
            }catch(Exception $e) {
                echo "error happened";
            }
                }

        ?>
      </div>
    </div>
  </div>


  
  <!-- End Events -->


  <!-- Start Stats -->
  <div class="stats" id="stats">
    <h2 class="main-title">Our Awesome Statistics</h2>
    <div class="container">
      <div class="box">
        <i class="far fa-user fa-2x fa-fw"></i>
        <span class="number">500</span>
        <span class="text">Students</span>
      </div>
      <div class="box">
        <i class="fas fa-code fa-2x fa-fw"></i>
        <span class="number">1000</span>
        <span class="text">Projects</span>
      </div>
      <div class="box">
        <i class="fas fa-globe-asia fa-2x fa-fw"></i>
        <span class="number">16</span>
        <span class="text">Countries</span>
      </div>
      <div class="box">
        <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
        <span class="number">600K</span>
        <span class="text">Money</span>
      </div>
    </div>
  </div>
  <!-- End Stats -->

     


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