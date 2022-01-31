<?php
$to = 'info@mdbk.com.ar';

$name 	= $_POST['name'];
$email 	= $_POST['email'];
$tel 	= $_POST['tel'];
$msg 	= $_POST['msg'];

$final_msg = "mdbk.com.ar - Mensaje Web \n\n";
$final_msg .= "========================================= \n";
$final_msg .= "========================================= \n\n";
$final_msg .= "Nombre: " . $name ."\n\n";
$final_msg .= "Email: " . $email ."\n\n";
$final_msg .= "Teléfono: " . $tel ."\n\n";
$final_msg .= "Mensaje: " . $msg ."\n\n";

mail($to, "mdbk.com.ar - Mensaje Web", $final_msg);

header('location: contact-ok.html');
