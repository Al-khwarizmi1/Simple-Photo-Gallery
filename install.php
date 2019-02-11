<?php
/**
 * @name       Simple Photo Gallery
 * @package    com_simplephotogallery
 * @author     Apptha <assist@apptha.com>
 * @copyright  Copyright (C) 2014 Powered by Apptha
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @since      Joomla 1.5
 * @Created Date	Dec 2011
 * @Modified Date	Sep 2014
 */ 
// No direct access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.filesystem.folder');
jimport('joomla.installer.installer');

$db = JFactory::getDBO();

$query = 'UPDATE  #__components '.
		'SET name = "Images" '.
		'WHERE name = "COM_PHOTOGALLERY_IMAGES"';
$db->setQuery($query);
$db->query();

$query = 'UPDATE  #__components '.
		'SET name = "Settings" '.
		'WHERE name = "COM_PHOTOGALLERY_SETTINGS"';
$db->setQuery($query);
$db->query();

$query = 'UPDATE  #__components '.
		'SET name = "Simple Photo Gallery" '.
		'WHERE name = "COM_PHOTOGALLERY"';
$db->setQuery($query);
$db->query();

$query = 'UPDATE  #__components '.
		'SET name = "Albums" '.
		'WHERE name = "COM_PHOTOGALLERY_ALBUMS"';
$db->setQuery($query);
$db->query();
?>

<style>
table.adminform th{padding:0px;}
</style>
<div style="/* Opera 11.10+ */
background: -o-linear-gradient(top, rgba(255,255,255,1), rgba(232,232,232,1));

/* Firefox 3.6+ */
background: -moz-linear-gradient(top, rgba(255,255,255,1), rgba(232,232,232,1));

/* Chrome 7+ & Safari 5.03+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(255,255,255,1)), color-stop(1, rgba(232,232,232,1)));

/* IE5.5 - IE7 */
filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#FFFFFFFF,EndColorStr=#FFE8E8E8);

/* IE8 */
-ms-filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#FFFFFFFF,EndColorStr=#FFE8E8E8);">
<div>
<div style="float: left; width: 80%;">
<p style="font-style:normal;font-size:13px;font-weight:normal; margin-top:10px;margin-left:10px;">Simple photo gallery is an extension which shows up your photos in an impressive and memorable way. The gallery extension easily organizes your large set of digital photos, edit images and create multiple albums.</p>
</div>
<div style="float: right; margin-top: 19px; margin-right: 10px;">
        <a href="https://www.apptha.com/category/extension/Joomla/Simple-Photo-Gallery" target="_blank">
            <img src="components/com_simplephotogallery/images/contus.jpg" alt="Joomla! Simple photo gallery" align="left" />
        </a>
    </div>
</div>

    <div style="clear:both;"></div>
    <div style="margin-left:10px;padding-bottom:10px;">
        <a href="https://docs.google.com/a/contus.in/viewer?url=https://www.apptha.com/downloadable/download/sample/sample_id/102/Simple+Photo+Gallery" target="_blank">Click here to download the documentation</a><br/>
    </div>
    
    </div>