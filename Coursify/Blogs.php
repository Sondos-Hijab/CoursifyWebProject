<!--Add PHP to insert blog-->

<?php
if(isset($_POST['submit'])&& isset($_POST['blogId'])){
    $blogId=$_POST['blogId'];
    $blogName=$_POST['blogName'];
    $blogDesc=$_POST['blogDesc'];
    $ccn=trim($_POST['blogPicture']);
    $blogPicture="../images/".$ccn;


    try{

  $DB=new mysqli('localhost','root','','db');
  $str=" INSERT INTO `blogs` (`blogId`, `blogName`, `blogDesc`, `blogPicture`) VALUES  ('".$blogId."',' ".$blogName."', '".$blogDesc."',' ".$blogPicture."');";
  $DB->query($str);
  $DB->commit();
  $DB->close();
    }catch(Exception $e) {

    }
         }

?>
<!----------->
<!-- ADD PHP to edit a blog information -->

<?php
if(isset($_POST['submit1'])){
    $blogId=$_POST['blogId'];
    $blogName=$_POST['blogName'];
    $blogDesc=$_POST['blogDesc'];
    $ccn=trim($_POST['blogPicture1']);
    $blogPicture="../images/".$ccn;
    try{

        $DB1=new mysqli('localhost','root','','db');
        $S="select * from blogs ";
        $received= $DB1->query($S);
        for($i=0;$i<$received->num_rows;$i++){
            $row=$received->fetch_array();

            $cid= $row[3];

            $str1=   " UPDATE `blogs` SET `blogId`= '$blogId',`blogName`='$blogName',`blogDesc`=' $blogDesc',`blogPicture`=' $blogPicture' WHERE `blogId`='$blogId'";
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
    <title>Blog Center</title>
</head>
<body>
<input type="checkbox" id="show" >
<input type="checkbox" id="show1">
<!-- adding a popup form-->
<div class="center">
    <div class="popup">

<label for="show" class="fa-solid fa-xmark"></label>
        <h2>Add blog</h2>
        <form action="Blogs.php" method="post">

            <div class="data">
                <label>Blog Id </label>
                <input type="number" name="blogId"  >
            </div>

            <div class="data">
                <label>Blog name </label>
                <input type="text" name="blogName" >
            </div>
            <div class="data">
                <label> Blog Description</label>
                <input type="text" name="blogDesc" >
            </div>

            <div class="data">
                <label> Blog Image</label>
                <input type="file" name="blogPicture"  class="file" >
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
        <h2>Edit blog</h2>
        <form action="Blogs.php" method="post">
        <div class="data">
                <label>Blog Id </label>
                <input type="number" name="blogId"  >
            </div>

            <div class="data">
                <label>Blog name </label>
                <input type="text" name="blogName" >
            </div>
            <div class="data">
                <label> Blog Description</label>
                <input type="text" name="blogDesc" >
            </div>


            <div class="data">
                <label> Blog Image</label>
                <input type="file" name="blogPicture1"  class="file" >
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
    <h3>  Blogs Center</h3>
<div>
    <label for="show" class="btn"> + Add Blog</label>

    <label for="show1" class="btn"> Edit Blog</label>
</div>
</div>




<!--     <div class="ad_container">
    <div class="ad_card">
        <div class="imgbox">
            <img src="../images/1 (2).jpg" height="180">
            <h3> Back to school tips</h3>
        </div>
        <div class="ad_content">
            <div class="information">
                <span>Blog ID:</span>
                <span>1</span>
            </div>
            <br>
            <div class="information">
                <span>Blog Name</span>
                <span> Back to school tips</span>
            </div>
            <br>

            <div class="information">
                <span>Blog Description</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi illum mollitia id</span>
            </div>


        </div>
    </div>
    <div class="ad_card">
        <div class="imgbox">
            <img src="../images/2 (2).jpg" height="180">
            <h3> Problem-solving at home</h3>
        </div>
        <div class="ad_content">
            <div class="information">
                <span>Blog ID:</span>
                <span>2</span>
            </div>
            <br>
            <div class="information">
                <span>Blog Name</span>
                <span> Problem-solving at home</span>
            </div>
            <br>

            <div class="information">
                <span>Blog Description</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi illum mollitia id</span>
            </div>
        

        </div>
    </div>
    <div class="ad_card">
        <div class="imgbox">
            <img src="../images/3 (2).jpg" height="180">
            <h3> Student success stories</h3>
        </div>
        <div class="ad_content">
            <div class="information">
                <span>Blog ID:</span>
                <span>3</span>
            </div>
            <br>
            <div class="information">
                <span>Blog Name</span>
                <span> Student success stories</span>
            </div>
            <br>

            <div class="information">
                <span>Blog Description</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi illum mollitia id</span>
            </div>


        </div>
    </div>
    <div class="ad_card">
        <div class="imgbox">
            <img src="../images/4 (2).jpg" height="180">
            <h3> Understanding cybersecurity</h3>
        </div>
        <div class="ad_content">
            <div class="information">
                <span>Blog ID:</span>
                <span>4</span>
            </div>
            <br>
            <div class="information">
                <span>Blog Name</span>
                <span> Understanding cybersecurity</span>
            </div>
            <br>

            <div class="information">
                <span>Blog Description</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi illum mollitia id</span>
            </div>
            
        </div>
    </div>

    <div class="ad_card">
        <div class="imgbox">
            <img src="../images/5 (2).jpg" height="180">
            <h3>Special education offerings</h3>
        </div>
        <div class="ad_content">
            <div class="information">
                <span>Blog ID:</span>
                <span>5</span>
            </div>
            <br>
            <div class="information">
                <span>Blog Name</span>
                <span>Special education offerings</span>
            </div>
            <br>

            <div class="information">
                <span>Blog Description</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi illum mollitia id</span>
            </div>


        </div>
    </div>


    
    <div class="ad_card">
        <div class="imgbox">
            <img src="../images/6 (2).jpg" height="180">
            <h3>Favorite tech program</h3>
        </div>
        <div class="ad_content">
            <div class="information">
                <span>Blog ID:</span>
                <span>6</span>
            </div>
            <br>
            <div class="information">
                <span>Blog Name</span>
                <span>Favorite tech program</span>
            </div>
            <br>

            <div class="information">
                <span>Blog Description</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi illum mollitia id</span>
            </div>


        </div>
    </div> 

    </div> -->

        <!-- Add PHP to retrieve blog and display it-->
        <?php
try{

    echo "<div class='ad_container'>";
    $connect=new mysqli('localhost','root','','db');
    $S="select * from blogs ";
    $received= $connect->query($S);
    for($i=0;$i<$received->num_rows;$i++) {
        $row = $received->fetch_array();


        $blogId=$row[0];
        $blogName=$row[1];
        $blogDesc=$row[2];
        $ccn=$row[3];


        
        echo "<div class='ad_card'> ";

        echo "<div class='imgbox'> ";
        echo "  <img src='$ccn' height='180' >";
        echo "  <h3> $blogName</h3>";
        echo " </div>";
        echo "  <div class='ad_content'>";

        echo "   <div class='information'>";
        echo "    <span>Blog Id:</span>";
        echo "   <span>$blogId</span>";
        echo " </div>";
        echo " <br>";
        echo "   <div class='information'>";
        echo "    <span>Blog Name:</span>";
        echo "   <span>$blogName</span>";
        echo " </div>";
        echo " <br>";

        echo "  <div class='information'>";
        echo "     <span>Blog Description:</span>";
        echo "     <span>$blogDesc</span>";
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