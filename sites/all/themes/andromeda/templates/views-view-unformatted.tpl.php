<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php $i=0; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php if($i==0) { ?>
    <div class="grid-parent grid-space-top">
  <? } ?>
  <div class="grid-child grid-space-bottom grid-50 <?php if ($i<1) { print "grid-space-right";  } ?> <?php if ($classes_array[$id]) { print $classes_array[$id];  } ?>">
    <?php print $row; ?>
  </div>
  <?php
    if($i==1) {
      print '</div>';
      $i=0;
    }else
      $i++;
  ?>
<?php endforeach; ?>
