
<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
 

$emplacement ="../../../../" ; 
include($emplacement."connexion.php") ; 
 
echo $_SESSION["name"] ; 

//echo $_SESSION["time"] ; 


 
//include("linkx.php") ; 
 
 

 
 /*
 
      
      $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("inserttion ok ") ; 
        
        
// header_action_2_input
// textarea_action_2_input
        if($id=="header_action_2_input"){
            $apple->set_sql('UPDATE `root`.`liste_projet` SET `liste_projet_name` = "'.$value.'" WHERE `liste_projet_id_sha1` = "'.$time.'"') ; 
        }
        else {
            $apple->set_sql('UPDATE `root`.`liste_projet` SET `liste_projet_description1` = "'.$value.'" WHERE `liste_projet_id_sha1` = "'.$time.'"') ; 

        }
        $apple->execution() ;

*/


        ?>