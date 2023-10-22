<?php

session_start() ; 


 
 
 
  
$name = $_SESSION["name"] ; 
$time = $_SESSION["time"] ; 
 
   
    



 






 

 


 $servername = "localhost" ; 
 $username = "root" ; 
 $password = "root" ; 
 $dbname = "root" ; 

 

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



 
// exemple de code foctionnel 
 
 
 
 

 

 

$total = $_SESSION["total"]  ; 




        $apple = new Insertion_Bdd(
          $servername,
          $username,
          $password,
          $dbname
          
          );
              
         
          $apple->set_msg_valudation("inserttion ok ") ;  
          $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_img` = "'.$name.$total.'" WHERE `liste_projet_id_sha1` = "'.$time.'"') ; 
          $apple->execution() ;
 

          
?>

    
 

 
  
 
 
  
 