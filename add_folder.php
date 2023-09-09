<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");

 
 

 

include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 

$liste_group_id_sha1 = $_POST["liste_group_id_sha1"] ; 
 
 $liste_group_name = $_POST["liste_group_name"] ; 
        $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            
           
            $apple->set_msg_valudation("ok") ;  
            $apple->set_sql('UPDATE `liste_group` SET `liste_group_name` ="'.$liste_group_name.'"   WHERE `liste_group_id_sha1`="'.$liste_group_id_sha1.'"') ; 
            $apple->execution() ;
      
            
    
     



    
 
 

?>