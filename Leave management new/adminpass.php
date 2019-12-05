<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Admin</title>
  </head>
  <body>
    <header>
      <h1>UKF LMS
      <nav>
       <ul>
         <li><a href="logout.php">Log Out</a></li>
       </ul>
     </nav></h1>
    </header>

    <div class="container">
      <div class="sidebar">
        <nav>
         <ul>
           <li class="heading">Leave Management</li>
           <li><a href="admin.php">View Employee</a></li>
           <li><a href="AddEmployee.php">Add Employee</a></li>
           <li><a href="ManageEmployee.php">Manage Employee</a></li>
           <!--<li class="heading">Salary Calculator</a></li>-->
           <li><a class="current" href="adminpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <?php
        include('password.php')
         ?>
      </div>

      <div class="profile">
        <?php
          include 'profile.php';
         ?>
      </div>
    </div>

    <footer>
      <p>copyright &copy;</p>
    </footer>
  </body>
</html>
