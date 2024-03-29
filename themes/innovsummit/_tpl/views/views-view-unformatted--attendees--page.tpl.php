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
<?php foreach ($rows as $id => $row): ?>
  <article<?php if ($classes_array[$id]) { print ' class="attendee ' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </article>
<?php endforeach; ?>