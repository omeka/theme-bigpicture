<?php
function bigpicture_random_featured_records_html($recordType, $featuredRecords)
{
    $html = '';

    if ($featuredRecords) {
        foreach ($featuredRecords as $featuredRecord) {
            $html .= get_view()->partial('common/featured.php', array('recordType' => $recordType, 'featuredRecord' => $featuredRecord));
        }
    }
    
    if ($recordType == 'exhibit') {
        $html = apply_filters('exhibit_builder_display_random_featured_exhibit', $html);        
    }

    return $html;
}

function bigpicture_get_random_featured_records($record, $num = 0, $hasImage = true)
{
    return get_records($record, array('featured' => 1,
                                     'sort_field' => 'random',
                                     'hasImage' => $hasImage), $num);
}

function bigpicture_featured_html() {
    $recordTypes = ['Exhibit', 'Collection', 'Item'];

    $html = '';
    
    foreach ($recordTypes as $recordType) {
        if ($recordType == 'Exhibit' && !plugin_is_active('ExhibitBuilder')) {
            continue;
        }

        $randomRecords = null;
        $randomRecords = bigpicture_get_random_featured_records($recordType);

        if ((get_theme_option("Display Featured $recordType") !== '0') && ($randomRecords !== null)) {
            $html .= bigpicture_random_featured_records_html(strtolower($recordType), $randomRecords);
        }
    }
           
    return $html;
}

function bigpicture_output_text_track_file($textFile) {
    $kind = metadata($textFile, array('Dublin Core', 'Type'));
    $language = metadata($textFile, array('Dublin Core', 'Language'));
    $label = metadata($textFile, array('Dublin Core', 'Title'));

    if (!$kind) {
        $kind = 'subtitles';
    }

    if (!$language) {
        $language = get_html_lang();
    }

    $trackSrc = html_escape($textFile->getWebPath('original'));

    if ($label) {
        $labelPart = ' label="' . $label . '"';
    } else {
        $labelPart = '';
    }

    $track = '<track kind="' . $kind . '" src="' . $trackSrc . '" srclang="' . $language . '"' . $labelPart . '>';

    return $track;
}

function bigpicture_check_for_tracks($files) {
    foreach ($files as $file) {
        if ($file->getExtension() == "vtt") {
            return true;
        }
    }
    return false;
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
