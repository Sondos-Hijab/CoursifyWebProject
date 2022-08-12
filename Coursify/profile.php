<?php

session_start();
$myNa =  $_SESSION["username"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin_style.css">
    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">
    <script src="jquery.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>Profile</title>

    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
.swiper-button-next{
 transform: scale(80%);

    margin-top: 1px;
}
.swiper-button-prev{
    transform: scale(80%);

    margin-top: 1px;
}
.swiper-pagination{
   color: white;


}


.bg-g{
    background-color:#0db783 ;

}
.bg-b{
    background-color:#13b6f5 ;

}
.bg-y{
    background-color:#fac100 ;

}
.bg-r{
    background-color:#ff464e ;
}
.interest1{ border-radius: 20px; border: 3px dotted #2f47c6; height: 40px; padding: 10px}
.interest2{border-radius: 20px; border: 3px  dotted #fac100; height: 40px;padding: 10px}
.interest3{border-radius: 20px; border: 3px  dotted #0db783; height: 40px;padding: 10px}
.interest4{border-radius: 20px; border: 3px  dotted #ff464e; height: 40px;padding: 10px}

.inter{

   display: grid;
    grid-auto-columns: 1fr ;
    grid-gap: 20px;
}
.edit{
    border-radius: 20px; background-color: white; height: 35px;   box-shadow: 0 2px 15px rgba(0 0 0 /10%); text-align: center; padding: 7px;
    width: 150px; margin-left: 40px; margin-bottom: 20px; color: #272d37; transition: transform 0.5s,box-shadow 0.5s, 0.5s;
}
.edit:hover{
    box-shadow: 0 2px 15px rgba(0 0 0 /20%);
    background-color: #f1f5f9;

}

        .swiper {
            width: 100%;
            height: 100%;

        }
.swiper-slide h4{
    color: white;
}
.swiper-slide {

            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;

        }

.swiper-slide img{
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;



}

    </style>

</head>
<body>

<input type="checkbox" id="nav-toggle">
<input type="checkbox" id="show1">

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
                <a href="" >

                    <i class="fa-solid fa-user"></i>
                    <span class="profile"> Profile</span>
                </a>
            </li>

            <li>
                <a href="courses.php" >
                    <i class="fa-solid fa-book"></i>
                    <span class="course"> My Courses</span>
                </a>
            </li>

            <li>
                <a href="completed.php" >
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
<div class="main_content_p">

    <div class="f_main">
        <div >
            <!-- Add PHP to retrieve profile info and display it-->
            <?php

            try{

                $connect=new mysqli('localhost','root','','db');
                $S="select * from users1 ";
                $received= $connect->query($S);
                for($i=0;$i<$received->num_rows;$i++) {
                    $row = $received->fetch_array();
if($myNa==$row[1]) {
    $n = $row[1];
    $e = $row[2];
    $m = $row[7];
    $p = $row[8];


}

                }


             echo "<img src='$p'>";
                echo " <br>";
                echo "  <h3>$n</h3>";

            echo "  <span>$e</span>";

            echo " <h5>Mobile: $m</h5>";
           echo "  <ul>
                <li> <a href='' class='facebook'><i class='fa-brands fa-facebook'></i></a></li>
                <li> <a href=''><i class='fa-brands fa-linkedin'></i></a></li>
                <li><a href=''><i class='fa-brands fa-twitter'></i></a></li>
                <li><a href=''><i class='fa-brands fa-instagram'></i></a></li>
            </ul>";

            }
            catch(Exception $e1){

            }

            ?>

            <!---------------------------------------------->
    </div>
        <form method="post" action="profile.php">
            <label for="show1" class="btn" name="EditProfile" >
                 Edit Profile
            </label>
        </form>
        <br>
        <div class="inter">

        <h3>Interests</h3>

                 <div class="interest1">
                     <h5>Web Development</h5>
                </div>
                <div class="interest2">
                Networking
                </div>
                <div class="interest3">
                 App Design
                </div>
                <div class="interest4">
                 UX/UI
                </div>

        </div>

    </div>

    <div class="s_main">

<div class="half_main">


    <!-- Swiper -->
    <div class=" swiper mySwiper">
        <h4 class="fspan">My certificates</h4>
        <div class="   swiper-wrapper">


            <!-- Add PHP to retrieve course and display it-->
            <?php
            $k=0;
            $j=0;
            $n1=$myNa; /*from sign in*/
            try{

                $connect=new mysqli('localhost','root','','db');
                $S="select * from mycourses ";
                $received= $connect->query($S);
                for($i=0;$i<$received->num_rows;$i++) {
                    $row = $received->fetch_array();
                    $cname=  $row[1];
                    $cicon=  $row[3];
                    $username= $row[5];
                    if($n1==$username) {
                        if ($row[4] == 'inProgress') {
                            $k++;

                        } else if ($row[4] == 'completed') {
                            $j++;


                        }
                    }
                }
            }
            catch(Exception $e1){

            }

            ?>
                <!-- Add PHP to retrieve course and display it-->
                <?php

                $l=0;
                $j1=$j;
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
                                $l++;
                                if($l<=$j1){
                                if($l==1 || $l==4 || $l==7) {

                                    echo "     <div class='swiper-slide '>
  
  <div class='box3 '>

                <img src='image/student-getting-diploma-certificate-4556045-3773969.webp'>
                
<div class='bg-r'>

                   <div class='content1'>
                            <br>
                <h4>$cname</h4>

                        </div>

                <div class='info1'>

                </div>
                </div>
            </div>
           </div>  ";
                                }
                                else if($l==2 || $l==5 || $l==8){
  echo "     <div class='swiper-slide '>
                                    <div class='box3 '>

                <img src='image/student-getting-diploma-certificate-4556045-3773969.webp'>
                
<div class='bg-b'>

                   <div class='content1'>
                            <br>
                <h4>$cname</h4>

                        </div>

                <div class='info1'>

                </div>
                </div>
            </div>
            
             </div>";


                                }
                                else if($l==3 || $l==5 || $l==9) {

                                    echo "     <div class='swiper-slide '>


                                      <div class='box3 '>

                <img src='image/student-getting-diploma-certificate-4556045-3773969.webp'>
                
<div class='bg-g'>

                   <div class='content1'>
                            <br>
                <h4>$cname</h4>

                        </div>

                <div class='info1'>

                </div>
                </div>
            </div>
            
           </div>   ";
                                }

                                }
                                else   if($l>$j1){


                                    echo "     <div class='swiper-slide '>


                                      <div class='box3 '>

                <img src='image/student-getting-diploma-certificate-4556045-3773969.webp'>
                
<div class=''>

                   <div class='content1'>
                            <br>
                <h4>no course</h4>

                        </div>

                <div class='info1'>

                </div>
                </div>
            </div>
            
           </div>   ";
                                }

                            }
                        }
                    }
                }
                catch(Exception $e1){

                }

                ?>

                <!---------------------------------------------->




        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


</div>

<div class="s_half_main">


        <!-- Swiper -->
        <div class=" swiper mySwiper">
            <h4 class="fspan">My courses</h4>
            <div class="container2 swiper-wrapper">
                <!-- Add PHP to retrieve course and display it-->
                <?php
                $n1=$myNa; /*from sign in*/
                $l=0;
                try{

                    $connect=new mysqli('localhost','root','','db');
                    $S="select * from mycourses ";
                    $received= $connect->query($S);
                    for($i=0;$i<$received->num_rows;$i++) {
                        $row = $received->fetch_array();
                        $cname=  $row[1];
                        $cimg=  $row[2];
                        $username= $row[5];
                        if($n1==$username) {
                            if ($row[4] == 'inProgress') {
                                $l++;
                                if($l==1 || $l==4 || $l==7) {

                                    echo "     <div class='swiper-slide '>
  
  <div class='box3 '>

                <img src='image/student-getting-diploma-certificate-4556045-3773969.webp'>
                
<div class='bg-y'>

                   <div class='content1'>
                            <br>
                <h4>$cname</h4>

                        </div>

                <div class='info1'>

                </div>
                </div>
            </div>
           </div>  ";
                                }
                                else if($l==2 || $l==5 || $l==8){
                                    echo "     <div class='swiper-slide '>
                                    <div class='box3 '>

                <img src='image/student-getting-diploma-certificate-4556045-3773969.webp'>
                
<div class='bg-g'>

                   <div class='content1'>
                            <br>
                <h4>$cname</h4>

                        </div>

                <div class='info1'>

                </div>
                </div>
            </div>
            
             </div>";


                                }
                                else if($l==3 || $l==5 || $l==9){

                                    echo "     <div class='swiper-slide '>


                                      <div class='box3 '>

                <img src='image/student-getting-diploma-certificate-4556045-3773969.webp'>
                
<div class='bg-b'>

                   <div class='content1'>
                            <br>
                <h4>$cname</h4>

                        </div>

                <div class='info1'>

                </div>
                </div>
            </div>
            
           </div>   ";

                                }

                            }
                        }
                    }
                }
                catch(Exception $e1){

                }

                ?>

                <!---------------------------------------------->

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    <!-- ADD PHP to edit profile information -->

    <?php
    if(isset($_POST['submit2'])){
        $Name=$_POST['username'];
        $email=$_POST['email'];

        $ccn=$_POST['profilePhoto'];
        $image="image/".$ccn;

        $mobile=$_POST['mobile'];
        $myN=$myNa;
        try{

            $DB1=new mysqli('localhost','root','','db');
            $S="select * from users1 ";
            $received= $DB1->query($S);
            for($i=0;$i<$received->num_rows;$i++){
                $row=$received->fetch_array();
                $pr=$row[6];



    $str1 = " UPDATE `users1` SET `usersName`='$Name',`usersEmail`='$email',`mobile`=' $mobile',`profilePhoto`=' $image' WHERE `usersName`='$myN'";
    $DB1->query($str1);



            }

            $DB1->commit();
            $DB1->close();

        }
        catch(Exception $e1){

        }
    }
    ?>
    <!-------------------------------------------->


    <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
</div>
</div>

</div>
<script>
    "use strict";
    $('.cc').on('click', function (event) {
        $('.cc').removeClass('active');
        $(this).addClass('active');
        $('.cc-dots > li').removeClass('active');
        $('.cc-dots > li:nth-child(' + ($(this).index() + 1) + ')').addClass('active');
    });
</script>
<script>
    "use strict";
    $('.cc1').on('click', function (event) {
        $('.cc1').removeClass('active');
        $(this).addClass('active');
        $('.cc-dots1 > li').removeClass('active');
        $('.cc-dots1 > li:nth-child(' + ($(this).index() + 1) + ')').addClass('active');
    });
</script>
<!-- adding a popup form-->
<div class="center1">
    <div class="popup">

        <label for="show1" class="fa-solid fa-xmark" style="margin-top: -80px"></label>
        <h2>Edit Profile</h2>
        <form action="profile.php" method="post" >

            <div class="data">
                <label> Name</label>

                 <input type="text" name="username" class="inputclass" value="<?php echo $n; ?>">
            </div>
            <div class="data">
                <label>Email </label>
                <input type="text" name="email" value="<?php echo $e; ?>" >
            </div>

            <div class="data">
                <label>Mobile </label>
                <input type="text" name="mobile" value="<?php echo $m; ?>">
            </div>


            <div class="data">
                <label> Profile Photo</label>
                <input type="file" name="profilePhoto"  class="file" value="<?php echo $p; ?>" >
                <input type="submit" name="submit2"  class="addBtn" value="Save">
            </div>




        </form>
    </div>
</div>

<!----------------------->

</body>
</html>