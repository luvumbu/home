let name_parent_info ="" ; 
let liste_projet_id_sha1 ; 
function submit_01(_this){
    Ajax("information_user_info","pages_on/apparence/02.html");
_this.style.display = "none";
}

function submit_02(_this){


    const myTimeout = setTimeout(myGreeting, 1000);
    const d = new Date();
    liste_projet_id_sha1 = d.getTime();
    Ajax("information_user_info","pages_on/apparence/03.html");
    var ok = new Information("class/php/php_add/submit_02.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", liste_projet_id_sha1); // ajout de l'information pour lenvoi 
    ok.add("name_parent_info", "not"); // ajout de l'information pour lenvoi 
   
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 




 



    function myGreeting() {
 /*   document.getElementById("info_parent_").id=document.getElementById("info_parent_").id+liste_projet_id_sha1;


    /***
     * 
input_parent_
textarea_parent_
add_img2
send_element
remove_element
visible_2_
www_

     */

    var input_parent__ =  document.getElementById("input_parent__").id ; 
    document.getElementById("input_parent__").id = input_parent__+liste_projet_id_sha1 ; 



    var textarea_parent_id =  document.getElementById("textarea_parent_").id ; 
    document.getElementById("textarea_parent_").id = textarea_parent_id+liste_projet_id_sha1 ; 


    var src_img_parent_id =  document.getElementById("src_img_parent_").id ; 
    document.getElementById("src_img_parent_").id = src_img_parent_id+liste_projet_id_sha1 ; 


    var send_element_parent_ =  document.getElementById("send_element_parent_").id ; 
    document.getElementById("send_element_parent_").id = send_element_parent_+liste_projet_id_sha1 ; 

    var remove_element_parent_ =  document.getElementById("remove_element_parent_").id ; 
    document.getElementById("remove_element_parent_").id = remove_element_parent_+liste_projet_id_sha1 ; 

    var visible_2_parent_ =  document.getElementById("visible_2_parent_").id ; 
    document.getElementById("visible_2_parent_").id = visible_2_parent_+liste_projet_id_sha1 ; 

    var www_parent_ =  document.getElementById("www_parent_").id ; 
    document.getElementById("www_parent_").id = www_parent_+liste_projet_id_sha1 ; 



    var src_img_parent_ =  document.getElementById("src_img_parent_").id ; 
    document.getElementById("src_img_parent_").id = src_img_parent_+liste_projet_id_sha1 ; 




    


    

    name_parent_info = liste_projet_id_sha1;
    document.getElementById("plus_parent_").id = liste_projet_id_sha1 ; 

   /*
    document.getElementById("textarea_parent_").id=document.getElementById("textarea_parent_").id+liste_projet_id_sha1;
    document.getElementById("add_img2_").id=document.getElementById("add_img2_").id+liste_projet_id_sha1;
    document.getElementById("send_element_").id=document.getElementById("send_element_").id+liste_projet_id_sha1;
    document.getElementById("remove_element_").id=document.getElementById("remove_element_").id+liste_projet_id_sha1;
    document.getElementById("visible_2_").id=document.getElementById("visible_2_").id+liste_projet_id_sha1;
    document.getElementById("www_").id=document.getElementById("www_").id+liste_projet_id_sha1;
 */
    }


}


