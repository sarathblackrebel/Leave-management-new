
<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$to = "nkr19626@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <nadi97akr@gmail.com>' . "\r\n";
#$headers .= 'Cc: myboss@example.com' . "\r\n";
/*mail($to,$subject,$message,$headers);
  echo "success";*/

  $success = mail($to,$subject,$message,$headers);
  if (!$success) {
      $errorMessage = error_get_last()['message'];
      echo $errorMessage;
  }
  else {
    echo "sent!";
  }

?>
