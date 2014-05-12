<?php
/////////////////////////////////////////
///////////UploadzFilez Version : 1.0//////////////////
//////////By Hretix.fr///////////////////
//Fichier : upload
//Version : 1
//Auteur : Zamboni Benjamin
include 'config.php';
$fichier = basename($_FILES['file']['name']);
$taille = filesize($_FILES['file']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['file']['name'], '.'); 

if(!in_array($extension, $extensions)) 
{
     $erreur = 'Extension non autorisée';
}
if($taille>$tailles)
{
     $erreur = 'Le fichier est trop volumineux';
}
if(!isset($erreur)) 
{
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier))
     {
          echo 'Upload effectué avec succès !';
     }
     else 
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
?>
