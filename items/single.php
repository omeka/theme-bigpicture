<div class="item record">
    <?php
    $title = metadata($item, 'display_title');
    $date = metadata($item, array('Dublin Core', 'Date'));
    $creator = metadata($item, array('Dublin Core', 'Creator'));
    ?>
    <?php if (metadata($item, 'has files')) {
        echo link_to_item(
            item_image('fullsize', array(), 0, $item),
            array('class' => 'image'), 'show', $item
        );
    }
    ?>
    <div class="item-meta">
        <h3><?php echo link_to($item, 'show', $title); ?></h3>
        <?php if ($creator): ?>
        <span class="creator"><?php echo $creator; ?></span>
        <?php endif; ?>
        <?php if ($date): ?>
        <span class="date"><?php echo $date; ?></span>
        <?php endif; ?>
    </div>
</div>
