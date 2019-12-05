<?php
include_once 'session.php';
$dept=$_SESSION['Department'];
$desig=$_SESSION["Designation"];
$name=$_SESSION["Name"];

$sql = "SELECT Name from employee where Department='$dept' AND Designation='$desig' and Name <>'$name'";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    <title>Apply Leave</title>
    <style>

			body{
				font: 15px/1.5 Arial,Helvetica,sans-serif,Verdana;
        background-color: #eee;

			}

      form {
        padding: 10px;
        border: 2px solid black;
        background-color: #efefef;
        /* height: 100%; */
      }

      input[type=date]{
        padding: 5px;
        width: 200px;
      }
      select{
        padding: 5px;
        width: 120px;
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
      <!-- <div class="content"> -->
        <form method="POST"action="test.php">
          <center><font size=4><b>Apply Leave</b></font></center><br><br>
           <label>From:</label>
           <input type="date" name="from">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <label>To:</label>
           <input type="date" name="to" placeholder="DD/MM/YYYY"><br><br>
           <tr>
           <td><label>Type of leave</label></td>
           <td><select name="LEAVE" id="LEAVE">
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


              <div class="form-group fieldGroup">
                  <div class="input-group">
                    <td>Hour</td>
                    <td><select name="Hour" id="Hour">
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
                   <td><select name="Semester" id="Semester">
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
                  <td><select name="FN" id="FN">
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
                      <div class="input-group-btn">
                        <!-- <button class="btn btn-success add-more" type="button"><a href="javascript:void(0)"</a><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Add</button> -->
                        <a href="javascript:void(0)" class="btn btn-success addMore" style="width:96px"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>

                          <!-- <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a> -->
                      </div>
                  </div>
              </div>
              <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
        </form>

                    <!-- copy of input fields group -->
            <div class="form-group fieldGroupCopy" style="display: none;">
                <div class="input-group">
                  <td>Hour</td>
                  <td><select name="Hour" id="Hour">
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
                 <td><select name="Semester" id="Semester">
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
                <td><select name="FN" id="FN">
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
                    <div class="input-group-btn">
                        <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                    </div>
                </div>
            </div>
         <!-- <br><br> -->

      <!-- </div>


    </div> -->



		<script type="text/javascript">

    $(document).ready(function(){
        //group add limit
        var maxGroup = 8;

        //add more fields group
        $(".addMore").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum '+maxGroup+' groups are allowed.');
            }
        });

        //remove fields group
        $("body").on("click",".remove",function(){
            $(this).parents(".fieldGroup").remove();
        });
    });
		</script>


  </body>
</html>
