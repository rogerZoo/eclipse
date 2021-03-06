<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Description: eclipse.org cvs main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "UI-Greasemonkey";
	$pageKeywords	= "Platform, UI";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Bog and Tric", "http://www.bogandtric.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		We use the Triage Helper <a href="platformuitriagehelper.user.js">platformuitriagehelper.user.js</a> <a href="http://www.greasespot.net/">Greasemonkey</a> script
		to automate assignment of component areas and owners.
		Just click on the script link to load it into your browser. Ensure that Tools->Grease Monkey is enabled in your browser.
		</br>
		The script is driven by data <a href="http://www.eclipse.org/eclipse/platform-ui/componentAreas.json">located here</a>.  This data also drives our <a href="http://www.eclipse.org/eclipse/platform-ui/componentAreas.php">component area document</a>.  
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
