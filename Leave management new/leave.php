<?php
include('session.php');
$dept=$_SESSION['Department'];
$desig=$_SESSION["Designation"];
$name=$_SESSION["Name"];

/*$sql = "SELECT Name from employee where Department='$dept' AND Designation='$desig' and Name <>'$name'";*/
$sql = "SELECT Name from employee where Designation='AP' or Designation='HOD' and Name <>'$name' order by Department";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="./CSS/style.css">


    <title>Apply Leave</title>
    <style>



      form {
        padding: 10px;
        border: 2px solid black;
        background-color: #efefef;
        height: 100%;
      }

      input[type=date]{
        padding: 5px;
        width: 200px;
      }
      select{
        padding: 5px;
        width: 130px;
      }

/*      button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
} */

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
           <li><a href="faculties.php">Leave Status</a></li>
           <li><a class="current" href="leave.php">Apply for Leave</a></li>
           <li><a href="applied.php">Applied Leave(s)</a></li>
           <li><a href="rule.php">Leave Rules</a></li>
           <li><a href="facpass.php">Change Password</a></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <form method="POST"action="applyleave.php">
          <center><font size=4><b>Apply Leave</b></font></center><br><br>
           <label>From:</label>
           <input type="date" name="from"placeholder="DD/MM/YYYY" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <label>To:</label>
           <input type="date" name="to" placeholder="DD/MM/YYYY" required><br><br>
           <tr>
           <td><label>Type of leave</label></td>
           <td><select name="LEAVE" id="LEAVE" required>
            <option value="">Select..</option>
            <option value="CL">CL</option>
            <option value="DL">DL</option>
            <option value="ML">MATL</option>
            <option value="VL">VL</option>
            <option value="HL">HL</option>
            <option value="UL">UL</option>
          </select></td>
          </tr><br><br>
              <label>Reason for leave </label>
              <textarea rows="2" cols="20" name="reason"></textarea><br><br>
							<label>Class arrangements</label><br>
                <td>Hour</td>
                <td><select name="Hour" id="Hour" required>
                  <option value="">Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
               </select></td>
               <td>&nbsp;&nbsp;Semester</td>
               <td><select name="Semester" id="Semester" required>
                 <option value="">Select</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
                <option value="S5">S5</option>
                <option value="S6">S6</option>
                <option value="S7">S7</option>
                <option value="S8">S8</option>
              </select></td>
              <td>&nbsp;&nbsp;Faculty Name</td>
              <td><select name="FN" id="FN" required>
                <option value="FO">Select</option>
                <?php
                if(mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)) {
                  echo $row['Name'];
                  print("<option value='".$row["Name"]."'>".$row["Name"]."</option>");

                  }
                }

               ?>

      		</select>
				</td>

                <br><br><br><br>
              <input type="submit" value="SUBMIT" >
        </form> <br><br>

      </div>
      <div class="profile">
        <?php
          include 'profile.php';
         ?>
      </div>
    </div>




		<script type="text/javascript">

		    $(document).ready(function() {

			//here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
		      $(".add-more").click(function(){
		          var html = $(".copy-fields").html();
		          $(".after-add-more").after(html);
		      });
		//here it will remove the current value of the remove button which has been pressed
		      $("body").on("click",".remove",function(){
		          $(this).parents(".control-group").remove();
		      });

		    });

		</script>

    <footer>
      <p>copyright &copy;</p>
    </footer>
  </body>
</html>
