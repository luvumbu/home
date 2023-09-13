<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");
 
  
 $information_user_login = $_POST["information_user_login"] ;

 
 
 
 

 $ramdom = sha1(rand(10,100000).$information_user_login) ;
   
 
 
 
 
 
include("class/Select_datas.php") ;  
include("class/Insertion_Bdd.php") ;  




include("class/connexion.php") ;  

 

 

    
 


 


$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'information_user_login',
    'information_user_password' 
    );
 
    $apple->sql='SELECT * FROM `information_user` WHERE `information_user_login` ="'.$information_user_login.'" ';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);     
 
 
 

  if(count($apple->list_row)<1){

 


    $_SESSION["information_user_login"]    ='<div class="container mt-3 text-center"><div class="alert alert-success" role="alert">
   Inscription reussi
  </div> </div>';    
    $_SESSION["information_user_password"] = '' ; 









    $apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
          
     
      $apple->set_msg_valudation("inserttion ok ") ;  
      $apple->set_sql("INSERT INTO information_user (information_user_login,information_user_id_sha1)
              
      VALUES ('$information_user_login','$ramdom')") ; 
      $apple->execution() ;

 
 
  }
  else{
    $_SESSION["information_user_login"] ='<div class="alert alert-danger" role="alert">
    Utilisateur existant
  </div>' ; 
    $_SESSION["information_user_password"]=""  ; 
  }
  

 


 
?> 



 


 