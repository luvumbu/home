<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");
include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 
 
 
//$update_data = $_POST["update_data"] ; 

$type_data = $_POST["type_data"] ; 
$update_data_info = $_POST["update_data_info"] ;
  

//echo $type_data;

 
 
    $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("delet ok ") ;  
        $apple->set_sql('UPDATE  `liste_projet` SET `liste_projet_description1` = "'.$update_data_info.'" WHERE `liste_projet_id_sha1` ="'.$type_data.'"') ; 
        $apple->execution() ;

 


 







              
 

?>