<?php 
$collection = get_record_by_id('collection', $collectionID); 
set_current_record('collection', $collection);
?>
<div class="flex">
    <div class="collection-meta">
        <h1><?php echo metadata('collection', array('Dublin Core', 'Title')); ?></h1>
        <a href="#" class="mobile-toggle closed">Collection Metadata</a>
        <div class="closed">
            <?php echo all_element_texts($collection); ?>
        </div>
    </div>
    <div id="collection-items" class="records">

        <?php echo item_search_filters(); ?>

        <?php if ($total_results > 0): ?>    
        <div class="browse-header">
            <?php
            $sortLinks[__('Title')] = 'Dublin Core,Title';
            $sortLinks[__('Creator')] = 'Dublin Core,Creator';
            $sortLinks[__('Date Added')] = 'added';
            ?>
            <div id="sort-links">
                <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
            </div>
        
            <?php echo pagination_links(); ?>
        
        </div>
        <?php endif; ?>
        <?php foreach (loop('items') as $item): ?>
        <div class="item hentry">
            <div class="item-meta">
            <?php if (metadata('item', 'has files')): ?>
            <div class="item-img">
                <?php echo link_to_item(item_image('fullsize')); ?>
            </div>
            <?php endif; ?>
    
            <h3><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?></h3>
    
            <?php if ($creator = metadata('item', array('Dublin Core', 'Creator'))): ?>
            <span class="creator"><?php echo $creator; ?></span>
            <?php endif; ?>
            <?php if ($date = metadata('item', array('Dublin Core', 'Date'))): ?>
            <span class="date"><?php echo $date; ?></span>
            <?php endif; ?>
    
            <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
    
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>