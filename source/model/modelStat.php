<?php
function mStat(){
$compteur= __DIR__.DIRECTORY_SEPARATOR.'cpt.txt';
$nombreVisite="";
// si le fichier n'existe pas on le créé et on initialise le nombre de visite à zéro
if (file_exists($compteur)==false)
{
$Texte = fopen($compteur, "x+");
$nombreVisite=0;
}
// sinon on ouvre le fichier en lecture et on recupere la valeur du nombre de visite enregistré
else 
{
$Texte = fopen($compteur, "r");
$nombreVisite=fgets($Texte);  
}
 // Fermeture du fichier
fclose($Texte);
// incrémentation du nombre de visite
$nombreVisite++;
// var_dump($nombreVisite);
//$nombreVisite=$nombreVisite+1;
// ouverture du fichier en écriture
$Texte = fopen($compteur, "w");
// ecrasement de la valeur precedente contenu dans le fichier txt par la nouvelle valeur
fputs($Texte, $nombreVisite);
// fermeture du fichier
fclose($Texte);
// echo("nombre de visites avant : ".($nombreVisite-1).'</br>');
echo("nombre de visites actuelles : ".($nombreVisite).'</br>');
// echo("nombre de visites après : ".($nombreVisite+1).'</br>');
 }