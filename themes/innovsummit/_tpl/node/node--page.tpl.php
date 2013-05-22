    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_header']);
      hide($content['field_footer']);
      ?>

<?php //if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php //endif; ?>
    <header>
        <?php print render($content['field_header']); ?>
    </header>
    <div class="content pageContent"<?php print $content_attributes; ?>>
    <?php print render($content); ?>
    </div>
    <footer>
        <?php print render($content['field_footer']); ?>
    </footer>

<?php //if (!$page): ?>
  </article> <!-- /.node -->
<?php //endif; ?>