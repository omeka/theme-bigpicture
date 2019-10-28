<ul id="itemfiles" <?php echo (count($images) == 1) ? 'class="solo"' : ''; ?>>
    <?php foreach ($images as $image): ?>
    <li data-thumb="<?php echo $image->getWebPath('square_thumbnail'); ?>">
        <?php echo file_image('original', array(), $image); ?>
    </li>
    <?php endforeach; ?>
</ul>
