<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
$recherche_elements =  $_POST["recherche_elements"] ; 
 
 

$_SESSION["time2"] =  $_POST["recherche_elements"] ;  



 





 $liste_projet_name =   $_POST["liste_projet_name"] ; 
 $liste_projet_description1 =   $_POST["liste_projet_description1"] ; 



 echo  $liste_projet_name ; 
 

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name` = "'.$liste_projet_name.'" WHERE  `liste_projet_id_sha1` = "'.$recherche_elements.'"') ; 
      $apple->execution() ;









      $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            $apple->set_msg_valudation("up ok") ;  
            $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_description1` = "'.$liste_projet_description1.'" WHERE  `liste_projet_id_sha1` = "'.$recherche_elements.'"') ; 
            $apple->execution() ;     

 
?>