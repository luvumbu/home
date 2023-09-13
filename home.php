<?php 
session_start() ; 
$filename = 'class/connexion.php';
// eplacement du fichier et nom datribution
if (!file_exists($filename)) {
      header('Location:index.php');
     exit();
} 
 
 

if(isset($_SESSION["user_ndenga"])){
  include("login.php") ; 

}
else {
  include("form.php") ; 
} 

?>