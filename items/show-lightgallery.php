<ul id="itemfiles" <?php echo (count($images) == 1) ? 'class="solo"' : ''; ?>>
    <?php foreach ($images as $image): ?>
    <li data-src="<?php echo $image->getWebPath('original'); ?>" data-thumb="<?php echo $image->getWebPath('square_thumbnail'); ?>" class="media resource">
        <div class="media-render">
        <?php echo file_image('original', array(), $image); ?>
        </div>
    </li>
    <?php endforeach; ?>
</ul>
