<div class="item record" style="background-image:url(<?php echo file_display_url($item->getFile(0), 'fullsize'); ?>)">
    <?php
    $title = metadata($item, 'display_title');
    $date = metadata($item, array('Dublin Core', 'Date'), array('snippet' => 150));
    $creator = metadata($item, array('Dublin Core', 'Creator'));
    ?>
    <div class="record-meta">
    <h3><?php echo link_to($item, 'show', $title); ?></h3>
    <?php if ($creator): ?>
    <span class="creator"><?php echo $creator; ?></span>
    <?php endif; ?>
    <?php if ($date): ?>
    <span class="date"><?php echo $date; ?></span>
    <?php endif; ?>
    </div>
</div>
