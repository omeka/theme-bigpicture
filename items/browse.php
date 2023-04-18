<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>
<?php if (isset($_GET['collection']) && ($_GET['collection'] !== '')): ?>

<?php 
$collectionID = $_GET['collection']; 
$collection = get_record_by_id('collection', $collectionID); 
set_current_record('collection', $collection);
echo $this->partial('items/collection-items.php', array('collection' => $collection, 'total_results' => $total_results)); 
?>

<?php else: ?>

<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

<?php echo item_search_filters(); ?>

<?php if ($total_results > 0): ?>    
<div class="browse-header">
    <nav class="items-nav navigation secondary-nav">
        <?php echo public_nav_items(); ?>
    </nav>
    
    <?php
    $sortLinks[__('Title')] = 'Dublin Core,Title';
    $sortLinks[__('Creator')] = 'Dublin Core,Creator';
    $sortLinks[__('Date Added')] = 'added';
    ?>
    <div class="sort-links">
        <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
    </div>

    <?php echo pagination_links(); ?>

</div>
<?php endif; ?>    

<div class="records">
    <?php foreach (loop('items') as $item): ?>
    <div class="item hentry">
        <div class="item-meta">
        <?php 
        $linkContent = '';
        if (metadata($item, 'has files')) {
            $imageSize = (get_option('use_square_thumbnail') == 1) ? 'square_thumbnail' : 'fullsize';
            $linkContent .= item_image($imageSize, array(), 0, $item);
        } 
        $linkContent .= metadata($item, 'rich_title', array('no_escape' => true));
        ?>
        <span class="resource-title"><?php echo link_to($item, 'show', $linkContent, array('class' => 'resource-link')); ?></span>

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

<?php if ($total_results > 0): ?>    
<div class="browse-header">    
    <?php
    $sortLinks[__('Title')] = 'Dublin Core,Title';
    $sortLinks[__('Creator')] = 'Dublin Core,Creator';
    $sortLinks[__('Date Added')] = 'added';
    ?>
    <div class="sort-links">
        <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
    </div>

    <?php echo pagination_links(); ?>
</div>
<?php endif; ?>    

<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>
</div>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php endif; ?>

<?php echo foot(); ?>
