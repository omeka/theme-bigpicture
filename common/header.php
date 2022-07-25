<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($author = option('author')): ?>
    <meta name="author" content="<?php echo $author; ?>" />
    <?php endif; ?>
    <?php if ($copyright = option('copyright')): ?>
    <meta name="copyright" content="<?php echo $copyright; ?>" />
    <?php endif; ?>
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_file(array('normalize','mmenu','style'));
    queue_css_url('https://fonts.googleapis.com/css?family=Hind|Caudex:400,400i,700,700i');
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php 
    queue_js_file(array('mmenu','bigpicture'), 'js');
    echo head_js(); 
    ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <div id="wrap">
        <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header role="banner">

            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

            <?php echo theme_header_image(); ?>

            <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>
            
            <a href="#" class="search-toggle" aria-label="<?php echo __('Search'); ?>"></a>
            <div id="search-container">
                <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                <?php echo search_form(array('show_advanced' => true, 'form_attributes' => array('role' => 'search', 'class' => 'closed'))); ?>
                <?php else: ?>
                <?php echo search_form(array('form_attributes' => array('role' => 'search', 'class' => 'closed'))); ?>
                <?php endif; ?>
            </div><!-- end search -->

            <a href="#top-nav" class="menu-toggle" aria-label="<?php echo __('Menu'); ?>"></a>
            <nav id="top-nav">
                <?php echo public_nav_main(); ?>
            </nav>

        </header>
        
        <article id="content">
        
            <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
