<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");
include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 
 
$update_data_info = $_POST["update_data_info"] ; 
$update_data = $_POST["update_data"] ; 
  

            $apple = new Insertion_Bdd(
                $servername,
                $username,
                $password,
                $dbname
                
                );
                    
               
                $apple->set_msg_valudation("delet ok ") ;  
                $apple->set_sql('UPDATE  `liste_projet` SET `liste_projet_id_parent` = "'.$update_data_info.'" WHERE `liste_projet_id_sha1` ="'.$update_data.'"') ; 
                $apple->execution() ;

      
 

?>