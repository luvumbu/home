<script src="class/js/js_on/js_cookie.js"></script> 

 
<?php 
include("header/header.php") ; 
?>


 
    <!DOCTYPE html>
<html>
<body>
 



<script>
 


var el1 ="get_epreuve_nom_complet" ; 
var el2 ="800m - Salle | F" ; 
el2 = "50m - Salle | F" ; 

 

var limits="";
var limits="{0,50}";

var img_invisible="https://img.icons8.com/badges/50/invisible.png" ; 
var img_visible="https://img.icons8.com/badges/50/visible.png" ; 
var web_on="https://img.icons8.com/ios/50/wifi--v1.png" ; 
var web_off="https://img.icons8.com/ios/50/without-internet.png" ; 

var general_el = [] ; 
var x_ = 0 ; 


 const liste_projet_name_array =  [] ;   
 const liste_projet_description1_array = [] ; 
 const liste_projet_img_array = [] ; 
 const liste_projet_visibilite1_array = [] ; 
 const liste_projet_visibilite2_array = [] ; 




 const liste_projet_name_list_class =  "form-control liste_projet_name_" ;   
 const liste_projet_description1_list_class = "liste_projet_description1" ; 
 const liste_projet_img_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_visibility" ; 
 const liste_projet_visibilite1_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_web" ; 
 const liste_projet_visibilite2_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_remove" ; 



const liste_projet_id_array = [] ; 
 
 




 const name_variables =[
"liste_projet_name_",
"liste_projet_description1",
"onclick_update_visibility",
"onclick_update_web",
"onclick_update_remove",
"onclick_add_element"
 ]


 myObj_length_child= 0 ;


 var verif_name = false ; 
 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     

    //general_el = myObj ; 

 


var web_off="https://img.icons8.com/ios/50/without-internet.png" ; 
var web_on="https://img.icons8.com/ios/50/wifi--v1.png" ; 
    for(var x = 0 ; x <myObj.length ; x ++ ) {



			if(js_cookie(document.cookie)==myObj[x].liste_projet_id_sha1){
					console.log(myObj[x]) ; 
					  Ajax("header_action","pages_on/header/header_action/header_action_2.html");	

					  liste_projet_name_array.push(myObj[x].liste_projet_name) ; 					  
					  liste_projet_description1_array.push( myObj[x].liste_projet_description1) ; 
					  liste_projet_img_array.push(myObj[x].liste_projet_img) ; 
					  liste_projet_visibilite1_array.push(myObj[x].liste_projet_visibilite1)  ; 
					  liste_projet_visibilite2_array.push( myObj[x].liste_projet_visibilite2)  ; 


					  liste_projet_id_array.push( myObj[x].liste_projet_id_sha1)  ; 

					  
					  
					  
					  

					    var ok = new Information("class/php/cookie_table/liste_projet_id_parent.php"); // création de la classe 
						ok.add("liste_projet_id_parent", js_cookie(document.cookie)); // ajout de l'information pour lenvoi 
					 
						console.log(ok.info()); // demande l'information dans le tableau
						ok.push(); // envoie l'information au code pkp 
	                 	const myTimeout = setTimeout(lancement_action_1, 111);


/*

*/ 


 
					  



	}

 
	}


}
}; 
xmlhttp.open("GET", "vlog_json.php", true);
xmlhttp.send();	






function lancement_action_1() {




	 

 











	var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     

    //general_el = myObj ; 

 

console.log(liste_projet_name_array) ; 

myObj_length_child = myObj.length ; 
for (var x  = 0 ; x <myObj.length ; x ++) {

const node = document.getElementsByClassName("demo")[0];
const clone = node.cloneNode(true);

document.getElementById("header_action_2_info_child").appendChild(clone);



 


					  liste_projet_id_array.push( myObj[x].liste_projet_id_sha1)  ;  
					  liste_projet_name_array.push(myObj[x].liste_projet_name) ; 					  
					  liste_projet_description1_array.push( myObj[x].liste_projet_description1) ; 
					  liste_projet_img_array.push(myObj[x].liste_projet_img) ; 
					  liste_projet_visibilite1_array.push(myObj[x].liste_projet_visibilite1)  ; 
					  liste_projet_visibilite2_array.push( myObj[x].liste_projet_visibilite2)  ; 

 


}

const myTimeout = setTimeout(lancement_action_2, 111);

     
 

}
}; 
xmlhttp.open("GET", "vlog_json_child.php", true);
xmlhttp.send();	


}
 
 

 function lancement_action_2(){
	 

	 








	 
for (var x  = 0 ; x <myObj_length_child ; x ++) {

const node = document.getElementsByClassName("demo")[0];
const clone = node.cloneNode(true);
document.getElementById("header_action_2_info_child").appendChild(clone);





 
}

	var liste_projet_name_ = document.getElementsByClassName(name_variables[0]); 
	var liste_projet_description1 = document.getElementsByClassName(name_variables[1]); 
	var onclick_update_visibility = document.getElementsByClassName(name_variables[2]); 
	var onclick_update_web = document.getElementsByClassName(name_variables[3]); 
	var onclick_update_remove = document.getElementsByClassName(name_variables[4]); 
	var onclick_add_element = document.getElementsByClassName(name_variables[5]); 

 
 
 







for (var x  = 0 ; x <myObj_length_child ; x ++) {

 
 

liste_projet_name_[x].value= liste_projet_name_array[x] ; 
liste_projet_description1[x].value= liste_projet_description1_array[x] ; 




liste_projet_name_[x].className= liste_projet_id_array[x]+" "+liste_projet_name_list_class ; 
liste_projet_description1[x].className= liste_projet_id_array[x]+" "+liste_projet_description1_list_class ; 





/*

liste_projet_id_array
liste_projet_name_array
liste_projet_description1_array
liste_projet_img_array
liste_projet_visibilite1_array
liste_projet_visibilite2_array
 */ 
}
 


	 
 }
</script>

 

</body>
</html>
</script>