function submit_03(_this) {


 
 



/*
<div class="container mt-3 parent_gg"  id="parent_gg">
        <div class="mb-3">
          <label  for="input_parent_" class="form-label" >Titre</label>
          <input type="text"  class="form-control" id="input_parent_">
        </div>
          <div class="mb-3">
            <label for="textarea_parent_" class="form-label">Description</label>
            <textarea  id="textarea_parent_" class="form-control"   rows="3"></textarea>
          </div>
        <div  id="add_img2">
          <img  class="img_picture" src="https://i.pinimg.com/564x/9d/82/c0/9d82c01629149da914c35965228911ff.jpg" alt="" srcset="">
        </div>     
        <div>
          <img  id="send_element" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/external-tal-revivo-light-tal-revivo/50/external-verified-check-circle-for-approved-valid-content-basic-light-tal-revivo.png" alt="external-verified-check-circle-for-approved-valid-content-basic-light-tal-revivo" alt="external-smartphone-smartphone-apps-line-adri-ansyah-20"/>
          <img  id="remove_element" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>
          <img  id="visible_2" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/badges/50/visible.png" alt="visible"/>
          <img  class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/ios/50/internet--v1.png" alt="internet--v1"/>  
      </div>
      <div class="id_name"  id="nombre_child">
        <img width="50" id="info_parent_"  onclick="submit_03(this)" height="50" src="https://img.icons8.com/material-sharp/50/plus--v1.png" alt="plus--v1"/>
    </div> 
  </div>

*/


const d = new Date();
liste_projet_id_sha1 = d.getTime();





var ok = new Information("class/php/php_add/submit_02.php"); // création de la classe 
ok.add("liste_projet_id_sha1", liste_projet_id_sha1); // ajout de l'information pour lenvoi 
ok.add("name_parent_info", name_parent_info); // ajout de l'information pour lenvoi 



console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 





var para = document.createElement("div");
para.setAttribute("class","container mt-3 parent_gg") ;
para.setAttribute("id","div1_"+liste_projet_id_sha1) ;
para.innerHTML = '<div class="mb-3"><label    class="form-label" for="input_'+liste_projet_id_sha1+'">Titre</label><input onkeyup="input_child(this)" type="text"  class="form-control" id="input_'+liste_projet_id_sha1+'"></div>';
document.getElementById("information_user_info").appendChild(para);



var para = document.createElement("div");
para.setAttribute("class","container mt-3 parent_gg") ;
para.setAttribute("id","div1_1_") ;
para.innerHTML='<label for="textarea_'+liste_projet_id_sha1+'" class="form-label">Description</label><textarea onkeyup="textarea_child_(this)" id="textarea_'+liste_projet_id_sha1+'" class="form-control"   rows="3"></textarea>';
document.getElementById("div1_"+liste_projet_id_sha1).appendChild(para);




var para = document.createElement("div");
para.setAttribute("class","container mt-3 parent_gg") ;
para.setAttribute("id","div1_2_") ;
para.innerHTML='<div  id="add_img2_'+liste_projet_id_sha1+'"><img  class="img_picture" src="https://i.pinimg.com/564x/9d/82/c0/9d82c01629149da914c35965228911ff.jpg" alt="" srcset=""></div>';
document.getElementById("div1_"+liste_projet_id_sha1).appendChild(para);






var para = document.createElement("div");
para.setAttribute("class","container mt-3 parent_gg") ;
para.setAttribute("id","div1_2_") ;
para.innerHTML='<div><img  id="done_'+liste_projet_id_sha1+'" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/external-tal-revivo-light-tal-revivo/50/external-verified-check-circle-for-approved-valid-content-basic-light-tal-revivo.png" alt="external-verified-check-circle-for-approved-valid-content-basic-light-tal-revivo" alt="external-smartphone-smartphone-apps-line-adri-ansyah-20"/><img  id="remove_element_'+liste_projet_id_sha1+'" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/><img  id="visible_2_'+liste_projet_id_sha1+'" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/badges/50/visible.png" alt="visible"/><img  id="www_'+liste_projet_id_sha1+'" class="cursor_pointer space_right_20" width="50" height="50" src="https://img.icons8.com/ios/50/internet--v1.png" alt="internet--v1"/></div>';
document.getElementById("div1_"+liste_projet_id_sha1).appendChild(para);

  

 
    
 }



 function img_picture_parent(_this){
 

  let text = _this.id;
let result = text.replace("src_img_parent_", "");
console.log(result) ; 
 }
 
function input_child(_this){


  let text = _this.id;
let result = text.replace("input_", "");



   

var ok = new Information("class/php/php_update/input_parent__.php"); // création de la classe 
ok.add("liste_projet_id_sha1", result); // ajout de l'information pour lenvoi 
ok.add("liste_projet_name", _this.value); // ajout de l'information pour lenvoi 
ok.add("name_parent_info", name_parent_info); // ajout de l'information pour lenvoi

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

}







function input_parent__(_this){
  


  let text = _this.id;
let result = text.replace("input_parent__", "");

/*
console.log(result) ; 
  console.log(_this.value);
  console.log(_this.id) ; 

  */

  console.log(result) ; 
 


  var ok = new Information("class/php/php_update/input_parent__.php"); // création de la classe 
ok.add("liste_projet_id_sha1", result); // ajout de l'information pour lenvoi 
ok.add("liste_projet_name", _this.value); // ajout de l'information pour lenvoi 

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 






}
function textarea_child_(_this){
  console.log(_this.value);

 

  let text = _this.id;
  let liste_projet_id_sha1 = text.replace("textarea_", "");
  

 
  /*
  console.log(result) ; 
    console.log(_this.value);
    console.log(_this.id) ; 
  
    */
 
 
    var ok = new Information("class/php/php_update/liste_projet_description1.php"); // création de la classe 
  ok.add("liste_projet_id_sha1", liste_projet_id_sha1); // ajout de l'information pour lenvoi 
  ok.add("liste_projet_description1", _this.value); // ajout de l'information pour lenvoi 
  ok.add("name_parent_info", name_parent_info); // ajout de l'information pour lenvoi
  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

}

function textarea_parent_(_this){
  console.log(_this.value);



  let text = _this.id;
  let result = text.replace("textarea_parent_", "");
  
  /*
  console.log(result) ; 
    console.log(_this.value);
    console.log(_this.id) ; 
  
    */
    console.log(result) ; 
   
 
    var ok = new Information("class/php/php_update/liste_projet_description1.php"); // création de la classe 
  ok.add("liste_projet_id_sha1", result); // ajout de l'information pour lenvoi 
  ok.add("liste_projet_description1", _this.value); // ajout de l'information pour lenvoi 
  
  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

}
function send_element_parent_(_this){
  
  console.log(_this.value);

}
function remove_element_parent_(_this){
  
  console.log(_this.value);

}
function visible_2_parent_(_this){
  
  console.log(_this.value);

}
function www_parent_(_this){
  
  console.log(_this.value);

}




/*

    title_parent
    title_parent_textarea
    send_element
    remove_element
    visible_2

*/
