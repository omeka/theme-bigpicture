<?php
$pageTitle = __('Search') . ' ' . __('(%s total)', $total_results);
echo head(array('title' => $pageTitle, 'bodyclass' => 'search'));
$searchRecordTypes = get_search_record_types();
?>
<h1><?php echo $pageTitle; ?></h1>
<?php echo search_filters(); ?>

<?php if ($total_results): ?>
<div class="browse-header">
<?php echo pagination_links(); ?>
</div>

<div class="records">
    <?php $filter = new Zend_Filter_Word_CamelCaseToDash; ?>
    <?php foreach (loop('search_texts') as $searchText): ?>
    <?php $record = get_record_by_id($searchText['record_type'], $searchText['record_id']); ?>
    <?php $recordType = $searchText['record_type']; ?>
    <?php set_current_record($recordType, $record); ?>
    <div class="<?php echo strtolower($filter->filter($recordType)); ?>">
        <div class="record">
            <?php if ($recordImage = record_image($recordType)): ?>
                <?php echo link_to($record, 'show', $recordImage, array('class' => 'image')); ?>
            <?php endif; ?>
            <div class="record-type"><?php echo $searchRecordTypes[$recordType]; ?></div>
            <a href="<?php echo record_url($record, 'show'); ?>"><?php echo $searchText['title'] ? $searchText['title'] : '[Unknown]'; ?></a>
        </div>
    </div>
    <?php endforeach; ?>
    
    <div class="browse-header">
        <?php echo pagination_links(); ?>
    </div>
</div>
<?php else: ?>
<div id="no-results">
    <p><?php echo __('Your query returned no results.');?></p>
</div>
<?php endif; ?>
<?php echo foot(); ?>
