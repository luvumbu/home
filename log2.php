<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");

 
 
$log_user_name = $_SESSION["log_user_name"] ; 
$log_user_sha1 = $_POST["log_user_sha1"] ; 
$log_user_action = $_POST["log_user_action"] ; 
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR']   ; 




 $_SESSION["log_user_sha1"] = $_POST["log_user_sha1"] ; 
 $_SESSION["log_user_action"] = $_POST["log_user_action"] ; 
 $_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR']   ; 






$_SESSION['name_img'] = sha1(rand(0, 99999999));

include("class/Insertion_Bdd.php"); 
include("class/connexion.php"); 


 
 

$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("") ;  
    $apple->set_sql("INSERT INTO log_user (log_user_name,log_user_sha1,log_user_action,log_user_ip)
            
    VALUES ('$log_user_name','$log_user_sha1','$log_user_action','$REMOTE_ADDR')") ; 
    $apple->execution() ;
  





   

switch ($log_user_action) {
  case "add_blog":
 

    $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("") ;  
        $apple->set_sql("INSERT INTO liste_projet (information_user_id_sha1,liste_projet_id_sha1,liste_projet_ip,liste_projet_id_parent)
                
        VALUES ('$log_user_name','$log_user_sha1','$REMOTE_ADDR','x')") ; 
        $apple->execution() ;
  
        

    break;

    case "title_first":
    case "textarea_first":    
 $liste_projet_name = $_POST["liste_projet_name"] ; 
 $liste_projet_description1 = $_POST["liste_projet_description1"] ; 

        $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            
           
            $apple->set_msg_valudation($log_user_sha1) ;  
            $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name` ="'.$liste_projet_name.'",`liste_projet_description1` ="'.$liste_projet_description1.'"   WHERE `liste_projet_id_sha1`="'.$log_user_sha1.'"') ; 
            $apple->execution() ;
      
            
    
        break;

        case "add_folder":    

            $apple = new Insertion_Bdd(
                $servername,
                $username,
                $password,
                $dbname
                
                );
                    
               
                $apple->set_msg_valudation("") ;  
                $apple->set_sql("INSERT INTO liste_group (liste_group_id_sha1)
                        
                VALUES ('$log_user_sha1')") ; 
                $apple->execution() ;

            break ; 



    
 
}

?>