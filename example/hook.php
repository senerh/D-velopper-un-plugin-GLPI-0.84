<?php
// Hook called on profile change
// Good place to evaluate the user right on this plugin
// And to save it in the session
function plugin_change_profile_example()
{
	// For example : same right of computer
	if (Session::haveRight('computer','w'))
	{
		$_SESSION["glpi_plugin_example_profile"] = array('example' => 'w');
	}
	else if (Session::haveRight('computer','r'))
	{
		$_SESSION["glpi_plugin_example_profile"] = array('example' => 'r');
	}
	else
	{
		unset($_SESSION["glpi_plugin_example_profile"]);
	}
}

// procédure d'installation du plugin
// c'est ici qu'on créé notament les tables
function plugin_example_install()
{
	return true;
}

// procédure de désinstallation du plugin
// c'est ici qu'on supprime entre autre les tables crées
function plugin_example_uninstall()
{
	return true;
}
?>