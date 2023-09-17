let liste_projet_id_sha1 ; 
function submit_01(_this){
    Ajax("information_user_info","pages_on/apparence/02.html");

}

function submit_02(_this){


    const myTimeout = setTimeout(myGreeting, 1000);
    const d = new Date();
    liste_projet_id_sha1 = d.getTime();
    Ajax("information_user_info","pages_on/apparence/03.html");
    var ok = new Information("class/php/php_add/submit_02.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", "info_parent_"+liste_projet_id_sha1); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 




 



    function myGreeting() {
    document.getElementById("info_parent_").id=document.getElementById("info_parent_").id+liste_projet_id_sha1;
       
    }


}


function submit_03(_this) {

/*
    const node = document.getElementById(_this.id);
    const clone = node.cloneNode(true);
    document.getElementById("myList1").appendChild(clone);


    
    console.log(_this) ; 

    //console.log(_this.children[0].children[1].value) ; 

    //console.log(_this.children[1].children[1].value) ; 

    console.log(_this.children[6]) ; 

  //  console.log(document.getElementById("input_parent_").value ) ; 
/*
    console.log(document.getElementById("input_parent_").value) ; 
    console.log(document.getElementById("textarea_parent_").value) ;  
    console.log(liste_projet_id_sha1) ;






    var ok = new Information("class/php/php_add/update_02.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", "info_parent_"+liste_projet_id_sha1); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

*/



  const node = document.getElementById("parent_gg");
    const clone = node.cloneNode(true);
    document.getElementById("information_user_info").appendChild(clone);



 
    
 }

 

/*

    title_parent
    title_parent_textarea
    send_element
    remove_element
    visible_2

*/
