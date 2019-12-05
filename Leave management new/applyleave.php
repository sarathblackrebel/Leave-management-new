<?php
include('session.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$from=$_POST['from'];
$to=$_POST['to'];
$type=$_POST['LEAVE'];
$reason=$_POST['reason'];
$hour=$_POST['Hour'];
$sem=$_POST['Semester'];
$fac=$_POST['FN'];

$id=$_SESSION['ID'];
$dept=$_SESSION['Department'];
/*echo $from.'<br>';
echo $to.'<br>';
echo $type.'<br>';
echo $reason.'<br>';
echo $hour.'<br>';
echo $sem.'<br>';
echo $fac.'<br>';*/


$sql3="INSERT INTO applyleave(ID,Start,EndLeave,Type,Reason,hour,sem,faculty,Dept,Status)VALUES('$id','$from','$to','$type','$reason','$hour','$sem','$fac','$dept','Pending')";
if (mysqli_query($conn, $sql3))
{
  echo "New record created successfully";

}
else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn). "<br>" ;
  }


 ?>
