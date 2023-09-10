<?php 
session_start() ; 
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 


<div id="div_add" ></div>
<div id="div_add_plus" ></div>
<div id="div_add_plus_img" ></div>





    

<script src="class/Ajax.js"></script>
<script src="class/Information.js"></script>


<script>



var img_cookie_add= "" ; 
var nombre_child = 0 ; 
 Ajax("div_add","apparence/form_3.html");

function action_1(_this){
 

  var now = new Date();
var annee   = now.getFullYear();
var mois    = now.getMonth() + 1;
var jour    = now.getDate();
var heure   = now.getHours();
var minute  = now.getMinutes();
var seconde = now.getSeconds();
var log_user_action = _this.id ; 



var log_user_sha1 = "t"+heure+"_"+minute+"_"+jour+"_"+mois+"_"+annee+"_"+seconde ; 
var ok = new Information("log.php"); // création de la classe 
ok.add("log_user_sha1", log_user_sha1); // ajout de l'information pour lenvoi 


    switch (_this.id) {
  case "add_element":
 Ajax("div_add_plus","apparence/add_element.html");

  
    break;
    case "add_folder":
   

 Ajax("div_add_plus","apparence/add_folder.html");

 console.log(log_user_sha1) ; 
 
   const myTimeout2 = setTimeout(myGreeting2, 500);

function myGreeting2() {
  document.getElementById("folder_name").title=log_user_sha1; 
}




 
 
break ; 
  case "add_blog":

 
    Ajax("div_add_plus","apparence/add_blog.html");


    const myTimeout = setTimeout(myGreeting, 1000);

function myGreeting() {
  document.getElementById("title_first").title=log_user_sha1;
  
}

    break;
  case "black_background":
     day = "black_background";
   
    document.getElementById("add_img_html").style.display = "none";
    Ajax("div_add_plus","apparence/not.html");


    break;
    case "black_background2":
      document.getElementById("add_img_html").style.display = "none";


    break ;
  case "title_first":
  case "textarea_first": 
 

    log_user_sha1 = document.getElementById("title_first").title ; 
    liste_projet_name = document.getElementById("title_first").value ;
    textarea_first = document.getElementById("textarea_first").value ;


ok.add("log_user_sha1", log_user_sha1); // ajout de l'information pour lenvoi 
ok.add("textarea_first", textarea_first); // ajout de l'information pour lenvoi 



ok.add("liste_projet_description1", textarea_first); // ajout de l'information pour lenvoi 
ok.add("liste_projet_name", liste_projet_name); // ajout de l'information pour lenvoi 



    
    break;
  case "add_img":
    //Ajax("div_add_plus","apparence/not.html");

    document.getElementById("add_img_html").style.display = "block";

    img_cookie_add = false ; 
 

    break;
  case "add_img2":
    img_cookie_add = true ; 
    console.log("add_img2") ;
    console.log("add_img2") ;
    console.log("add_img2") ;
    console.log("add_img2") ; 
    Ajax("div_add_plus_img","apparence/not.html");
    window.scrollTo(0,-10000);
document.getElementById("add_img_html").style.display = "block";
    break;


case "folder_name":
console.log("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX") ; 
console.log( document.getElementById("folder_name").value) ; 
console.log( document.getElementById("folder_name").title) ; 
console.log("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX") ; 

 


 var ok = new Information("add_folder.php"); // création de la classe 
 ok.add("liste_group_id_sha1", document.getElementById("folder_name").title); // ajout de l'information pour lenvoi 
 ok.add("liste_group_name",  document.getElementById("folder_name").value); // ajout d'une deuxieme information denvoi  
 console.log(ok.info()); // demande l'information dans le tableau
 ok.push(); // envoie l'information au code pkp 

  break ; 
  case "black":
    document.getElementById("add_img_html").style.display = "none";
    Ajax("div_add_plus","apparence/not.html");
  break ; 
  case "send_element": 

   // document.getElementById("add_img_html").style.display = "none";
    //document.getElementById("div_add_plus_img").style.display = "block";
    Ajax("div_add_plus_img","apparence/send_validation.html");
    break ; 

    case "send_validation_oui": 

 
      Ajax("div_add_plus","apparence/not.html");
  Ajax("div_add_plus_img","apparence/not.html");

break ; 
case "send_validation_non": 
  Ajax("div_add_plus_img","apparence/not.html");

break ; 




    case "remove_element" :
      Ajax("div_add_plus_img","apparence/remove_validation.html");



 
      break ; 


case "remove_validation_non" :


 
  Ajax("div_add_plus_img","apparence/not.html");



  break ; 
      case "remove_validation_oui" :
 
  Ajax("div_add_plus","apparence/not.html");
  Ajax("div_add_plus_img","apparence/not.html");
  var ok = new Information("remove_element.php"); // création de la classe 
  ok.add("liste_projet_id_sha1", document.getElementById("title_first").title); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
 
 
        break ; 
      case "visible_1" :
        alert("visible_1") ; 

//DELETE FROM `root`.`liste_projet` WHERE `liste_projet`.`liste_projet_id` = 48
break ; 
case "visible_2" :
console.log("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx") ; 
   console.log(_this.className) ; 
console.log("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx") ; 



if(_this.className=="cursor_pointer space_right_20"){
  document.getElementById(_this.id).className="cursor_pointer space_right_20 opacity_02" ; 


  
  var ok = new Information("update_data.php"); // création de la classe 
  ok.add("update_data_info", "off"); // ajout de l'information pour lenvoi 
  ok.add("update_data", document.getElementById("title_first").title); // ajout de l'information pour lenvoi 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
}
else {
  document.getElementById(_this.id).className="cursor_pointer space_right_20" ; 


  var ok = new Information("update_data.php"); // création de la classe 
  ok.add("update_data_info", "on"); // ajout de l'information pour lenvoi 
  ok.add("update_data", document.getElementById("title_first").title); // ajout de l'information pour lenvoi 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

}

 


//cursor_pointer space_right_20 opacity_02

break ;

case "nombre_child" : 

console.log(nombre_child) ; 
nombre_child ++ ; 


var para = document.createElement("div");
para.setAttribute("class", "container mt-3"); 
para.setAttribute("id", "nombre_child_0"+nombre_child); 
document.getElementById("div_add_plus").appendChild(para);



 
var para = document.createElement("div");
para.setAttribute("class", "mb-3"); 
para.setAttribute("id", "nombre_child_1"+nombre_child); 
document.getElementById("nombre_child_0"+nombre_child).appendChild(para);


var para = document.createElement("label");
para.setAttribute("for", "title_first_0"+nombre_child); 
para.setAttribute("class", "form-label"); 
para.innerHTML ="Titre";
document.getElementById("nombre_child_0"+nombre_child).appendChild(para);

var para = document.createElement("input");
para.setAttribute("type", "text" ); 
para.setAttribute("onkeyup", "action_1(this)"); 
para.setAttribute("class", "form-control"); 
para.setAttribute("id", "title_first_0"+nombre_child); 
document.getElementById("nombre_child_0"+nombre_child).appendChild(para);

/// textarea 




/*


  <div class="container mt-3" >
    <div class="mb-3">
        <label  for="exampleFormControlInput4" class="form-label" >Titre</label>
        <input type="text" onkeyup="action_1(this)" class="form-control" id="title_first">
    </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea2" class="form-label">Description</label>
        <textarea onkeyup="action_1(this)" id="textarea_first" class="form-control"   rows="3"></textarea>
      </div>

      <div onclick="action_1(this)" id="add_img2">
        <img  class="img_picture" src="https://i.pinimg.com/564x/9d/82/c0/9d82c01629149da914c35965228911ff.jpg" alt="" srcset="">
      </div>

     
      <div>
        <img onclick="action_1(this)" id="send_element" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/external-line-adri-ansyah/50/external-smartphone-smartphone-apps-line-adri-ansyah-20.png" alt="external-smartphone-smartphone-apps-line-adri-ansyah-20"/>
        <img onclick="action_1(this)" id="remove_element" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>
        <img onclick="action_1(this)" id="visible_2" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/badges/50/visible.png" alt="visible"/>
        <img onclick="action_1(this)" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/ios/50/internet--v1.png" alt="internet--v1"/>  
    </div>
    <div class="date_time">
 
    </div>
    <div class="id_name" onclick="action_1(this)" id="nombre_child">
      <img width="50" height="50" src="https://img.icons8.com/material-sharp/50/plus--v1.png" alt="plus--v1"/>
  </div>
  </div>


 */








  break ; 
 
}








 ok.add("log_user_action", log_user_action); // ajout de l'information pour lenvoi 


 
 
 console.log(ok.info()); // demande l'information dans le tableau
 ok.push(); // envoie l'information au code pkp 

 


//console.log(heure+":"+minute+":"+jour+":"+mois+":"+annee+":"+seconde) ; 




console.log(log_user_sha1) ; 

    }
</script>

<style>
    #div_add{
        position:relative ; 

    }
    .add_blog_class_test{
        position: absolute;
        top: 200px; 



      z-index: 1;

    }
    .all_black{
      background-color:rgba(0,0,0,0.7) ; 
      width:100% ; 
      height : 100% ; 
      position:absolute ;
      top:0 ; 
      z-index: 0;

      
    }
  
</style>

<?php 

include("add_img.html") ; 
 


?>

 

<style>
  .img_taille{
  max-width : 330px; 
    margin : auto ; 
    margin-top: 300px; 
  }
  .img_taille:hover{
cursor:pointer ; 
  }
</style>
</body>
</html>