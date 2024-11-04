<?php set_current_record('item', $item); ?>
<div class="item hentry">
    <div class="item-meta">
    <?php 
    $linkContent = '';
    if (metadata($item, 'has files')) {
        $imageSize = (get_option('use_square_thumbnail') == 1) ? 'square_thumbnail' : 'fullsize';
        $imageFile = $item->getFile(0);
        $imageTitle = metadata($imageFile, 'rich_title', array('no_escape' => true));
        $linkContent .= item_image($imageSize);
    } 
    $linkContent .= metadata($item, 'rich_title', array('no_escape' => true));
    ?>
    <span class="resource-title"><?php echo link_to($item, 'show', $linkContent, array('class' => 'resource-link')); ?></span>

    <?php 
    $resourceBody = '';
    if ($creator = metadata('item', array('Dublin Core', 'Creator'))) {
        $resourceBody .= '<span class="creator">' . $creator . '</span>';
    }
    if ($date = metadata('item', array('Dublin Core', 'Date'))) {
        $resourceBody .= ', <span class="date">' . $date . '</span>';
    }
    if ($resourceBody !== '') {
        echo '<div class="resource-body">' . $resourceBody . '</div>';
    }
    ?>

    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>

    </div>
</div>