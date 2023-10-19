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
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     

    //general_el = myObj ; 

 

 const liste_projet_name =  [] ;   
 const liste_projet_description1 = [] ; 
 const liste_projet_img = [] ; 
 const liste_projet_visibilite1 = [] ; 
 const liste_projet_visibilite2 = [] ; 
var web_off="https://img.icons8.com/ios/50/without-internet.png" ; 
var web_on="https://img.icons8.com/ios/50/wifi--v1.png" ; 

var verif_name = false ; 

    for(var x = 0 ; x <myObj.length ; x ++ ) {



			if(js_cookie(document.cookie)==myObj[x].liste_projet_id_sha1){
				console.log("trooouvé") ; 
				console.log(myObj[x]) ; 
					  Ajax("header_action","pages_on/header/header_action/header_action_2.html");


					  
					  liste_projet_name.push(myObj[x].liste_projet_name) ; 


					  
					  liste_projet_description1.push( myObj[x].liste_projet_description1) ;            

					  liste_projet_img.push(myObj[x].liste_projet_img) ; 

					  liste_projet_visibilite1.push(myObj[x].liste_projet_visibilite1)  ; 
					  liste_projet_visibilite2.push( myObj[x].liste_projet_visibilite2)  ; 

			

					  verif_name = true ; 

				 


					  

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

 
							   






  


	if(verif_name){
	var x = 0 ; 




 

	var liste_projet_name_ = document.getElementsByClassName("liste_projet_name_");
	
    liste_projet_name_[x].className =js_cookie(document.cookie)+" form-control liste_projet_name_" ; 

    liste_projet_name_[x].value =liste_projet_name[x] ; 




	var liste_projet_description1_ = document.getElementsByClassName("liste_projet_description1");
    liste_projet_description1_[x].value =liste_projet_description1[x] ;



 var onclick_update_web = document.getElementsByClassName("onclick_update_web") ;
 onclick_update_web[x].className = js_cookie(document.cookie) + " cursor_pointer space_right_20 onclick_update_all onclick_update_web" ; 
 

if(liste_projet_visibilite2==""){
	onclick_update_web[0].src="";
	 
 
	onclick_update_web[x].src=web_off ; 
}
else {
	onclick_update_web[x].src=web_on ; 
	 

}
/*	


console.log("LOG") ; 
onclick_update_web[0].src="" ; 
console.log(onclick_update_web[0].src)  ; 

console.log("LOG") ; 
*/
 
	
	
	var onclick_update_visibility = document.getElementsByClassName("onclick_update_visibility");				 

    liste_projet_description1_[x].className =js_cookie(document.cookie)+" form-control liste_projet_name_" ; 
	document.getElementsByClassName("change_img2")[x].src = "pages_on/download_img/uploads/"+liste_projet_img[x];	
	onclick_update_visibility[x].className =js_cookie(document.cookie)+" "+onclick_update_visibility[x].className   ;










	var onclick_update_remove = document.getElementsByClassName("onclick_update_remove");				 

	onclick_update_remove[x].className =js_cookie(document.cookie)+" cursor_pointer space_right_20 onclick_update_all onclick_update_remove" ; 
 


 


var onclick_update_web = 	document.getElementsByClassName("onclick_update_web")[x] ; 

 console.log(onclick_update_web.src) ; 
 


/*
 if(liste_projet_visibilite2==""){
	onclick_update_web[x].src==web_off;
 }

*/






	
 
 

   

	



 
	if(liste_projet_visibilite1=="1"){
 
	 onclick_update_visibility[x].src = img_visible ;
	}
	else {
	
	onclick_update_visibility[x].src = img_invisible ;
		

	}

 
 

	


 





/*
	var collection = document.getElementsByClassName("header_action_info1");
	collection[x].innerHTML =x ; 

	var collection = document.getElementsByClassName("header_action_info2");
	collection[x].innerHTML =js_cookie(document.cookie) ; 
*/

	
	}
 
/*
	liste_projet_name
liste_projet_description1
liste_projet_img

*/
  

/*

  const node = document.getElementById("demo");
  const clone = node.cloneNode(true);
  document.getElementById("header_action").appendChild(clone);
 */

								   
	}


}






}
}; 

xmlhttp.open("GET", "https://bokonzi.com/ffa/api_bokonzi.php/{10,1000}[get_result_users_nom_1_array_2]/ARRON", true);

xmlhttp.open("GET", "https://bokonzi.com/ffa/api_bokonzi.php/%7B0,2%7D[get_result_users_nom_1_array_2]/ndenga", true);


xmlhttp.open("GET", "https://bokonzi.com/ffa/api_bokonzi.php/{0,2}[get_result_users_nom_1_array_2]/ndenga", true);

xmlhttp.open("GET", "https://bokonzi.com/ffa/api_bokonzi.php/["+el1+"]/"+el2, true);

xmlhttp.open("GET", "https://bokonzi.com/ffa/api_bokonzi.php/"+limits+"["+el1+"]/"+el2, true);



xmlhttp.open("GET", "https://bokonzi.com/ffa/api_bokonzi2.php", true);
xmlhttp.open("GET", "vlog_json.php", true);




xmlhttp.send();



























	
/*	var collection = document.getElementsByClassName("demo");
	var clone = collection[x].cloneNode(true);
	document.getElementById("header_action").appendChild(clone);


 

	// Bouble ok 

	for(var x = 1 ; x < 5 ; x ++){
		var collection = document.getElementsByClassName("demo");
 
	var clone = collection[x].cloneNode(true);
	var collection = document.getElementsByClassName("liste_projet_name_");

    collection[x].className =js_cookie(document.cookie)+" form-control liste_projet_name_" ; 

	document.getElementById("header_action").appendChild(clone);
	}
	*/
	// Bouble ok 
















	// opération


	var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     
 console.log(myObj) ; 




}
}; 

 


xmlhttp.open("GET", "https://bokonzi.com/ffa/api_bokonzi2.php", true);
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








	
function onclick_update_visibility(_this){
var liste_projet_id_sha1_= "" ; 
	  
	 for(var x = 0 ; x<_this.className.length ; x ++ ) {
		if(_this.className[x]==" "){
			break ;
		}
		else {
			liste_projet_id_sha1_ = liste_projet_id_sha1_+_this.className[x] ;
		}
	 }

	if(_this.src==img_visible){
	
		_this.src = img_invisible ;
		value_ ="";
         
	}
	else{
		_this.src = img_visible ;
		value_ ="1";
 
	}
	console.log(liste_projet_id_sha1_) ; 



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
</script>

 

</body>
</html>
</script>