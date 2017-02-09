<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>
<h1><?php echo $title; ?> <?php echo __('(%s total)', $total_results); ?></h1>
<?php if (count($exhibits) > 0): ?>

<div class="browse-header">
<nav class="navigation secondary-nav">
    <?php echo nav(array(
        array(
            'label' => __('Browse All'),
            'uri' => url('exhibits')
        ),
        array(
            'label' => __('Browse by Tag'),
            'uri' => url('exhibits/tags')
        )
    )); ?>
</nav>

<?php echo pagination_links(); ?>
</div>

<div class="records">
<?php $exhibitCount = 0; ?>
<?php foreach (loop('exhibit') as $exhibit): ?>
    <?php $exhibitCount++; ?>
    <?php $exhibitImage = $exhibit->getFile(); ?>
    <?php $imageUrl = (isset($exhibitImage)) ? file_display_url($exhibitImage, 'fullsize') : ''; ?>
    <div class="exhibit record" style="background-image:url(<?php echo $imageUrl; ?>)">
        <div class="record-meta">
            <h2><?php echo link_to_exhibit(); ?></h2>
        </div>
    </div>
<?php endforeach; ?>
</div>

<?php echo pagination_links(); ?>

<?php else: ?>
<p><?php echo __('There are no exhibits available yet.'); ?></p>
<?php endif; ?>

<?php echo foot(); ?>
