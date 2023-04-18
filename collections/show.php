<?php
$collectionTitle = metadata('collection', 'rich_title', array('no_escape' => true));
$collectionItemsTotal = metadata('collection', 'total_items');
$perPagePublic = get_option('per_page_public')
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>

<?php echo $this->partial('items/collection-items.php', array('collection' => $collection, 'total_results' => $collectionItemsTotal, 'collectionShow' => true)); ?>

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
