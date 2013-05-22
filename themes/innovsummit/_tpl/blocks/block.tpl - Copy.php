<?php if ($block->subject): ?><section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>><?php endif;?>
  
    <?php if ($block->subject): ?><h2><?php print $block->subject; ?></h2><?php endif;?>

  <?php if ($block->subject): ?><div class="content"><?php endif;?>
    <?php print $content ?>
   <?php if ($block->subject): ?></div><?php endif;?>
  
<?php if ($block->subject): ?></section> <?php endif;?><!-- /.block -->