<?php
$linkToFileMetadata = get_option('link_to_file_metadata');
$title = metadata('item', 'display_title');
$itemFiles = $item->Files;
$images = array();
$nonImages = array();
foreach ($itemFiles as $itemFile) {
    $mimeType = $itemFile->mime_type;
    if ((strpos($mimeType, 'image') !== false) || (strpos($mimeType, 'video') !== false)) {
        $images[] = $itemFile;
    } else if (strpos($mimeType, 'text/plain') !== false) {
        $kind = metadata($itemFile, array('Dublin Core', 'Type'));
        if ($kind == 'subtitles') {
            continue;
        }
    } else {
        $nonImages[] = $itemFile;
    }
}
$hasImages = (count($images) > 0);
$imageViewer = get_theme_option('image_viewer');
if ($hasImages) {
    queue_js_file('items-show', 'js');
    queue_css_file('lightslider.min');
    queue_css_file('lightgallery.min');
    queue_js_file('lightslider.min', 'js');
    queue_js_file('lightgallery-all.min', 'js');
    queue_js_string('
        jQuery(document).ready(function() {
            BigPicture.useLightslider(' . count($images) . ');
        });
    ');
}
echo head(array('title' => $title, 'bodyclass' => 'items show' .  (($hasImages) ? ' gallery' : '')));
?>

<div class="flex">
<!-- The following returns all of the files associated with an item. -->
<?php if ($hasImages): ?>
    <ul id="itemfiles" <?php echo (count($images) == 1) ? 'class="solo"' : ''; ?>>
        <?php $imageCount = 0; ?>
        <?php foreach ($images as $image): ?> 
        <?php $imageCount++; ?>
        <?php $fileUrl = ($linkToFileMetadata == '1') ? record_url($image) : $image->getWebPath('original'); ?>
        <?php if (strpos($image->mime_type, 'image') !== false): ?>
            <li 
                data-src="<?php echo $image->getWebPath('original'); ?>" 
                data-thumb="<?php echo $image->getWebPath('square_thumbnail'); ?>" 
                data-sub-html=".media-link"
                class="media resource"
            >
                <div class="media-render">
                <?php echo file_image('original', array(), $image); ?>
                </div>
                <div class="media-link">
                <a href="<?php echo $fileUrl; ?>"><?php echo metadata($image, 'rich_title', array('no_escape' => true)); ?></a>
                </div>
            </li>
        <?php else: ?>
            <li 
                data-thumb="<?php echo file_display_url($image, 'square_thumbnail'); ?>" 
                data-html="#video-<?php echo $imageCount; ?>"
                data-sub-html=".media-link" 
                class="media resource"
            >
                <div style="display: none;" id="video-<?php echo $imageCount; ?>">
                    <video class="lg-video-object lg-html5" controls preload="none">
                        <source src="<?php echo file_display_url($image, 'original'); ?>" type="<?php echo $image->mime_type; ?>">
                        <?php echo __('Your browser does not support HTML5 video.'); ?>
                        <?php $subtitles = bigpicture_find_text_track_files($image, $item); ?>
                        <?php foreach ($subtitles as $subtitleTrack): ?>
                            <?php echo bigpicture_output_text_track_file($subtitleTrack); ?>
                        <?php endforeach; ?>
                    </video>
                </div>
                <div class="media-render">
                    <?php echo file_image('fullsize', array(), $image); ?>
                </div>
                <div class="media-link">
                    <a href="<?php echo $fileUrl; ?>"><?php echo metadata($image, 'rich_title', array('no_escape' => true)); ?></a>
                </div>
            </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div class="item-metadata">
    <nav>
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
    </nav>

    <h1><?php echo metadata('item', 'rich_title', array('no_escape' => true)); ?></h1>
    
    <div class="item-metadata-content">
      
    <?php echo all_element_texts('item'); ?>
    
    <?php if (metadata('item', 'Collection Name')): ?>
    <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
    </div>
    <?php endif; ?>
    
    <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item', 'has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <?php if (count($nonImages) > 0): ?>
    <div id="other-media" class="element">
        <h3><?php echo __('Files'); ?></h3>
        <?php foreach ($nonImages as $nonImage): ?>
        <?php $fileUrl = ($linkToFileMetadata == '1') ? record_url($nonImage) : $nonImage->getWebPath('original'); ?>
        <div class="element-text"><a href="<?php echo $fileUrl; ?>"><?php echo metadata($nonImage, 'rich_title', array('no_escape' => true)); ?> - <?php echo $nonImage->mime_type; ?></a></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
    </div>
    
    <div id="item-output-formats" class="element">
        <h3><?php echo __('Output Formats'); ?></h3>
        <div class="element-text"><?php echo output_format_list(); ?></div>
    </div>
    
    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
    </div>
</div>

</div>

<?php echo foot(); ?>
