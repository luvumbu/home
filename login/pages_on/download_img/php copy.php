<?php

session_start() ; 



 
 $recherche_elements = $_SESSION["recherche_elements"]  ; 
 $paths ="../../../model/class/php/";
include($paths."connexion.php")

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
{
 
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                $extension = $fileInfo['extension'];
 
    
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['screenshot']['tmp_name'], "uploads/".$_SESSION["name"].".". $extension);
                  
                
 $name=$_SESSION["name"].".". $extension ;
      
}





?>


<?php
class Insertion_Bdd {

    public $servername ; 
    public $username ; 
    public $password ; 
    public $dbname ; 
    public $sql ="0"; 

  function __construct(
    $servername,
    $username,
    $password,
    $dbname
    ) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;
  }
  function get_servername() {
    return $this->servername;
  }
  function get_username() {
    return $this->username;
  }
  function get_password() {
    return $this->password;
  }
  function get_dbname() {
    return $this->dbname;
  }

  function set_sql($sql){
    $this->sql = $sql ; 
  }
  function set_msg_valudation($msg_valudation){
    $this->msg_valudation = $msg_valudation ; 
  }

  function execution(){
 
                            // Create connection
                $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
  
  


                if($this->sql!="0"){
                  if ($conn->query($this->sql) === TRUE) {
                    echo  $this->msg_valudation ; 
                    } else {
                    echo "Error: " . $this->sql . "<br>" . $conn->error;
                    }
                }
                else {
                  echo "?" ; 
                }



                $conn->close();
                }
}



 ?>


<?php 
// exemple de code foctionnel 
 
$servername="localhost" ; 
$username="root" ; 
$password="root" ; 
$dbname="root" ; 
 
 /*


 $paths ="../../../model/class/php/";
include($paths."connexion.php")


*/


     
     




      
      $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("inserttion ok ".$_SESSION["name"].".". $extension) ;  
        $apple->set_sql('UPDATE `root`.`liste_projet` SET `liste_projet_img` = "'.$name.'" WHERE `liste_projet`.`liste_projet_id_sha1` = "'.$recherche_elements.'"') ; 
        $apple->execution() ;




    
        
?>
 
 

 