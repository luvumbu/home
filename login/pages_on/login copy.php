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
var general_el = [] ; 
var x_ = 0 ; 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     

    //general_el = myObj ; 


 

 var liste_projet_name = "" ; 
 var liste_projet_description1 = "" ; 
 var liste_projet_img = "" ; 

var verif_name = false ; 

    for(var x = 0 ; x <myObj.length ; x ++ ) {



			if(js_cookie(document.cookie)==myObj[x].liste_projet_id_sha1){
				console.log("trooouvé") ; 
				console.log(myObj[x]) ; 
					  Ajax("header_action","pages_on/header/header_action/header_action_2.html");

/*
					  liste_projet_name = myObj[x].liste_projet_name ; 
					  liste_projet_description1 = myObj[x].liste_projet_description1 ; 

					  liste_projet_img = myObj[x].liste_projet_img ; 
					  verif_name = true ; 

					  */


					  liste_projet_name = "myObj[x].liste_projet_name" ; 
					  liste_projet_description1 = "myObj[x].liste_projet_description1" ; 

					  liste_projet_img = myObj[x].liste_projet_img ; 
					  verif_name = true ; 

	}
 
	}

	const myTimeout = setTimeout(myGreeting, 50);

function myGreeting() {

	if(verif_name){

		/*
							 	document.getElementById("header_action_2_input").value =   liste_projet_name; 
					   			document.getElementById("textarea_action_2_input").value =  liste_projet_description1 ; 
					   			document.getElementById("header_action_2_info").value =  js_cookie(document.cookie) ; 


					   			document.getElementById("change_img2").src =  "http://localhost/home/login/pages_on/download_img/uploads/"+liste_projet_img ; 






	*/
							   






  for(var x = 0 ; x <5 ; x ++){
	var collection = document.getElementsByClassName("demo");
	 
 

  var clone = collection[x].cloneNode(true);
  document.getElementById("header_action").appendChild(clone);



  document.getElementsByClassName("header_action_info")[x].id=x;
  
  }

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
</script>

 

</body>
</html>
</script>