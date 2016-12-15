<?php
$_POST["editor1"].$_POST["mardi"];
$file=$_POST['mardi'];
$text=$_POST['editor1'];

$fichier = fopen($file.".html", 'a');
fputs($fichier,$text);

echo $files = array_slice(scandir('.'), 2);

$dir = "./";
//  cherche le dossier
if (is_dir($dir)) {
//ouverture du dossier
if ($dh = opendir($dir)) {
//lecture des fichier
  while (($file = readdir($dh)) !== false) {
//affichage des extension
  if( $file != '.' && $file != '..'){
echo "fichier : $file : type : ." . filetype($dir . $file) . "<br />\n";
  }}
       closedir($dh);
}}











?>
