<?php
function bigpicture_random_featured($type = null, $num = 5, $hasImage = true)
{
    $html = '';

    $featured = get_records($type, array('featured' => 1,
                    'sort_field' => 'random',
                    'hasImage' => $hasImage), $num
                );

    $html = '';
    foreach ($featured as $featuredRecord) {
        $type = strtolower($type);
        if ($type !== 'exhibit') {
            $path = $type . 's/featured.php';
        } else {
            $path = 'exhibit-builder/exhibits/featured.php';
        }
        $html .= get_view()->partial($path, array($type => $featuredRecord));
        release_object($item);
    }

    return $html;
}

function bigpicture_featured_html() {
    $html = '';
    if ((get_theme_option('Display Featured Item') !== '0') && (get_random_featured_items())) {
        $html .= bigpicture_random_featured('Item');
    }
    if ((get_theme_option('Display Featured Collection') !== '0') && (get_random_featured_collection())) {
        $html .= bigpicture_random_featured('Collection');
    }

    if ((get_theme_option('Display Featured Exhibit') !== '0')
            && plugin_is_active('ExhibitBuilder')
            && function_exists('exhibit_builder_display_random_featured_exhibit')) {
        $html .= bigpicture_random_featured('Exhibit');
    }
    return $html;
}
?>