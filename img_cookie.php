<?php 

session_start() ; 
 
 
?>

<div class="img_taille">
<img src="<?php 
   echo  "uploads/".$_SESSION['nom_complet_img_upload'] ; 
?>" alt="" srcset="" class="img-fluid">


</div>
 