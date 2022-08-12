
<?php

session_start();
$myNa =  $_SESSION["username"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificates</title>
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.1.js"></script>
    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">

</head>
<body onload="slider()">
<input type="checkbox" id="nav-toggle">




    <div class="sidebar-menu">

        <ul>
            <li>
                <a href="index.php" class="active">

                    <i class="fa-solid fa-house-user"></i>

                    <span class="home"> Home</span>
                </a>
            </li>

            <li>
                <a href="profile.php" >

                    <i class="fa-solid fa-user"></i>

                    <span class="profile"> Profile</span>
                </a>
            </li>

            <li>
                <a href="courses.php">
                    <i class="fa-solid fa-book"></i>
                    <span class="course"> My Courses</span>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa-solid fa-certificate"></i>
                    <span class="certificates"> Certificates</span>
                </a>
            </li>

            <li>
                <a href="shedule.html">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="schedule"> Schedule</span>
                </a>
            </li>

            <li>
                <a href="../signout.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="signout"> Sign out</span>
                </a>
            </li>
        </ul>

    </div>



<div class="main">
    <header>

        <div class="sidebar-name">
            <div class="dash">
                <h2 class="d">

                    <label for="nav-toggle" class="l">
<span>
            <i class="fa-solid fa-bars"></i>
</span>
                    </label>

                </h2>
            </div>
            <span class="pname">Coursify</span>

        </div>

        <div class="search">

            <form action="search.php" method="post">
                <input type="text"
                       placeholder=" Search Courses"
                       name="searchCourse" >

                <button type=submit" name="search" style="background-color: white">
                    <i class="fa-solid fa-magnifying-glass"></i>

                </button>

            </form>

        </div>


    </header>
</div>

<div class="main-content1">

    <div class="banner">

        <div class="slider">

            <img src="image/Banner-design.gif" width="" height="" id="simage">

            <div class="Recommend">

                <div class="recomend">
                    <h2> Our upcomming courses</h2>
                    <h4>Take more high quality course</h4>
                </div>
                <div class="logoimg">
                    <img src="image/C_Logo.png" id="slideimg" width="60" height="60">
                    <i class="fa-solid fa-calendar"></i>
                <span> 12/06/2022</span>

                </div>

            </div>

        </div>


    </div>
    <div class="articles1" id="articles1">
        <h3 class="cert">Your Certificates</h3><br>
        <div class="container1">
            <!-- Add PHP to retrieve course and display it-->
            <?php

            try{

                $connect=new mysqli('localhost','root','','db');
                $S="select * from mycourses ";
                $received= $connect->query($S);
                for($i=0;$i<$received->num_rows;$i++) {
                    $row = $received->fetch_array();
                    $cname=  $row[1];
                    $cimg=  $row[2];
                    $username= $row[5];
                    if($myNa==$username) {
                        if ($row[4] == 'completed') {


                           echo " <div class='box1'>
<img src='$cimg' >
          <div class='content1'>
              <h3>$cname</h3>
              <p></p>

          </div>
                <div class='info1'>
                    <a href='#'>view certification </a>
                    <i class='fa-solid fa-arrow-right-long'></i>
                </div>
            </div>";
                            
                        }
                    }
                }
            }
            catch(Exception $e1){

            }

            ?>

            <!---------------------------------------------->






        </div>
    </div>
</div>

<script>
    var slideimg=document.getElementById("slideimg");
    var image= ["image/adobe-illustrator-logo.png",
        "image/C_Logo.png" ,
        "image/1200px-Python-logo-notext.svg.png" ];


    var len=image.length;
    var i=0;
    function slider(){
        if(i>len-1){
            i=0;
        }

        slideimg.src=image[i];
        i++;
        setTimeout('slider()',3000);
    }

</script>
</body>
</html>