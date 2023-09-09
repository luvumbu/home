<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");

 

include("class/Insertion_Bdd.php") ; 
include("class/connexion.php"); 


 echo "TEST" ; 
 

 
 


 $nom_complet_img_upload = $_SESSION['nom_complet_img_upload'] ; 

 
 










    $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("") ;  
        $apple->set_sql("INSERT INTO liste_img (liste_img_name)
                
        VALUES ('$nom_complet_img_upload')") ; 
        $apple->execution() ;
 

?>




