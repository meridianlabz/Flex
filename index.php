<?php defined('_JEXEC') or die('Restricted area - You are not allowed access'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language ?>" lang="<?php echo $this->language ?>">
<head>
	<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
	<jdoc:include type="head" />

	<!-- This meta tag adds mobile device detection -->
    <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

	<!-- Joomla System CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" />

	<!-- Foundation CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/foundation.min.css" />

	<!-- Template CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" />

</head>
<body>
	<jdoc:include type="modules" name="main-navigation" style="none">
	<jdoc:include type="modules" name="hero-panel" style="none">
	<jdoc:include type="modules" name="left-sidebar" style="xhtml">
	<jdoc:include type="modules" name="component">
	<jdoc:include type="modules" name="ads-panel" style="none">
	<jdoc:include type="modules" name="right-sidebar" style="xhtml">
	<jdoc:include type="modules" name="bottom-one" style="xhtml">
	<jdoc:include type="modules" name="bottom-two" style="xhtml">
	<jdoc:include type="modules" name="bottom-three" style="xhtml">
	<jdoc:include type="modules" name="bottom-four" style="xhtml">
	<jdoc:include type="modules" name="footer" style="none">
</body>
</html>