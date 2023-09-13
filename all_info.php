<?php 
 

session_start() ; 
header("Access-Control-Allow-Origin: *");
include("class/Select_datas.php"); 
include("class/connexion.php"); 
 
 
 
 


 
$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_ip',
    'liste_projet_name',
    'liste_projet_img',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'

    );
 
 
    $apple->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent`="x"';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);     

    echo   $myJSON ;
 
   
 


?>