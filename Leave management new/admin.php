<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Admin</title>
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
           <li><a class="current" href="admin.php">View Employee</a></li>
           <li><a href="AddEmployee.php">Add Employee</a></li>
           <li><a href="ManageEmployee.php">Manage Employee</a></li>
           <li><a href="adminpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">

        <h1 style="text-align: center">Employee Details </h1>
        <h3>Department of Computer Science & Engineering </h3>
        <button type="submit" style="float:right;padding:10px;margin-bottom:10px">Convert To Excel</button>
        <?php
        include("session.php");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql="SELECT * FROM employee INNER JOIN leavetype ON employee.ID=leavetype.ID AND employee.Department = 'CSE'";
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<table><tr><th>Name</th><th>ID</th><th>Designation</th><th>Exp</th><th>DL</th><th>CL</th><th>HL</th><th>VL</th><th>UE</th><th>CO</th><th>ML</th><th>MATL</th><th>WO</th><th>LOP</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["ID"]. "</td><td>" . $row["Designation"]."</td><td>" . $row["Experience"]."</td><td>" . $row["DL"]."</td><td>" . $row["CL"]."</td><td>" . $row["HL"]."</td><td>" . $row["VL"]."</td><td>" . $row["UE"]."</td><td>" . $row["CO"]."</td><td>" . $row["ML"]."</td><td>" . $row["MATL"]."</td><td>" . $row["WO"]."</td><td>" . $row["LOP"]. "</td></tr>";
        }
        echo "</table>";
        }
        else {
            echo "0 results";
        }
        ?>

        <h3>Department of Electronics & Electrical Engineering </h3>
        <?php

        $sql="SELECT * FROM employee INNER JOIN leavetype ON employee.ID=leavetype.ID AND employee.Department = 'EEE'";
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<table><tr><th>Name</th><th>ID</th><th>Designation</th><th>Exp</th><th>DL</th><th>CL</th><th>HL</th><th>VL</th><th>UE</th><th>CO</th><th>ML</th><th>MATL</th><th>WO</th><th>LOP</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["ID"]. "</td><td>" . $row["Designation"]."</td><td>" . $row["Experience"]."</td><td>" . $row["DL"]."</td><td>" . $row["CL"]."</td><td>" . $row["HL"]."</td><td>" . $row["VL"]."</td><td>" . $row["UE"]."</td><td>" . $row["CO"]."</td><td>" . $row["ML"]."</td><td>" . $row["MATL"]."</td><td>" . $row["WO"]."</td><td>" . $row["LOP"]. "</td></tr>";
        }
        echo "</table>";
        }
        else {
            echo "0 results";
        }
        ?>

        <h3>Department of Civil Engineering </h3>
        <?php

        $sql="SELECT * FROM employee INNER JOIN leavetype ON employee.ID=leavetype.ID AND employee.Department = 'CE'";
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<table><tr><th>Name</th><th>ID</th><th>Designation</th><th>Exp</th><th>DL</th><th>CL</th><th>HL</th><th>VL</th><th>UE</th><th>CO</th><th>ML</th><th>MATL</th><th>WO</th><th>LOP</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["ID"]. "</td><td>" . $row["Designation"]."</td><td>" . $row["Experience"]."</td><td>" . $row["DL"]."</td><td>" . $row["CL"]."</td><td>" . $row["HL"]."</td><td>" . $row["VL"]."</td><td>" . $row["UE"]."</td><td>" . $row["CO"]."</td><td>" . $row["ML"]."</td><td>" . $row["MATL"]."</td><td>" . $row["WO"]."</td><td>" . $row["LOP"]. "</td></tr>";
        }
        echo "</table>";
        }
        else {
            echo "0 results";
        }
        ?>

        <h3>Department of Electronics & Communication Engineering </h3>
        <?php

        $sql="SELECT * FROM employee INNER JOIN leavetype ON employee.ID=leavetype.ID AND employee.Department = 'ECE'";
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<table><tr><th>Name</th><th>ID</th><th>Designation</th><th>Exp</th><th>DL</th><th>CL</th><th>HL</th><th>VL</th><th>UE</th><th>CO</th><th>ML</th><th>MATL</th><th>WO</th><th>LOP</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["ID"]. "</td><td>" . $row["Designation"]."</td><td>" . $row["Experience"]."</td><td>" . $row["DL"]."</td><td>" . $row["CL"]."</td><td>" . $row["HL"]."</td><td>" . $row["VL"]."</td><td>" . $row["UE"]."</td><td>" . $row["CO"]."</td><td>" . $row["ML"]."</td><td>" . $row["MATL"]."</td><td>" . $row["WO"]."</td><td>" . $row["LOP"]. "</td></tr>";
        }
        echo "</table>";
        }
        else {
            echo "0 results";
        }
        ?>

        <h3>Department of Mechanical Engineering </h3>
        <?php

        $sql="SELECT * FROM employee INNER JOIN leavetype ON employee.ID=leavetype.ID AND employee.Department = 'ME'";
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<table><tr><th>Name</th><th>ID</th><th>Designation</th><th>Exp</th><th>DL</th><th>CL</th><th>HL</th><th>VL</th><th>UE</th><th>CO</th><th>ML</th><th>MATL</th><th>WO</th><th>LOP</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["ID"]. "</td><td>" . $row["Designation"]."</td><td>" . $row["Experience"]."</td><td>" . $row["DL"]."</td><td>" . $row["CL"]."</td><td>" . $row["HL"]."</td><td>" . $row["VL"]."</td><td>" . $row["UE"]."</td><td>" . $row["CO"]."</td><td>" . $row["ML"]."</td><td>" . $row["MATL"]."</td><td>" . $row["WO"]."</td><td>" . $row["LOP"]. "</td></tr>";
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
