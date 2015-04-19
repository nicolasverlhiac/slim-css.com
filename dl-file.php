<?php 
$chemin =  $_GET['url'];
$nomFichier =  $_GET['nom'];
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.$nomFichier);
header('Content-Transfer-Encoding: text/html');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
readfile($chemin);
exit;  
?>