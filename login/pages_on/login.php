<script src="class/js/js_on/js_cookie.js"></script> 

 
<?php 
include("header/header.php") ; 
?>


 
    <!DOCTYPE html>
<html>
<body>
 


	<div></div>
<script>
 




/*
	get_rp_array_2	
	get_vent_array_2	
	get_result_users_perf_array_2	
	get_result_users_nom_1_array_2	
	get_result_users_nom_2_array_2		
	get_result_users_nom_3_array_2	
	get_result_users_nom_4_array_2	
	get_users_nationality_array_2	
	get_club_nom_complet_array_2	
	get_club_departement_array_2	
	
	get_club_region_array_2	
	get_cat_array_2	
	get_users_naissance_array_2	
	get_result_date_perf_array_2	
	get_result_villes_nom_array_2	
	
	epreuve_sex_array_2	
	get_users_nom_complet_array	
	info_all_array_click	
	info_all_array_ip	
	info_all_array_src_name	
	
	window_location_href	
	get_epreuve_nom_complet	
	reg_date
	*/

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


const liste_projet_name =  [""] ;   
 const liste_projet_description1_array = [""] ; 
 const liste_projet_img_array = [""] ; 
 const liste_projet_visibilite1 = [""] ; 
 const liste_projet_visibilite2 = [""] ; 

 var verif_name = false ; 
 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     

    //general_el = myObj ; 

 


var web_off="https://img.icons8.com/ios/50/without-internet.png" ; 
var web_on="https://img.icons8.com/ios/50/wifi--v1.png" ; 



var nombre = 0 ; 
    for(var x = 0 ; x <myObj.length ; x ++ ) {



			if(js_cookie(document.cookie)==myObj[x].liste_projet_id_sha1){
				console.log("trooouvé") ; 
				console.log(myObj[x]) ; 
					  Ajax("header_action","pages_on/header/header_action/header_action_2.html");


					  
					  liste_projet_name.push(myObj[x].liste_projet_name) ; 


					  
					  liste_projet_description1_array.push( myObj[x].liste_projet_description1) ;            

					  liste_projet_img_array.push(myObj[x].liste_projet_img) ; 

					  liste_projet_visibilite1.push(myObj[x].liste_projet_visibilite1)  ; 
					  liste_projet_visibilite2.push( myObj[x].liste_projet_visibilite2)  ; 
					  verif_name = true ; 

				 

					  nombre ++ ; 


 




					  

	}

 
	}

	const myTimeout = setTimeout(myGreeting, 50);




