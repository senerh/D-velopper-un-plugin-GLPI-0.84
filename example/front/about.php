<?php
//pour utiliser les fonctionnalités de GLPI
include ("../../../inc/includes.php");

//pour utiliser la structure défini dans le fichier setup.php
Html::header('Mon plugin',$_SERVER['PHP_SELF'],"plugins","example","about");

//corps de la page
echo 'À propos du plugin<br />';

//fin de la page
Html::footer();
?>