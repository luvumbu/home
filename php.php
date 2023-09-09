<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");

echo "ok" ; 
$t =  $_POST["login"] ; 


include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 



$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("inserttion ok ".$t) ;  
    $apple->set_sql("INSERT INTO information_user (information_user_id_sha1)
            
    VALUES ('$t')") ; 
    $apple->execution() ;

?>