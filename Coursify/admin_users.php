


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin_style.css">

    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">
    <meta charset="UTF-8">
    <title>All Users</title>
</head>
<body>
<input type="checkbox" id="nav-toggle">
<input type="checkbox" id="show1">


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
</div>
<div class="ad_users">
    <div class="list_header">
        <h2>  Users List</h2>
        <form method="post" action="admin_users.php">
            <button class="btn" name="viewAll" >View All</button>
            <label for="show1" class="btn1" name="delete" >Delete User &nbsp;<i class='fa-solid fa-trash'></i></label>

        </form>

    </div>
<div class="userList">



<table>
<thead>
<tr>
   <td> Name </td>
    <td> Email </td>
    <td> Admission Date </td>
    <td> Mobile </td>
    <td> User ID </td>

</tr>

</thead>
<tbody>





    <!-- Add PHP to retrieve course and display it-->
    <?php
    $k=12;
    try{

        $connect1=new mysqli('localhost','root','','db');
        $S1="select * from users1 ";
        $received= $connect1->query($S1);
        if(isset($_POST['viewAll'])) {
            for ($i = 0; $i < $received->num_rows; $i++) {
                $row = $received->fetch_array();

                $name = $row[1];
                $email = $row[2];
                $admission = $row[6];
                $mobile = $row[7];
                $uID= $row[0];

                echo "    <tr>";
                echo "<td>    $name </td>";
                echo " <td> $email </td>";
                echo "<td>$admission</td>";
                echo " <td> $mobile </td>";
                echo " <td>$uID</td>";
                echo "   </tr>";
            }
        }
        else {
            for ($i = 0; $i < $k; $i++) {
                $row = $received->fetch_array();

                $name = $row[1];
                $email = $row[2];
                $admission = $row[6];
                $mobile = $row[7];
                $uID= $row[0];

                echo "    <tr>";
                echo "<td>    $name </td>";
                echo " <td> $email </td>";
                echo "<td>$admission</td>";
                echo " <td> $mobile </td>";
                echo " <td>$uID</td>";
                echo "   </tr>";
            }

        }




       }catch(Exception $e1){

    }

    ?>

    <!---------------------------------------------->

    <!-- ADD PHP to edit profile information -->

    <?php
    if(isset($_POST['submit2'])){
        $uid=$_POST['uid'];

        try{

            $DB1=new mysqli('localhost','root','','db');
            $S="select * from users1 ";
            $received= $DB1->query($S);
            for($i=0;$i<$received->num_rows;$i++){
                $row=$received->fetch_array();



                $str1="DELETE FROM `users1` WHERE `usersId`='$uid'";
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


</tbody>

</table>

</div>

</div>

<!-- adding a popup form-->
<div class="center1">
    <div class="popup">

        <label for="show1" class="fa-solid fa-xmark"></label>
        <h2>Delete User</h2>
        <form action="admin_users.php" method="post" >

            <div class="data">
                <label> Enter User ID </label>
                <input type="text" name="uid">

            </div>


            <div class="data">

                <input type="submit" name="submit2"  class="addBtn" value="Delete">
            </div>




        </form>
    </div>
</div>

<!----------------------->

</body>
</html>