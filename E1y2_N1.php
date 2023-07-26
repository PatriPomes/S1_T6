<?php

session_start();

$_SESSION['username']=$_POST['name'];
$mail=$_POST['email'];
$edad=$_POST['edad'];



 echo "El teu nom es: ".$_SESSION['username']."<br>"."El teu mail es: ".$mail."<br>"."La teva edat es: ".$edad."<br>";


?>