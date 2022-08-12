<!--Add PHP to insert course-->
<!--this page is for featured courses NOT course --> 
<?php
if(isset($_POST['submit'])&& isset($_POST['courseName'])){
    $courseName=$_POST['courseName'];
    $courseId = 0;
    $courseDesc=$_POST['courseDesc'];
    $ccn=trim($_POST['courseImage']);
    $courseImage="../images/RecommendedCourses/".$ccn;


    try{

  $DB=new mysqli('localhost','root','','db');
  $str="INSERT INTO `featuredcourses`(`courseId`, `courseName`, `courseDesc`, `courseImage`) VALUES   ('".$courseId."',' ".$courseName."', '".$courseDesc."',' ".$courseImage."');";
  $DB->query($str);
  $DB->commit();
  $DB->close();
    }catch(Exception $e) {

    }
         }

?>
<!----------->
<!-- ADD PHP to edit a course information -->

<?php
if(isset($_POST['submit1'])){
    $courseName=$_POST['courseName'];
    $courseId = $_POST['courseId'];
    $courseDesc=$_POST['courseDesc'];
    $ccn=trim($_POST['courseImage1']);
    $courseImage="../images/RecommendedCourses/".$ccn;
    try{

        $DB1=new mysqli('localhost','root','','db');
        $S="select * from featuredcourses ";
        $received= $DB1->query($S);
        for($i=0;$i<$received->num_rows;$i++){
            $row=$received->fetch_array();

            $cid= $row[3];
            $str1 = "UPDATE `featuredcourses` SET `courseId`='$courseId',`courseName`='$courseName',`courseDesc`='$courseDesc',`courseImage`='$courseImage' WHERE `courseId`='$courseId'";
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../CSS/mainStyle.css">
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <title>Featured Courses</title>
</head>
<body>
<input type="checkbox" id="show" >
<input type="checkbox" id="show1">
<!-- adding a popup form-->
<div class="center">
    <div class="popup">

<label for="show" class="fa-solid fa-xmark"></label>
        <h2>Add Course</h2>
        <form action="admin_featuredCourses.php" method="post">

            <div class="data">
                <label>Course name </label>
                <input type="text" name="courseName" >
            </div>
            <div class="data">
                <label> Course Description</label>
                <input type="text" name="courseDesc" >
            </div>

            <div class="data">
                <label> Course Image</label>
                <input type="file" name="courseImage"  class="file" >
            </div>
<input type="submit" name="submit"  class="addBtn" value="Add">
        </form>
    </div>
</div>

<!----------------------->

<!-- adding a popup form-->
<div class="center1">
    <div class="popup">

        <label for="show1" class="fa-solid fa-xmark"></label>
        <h2>Edit Course</h2>
        <form action="admin_featuredCourses.php" method="post">
            <div class="data">
                <label>Course Id </label>
                <input type="text" name="courseId" >
            </div>
            <div class="data">
                <label>Course name </label>
                <input type="text" name="courseName" >
            </div>
            <div class="data">
                <label> Course Description</label>
                <input type="text" name="courseDesc" >
            </div>


            <div class="data">
                <label> Course Image </label>
                <input type="file" name="courseImage1"  class="file" >
                <input type="submit" name="submit1"  class="addBtn" value="Save">
            </div>


        </form>
    </div>
</div>

<!----------------------->

<input type="checkbox" id="nav-toggle">



<!-- adding a sidebar -->
    <div class="sidebar-menu">

        <ul>
            <li >
                <a href="admin_home.php" class="active">

                    <i class="fa-solid fa-house-user"></i>

                    <span class="admin_home"> Home</span>
                </a>
            </li>

            <li>
                <a href="admin_courses.php" >

                    <i class="fa-solid fa-book"></i>
                    <span class="admin_course"> Courses</span>
                </a>
            </li>

            <li>
                <a href="admin_users.php" >
                    <i class="fa-solid fa-users"></i>
                    <span class="admin_users">  Users</span>
                </a>
            </li>
            <li>
                <a href="Blogs.php" >
                    <i class="fa-brands fa-blogger"></i>
                    <span class="Blogs">  Blogs</span>
                </a>
            </li>
            <li>
                <a href="admin_featuredCourses.php" >
                <i class="fas fa-bookmark"></i>                
                    <span class="featured_Course">  Featured Courses </span>
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
</div >

<div class="all">
    <h3>Featured Courses</h3>
<div>
    <label for="show" class="btn"> + Add Course</label>

    <label for="show1" class="btn"> Edit Course</label>
</div>
</div>





        <?php
try{

    echo "<div class='ad_container'>";
    $connect=new mysqli('localhost','root','','db');
    $S="select * from featuredcourses ";
    $received= $connect->query($S);
    for($i=0;$i<$received->num_rows;$i++) {
        $row = $received->fetch_array();


        $courseId=$row[0];
        $courseName=$row[1];
        $courseDesc=$row[2];
        $ccn=$row[3];


        
        echo "<div class='ad_card'> ";

        echo "<div class='imgbox'> ";
        echo "  <img src='$ccn' height='180' >";
        echo "  <h3> $courseName</h3>";
        echo " </div>";
        echo "  <div class='ad_content'>";

        echo "   <div class='information'>";
        echo "    <span>Course Id:</span>";
        echo "   <span>$courseId</span>";
        echo " </div>";
        echo " <br>";
        echo "   <div class='information'>";
        echo "    <span>Course Name:</span>";
        echo "   <span>$courseName</span>";
        echo " </div>";
        echo " <br>";

        echo "  <div class='information'>";
        echo "     <span>Course Description:</span>";
        echo "     <span>$courseDesc</span>";
        echo " </div>";
        

        echo " </div>";
        echo " </div>";
        
    }
    echo "</div>";
}
catch(Exception $e1){

}

        ?>

        <!---------------------------------------------->



</div>



</body>
</html>