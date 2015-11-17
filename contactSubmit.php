<?php 

$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postalcode = $_POST['postalcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$trade = $_POST['trade'];
$comments = $_POST['comments'];
$country = $_POST['country'];
//$msg='test goes here';
//mail("shakhout@live.com","New Contact Request",$msg);


// multiple recipients
$to  = 'admin@qualitytradesmen.com.au';

// subject
$subject = 'New Contact Request';

// message
$message = '
<html>
<head>
  <title>New Contact Request</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
  <table class = "table table-hover">
    <tr>
       <th> Name </th>
       <th> Address </th>
       <th> City </th>
       <th> State </th>
       <th> Postal Code </th>
       <th> Phone </th>
       <th> Email </th>
       <th> Trade </th>
       <th> Country </th>
       <th> Comments </th>
   </tr>
   <tr>
       <td> '.$name.' </td>
       <td> '.$address.' </td>
       <td> '.$city.' </td>
       <td> '.$state.' </td>
       <td> '.$postalcode.' </td>
       <td> '.$phone.' </td>
       <td> '.$email.' </td>
       <td> '.$trade.' </td>
       <td> '.$country.' </td>
       <td> '.$comments.' </td>       
   </tr>
</table>
</div>
</div>
</body>
</html>
';
//echo $message;
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
// $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
// $headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);


?>