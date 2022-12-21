<?php
$linkToFileMetadata = get_option('link_to_file_metadata');
$title = metadata('item', 'display_title');
$itemFiles = $item->Files;
if ($itemFiles) {
    $lightGallery = $this->lightgallery($itemFiles);
    queue_lightgallery_assets();
} else {
    $lightGallery = '';
}
echo head(array('title' => $title, 'bodyclass' => 'items show' .  (($lightGallery !== '') ? ' gallery' : '')));
?>

<div class="flex">

<?php echo $lightGallery; ?>

<div class="item-metadata">
    <nav>
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
    </nav>

    <h1><?php echo metadata('item', 'rich_title', array('no_escape' => true)); ?></h1>
    
    <div class="item-metadata-content">
      
    <?php echo all_element_texts('item'); ?>

    <?php if ($itemFiles): ?>
    <?php echo lightgallery_other_files($itemFiles); ?>
    <?php endif; ?>
    
    <?php if (metadata('item', 'Collection Name')): ?>
    <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
    </div>
    <?php endif; ?>
    
    <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item', 'has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
    </div>
    
    <div id="item-output-formats" class="element">
        <h3><?php echo __('Output Formats'); ?></h3>
        <div class="element-text"><?php echo output_format_list(); ?></div>
    </div>
    
    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
    </div>
</div>

</div>

<?php echo foot(); ?>
