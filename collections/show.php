<?php
$collectionTitle = metadata('collection', 'display_title');
$collectionItemsTotal = metadata('collection', 'total_items');
$perPagePublic = get_option('per_page_public')
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>

<div class="flex">
    <div class="collection-meta">
        <h1><?php echo $collectionTitle; ?></h1>
        <?php echo all_element_texts('collection'); ?>
    </div>
    
    <div id="collection-items" class="records">
        <?php $currentTotal = ($collectionItemsTotal < $perPagePublic) ? $collectionItemsTotal : $perPagePublic; ?>
        <h2><?php echo link_to_items_browse(__('Items in the %s Collection' . ' (%s/%s)', $collectionTitle, $currentTotal, $collectionItemsTotal), array('collection' => metadata('collection', 'id'))); ?></h2>
        <?php if (metadata('collection', 'total_items') > 0): ?>
            <?php foreach (loop('items') as $item): ?>
            <?php $itemTitle = metadata('item', 'display_title'); ?>
            <div class="item hentry">
                <?php if (metadata('item', 'has thumbnail')): ?>
                <div class="item-img">
                    <?php echo link_to_item(item_image('fullsize', array('alt' => $itemTitle))); ?>
                </div>
                <?php endif; ?>
                <div class="item-meta">
                    <h3><?php echo link_to_item($itemTitle, array('class'=>'permalink')); ?></h3>
        
                    <?php if ($creator = metadata('item', array('Dublin Core', 'Creator'))): ?>
                    <span class="creator"><?php echo $creator; ?></span>
                    <?php endif; ?>
                    <?php if ($date = metadata('item', array('Dublin Core', 'Date'))): ?>
                    <span class="date"><?php echo $date; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if ($collectionItemsTotal > $perPagePublic): ?>
            <p class="view-items-link"><?php echo link_to_items_in_collection(__('View all items in collection')); ?></p>
            <?php endif; ?>
        <?php else: ?>
            <p><?php echo __("There are currently no items within this collection."); ?></p>
        <?php endif; ?>
    </div><!-- end collection-items -->
</div>

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
