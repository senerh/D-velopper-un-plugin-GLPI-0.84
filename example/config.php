<?php
include ('../../inc/includes.php');

// On v�rifie qu'on a les droits d'�criture
Session::checkRight("config", "w");

// Pour �tre disponible m�me quand le plugin n'est pas activ�
Plugin::load('example');

Html::header("Mon plugin",$_SERVER['PHP_SELF'],"config","plugins");
echo 'Page de configuration du plugin';
Html::footer();
?>