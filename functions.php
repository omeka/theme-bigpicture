<?php
function bigpicture_featured_html() {
    $html = '';
    $recordTypes = ['Collection', 'Item'];
    if (plugin_is_active('ExhibitBuilder')) {
        array_unshift($recordTypes, 'Exhibit');
    }

    foreach ($recordTypes as $recordType) {
        if (get_theme_option('display_featured_' . $recordType) == '1') {
            $html .= display_records($recordType, 0, 'common/featured.php');
        }
    }
           
    return $html;
}

function bigpicture_get_square_thumbnail_url($file, $view) {
    if ($file->hasThumbnail()) {
        $squareThumbnail = file_display_url($file, 'square_thumbnail');
    } else {
        $mimeType = $file->mime_type;
        $fileType = (strpos($mimeType, 'image')) ? 'image' : 'video';
        $squareThumbnail = $view->baseUrl() . '/application/views/scripts/images/fallback-' . $fileType . '.png';
    }
    return $squareThumbnail;
}
?>
