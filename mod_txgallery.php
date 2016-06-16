<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// // Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
$app  = JFactory::getApplication();

$bootstrap_ver  = $params->get('bootstrap_ver', 'bs3');
$gallery_type  = $params->get('gallery_type', 'image');
$gallery_col  = $params->get('gallery_col', 3);
$image_gallery = $params->get('image_gallery');
$video_gallery = $params->get('video_gallery');
if($gallery_type == 'image'){
  $list_labels = json_decode($image_gallery, true);
}else{
  $list_labels = json_decode($video_gallery, true);
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$lists = ModTxGalleryHelper::group_by_key($list_labels);

require JModuleHelper::getLayoutPath('mod_txgallery', $params->get('layout', 'default'));
