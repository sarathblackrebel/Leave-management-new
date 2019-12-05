
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Add Employee</title>
    <style>

      form {
        padding: 10px;
        border: 2px solid black;
        background-color: #efefef;
        font: 15px/1.5 Verdana;

      }

      input[type=text],input[type=email],input[type=number],input[type=tel],input[type=password],input[type=date],select{
        padding: 10px;
        width: 200px;
        border: 1px solid lightblue;
        border-radius: 4px;
     }
      /* select{
        padding: 10px;
        width: 200px;
      } */
      table{
        background-color: white;
      }
      td{
        border: none;
        background-color: white;
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
           <li><a href="admin.php">View Employee</a></li>
           <li><a  class="current" href="AddEmployee.php">Add Employee</a></li>
           <li><a href="ManageEmployee.php">Manage Employee</a></li>
           <li><a href="adminpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <?php
          include('session.php');
         ?>
        <form method="POST"action="Add.php">
        <!--<form action="test.php" name="STAFF REGISTRATION FORM" onSubmit="return(validate());"> -->
        <table cellpadding="5" width="100%" cellspacing="5">
        <tr>
         <td colspan=4>
          <center><font size=4><b>STAFF REGISTRATION FORM</b></font></center>
         </td>
        </tr>

        <!-- <tr>
        <td>Name</td>
        <td><input type=text name="name" id="name" placeholder="Employee Name" required></td>
        <td></td><td><b>Eligible Leaves</b></td>
        </tr> -->

        <tr>
        <td>Name</td>
        <td><input type=text name="name" id="name" placeholder="Employee Name" required></td>
        <td> MATL</td> <td><input type="number" step="any" min="0" name="matl" id="matl"></td>
        </tr>

        <tr>
        <td>ID</td>
        <td><input type=text name="ID" id="ID" placeholder="Employee ID" required></td>
        <td> DL</td> <td><input type="number" step="any" min="0" name="dl" id="dl" required></td>
        </tr>

        <tr>
        <td>Gender</td>
        <td><input type="radio" name="sex" value="male">Male
        <input type="radio" name="sex" value="Female">Female</td>
        <td> CL</td> <td><input type="number" step="any" min="0" name="cl" id="cl" required></td>
        </tr>


        <tr>
        <td>Department</td>
        <td><select name="department" id="department" width="150" required>
          <option value="">SELECT...</option>
          <option value="CSE">CSE</option>
          <option value="CE">CE</option>
          <option value="ME">ME</option>
          <option value="EEE">EEE</option>
          <option value="ECE">ECE</option>
          <option value="H&S">H_S </option>
          <option value="other">Other</option>
        </select></td>
        <td> VL</td> <td><input type="number" step="any" min="0" name="vl" id="vl" required></td>
        </tr>

        <tr>
        <td>Designation</td>
        <td><select name="designation" id="designation"required>
        <option value="">SELECT...</option>
        <option value="Admin">Admin</option>
        <option value="DD">DD</option>
        <option value="Principal">Principal</option>
        <option value="HOD">HOD</option>
        <option value="AP">AP</option>
        <option value="STAFF">Other</option>
        </select></td>
        <td> UE</td> <td><input type="number" step="any" min="0" name="ue" id="ue" required></td>
        </tr>

        <tr>
        <td>Employee Type</td>
        <td><select name="emp_type"id="emp_type" required>
        <option value="">SELECT...</option>
        <option value="Permanent">Permanent </option>
        <option value="Temporary">Temporary </option>
        </select></td>
        <td> HL</td> <td><input type="number" step="any" min="0" name="hl" id="hl" required></td>
        </tr>

        <tr>
        <td>Experience</td>
        <td><input type="number"min="0" value="0" name="experience" id="experience"></td>
        <td> WO</td> <td><input type="number" step="any" min="0" name="wo" id="wo"></td>
        </tr>

        <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="email" required></td>
        <td> MATL</td> <td><input type="number" step="any" min="0" name="matl" id="matl"></td>
        </tr>

        <tr>
        <td>DOJ</td>
        <td><input type="date" name="doj" id="doj" placeholder="DD-MON-YYYY"></td>
        <td> CO</td> <td><input type="number" step="any" min="0" name="co" id="co"></td>
        </tr>

        <tr>
        <td>Phone Number</td>
        <td><input type="tel" name="mobileno" id="mobileno" required></td>
      </tr>

          <tr>
          <td>Password</td>
          <td><input type="password" name="Pass" id="Pass" required></td>
        </tr>

          <tr>
            <td></td>
          <td><input type="checkbox" onclick="myFunction()">Show Password

            <script>
            function myFunction() {
              var x = document.getElementById("Pass");
              if (x.type === "password") {
                x.type = "text";
              }
              else {
                x.type = "password";
              }
            }
            </script>
            </td>
          </tr>

          <!--  <tr>
            <td colspan="4" align="center"><input type="submit" value="Submit Form"></td>
        </tr>-->

        <tr></tr>
        <tr></tr>
        </table>
        <input type="submit" value="Submit Form" style="align:right">
        </form>

      </div>

      <div class="profile">
        <?php
          include 'profile.php';
         ?>
    </div>
    </div>

  <!--  <footer>
      <p>copyright &copy;</p>
    </footer> -->
  </body>
</html>
