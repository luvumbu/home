<?php

session_start()  ; 
header("Access-Control-Allow-Origin: *");

include("linkx.php") ; 

 
$servername = "localhost";
$name =$_POST["name"] ;

$_SESSION["name"] = sha1( rand(10,9999999999999999999999)) ;  


 


 
 
?>