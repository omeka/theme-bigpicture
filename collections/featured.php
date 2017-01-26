<div class="collection record" style="background-image:url(<?php echo file_display_url($collection->getFile(), 'fullsize'); ?>)">
    <?php
    set_current_record('collection', $collection);
    $title = metadata($collection, 'display_title');
    $date = metadata($collection, array('Dublin Core', 'Date'), array('snippet' => 150));
    $creator = metadata($collection, array('Dublin Core', 'Creator'));
    ?>
    <div class="record-meta">
    <h3><?php echo link_to_collection($title); ?></h3>
    <?php if ($creator): ?>
    <span class="creator"><?php echo $creator; ?></span>
    <?php endif; ?>
    <?php if ($date): ?>
    <span class="date"><?php echo $date; ?></span>
    <?php endif; ?>
    </div>
</div>
