<?php

session_start()  ; 
header("Access-Control-Allow-Origin: *");

include("linkx.php") ; 

 


 
 
 
$_SESSION["name"] = sha1( rand(10,9999999999999999999999)) ;  

 
 $_SESSION["recherche_elements"] =  $_POST["name"];  ; 

 

 
?>