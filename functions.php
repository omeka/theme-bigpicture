<?php
function bigpicture_featured_html() {
    $html = '';
    $recordTypes = ['Exhibit', 'Collection', 'Item'];
    $slideCount = 1;

    foreach ($recordTypes as $recordType) { 
        if (get_theme_option('display_featured_' . $recordType) == '1') {
            $html .= display_records($recordType, 0, 'common/featured.php', ['slideCount' => $slideCount]);
            $slideCount++;
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
