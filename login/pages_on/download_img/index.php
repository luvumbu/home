<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 

<body>
    
<div class="element_1">



<form>   

<div>
    <label for="file-input"><img width="50" height="50" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/50/external-dowload-big-data-xnimrodx-lineal-xnimrodx.png" alt="external-dowload-big-data-xnimrodx-lineal-xnimrodx"></label>
    
</div>


<input type="file" name="" id="file-input"  class="class1"  onclick="name_file()" /><br />
 

<div>
<label for="submit-button"><img width="50" height="50" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/50/external-send-folder-folder-tanah-basah-basic-outline-tanah-basah.png" alt="external-send-folder-folder-tanah-basah-basic-outline-tanah-basah"></label>
    
</div>

<input class="class1" type="submit" value="Envoyer" id="submit-button" class="class3" onclick="disip()" />
</form>
<script src="../../class/js/js_on/js_cookie.js"></script>

<script>
    
 
</script>
<script>
function disip() 
{
    document.getElementById("submit-button").style.display="none"; 
  
}
function name_file() {
    const d = new Date();
 time = d.getTime();


 console.log(time) ; 





 var ok = new Information("name.php"); // création de la classe 
ok.add("name", time); // ajout de l'information pour lenvoi 
   
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 




}

</script>
<div id="upload-progress" ></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="upload.js"></script>

<a href="uploads/" class="class4"><div><img width="50" height="50" src="https://img.icons8.com/android/50/picture.png" alt="picture"/></div></a>
</div>



<div id="bg_black" onclick="bg_black()"></div>
<style>
    .class1{
        display:none ; 
    }
</style>


<style>

    body{
        margin : 0 ; 
        padding : 0 ; 
    }
    .element_1{
        width : 30%; 
        top: 80px; 
        text-align:center ; 
        margin:auto  ; 
        border:1px solid rgba(0,0,0,0.7); 
        border-radius: 15px;
        position:absolute ; 
background-color:white ; 
z-index: 2;
left:35%;
    }
    .element_1 div {
        padding:7px ; 
    }
    #bg_black{
z-index: 1;

        background-color:rgba(0,0,0,0.7) ; 
        width : 99%;
        height : 99% ; 
        position:absolute ; 
        top:0 ; 
    }
</style>

<script>
    function bg_black(){
        window.location.replace("../../index.php");
    }
</script>
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
</body>
</html>