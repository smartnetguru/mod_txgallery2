<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHtml::_('jquery.framework');
JFactory::getDocument()->addStylesheet('media/mod_txgallery/magnific-popup.css');
JFactory::getDocument()->addScript('media/mod_txgallery/jquery.magnific-popup.min.js');
JFactory::getDocument()->addScriptDeclaration("
jQuery(document).ready(function (){
  jQuery('.mod-txgallery-".$module->id."').each(function() {
      jQuery(this).magnificPopup({
          delegate: 'a',
          type: '".$gallery_type."',
          gallery: {
            enabled:true
          }
      });
  });
});
");
?>
<div class="mod-txgallery-<?php echo $module->id;?>">
  <?php require JModuleHelper::getLayoutPath('mod_txgallery', 'default_' . $gallery_type);  ?>
</div>

