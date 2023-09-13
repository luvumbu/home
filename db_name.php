<?php
$servername = "localhost";


$username = $_POST["username"];
$password = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
    $myfile = fopen("class/connexion.php", "w") or die("Unable to open file!");
$txt = "<?php \n";
$txt = $txt.'$servername="'.$servername.'";'."\n";

$txt = $txt.'$username="'.$username.'";'."\n";
$txt = $txt.'$dbname="'.$username.'";'."\n";


$txt = $txt.'$password="'.$password.'";'."\n";
$txt = $txt."?>\n";


fwrite($myfile, $txt);
$txt = "";
fwrite($myfile, $txt);
fclose($myfile);

}
?>