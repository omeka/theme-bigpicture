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
    <?php if ($creator = metadata($item, array('Dublin Core', 'Creator'))): ?>
    <span class="creator"><?php echo $creator; ?></span>
    <?php endif; ?>
    <?php if ($date = metadata($item, array('Dublin Core', 'Date'))): ?>
    <span class="date"><?php echo $date; ?></span>
    <?php endif; ?>
    </div>
</div>
