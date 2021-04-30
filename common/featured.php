<?php 
$backgroundFile = $featuredRecord->getFile(0);
if ($backgroundFile) {
  $background = "background-image:url(" . file_display_url($backgroundFile, 'fullsize') . ")";
} else {
  $background = "background-color: #666";
}
?>

<div class="<?php echo $recordType; ?> record" style="<?php echo $background; ?>">
    <div class="record-meta">
    <?php if ($recordType == 'exhibit'): ?>
        <?php set_current_record('exhibit', $featuredRecord); ?>
        <h3><?php echo link_to_exhibit(); ?></h3>
    <?php else: ?>
        <h3><?php echo link_to($featuredRecord, 'show', metadata($featuredRecord, 'display_title')); ?></h3>
        <?php if ($creator = metadata($featuredRecord, array('Dublin Core', 'Creator'))): ?>
        <span class="creator"><?php echo $creator; ?></span>
        <?php endif; ?>
        <?php if ($date = metadata($featuredRecord, array('Dublin Core', 'Date'), array('snippet' => 150))): ?>
        <span class="date"><?php echo $date; ?></span>
        <?php endif; ?>
    <?php endif; ?>
    </div>
</div>
