<div class="exhibit record" style="background-image:url(<?php echo file_display_url($exhibit->getFile(), 'fullsize'); ?>)">
    <?php
    set_current_record('exhibit', $exhibit);
    ?>
    <div class="record-meta">
    <h3><?php echo link_to_exhibit(); ?></h3>
    </div>
</div>
