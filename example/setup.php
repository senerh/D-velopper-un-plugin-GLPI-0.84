<?php
// initialise les hook du plugin
function plugin_init_example()
{
	global $PLUGIN_HOOKS;

	// Actualise les droits
	if (isset($_SESSION["glpi_plugin_example_profile"]))
	{
		//menu principal
		$PLUGIN_HOOKS['menu_entry']['example'] = 'front/example.php';
		$PLUGIN_HOOKS["helpdesk_menu_entry"]['example'] = true;
		
		$PLUGIN_HOOKS['submenu_entry']['example']['options']['home']['title'] = 'Accueil';
		$PLUGIN_HOOKS['submenu_entry']['example']['options']['home']['page']  = '/plugins/example/front/example.php';
		$PLUGIN_HOOKS['submenu_entry']['example']['options']['home']['links']['À propos'] = '/plugins/example/front/about.php';
		
		//à propos
		$PLUGIN_HOOKS['submenu_entry']['example']['options']['about']['title'] = 'À propos';
		$PLUGIN_HOOKS['submenu_entry']['example']['options']['about']['page']  = '/plugins/example/front/about.php';
	}

	// page de configuration
	if (Session::haveRight('config','w'))
	{
		$PLUGIN_HOOKS['config_page']['example'] = 'config.php';
	}

	// nécessaire pour la sécurité
	$PLUGIN_HOOKS['csrf_compliant']['example'] = true;
	
	// Change profile
	$PLUGIN_HOOKS['change_profile']['example'] = 'plugin_change_profile_example';
}


// informations sur le plugin
function plugin_version_example()
{
	return array(
	'name'           => 'Mon plugin',
	'version'        => '0.84+1.0',
	'author'         => 'Hakan SENER',
	'license'        => 'GPLv2+',
	'homepage'       => 'http://www.upmf-grenoble.fr/',
	'minGlpiVersion' => '0.84');
}

// la version de GLPI doit être 0.84.X
function plugin_example_check_prerequisites()
{
	if (version_compare(GLPI_VERSION,'0.84','lt') || version_compare(GLPI_VERSION,'0.85','gt'))
	{
		echo "This plugin requires GLPI 0.84.X";
		return false;
	}
	return true;
}

// Check configuration process for plugin : need to return true if succeeded
// Can display a message only if failure and $verbose is true
function plugin_example_check_config($verbose=false)
{
	if (true)// Your configuration check
	{
		return true;
	}

	if ($verbose)
	{
		echo 'Installed / not configured';
	}
	return false;
}
?>
