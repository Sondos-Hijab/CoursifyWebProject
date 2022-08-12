


<!--Add PHP to insert course-->

<?php
if(isset($_POST['submit'])&& isset($_POST['courseName'])){
    $courseName=$_POST['courseName'];
    $instructorName=$_POST['instructorName'];
    $Duration=$_POST['Duration'];
    $ccn=$_POST['courseImage'];
    $courseImage="image/".$ccn;
    $cID=$_POST['ID'];
    $ccn1=$_POST['courseIcon'];
    $cicon="image/".$ccn1;



    try{

        $DB=new mysqli('localhost','root','','db');

        $str=" INSERT INTO `c` (`coursename`, `#students`, `Duration`, `instructor`, `courseImg`, `courseID`,`courseIcon`) VALUES ('".$courseName."', '0',' ".$Duration."', '".$instructorName."',' ".$courseImage."', '".$cID."', '".$cicon."');";
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
    $courseName=$_POST['courseName1'];
    $instructorName=$_POST['instructorName1'];
    $Duration=$_POST['Duration1'];
    $ccn=$_POST['courseImage1'];
    $courseImage="image/".$ccn;
    $cID=$_POST['ID1'];
    try{

        $DB1=new mysqli('localhost','root','','db');
        $S="select * from c ";
        $received= $DB1->query($S);
        for($i=0;$i<$received->num_rows;$i++){
            $row=$received->fetch_array();

            $cid= $row[5];

                $str1=   " UPDATE `c` SET `coursename`= '$courseName',`#students`='0',`Duration`=' $Duration',`instructor`=' $instructorName',`courseImg`=' $courseImage',`courseID`='$cID' WHERE `courseID`='$cID'";
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
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <title>All courses</title>

</head>
<body>
<input type="checkbox" id="show">
<input type="checkbox" id="show1">

<!-- adding a popup form-->
<div class="center">
    <div class="popup" style="   height:700px;">

<label for="show" class="fa-solid fa-xmark" style="right:420px;
    top:70px;"></label>
        <h2>Add Course</h2>
        <form action="admin_courses.php" method="post">

            <div class="data">
                <label>Course Name </label>
                <input type="text" name="courseName"  >
            </div>

            <div class="data">
                <label>Instructor </label>
                <input type="text" name="instructorName" >
            </div>
            <div class="data">
                <label> Duration</label>
                <input type="text" name="Duration" >
            </div>
            <div class="data">
                <label>course ID </label>
                <input type="text" name="ID" >
            </div>

            <div class="data">
                <label> Course Image</label>
                <input type="file" name="courseImage"  class="file" >
            </div>
            <div class="data">
                <label> Course Icon</label>
                <input type="file" name="courseIcon"  class="file" >
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
        <form action="admin_courses.php" method="post">

            <div class="data">
                <label> course ID</label>
                <input type="text" name="ID1" >
            </div>
            <div class="data">
                <label>Course Name </label>
                <input type="text" name="courseName1"  >
            </div>

            <div class="data">
                <label>Instructor </label>
                <input type="text" name="instructorName1" >
            </div>
            <div class="data">
                <label> Duration</label>
                <input type="text" name="Duration1" >
            </div>


            <div class="data">
                <label> Course Image</label>
                <input type="file" name="courseImage1"  class="file" >
                <input type="submit" name="submit1"  class="addBtn" value="Save">
            </div>




        </form>
    </div>
</div>

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
    <h3>  All Courses</h3>
<div>
    <label for="show" class="btn"> +Add Course</label>

    <label for="show1" class="btn"> Edit Course</label>

</div>
</div>



    <div class="ad_container">


        <!-- Add PHP to retrieve course and display it-->
        <?php
try{

    $connect=new mysqli('localhost','root','','db');
    $S="select * from c ";
    $received= $connect->query($S);
    for($i=0;$i<$received->num_rows;$i++) {
        $row = $received->fetch_array();

        $cn = $row[0];
        $cid = $row[5];
        $d = $row[2];
        $ins = $row[3];
        $cimg = $row[4];


        echo "<div class='ad_card'> ";

        echo "<div class='imgbox'> ";
        echo "  <img src='$cimg' height='180' >";
        echo "  <h3> $cn</h3>";
        echo " </div>";
        echo "  <div class='ad_content'>";

        echo "   <div class='information'>";
        echo "    <span>Course ID:</span>";
        echo "   <span>$cid</span>";
        echo " </div>";
        echo " <br>";
        echo "   <div class='information'>";
        echo "    <span>Instructor:</span>";
        echo "   <span>$ins</span>";
        echo " </div>";
        echo " <br>";

        echo "  <div class='information'>";
        echo "     <span>Duration:</span>";
        echo "     <span>$d</span>";
        echo " </div>";
        echo " <br>";
        echo " <div class='information'>";
        echo "    <span>Student:</span>";
        echo "    <span>0</span>";
        echo "  </div>";
        echo "  <br>";

        echo " </div>";
        echo " </div>";
    }
}
catch(Exception $e1){

}

        ?>








    </div>
</body>
</html>
