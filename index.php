<?php
$featuredHtml = bigpicture_featured_html();
if ($featuredHtml !== '') {
    queue_css_url('//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css');
    queue_js_url('//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js');
    queue_js_string('
        jQuery(document).ready(function(){
          jQuery("#featured").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            centerMode: true,
            fade: true,
            dots: false
          });
        });
    ');
}
?>

<?php echo head(array('bodyid'=>'home')); ?>

<div id="featured"><?php echo bigpicture_featured_html(); ?></div>

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