function myGreeting() {

	if(verif_name){
		


 console.log("visibilite "+liste_projet_visibilite1); 

/*

		
 
							 	document.getElementById("header_action_2_input").value =   liste_projet_name; 
					   			document.getElementById("textarea_action_2_input").value =  liste_projet_description1 ; 
					   			document.getElementById("header_action_2_info").value =  js_cookie(document.cookie) ; 


					   			document.getElementById("change_img2").src =  "http://localhost/home/login/pages_on/download_img/uploads/"+liste_projet_img ; 




*/

 
							   






  
const node = document.getElementsByClassName("demo")[0];
  const clone = node.cloneNode(true);
  document.getElementById("header_action").appendChild(clone);

	if(verif_name){
	var x = 1 ; 




 

	var liste_projet_name_ = document.getElementsByClassName("liste_projet_name_");
	
    liste_projet_name_[x].className =js_cookie(document.cookie)+" form-control liste_projet_name_" ; 

    liste_projet_name_[x].value =liste_projet_name[x] ; 




	var liste_projet_description1_ = document.getElementsByClassName("liste_projet_description1");
    liste_projet_description1_[x].value =liste_projet_description1_array[x] ;



 var onclick_update_web = document.getElementsByClassName("onclick_update_web") ;
 onclick_update_web[x].className = js_cookie(document.cookie) + " cursor_pointer space_right_20 onclick_update_all onclick_update_web" ; 
 
 console.log(liste_projet_visibilite1) ; 

 

/*	


console.log("LOG") ; 
onclick_update_web[0].src="" ; 
console.log(onclick_update_web[0].src)  ; 

console.log("LOG") ; 
*/
 
	
	
	var onclick_update_visibility = document.getElementsByClassName("onclick_update_visibility");				 

    liste_projet_description1_[x].className =js_cookie(document.cookie)+" form-control liste_projet_name_" ; 
	document.getElementsByClassName("change_img2")[x].src = "pages_on/download_img/uploads/"+liste_projet_img_array[x];	
	onclick_update_visibility[x].className =js_cookie(document.cookie)+" "+onclick_update_visibility[x].className   ;










	var onclick_update_remove = document.getElementsByClassName("onclick_update_remove");				 

	onclick_update_remove[x].className =js_cookie(document.cookie)+" cursor_pointer space_right_20 onclick_update_all onclick_update_remove" ; 





	var onclick_add_element = document.getElementsByClassName("onclick_add_element");				 

onclick_add_element[x].className =js_cookie(document.cookie)+" cursor_pointer onclick_add_element" ; 
 


 


 
 


/*
 if(liste_projet_visibilite2==""){
	onclick_update_web[x].src==web_off;
 }

*/






	
 
 

   

	


 

 


  
 

 if(liste_projet_visibilite1[x]!=""){
 onclick_update_visibility[x].src=img_visible ; 
 }

 



 if(liste_projet_visibilite2[x]!=""){
	
	  onclick_update_web[x].src=web_on ; 


 }
  

	
	}

	
	
  

								   
	}


}






}
}; 
xmlhttp.open("GET", "vlog_json.php", true);
xmlhttp.send();	

	var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     
 console.log(myObj) ; 




}
}; 
xmlhttp.open("GET", "vlog_json.php", true);




xmlhttp.send();


	// Fin opération






 
function onclick_update_all(_this){
	console.log(_this.title) ; 
}


	function input_update_all(_this){
		var liste_projet_id_sha1 ="" ; 
		console.log(_this.value) ; 
		console.log(_this.className.length) ; 




		for(var x= 0 ; x <_this.className.length; x ++){



			if(_this.className[x]==" "){


				break ; 
			}
			else {
			 

				liste_projet_id_sha1 = liste_projet_id_sha1+_this.className[x] ; 

			}
			 
}


console.log(liste_projet_id_sha1) ; 



var ok = new Information("class/php/php_on/input_update_all.php"); // création de la classe 



var  liste_projet_id_sha1_ = document.getElementsByClassName(liste_projet_id_sha1)[0].value ; 
var  liste_projet_name_ = document.getElementsByClassName(liste_projet_id_sha1)[1].value ; 



var onclick_update_visibility = document.getElementsByClassName("onclick_update_visibility");





 
/*

 let text = liste_projet_id_sha1_;
  liste_projet_id_sha1_ = text.replace("", " ");

*/


ok.add("liste_projet_name",liste_projet_id_sha1_); // ajout de l'information pour lenvoi 
ok.add("liste_projet_description1", liste_projet_name_); // ajout de l'information pour lenvoi 
ok.add("liste_projet_id_sha1",liste_projet_id_sha1); // ajout de l'information pour lenvoi 


 


 

//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 





	}







function recherche_element( _this_className_length,_this_className,recherche){
	var nom_id= "" ; 
for(var x = 0 ; x < _this_className_length ; x ++){
	if(_this_className[x]==recherche){
		break ; 
	}
	else {
		nom_id = nom_id+ _this_className[x] ; 
	}
}
 
return nom_id ; 

// exemple dutilisation
/*
 var _this_className_length = _this.className.length ; 
 var _this_className = _this.className;
 var recherche= " ";

 */




}
	
