<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");

 
 
include("class/Insertion_Bdd.php") ; 
include("class/connexion.php"); 


 $log_user_sha1 = $_POST["log_user_sha1"]  ; 


 $nom_complet_img_upload = $_SESSION['nom_complet_img_upload'] ;
 




 
 

        $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            
           
            $apple->set_msg_valudation("LOG OK OK ".$log_user_sha1) ;  
            $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_img` ="'.$nom_complet_img_upload.'"   WHERE `liste_projet_id_sha1`="'.$log_user_sha1.'"') ; 
            $apple->execution() ;
 

?>