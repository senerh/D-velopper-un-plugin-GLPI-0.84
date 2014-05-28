<?php
include ('../../inc/includes.php');

// On vérifie qu'on a les droits d'écriture
Session::checkRight("config", "w");

// Pour être disponible même quand le plugin n'est pas activé
Plugin::load('example');

Html::header("Mon plugin",$_SERVER['PHP_SELF'],"config","plugins");
echo 'Page de configuration du plugin';
Html::footer();
?>