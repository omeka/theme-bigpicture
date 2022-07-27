<?php
$featuredHtml = bigpicture_featured_html();
if ($featuredHtml !== '') {
    queue_css_url('//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css');
    queue_js_url('//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js');
    queue_js_file(array('slick-home-featured'), 'js');
}
?>

<?php echo head(array('bodyid'=>'home')); ?>

<div id="featured">
    <div id="featured-slides">
        <?php echo bigpicture_featured_html(); ?>
    </div>
    <div id="featured-controls">
        <button type="button" class="slick-pause active" aria-label="<?php echo __("Pause slides"); ?>">
        <button type="button" class="slick-play" aria-label="<?php echo __("Play slides"); ?>">
    </div>
</div>

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
