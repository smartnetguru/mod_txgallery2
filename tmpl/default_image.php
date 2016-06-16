<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$grid = $bootstrap_ver == 'bs3'? 'col-md-' : 'span';
$lists= array_chunk($lists, (12/$gallery_col) );
?>
<?php foreach($lists as $list):?>
    <div class="row">
    <?php foreach($list as $key => $value): ?>
      <div class="<?php echo $grid.$gallery_col; ?>">
        <div class="met-box no-padding">
          <a href="<?php echo $value['image_link'] ?>">
            <img class="img-responsive" src="<?php echo $value['image_link'] ?>" alt="<?php echo $value['image_name'] ?>" />
          </a>
        </div>
        <div class="caption text-center">
          <h5><?php echo $value['image_name'] ?></h5>
        </div>
      </div>
    <?php endforeach;?>
    </div>
<?php endforeach;?>

