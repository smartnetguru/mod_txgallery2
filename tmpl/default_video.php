<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
  <div class="row">
    <?php foreach ($lists as $key => $value): ?>
    <?php echo ($key != 0 && $key%4 == 0 ? "</div><div class='row'>" : ""); ?>
    <div class="col-sm-6 col-md-3">
      <div class="met-box no-padding">
        <a href="<?php echo $value['video_link'] ?>" class="mfp-iframe">
          <img src="<?php echo $value['video_image'] ?>" alt="<?php echo $value['video_name'] ?>" class="img-responsive"/>
        </a>
      </div>
      <div class="caption text-center">
        <h5><?php echo $value['video_name'] ?></h5>
      </div>
    </div>
  <?php endforeach; ?>
</div>

