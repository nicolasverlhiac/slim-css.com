<?php 
// Informations sur Slim
$version = "v0.37";
$versionCDN = "0.37.min.css";
$extension = ".slim";


// Référencement
$pageInfos['a-propos.php']['titre']="Présentation de Slim CSS Framework";
$pageInfos['templates.php']['titre']="Templates de site avec Slim CSS Framework";
$pageInfos['boutons.php']['titre']="Boutons / Slim CSS Framework";
$pageInfos['changelog.php']['titre']="ChangeLogs / Slim CSS Framework";
$pageInfos['class-aide.php']['titre']="Class d'aide  / Slim CSS Framework";
$pageInfos['formulaires.php']['titre']="Formulaires HTML / Slim CSS Framework";
$pageInfos['grille.php']['titre']="Grille de contenu / Slim CSS Framework";
$pageInfos['icones.php']['titre']="Pack d'icones / Slim CSS Framework";
$pageInfos['medias.php']['titre']="Images & Vidéos / Slim CSS Framework";
$pageInfos['navigation.php']['titre']="Navigation / Slim CSS Framework";
$pageInfos['tableaux.php']['titre']="Tableaux / Slim CSS Framework";
$pageInfos['telechargement.php']['titre']="Téléchargement des versions de Slim CSS Framework";
$pageInfos['typographie.php']['titre']="Typographie / Slim CSS Framework";
$pageInfos['notifications.php']['titre']="Notifications / Slim CSS Framework";
$pageInfos['couleurs.php']['titre']="Couleurs additionnelles / Slim CSS Framework";

// Templates
$templateCssIcone = "../css/slim-icons.css";
$templateCss = "../css/slim.css";
$pageInfos['template-01.php']['titre']="Templates / Slim CSS Framework";

// Gestion des langues
$LANG = array(); //initialisation du tableau des langues
$lang = "fr"; //@TODO : dynamique

include("lang/" . $lang . "/main.lang.php");

/**
 * Fonction pour la gestion de la langue du site
 *  
 * @param string $key - Chaine à traduire
 * 
 * @return la bonne traduction dans la bonne langue
 *         si non - le debug retourne la clef sans la traduction
 **/
function lang($key) {
  global $LANG, $deblang;
  if (array_key_exists($key, $LANG)){ 
  	return $LANG[$key];
  } else {
    $deblang[] = $key;
    return "__" . $key . "__";
  }
}


?>