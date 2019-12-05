<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>HOD | View Faculties Leave</title>

    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    h3{
      color: blue;
    }

    </style>
    </head>

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
           <li><a href="hod.php">Leave Summary</a></li></li>
           <li><a class="current" href="ViewbyDpt.php">Faculty Leave</a></li></li>
           <li><a href="hodapply.php">Apply Leave</a></li></li>
           <li><a href="requests.php">Leave Requests</a></li></li>
           <li><a href="hodpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>
      <div class="content">

        <?php
        include("session.php");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $dept=$_SESSION['Department'];
        if ($dept=='CSE') {
          $department='Department of Computer Science & Engineering';
        }
        else if ($dept=='EEE') {
          $department='Department of Electricl & Electronics Engineering';
        }
        else if ($dept=='ME') {
          $department='Department of Mechanical Engineering';
        }
        else if ($dept=='CE') {
          $department='Department of Civil Engineering';
        }
        else
          $department='Department of Electronics & Communication Engineering';

        ?>
      <h3 style="text-align: center"><?php echo $department;?></h3>
        <?php
        $sql="SELECT * FROM employee INNER JOIN leavetype ON employee.ID=leavetype.ID AND employee.Department = '$dept' AND employee.Designation='AP'";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
          echo "<table><tr><th>Name</th><th>ID</th><th>Designation</th><th>Exp</th><th>DL</th><th>CL</th><th>HL</th><th>VL</th><th>UE</th><th>CO</th><th>ML</th><th>MATL</th><th>WO</th><th>LOP</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["ID"]. "</td><td>" . $row["Designation"]."</td><td>" . $row["Experience"]."</td><td>" . $row["DL"]."</td><td>" . $row["CL"]."</td><td>" . $row["HL"]."</td><td>" . $row["VL"]."</td><td>" . $row["UE"]."</td><td>" . $row["CO"]."</td><td>" . $row["ML"]."</td><td>" . $row["MATL"]."</td><td>" . $row["WO"]."</td><td><font color='red'>" . $row["LOP"]. "</font></td></tr>";
        }
        echo "</table>";
    }
        else {
            echo "0 results";
        }
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
