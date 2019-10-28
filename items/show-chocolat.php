<div id="itemfiles" <?php echo (count($images) == 1) ? 'class="solo"' : ''; ?>>
    <div id="itemfiles-stage"></div>
    <div id="itemfiles-nav">
        <?php foreach ($images as $image): ?>
            <a href="<?php echo $image->getWebPath('original'); ?>" class="chocolat-image">
                <?php echo file_image('square_thumbnail', array(), $image); ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
