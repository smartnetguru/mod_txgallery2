<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$lists= array_chunk($lists, (12/$gallery_col) );
?>

<?php foreach($lists as $list):?>
  <div class="row">
    <?php foreach($list as $key => $value): ?>
      <div class="col-sm-6 col-md-<?php echo $gallery_col; ?>">
        <div class="met-box no-padding">
          <a href="<?php echo $value['video_link'] ?>" class="mfp-iframe">
            <img src="<?php echo $value['video_image'] ?>" alt="<?php echo $value['video_name'] ?>" class="img-responsive"/>
          </a>
        </div>
        <div class="caption text-center">
          <h5><?php echo $value['video_name'] ?></h5>
        </div>
      </div>
    <?php endforeach;?>
  </div>
<?php endforeach;?>



