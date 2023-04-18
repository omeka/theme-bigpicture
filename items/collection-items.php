<div class="flex">
    <div class="collection-meta">
        <h1><?php echo metadata('collection', 'rich_title', array('no_escape' => true)); ?></h1>
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

        <?php 
        foreach (loop('items') as $item) {
            echo $this->partial('items/single.php', array('item' => $item));
        }
        if (isset($collectionShow)) {
            echo link_to_items_browse(__(plural('View item', 'View all %s items', $total_results), $total_results), array('collection' => metadata('collection', 'id')), array('class' => 'view-items-link'));
        }
        ?>
    </div>
</div>