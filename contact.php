<?php
$to = 'lalo.01.g@gmail.com';

$name 	= $_POST['name'];
$email 	= $_POST['email'];
$tel 	= $_POST['tel'];
$msg 	= $_POST['msg'];

mail($to, "Mensaje Web de " . $name, $msg);

header('location: contact-ok.html');
?>