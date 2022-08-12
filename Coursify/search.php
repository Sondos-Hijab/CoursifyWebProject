



<?php

session_start();
$myNa =  $_SESSION["username"];

?>






<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
</head>


<body >
<input type="checkbox" id="toggle">
<input type="checkbox" id="nav-toggle">


<!-- adding a sidebar -->





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
            <a href="completed.php">
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

<div class="main-content-c">

    <div class="r1">
        <h3>Courses you searched for</h3>
<br>
    </div>
    <div class="articles2" id="articles2">

        <div class="container1">

            <!-- Add PHP to retrieve course and display it-->
            <?php

            if(isset($_POST['search'])){
            try {

                $searchCourse = $_POST['searchCourse'];
                $connect = new mysqli('localhost', 'root', '', 'db');
                $S = "select * from c where coursename LIKE '%".$searchCourse."%'";
                $received = $connect->query($S);
                    $row = $received->fetch_array();

                        $cn = $row[0];
                        $cid = $row[5];
                        $d = $row[2];
                        $ins = $row[3];
                        $cimg = $row[4];

                echo"<div class='box2'>";
                echo"  <img src='$cimg' name='c' >";
                echo"  <div class='content1'>";
                  echo"    <h4>$cn</h4>";

                $_SESSION["c"] = $cimg;
                $_SESSION["cn"] = $cn;
                        echo" <form action='search.php' method='post'>";
                     echo" <button type='submit' class='apply' name='apply'  style='background-color: white; font-size: 1.1em; padding-bottom: 5px'  >";
                    echo "<span> Apply Now </span>";
                         echo"  </button>";
                        echo"   </form>";
                echo"  </div>";
             echo" </div>";

            } catch (Exception $e1) {

            }
            }
            ?>

            <!---------------------------------------------->


            <!--Add PHP to insert course-->

            <?php
            if(isset($_POST['apply'])){

                $courseImage =  $_SESSION["c"];
                $courseNa =  $_SESSION["cn"];

                $index=0;

                try{

                    $DB1=new mysqli('localhost','root','','db');
                    $S="select * from c ";
                    $received= $DB1->query($S);
                    for($i=0;$i<$received->num_rows;$i++) {
                        $row = $received->fetch_array();
                        if ($courseImage == $row[4]) {
                            $courseIC = $row[6];


                        }
                    }
   }catch(Exception $e) {

                }





try{
                    $DB=new mysqli('localhost','root','','db');
                    $S1="select * from mycourses ";
                    $received1= $DB->query($S1);
                    $index=$received1->num_rows;
                    $index1=$index+1;

                     $str=" INSERT INTO `mycourses`(`index`, `coursename`, `cImage`, `cIcon`, `completeness`, `usersName`) VALUES ('".$index1."','".$courseNa."','".$courseImage."','".$courseIC."','inProgress','".$myNa."')";

                    $DB->query($str);
                    $DB->commit();
                    $DB->close();
                }catch(Exception $e) {

                }
            }

            ?>
            <!----------->



</div>
    </div>

</div>

















</body>
</html>
