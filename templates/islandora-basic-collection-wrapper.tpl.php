<?php

/**
 * @file
 * islandora-basic-collection-wrapper.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora-basic-collection-wrapper">

  <?php if (isset($description)):?>
  <?php print $description; ?>
  <?php endif;?>
  <?php print views_embed_view('sort_by_title', 'block'); ?>
  <div class="islandora-basic-collection clearfix">
    <div class="display-switch-wrapper">
    <div>
        <span class="islandora-basic-collection-display-switch">
      <ul class="links inline">
        <?php foreach ($view_links as $link): ?>
          <li>
            <a <?php print drupal_attributes($link['attributes']) ?>><?php print filter_xss($link['title']) ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </span>
    </div>

    </div>

    <?php print $collection_pager; ?>
    <?php print $collection_content; ?>
    <?php print $collection_pager; ?>
  </div>
  <?php if ($display_metadata && theme_get_setting('bceln_theme_collections_meta') == 1): ?>
    <div class="islandora-collection-metadata">
      <?php if ($parent_collections): ?>
        <div>
          <h2><?php print t('In collections'); ?></h2>
          <ul>
            <?php foreach ($parent_collections as $collection): ?>
              <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      <?php print $metadata; ?>
    </div>
  <?php endif; ?>
</div>
