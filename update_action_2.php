<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");
include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 
 
 
 
 $liste_projet_id_sha1 =  $_POST["liste_projet_id_sha1"] ; 
 $liste_projet_id_parent =  $_POST["liste_projet_id_parent"] ; 
 
 

$list_info = $_POST["list_info"] ; 

 
$visibility = $_POST["visibility"] ; 


echo $list_info ; 
echo $visibility ; 
$apple = new Insertion_Bdd(
  $servername,
  $username,
  $password,
  $dbname
  
  );
  
 
  $apple->set_msg_valudation("delet ok ") ;  

  
 switch ($list_info) {
  case "input":
    $liste_projet_name = $_POST["liste_projet_name"] ; 
    echo $liste_projet_name ; 

  $apple->set_sql('UPDATE  `liste_projet` SET `liste_projet_name` = "'.$liste_projet_name.'" WHERE `liste_projet_id_sha1` ="'.$liste_projet_id_sha1.'"') ; 

 
    break;
    case "textarea":
      $liste_projet_description1 = $_POST["liste_projet_description1"] ; 
      echo $liste_projet_description1 ; 
  $apple->set_sql('UPDATE  `liste_projet` SET `liste_projet_description1` = "'.$liste_projet_description1.'" WHERE `liste_projet_id_sha1` ="'.$liste_projet_id_sha1.'"') ; 

   
      break;


      case "remove":
  
    $apple->set_sql('DELETE FROM  `liste_projet` WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
  
     
        break;

        case "visibility":


  
          $apple->set_sql('UPDATE  `liste_projet` SET `liste_projet_visibilite1` = "'.$visibility.'" WHERE `liste_projet_id_sha1` ="'.$liste_projet_id_sha1.'"') ; 

        
           
              break;
 
}
              
$apple->execution() ;
 
?>