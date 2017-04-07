<?php

$name=$_POST['firstname'];
$asunto=$_POST['asunto'];
$email=$_POST['email'];
$company=$_POST['company'];
$area=$_POST['area'];
$phone=$_POST['phone'];
$msn=$_POST['mensaje'];



$to = $email;
$subject = "Contacto Rockwater";

$message = "
<html>
<head>
<title>Contacto - Rockwater</title>
</head>
<body>
<p>Gracias por contactarnos <b>".$name."</b> hemos recibido tu mensaje.</p>

<p>".$msn."</p>

<table>
<tr>
<th>Compañia</th>
<th>Area</th>
<th>Telefono</th>
</tr>
<tr>
<td>".$company."</td>
<td>".$area."</td
<td>".$phone."</td></tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <jcpachecoh@gmail.com>' . "\r\n";
$headers .= 'Cc: jcpachecoh@gmail.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){

 header('Location: confirmacion-contacto.php');

};


?>