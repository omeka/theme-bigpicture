<?php
$featuredHtml = bigpicture_featured_html();
$playSpeed = get_theme_option('homepage_play_speed');
if ($featuredHtml !== '') {
    queue_css_url('//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css');
    queue_js_url('//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js');
    queue_js_file(array('slick-home-featured'), 'js');
}
?>

<?php echo head(array('bodyid'=>'home')); ?>

<?php if (bigpicture_check_for_featured_records()): ?>
<div id="featured" data-listbox-title="<?php echo __('Featured'); ?>" data-play-speed="<?php echo ($playSpeed) ? $playSpeed : '5000'; ?>">
    <div id="featured-controls">
        <div class="sr-only slick-status active" role="status" tabindex="-1"><?php echo __('Featured carousel slider is playing.'); ?></div>
        <div class="sr-only slick-status" role="status" tabindex="-1"><?php echo __('Featured carousel slider is stopped.'); ?></div>
        <button type="button" class="slick-pause active" aria-label="<?php echo __("Pause featured slides"); ?>"></button>
        <button type="button" class="slick-play" aria-label="<?php echo __("Play featured slides"); ?>"></button>
    </div>
    <div id="featured-slides">
        <?php echo bigpicture_featured_html(); ?>
    </div>
</div>
<?php endif; ?>

<?php if (get_theme_option('Homepage Text')): ?>
<div id="intro">
    <?php echo get_theme_option('Homepage Text'); ?>
</div>
<?php endif; ?>

<?php
$recentItems = get_theme_option('Homepage Recent Items');
if ($recentItems === null || $recentItems === ''):
    $recentItems = 20;
else:
    $recentItems = (int) $recentItems;
endif;
if ($recentItems):
?>
<div id="recent-items" class="records">
    <?php echo recent_items($recentItems); ?>
</div><!--end recent-items -->

<p class="view-items-link"><a href="<?php echo html_escape(url('items')); ?>"><?php echo __('View All Items'); ?></a></p>
<?php endif; ?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>
