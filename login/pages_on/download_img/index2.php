
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
    <label for="screenshot"  ><img width="50" height="50" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/50/external-dowload-big-data-xnimrodx-lineal-xnimrodx.png" alt="external-dowload-big-data-xnimrodx-lineal-xnimrodx"></label>
    
</div>


 
 

<div>
<label for="submit-button"><img width="50" height="50" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/50/external-send-folder-folder-tanah-basah-basic-outline-tanah-basah.png" alt="external-send-folder-folder-tanah-basah-basic-outline-tanah-basah"></label>
    
</div>

<input class="class1" type="submit" value="Envoyer"   class="class3" onclick="disip()" />
</form>
<script src="../../class/js/js_on/js_cookie.js"></script>








<form action="php.php" method="POST" enctype="multipart/form-data">
 
    <div class="mb-3">
      
        <input type="file" class="form-control" id="screenshot" name="screenshot" style="display:none" />
    </div>
    <!-- Fin ajout du champ -->
    <button type="submit" class="btn btn-primary" id="submit-button" style="display:none" >Envoyer</button>
</form>


















 <!--    












-->
 
 

<a href="uploads/" class="class4"><div><img width="50" height="50" src="https://img.icons8.com/android/50/picture.png" alt="picture"/></div></a>
</div>



<div id="bg_black" onclick="bg_black()"></div>
<style>
    .class1{
        display:none ; 
    }
</style>



<script>
class Information {
	constructor(link) {
		this.link = link;
		this.identite = new FormData();
		this.req = new XMLHttpRequest();
		this.identite_tab = [
		];
	}
	info() {
		return this.identite_tab; 
	}
	add(info, text){
		this.identite_tab.push([info, text]); 
	}
	push(){
		for(var i = 0 ; i < this.identite_tab.length ; i++){
			console.log(this.identite_tab[i][1]);
			this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
		}		
		this.req.open("POST",this.link);
		this.req.send(this.identite);
		console.log(this.req);	 
	}
}


 
</script>
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