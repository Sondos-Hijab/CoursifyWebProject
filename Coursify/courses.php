
<?php

session_start();
$myNa =  $_SESSION["username"];

?>


<!--Add PHP to insert course-->

<?php
if(isset($_POST['apply1'])){

    $courseImage="image/1_chEvq4TZ_v30O9YnO3Gifw.jpeg";
    $courseNa="Web Development";
    $index=0;

    try{

        $DB1=new mysqli('localhost','root','','db');
        $S="select * from c ";
        $received= $DB1->query($S);
        for($i=0;$i<$received->num_rows;$i++) {
            $row = $received->fetch_array();
            if ($courseNa == $row[0]) {
$ci= $row[6];
           /*     $_SESSION["ci"] = $ci;*/

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
       /* $courseIC =  $_SESSION["ci"];*/
        $str=" INSERT INTO `mycourses`(`index`, `coursename`, `cImage`, `cIcon`, `completeness`, `usersName`) VALUES ('".$index1."','".$courseNa."','".$courseImage."','".$ci."','inProgress','".$myNa."')";
        $DB->query($str);
        $DB->commit();
        $DB->close();
    }catch(Exception $e) {

    }
}

?>
<!----------->



<!--Add PHP to insert course-->

<?php
if(isset($_POST['apply2'])){

    $courseImage="image/mark.jpeg";
    $courseNa="Digital Marketing";
    $index=0;

    try{

        $DB1=new mysqli('localhost','root','','db');
        $S="select * from c ";
        $received= $DB1->query($S);
        for($i=0;$i<$received->num_rows;$i++) {
            $row = $received->fetch_array();
            if ($courseNa == $row[0]) {
                $ci= $row[6];
                /*     $_SESSION["ci"] = $ci;*/

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
        /* $courseIC =  $_SESSION["ci"];*/
        $str=" INSERT INTO `mycourses`(`index`, `coursename`, `cImage`, `cIcon`, `completeness`, `usersName`) VALUES ('".$index1."','".$courseNa."','".$courseImage."','".$ci."','inProgress','".$myNa."')";
        $DB->query($str);
        $DB->commit();
        $DB->close();
    }catch(Exception $e) {

    }
}

?>
<!----------->





<!--Add PHP to insert course-->

<?php
if(isset($_POST['apply3'])){

    $courseImage="image/c9766811449634cab83a657a51c8448c.webp";
    $courseNa="Graphic Design";
    $index=0;

    try{

        $DB1=new mysqli('localhost','root','','db');
        $S="select * from c ";
        $received= $DB1->query($S);
        for($i=0;$i<$received->num_rows;$i++) {
            $row = $received->fetch_array();
            if ($courseNa == $row[0]) {
                $ci= $row[6];
                /*     $_SESSION["ci"] = $ci;*/

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
        /* $courseIC =  $_SESSION["ci"];*/
        $str=" INSERT INTO `mycourses`(`index`, `coursename`, `cImage`, `cIcon`, `completeness`, `usersName`) VALUES ('".$index1."','".$courseNa."','".$courseImage."','".$ci."','inProgress','".$myNa."')";
        $DB->query($str);
        $DB->commit();
        $DB->close();
    }catch(Exception $e) {

    }
}

?>
<!----------->











<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>My Courses</title>
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.1.js"></script>
    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">

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
        <h3>Recomended for you</h3>
        <span> Learn new and beneficial skills</span>
    </div>
        <div class="articles2" id="articles2">

            <div class="container1">
                <div class="box2">
                    <img src="image/1_chEvq4TZ_v30O9YnO3Gifw.jpeg" >
                    <div class="content1">
                        <h4>Web Development</h4>
                        <form action="courses.php" method="post">
                            <button type='submit' class='apply' name="apply1" style='background-color: white; font-size: 1.1em; padding-bottom: 5px'  >
                                <span> Apply Now </span>
                            </button>
                        </form>
                    </div>

                </div>



                <div class="box2">
                    <img src="image/mark.jpeg" >
                    <div class="content1">
                        <h4>Digital Marketing</h4>
                         <form action="courses.php" method="post">
                           <button type='submit' class='apply'  name="apply2" style='background-color: white; font-size: 1.1em; padding-bottom: 5px'  >
                              <span> Apply Now </span>
                                </button>
                         </form>
                    </div>

                </div>

                <div class="box2">
                    <img src="image/c9766811449634cab83a657a51c8448c.webp" >
                    <div class="content1">
                        <h4>Graphic Design</h4>

                        <form action="courses.php" method="post">
                            <button type='submit' class='apply' name="apply3" style='background-color: white; font-size: 1.1em; padding-bottom: 5px'  >
                                <span> Apply Now </span>
                            </button>
                        </form>

                    </div>









            </div>

        </div>











<div class="left-main">
<div class="courses1">
    <h4 class="all-courses"> My Courses </h4>

    <ul>

        <!-- Add PHP to retrieve course and display it-->
        <?php

        try{

            $connect=new mysqli('localhost','root','','db');
            $S="select * from mycourses ";
            $received= $connect->query($S);
            for($i=0;$i<$received->num_rows;$i++) {
                $row = $received->fetch_array();
                $cname=  $row[1];
                $cicon=  $row[3];
                $username= $row[5];
                if($myNa==$username) {
                    if ($row[4] == 'inProgress') {

                        echo "  <li>

                                   <a href='' >
                                       <div class='distance'>
                                         <span class='Photoshop'>  <img src='$cicon' width='40px' height='20px'> $cname  </span>
                                       <span class='my-c'><i class='fa-solid fa-trash'></i></span>
                                       </div>
                                </a>


                        </li>";
                    }
                }
            }
        }
        catch(Exception $e1){

        }

        ?>

        <!---------------------------------------------->

    </ul>

</div>
</div>
</div>
</div>



</body>
</html>