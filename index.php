<?php echo head(array('bodyid'=>'home')); ?>

<div id="featured">
    <?php if ((get_theme_option('Display Featured Item') !== '0') && (get_random_featured_items())): ?>
        <?php echo bigpicture_random_featured('item'); ?>
    <?php endif; ?>

    <?php if ((get_theme_option('Display Featured Collection') !== '0') && (get_random_featured_collection())): ?>
        <?php echo random_featured_collection(); ?>
    <?php endif; ?>

    <?php if ((get_theme_option('Display Featured Exhibit') !== '0')
            && plugin_is_active('ExhibitBuilder')
            && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
        <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
    <?php endif; ?>
</div>

<div id="intro">
    <?php if (get_theme_option('Homepage Text')): ?>
    <?php echo get_theme_option('Homepage Text'); ?>
    <?php endif; ?>
</div>

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
