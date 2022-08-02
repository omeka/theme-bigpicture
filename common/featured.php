<?php ;
$backgroundFile = $featuredRecord->getFile(0);
if ($backgroundFile) {
  $background = "background-image:url(" . file_display_url($backgroundFile, 'fullsize') . ")";
} else {
  $background = "background-color: #666";
}
?>

<div class="<?php echo $recordType; ?> record" style="<?php echo $background; ?>">
    <div class="record-meta">
        <span class="sr-only"><?php echo __('Featured'); ?></span>
        <?php if ($recordType == 'exhibit'): ?>
            <?php set_current_record('exhibit', $featuredRecord); ?>
            <span id="slick-slide0<?php echo $slideCount; ?>" class="resource-title"><?php echo link_to_exhibit(); ?></span>
        <?php else: ?>
            <span id="slick-slide0<?php echo $slideCount; ?>" class="resource-title"><?php echo link_to($featuredRecord, 'show', metadata($featuredRecord, 'display_title')); ?></span>
            <?php if ($creator = metadata($featuredRecord, array('Dublin Core', 'Creator'))): ?>
            <span class="creator"><?php echo $creator; ?></span>
            <?php endif; ?>
            <?php if ($date = metadata($featuredRecord, array('Dublin Core', 'Date'), array('snippet' => 150))): ?>
            <span class="date"><?php echo $date; ?></span>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
