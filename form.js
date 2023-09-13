var envoyer = true ; 
function form_submit(_this) {


 

  document.getElementById(_this.id).className="display_none2" ; 


 

  var information_user_login = document.getElementById("information_user_login").value ;
  

    if(_this.id=="form_login"){
      var ok = new Information("information_user_login.php"); // création de la classe  
      
      var information_user_password = document.getElementById("information_user_password").value ;

      
 
      ok.add("information_user_login",information_user_login); // ajout de l'information pour lenvoi    
      ok.add("information_user_password",information_user_password); // ajout d'une deuxieme information denvoi  
  }
  else {

    var ok = new Information("information_user_inscription.php"); // création de la classe      
    ok.add("information_user_login",information_user_login); // ajout de l'information pour lenvoi    

     
  }


  console.log(ok.info()); // demande l'information dans le tableau


 
   
 
 

 

  const myTimeout1 = setTimeout(myGreeting1, 1000);

  const myTimeout2 = setTimeout(myGreeting2, 500);

function myGreeting1() {
  envoyer = false;
  if(envoyer){
    ok.push(); // envoie l'information au code pkp 

  }

  Ajax("information_user_login_info","information_user_login_info.php");
 



}

function myGreeting2() {

  envoyer = true; 
  ok.push(); // envoie l'information au code pkp 

  



document.getElementById(_this.id).className="btn btn-primary" ; 



}


}
 


function form_inscription(){
  Ajax("form","form_inscription.php");
  document.getElementById("information_user_login_info").innerHTML="" ; 


}