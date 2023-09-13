<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");

$servername = "localhost";


$information_user_login = $_POST["information_user_login"];
$information_user_password = $_POST["information_user_password"];



 
 



 
      
 
 
 
 
 
include("class/Select_datas.php") ;  
include("class/connexion.php") ;  

 

 

    
 


 


$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'information_user_login',
    'information_user_password' 
    );
 
    $apple->sql='SELECT * FROM `information_user` WHERE `information_user_login` ="'.$information_user_login.'" AND `information_user_password` ="'.$information_user_password.'" ';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);     
 
 

       

  if(count($apple->list_row)>0){

    $_SESSION["information_user_login"]    = $information_user_login ;    
    $_SESSION["information_user_password"] = $information_user_password ;    
 
  }
  else {
    
    $_SESSION["information_user_login"]    ='<div class="container mt-3 text-center"><div class="alert alert-danger" role="alert">
    Échec de la connexion
  </div> </div>';    
    $_SESSION["information_user_password"] = '<div class="container mt-3 text-center cursor_pointer" onclick="form_inscription()"><div class="alert alert-primary" role="alert">
    Cliquez ici pour vous inscrire
  </div></div>' ; 
  }
?> 

 

 