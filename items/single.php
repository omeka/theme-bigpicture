<div class="item hentry">
    <div class="item-meta">
    <?php if (metadata($item, 'has files')): ?>
        <div class="item-img">
        <?php $imageSize = (get_option('use_square_thumbnail') == 1) ? 'square_thumbnail' : 'fullsize'; ?>
        <?php echo link_to_item(
            item_image($imageSize, array(), 0, $item),
            array('class' => 'image'), 'show', $item
        ); ?>
        </div>
    <?php endif; ?>
    <h3><?php echo link_to($item, 'show',  metadata($item, 'rich_title', array('no_escape' => true))); ?></h3>
    <?php if ($creator = metadata($item, array('Dublin Core', 'Creator'))): ?>
    <span class="creator"><?php echo $creator; ?></span>
    <?php endif; ?>
    <?php if ($date = metadata($item, array('Dublin Core', 'Date'))): ?>
    <span class="date"><?php echo $date; ?></span>
    <?php endif; ?>
    </div>
</div>
