<?php

 
//framework URL check - kill everything if not defined
if(!defined('WEBR_FRAMEWORK_DIR')) die( _('Framework location not defined.','sis_spa'));

//shortcodes
require_once('shortcodes/shortcode.php');
//Spa widgets
require_once('widgets/spa-recent-posts.php');
require_once('widgets/spa-recent-products.php');
require_once('widgets/spa-widget-contact.php');
?>