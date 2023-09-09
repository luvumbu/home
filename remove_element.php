<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");
include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 
 $liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 
 
     

            $apple = new Insertion_Bdd(
                $servername,
                $username,
                $password,
                $dbname
                
                );
                    
               
                $apple->set_msg_valudation("delet ok ") ;  
                $apple->set_sql('DELETE FROM  `liste_projet` WHERE `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
                $apple->execution() ;












                $apple = new Insertion_Bdd(
                    $servername,
                    $username,
                    $password,
                    $dbname
                    
                    );
                        
                   
                    $apple->set_msg_valudation("delet ok ") ;  
                    $apple->set_sql('DELETE FROM  `liste_projet` WHERE `liste_projet_id_parent` = "'.$liste_projet_id_sha1.'"') ; 
                    $apple->execution() ;
 

?>