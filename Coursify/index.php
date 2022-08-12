
<?php

session_start();
$myNa =  $_SESSION["username"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coursify</title>
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <script src="charts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">
    <script src="jquery.1.js"></script>

</head>


<body>

<base target="_top">
<input type="checkbox" id="nav-toggle">
<!-- adding a sidebar -->





        <div class="sidebar-menu">

            <ul>
                <li>
             <a href="" >

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

        <div class="main-content">

            <div class="left-main">
                <div class="hello">
                    <div>




<h1> Hello <?php  echo"$myNa"?></h1>

                         <span>it's good to see you again</span>


                    </div>
                    <div class="h-image">
                        <img src="image/Illustration.png" class="h1-image"  width="190px" height="189.8px" >
                    </div>
                </div>



                <div class="cards">
                    <a href="" class="cardlink">
                        <div class="card">
                            <div  class="f">
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

                                <!---------------------------------------------->
                                <div class="num"><?php echo $j; ?></div>

                                <ul>
                                    <li >
                                        <span class="c">courses </span>
                                    </li>
                                    <li>
                                        <span>completed</span>
                                    </li>
                                </ul>


                            </div>

                        </div>
                    </a>
                    <a href="" class="cardlink">
                        <div class="card">
                            <div class="s">

                                <div class="num1"><?php echo $k; ?></div>
                                <div>
                                    <ul>
                                        <li >
                                            <span class="c">courses </span>
                                        </li>
                                        <li>
                                            <span>in progress</span>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                        </div>
                    </a>



                </div>

                <div class="courses">
                    <h4 class="all-courses"> All Courses </h4>
                    <ul>

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
                                    echo "  <li>

                                   <a href='' >
                                       <div class='distance'>
                                         <span class='Photoshop'>  <img src='$cicon' width='40px' height='20px'> $cname  </span>
                                       <span class='in-Progress'><i class='fa-solid fa-spinner'></i></span>
                                       </div>
                                </a>


                        </li>";
                                } else if ($row[4] == 'completed') {
                                    $j++;
                                    echo "  <li>

                                   <a href='' >
                                       <div class='distance'>
                                         <span class='Photoshop'>  <img src='$cicon' width='40px' height='20px'>$cname  </span>
                                       <span class='complete'><i class='fa-solid fa-circle-check'></i></span>
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

            <div class="right-main" >

                <div class="Graph_box">

                        <canvas id="myChart1" ></canvas>

                </div>

                <a href="" class="cardlink">
                    <div class="card">
                        <div class="third">
                         <div>
                           <div class="t1">
                               <h2> Learn even more</h2>
                           </div>
                            <div class="t2">
                                <span> Unlock premium features</span>
                            </div>
                            <div>
                                <span class="t3"> only for 29.99$ per month</span>
                            </div>
                            <div class="t4">
                                <a href="">
                                <h4> Go premium</h4>
                                </a>
                            </div>
                         </div>
                            <div class="t5">
                                <img src="unlocking.png" class="unlock" width="120px" height="120px" >
                            </div>

                        </div>


                    </div>
                </a>

            </div>


    </div>
<script>




    const ctx = document.getElementById('myChart1').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'saturday', 'Sunday'],
            datasets: [{
                label: '# of Hours',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>