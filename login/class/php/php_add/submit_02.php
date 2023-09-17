<?php 
session_start();
header("Access-Control-Allow-Origin: *");



$information_user_id_sha1 = $_SESSION["information_user_id_sha1"]  ; 
$liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 
$name_parent_info = $_POST["name_parent_info"] ;
include("link.php") ; 

 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("inserttion ok ") ;  
    $apple->set_sql("INSERT INTO liste_projet (liste_projet_id_sha1,information_user_id_sha1,liste_projet_id_parent)
            
    VALUES ('$liste_projet_id_sha1','$information_user_id_sha1','$name_parent_info')") ; 
    $apple->execution() ;




?>