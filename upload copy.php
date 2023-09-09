<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");





$string_ = $_POST['file'] ; 
 
$strlen_ = strlen($string_)-1  ; 
 for($i=$strlen_ ; $i>0;$i--){
 
 
 if($string_[$i] =="."){
    break ; 
 }



 $name_file_extenstion = $string_[$i].$name_file_extenstion  ; 
 }


 $_SESSION['name_file_extenstion'] =$name_file_extenstion ; 

 





function decode_chunk($data) {
    $data = explode(';base64,', $data);

    if (!is_array($data) || !isset($data[1])) {
        return false;
    }

    $data = base64_decode($data[1]);
    if (!$data) {
        return false;
    }

    return $data;
}

// $file_path: fichier cible: garde le même nom de fichier, dans le dossier uploads
$file_path = 'uploads/' . $_SESSION['name_img'].".".$name_file_extenstion;
$file_data = decode_chunk($_POST['file_data']);

if (false === $file_data) {
    echo "error";
}

/* on ajoute le segment de données qu'on vient de recevoir 
 * au fichier qu'on est en train de ré-assembler: */
file_put_contents($file_path, $file_data, FILE_APPEND);

// nécessaire pour que JavaScript considère que la requête s'est bien passée:
echo json_encode([]); 
?>