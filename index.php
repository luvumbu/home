<?php 
session_start() ; 
$_SESSION["log_user_name"] = "log_user_nameX";
$affiche_div=false; 
$config_=false;

$filename = 'config/connexion.php';
// eplacement du fichier et nom datribution
if (!file_exists($filename)) {
 echo "OK" ; 
} else {
    header('Location:home.php');
    exit();
}
?>