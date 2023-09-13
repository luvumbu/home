<?php 
session_start() ; 
$_SESSION["log_user_name"] = "log_user_nameX";
$affiche_div=false; 
$config_=false;

$filename = 'class/connexion.php';
// eplacement du fichier et nom datribution
if (!file_exists($filename)) {
 
} else {
     header('Location:home.php');
     exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<h1>
Framework Web 
</h1>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">username:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
 

    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="Password" class="form-control" id="pwd2" placeholder="Enter Password" name="pswd">
    </div>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div   class="btn btn-primary" onclick="submit()">Submit</div>
  </form>


</div>
<h2>
</h2>
<script src="class/Information.js"></script>

<script>


function submit() {
    var ok = new Information("db_name.php"); // création de la classe
    
    var info = document.getElementById("username").value ; 
    var pwd2 = document.getElementById("pwd2").value ; 

 
  ok.add("username", info); // ajout de l'information pour lenvoi 
  ok.add("password", pwd2); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

  const myTimeout = setTimeout(myGreeting, 1000);

function myGreeting() {
 location.reload(); 
}
}

</script>
</body>
</html>