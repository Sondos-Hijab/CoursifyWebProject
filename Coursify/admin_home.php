<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ef1c326a28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin_style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <meta name="view" content="width-device-width, initial-scale=1,maximum-scale=1">
    <title>Admin</title>
</head>
<body>

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
</div>
<div class="main_content_ad">
<div class="admin_cardBox">
  <div class="admin_card">
      <div>

          <div class="numbers">1234</div>
          <div class="cardName"> Total Users</div>
      </div>
      <div class="iconBox">
          <i class="fa-solid fa-users"></i>
      </div>
  </div>
    <div class="admin_card">
        <div>

            <div class="numbers">154</div>
            <div class="cardName">New Users</div>
        </div>
        <div class="iconBox">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <div class="admin_card">
        <div>

            <div class="numbers">24</div>
            <div class="cardName"> Total Courses</div>
        </div>
        <div class="iconBox">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
    </div>
    <div class="admin_card">
        <div>

            <div class="numbers">8745$</div>
            <div class="cardName"> Fees Collection</div>
        </div>
        <div class="iconBox">
            <i class="fa-solid fa-dollar-sign"></i>
        </div>
    </div>
</div>
<div style="font-size: 1.2em; margin-left: 20px"> <span>Statistics</span></div>
    <div class="Graph">

        <div class="fGraph">
            <canvas id="myChart" ></canvas>
        </div>

        <div class="fGraph">
            <canvas id="myChart1" ></canvas>
        </div>



    </div>
</div>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun'],
            datasets: [{
                label: 'Income/Expense Report',
                data: [12, 19, 3, 5, 10, 5],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
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
            response:true,
        }
    });
</script>
<script>
    const ctx1 = document.getElementById('myChart1').getContext('2d');
    const myChart1 = new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: ['Direct', 'Referral', 'Affiliate'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',

                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive:true,
        }
    });
</script>


</body>
</html>