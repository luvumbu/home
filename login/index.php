<?php 
session_start(); 
// echo count($_SESSION["option_remove_name_x"]) ;

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="src/img/all/favicon.jpg">
</head>
<body id="my_body">

<script src="class/js/js_upload/change_title.js"></script>  
 
 
<!-- 

  <body id="my_body"  onmouseover="info_cookie_save(event)"  title="my_body">
-->   

<div id="ip_info_cookie_cool_cook" title="<?php echo $_SERVER["REMOTE_ADDR"] ; ?>"></div>
<div id="info"></div>
<?php 
  if(!isset($_SESSION["information_user_id_sha1"])){
    
    include("pages_off/acceuil1.html") ;
    // si lutilisateur n'est pas connexion
   ?>

<script>
    document.title =change_title() ;
  document.getElementById("titre_page1").innerHTML=change_title();
  document.getElementById("titre_page2").innerHTML=change_title();
  


</script>

   <?php
  }
  else {

  // include("pages_on/login.php") ;

include("pages_on/apparence/01.html") ;
/*include("index_img.php") ; 

include("pages_on/apparence/02.html") ;

include("pages_on/apparence/03.html") ;
include("pages_on/apparence/04.html") ;
include("pages_on/apparence/05.html") ;
*/
/**/

   ?>

   <script>
    function all_black(){
    Ajax("information_user_info","pages_on/apparence/not.html");

}
   </script>
      <?php
   ?>
<script src="class/js/js_on/session_destroy.js"></script>
<?php 
  }
 include("link_off/index_link.html") ; 
   ?>
<div id="information_user_info"></div>

  <!--
<script src="class/js/js_off/select_info1.js"></script> 
<script src="class/js/js_off/select_info2.js"></script>
-->
 
<script src="class/js/js_off/Information.js"></script>
 
 <!-- 
toutes les focti
--> 
<script src="class/js/js_off/login_user.js"></script>  
<script src="class/js/js_off/login_user.js"></script> 
<script src="class/js/js_add/dowload_img.js"></script> 
<script src="class/js/js_add/dowload_img2.js"></script>  
<script src="class/js/js_add/dowload_img3.js"></script>  


<script src="class/js/js_array_info/add_group_affiche_form.js"></script>  
<script src="class/js/js_array_info/voir_group.js"></script>  
<script src="class/js/js_remove/option_remove.js"></script>  
<script src="class/js/js_on/option_redirection.js"></script>  
<script src="class/js/js_array_info/voir_liste_projet.js"></script>  
<script src="class/js/js_array_info/link.js"></script>  
<script src="class/js/js_upload/update_liste_projet_visibilite1.js"></script>  




 
<link rel="stylesheet" href="src/css/index.css">
<div id="el"></div>
<?php 
  if(isset($_SESSION["information_user_id"])){
}
include("class/php/php_off/verif.php");



?>
</div>


<script>
 </script>
 
</body>
 <link rel="stylesheet" href="css.css">
 </html>
