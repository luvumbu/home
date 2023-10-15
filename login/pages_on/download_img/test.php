Tout en haut de la page, avant la balise Html ouvrante, créer la section Php suivante :
<?php
$nom_dossier = 'uploads/';
$dossier = opendir($nom_dossier);

while($fichier = readdir($dossier))
{
if($fichier != '.' && $fichier != '..')
{
echo "xx ".$fichier.'<br />';
}
}
closedir($dossier);
?>