<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['UserID'];
   /*$sql="SELECT * FROM employee INNER JOIN leavetype ON employee.ID=leavetype.ID AND employee.ID = '$user_check'";*/
   $sql="SELECT * FROM employee where ID = '$user_check'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
     while ($row=mysqli_fetch_array($result)) {
       $login_session = $row['Name'];
       $id=$row['ID'];
       $email=$row['Email'];
       $desig=$row['Designation'];
       $exp=$row['Experience'];
       $dept=$row['Department'];
       $mob=$row['Mobile_No'];
  /*   $DL=$row['DL'];
       $CL=$row['CL'];
       $HL=$row['HL'];
       $VL=$row['VL'];
       $UE=$row['UE'];
       $CO=$row['CO'];
       $ML=$row['ML'];
       $MATL=$row['MATL'];
       $WO=$row['WO'];
       $LOP=$row['LOP'];  */

$_SESSION['ID']=$user_check;
$_SESSION['Name']=$login_session;
$_SESSION['Department']=$dept;
$_SESSION["Designation"]=$desig;
$_SESSION['Email']=$email;
$_SESSION['Mob']=$mob;
$_SESSION['Image']=$row['Img'];
$_SESSION['Emp_type']=$row['Emp_type'];

     }
  }

   if(!isset($_SESSION['UserID'])){
      header("location:login.php");
   }
?>
