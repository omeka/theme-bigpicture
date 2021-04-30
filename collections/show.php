<?php
$collectionTitle = metadata('collection', 'rich_title', array('no_escape' => true));
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
                    <?php $imageSize = (get_option('use_square_thumbnail') == 1) ? 'square_thumbnail' : 'fullsize'; ?>
                    <?php echo link_to_item(item_image($imageSize, array('alt' => $itemTitle))); ?>
                </div>
                <?php endif; ?>
                <div class="item-meta">
                    <h3><?php echo link_to_item(null, array('class'=>'permalink')); ?></h3>
        
                    <?php if ($creator = metadata('item', array('Dublin Core', 'Creator'))): ?>
                    <span class="creator"><?php echo $creator; ?></span>
                    <?php endif; ?>
                    <?php if ($date = metadata('item', array('Dublin Core', 'Date'))): ?>
                    <span class="date"><?php echo $date; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
            <?php echo link_to_items_browse(__(plural('View item', 'View all %s items', $collectionItemsTotal), $collectionItemsTotal), array('collection' => metadata('collection', 'id')), array('class' => 'view-items-link')); ?>
        <?php else: ?>
            <p><?php echo __("There are currently no items within this collection."); ?></p>
        <?php endif; ?>
    </div><!-- end collection-items -->
</div>

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