function onclick_update_visibility(_this){


 
 
 var _this_className_length = _this.className.length ; 
 var _this_className = _this.className;
 var recherche= " ";
 var liste_projet_id_sha1_ =recherche_element(_this_className_length,_this_className,recherche) ; 
  /*
 
img_invisible
img_visible
*/

if(_this.src==img_visible){
_this.src=img_invisible;
value_ = "" ; 
}
else {
	_this.src=img_visible;
	value_ ="1" ; 
}
 

 
	//input_update_visibility

 

 
var ok = new Information("class/php/php_on/input_update_visibility.php"); // création de la classe 
ok.add("liste_projet_id_sha1", liste_projet_id_sha1_); // ajout de l'information pour lenvoi 
ok.add("value", value_); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 
 

}




function onclick_update_web(_this){
 
	
	var liste_projet_id_sha1_= "" ; 
	  
	  for(var x = 0 ; x<_this.className.length ; x ++ ) {
		 if(_this.className[x]==" "){
			 break ;
		 }
		 else {
			 liste_projet_id_sha1_ = liste_projet_id_sha1_+_this.className[x] ;
		 }
	  }
 
console.log(liste_projet_id_sha1_) ; 
	  
	 if(_this.src==web_on){
	 
	 _this.src = web_off ;
		 value_ ="";
		  
	 }
	 else{
	 	 _this.src = web_on ;
		 value_ ="1";
  
	 }
 

	 //input_update_visibility
 
	 console.log(liste_projet_id_sha1_) ; 
  
 
 
 var ok = new Information("class/php/php_on/input_update_web.php"); // création de la classe 
 ok.add("liste_projet_id_sha1", liste_projet_id_sha1_); // ajout de l'information pour lenvoi 
 ok.add("value", value_); // ajout d'une deuxieme information denvoi  
 console.log(ok.info()); // demande l'information dans le tableau
 ok.push(); // envoie l'information au code pkp 
 
 
}
	function onclick_update_remove(){
	console.log("onclick_update_remove 03 ok ");

	}




	function onclick_update_remove(_this){
		var liste_projet_id_sha1_= "" ; 
	  
	  for(var x = 0 ; x<_this.className.length ; x ++ ) {
		 if(_this.className[x]==" "){
			 break ;
		 }
		 else {
			 liste_projet_id_sha1_ = liste_projet_id_sha1_+_this.className[x] ;
		 }
	  }
 
console.log(liste_projet_id_sha1_) ; 
location.reload() ; 

var ok = new Information("class/php/php_on/input_update_remove.php"); // création de la classe 
 ok.add("liste_projet_id_sha1", liste_projet_id_sha1_); // ajout de l'information pour lenvoi 
 
 console.log(ok.info()); // demande l'information dans le tableau
 ok.push(); // envoie l'information au code pkp 
 





	}





	const myTimeout = setTimeout(myGreeting, 240);

function myGreeting() {

	if(verif_name){


		var ok = new Information("class/php/cookie_table/vlog_json_child.php"); // création de la classe 
ok.add("liste_projet_id_parent", js_cookie(document.cookie)); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 


 var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     
 
 
 

 

	document.getElementsByClassName("demo")[0].style.display="none" ; 
console.log(myObj) ; 






}
}; 
xmlhttp.open("GET", "vlog_json_child.php", true);




xmlhttp.send();

}
}



function onclick_add_element(_this){
 
var _this_className_length = _this.className.length ; 
 var _this_className = _this.className;
 var recherche= " ";


 const d = new Date();
 time = d.getTime();


 



var ok = new Information("class/php/php_add/onclick_add_element.php"); // création de la classe 
ok.add("liste_projet_id_parent", recherche_element( _this_className_length,_this_className,recherche)); // ajout de l'information pour lenvoi 

ok.add("time", time); // ajout de l'information pour lenvoi 

  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

}
 
</script>

 

</body>
</html>
</script>