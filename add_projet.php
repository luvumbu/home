<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");

 
 /*
$log_user_name = $_SESSION["log_user_name"] ; 
$log_user_sha1 = $_POST["log_user_sha1"] ; 
$log_user_action = $_POST["log_user_action"] ; 





 $_SESSION["log_user_sha1"] = $_POST["log_user_sha1"] ; 
 $_SESSION["log_user_action"] = $_POST["log_user_action"] ; 
 $_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR']   ; 

*/
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR']   ; 
$liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 
$liste_projet_id_parent = $_POST["liste_projet_id_parent"] ; 
    

include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 

            $apple = new Insertion_Bdd(
                $servername,
                $username,
                $password,
                $dbname
                
                );
                    
               
                $apple->set_msg_valudation("") ;  
                $apple->set_sql("INSERT INTO liste_projet (liste_projet_id_parent,liste_projet_id_sha1,liste_projet_ip)
                        
                VALUES ('$liste_projet_id_parent','$liste_projet_id_sha1','$REMOTE_ADDR')") ; 
                $apple->execution() ;

  

?>