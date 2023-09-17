<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
$liste_projet_id_sha1 =  $_POST["liste_projet_id_sha1"] ; 
$liste_projet_name = $_POST["liste_projet_name"] ; 

 
 

 
  





$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("") ;  

// i correspond a input 
// t correspond a textarea
$apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name` = "'.$liste_projet_name.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
 
      $apple->execution() ;



      // partie admin 



      


 
?>