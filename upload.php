<?php
session_start() ; 

//echo $_POST['file'] ;



$taille_ = strlen($_POST['file']);


$name_1 = $_POST['file'][$taille_-1] ; 
$name_2 = $_POST['file'][$taille_-2] ; 
$name_3 = $_POST['file'][$taille_-3] ; 
$name_4 = $_POST['file'][$taille_-4] ; 
 
 
 
 $nom_complet_img_upload="sw" ; 
 if($name_4 =="."){
 
$nom_complet_img_upload = $_SESSION['name_img'].$name_4.$name_3.$name_2.$name_1 ;

$_SESSION['nom_complet_img_upload'] = $nom_complet_img_upload ; 

 }

 if($name_3 =="."){
    $nom_complet_img_upload = $_SESSION['name_img'].$name_3.$name_2.$name_1 ;
    
    $_SESSION['nom_complet_img_upload'] = $nom_complet_img_upload ; 
 }

 

 
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
$file_path = 'uploads/' .$nom_complet_img_upload;
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