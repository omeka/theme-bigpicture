<?php
$title = metadata('item', 'display_title');
$hasFiles = metadata('item', 'has files');
queue_css_file('chocolat');
queue_js_file('jquery.chocolat.min', 'js');
queue_js_string('
    jQuery(document).ready(function(){
        var inContainer = jQuery("#itemfiles-nav").Chocolat({
        imageSize: "default",
        loop: true,
        fullscreen: true,
        container: "#itemfiles-stage"
        }).data("chocolat");

        inContainer.api().open()
    });
');
echo head(array('title' => $title, 'bodyclass' => 'items show' .  (($hasFiles) ? ' gallery' : '')));
?>

<div class="flex">

<!-- The following returns all of the files associated with an item. -->
<?php if ($hasFiles): ?>
<?php $itemFiles = $item->Files; ?>
<div id="itemfiles" <?php echo (count($itemFiles) == 1) ? 'class="solo"' : ''; ?>>
    <div id="itemfiles-stage"></div>
    <div id="itemfiles-nav">
        <?php foreach ($itemFiles as $itemFile): ?>
            <a href="<?php echo $itemFile->getWebPath('original'); ?>" class="chocolat-image">
                <?php echo file_image('square_thumbnail', array(), $itemFile); ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<div class="item-metadata">
    <h1><?php echo metadata('item', 'display_title'); ?></h1>

    <?php echo all_element_texts('item'); ?>
    
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
    <nav>
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
    </nav>
</div>

</div>

<?php echo foot(); ?>
