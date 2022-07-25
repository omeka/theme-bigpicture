<?php
function bigpicture_random_featured_records_html($recordType, $featuredRecords, $countStart)
{
    $html = '';
    $i = $countStart;

    if ($featuredRecords) {
        foreach ($featuredRecords as $featuredRecord) {
            $html .= get_view()->partial('common/featured.php', array('recordType' => $recordType, 'featuredRecord' => $featuredRecord, 'slideCount' => $i));
            $i++;
        }
    }
    
    if ($recordType == 'exhibit') {
        $html = apply_filters('exhibit_builder_display_random_featured_exhibit', $html);        
    }

    return $html;
}

function bigpicture_get_random_featured_records($recordType, $num = 0, $hasImage = true)
{
    return get_records($recordType, array('featured' => 1,
                                     'sort_field' => 'random',
                                     'hasImage' => $hasImage), $num);
}

function bigpicture_featured_html() {
    $recordTypes = ['Exhibit', 'Collection', 'Item'];

    $html = '';
    $countStart = 0;
    
    foreach ($recordTypes as $recordType) {
        if ($recordType == 'Exhibit' && !plugin_is_active('ExhibitBuilder')) {
            continue;
        }

        $randomRecords = null;
        $randomRecords = bigpicture_get_random_featured_records($recordType);

        if ((get_theme_option("Display Featured $recordType") !== '0') && ($randomRecords !== null)) {
            $html .= bigpicture_random_featured_records_html(strtolower($recordType), $randomRecords, $countStart);
            $countStart = $countStart + count($randomRecords);
        }
    }
           
    return $html;
}

function bigpicture_sort_files($files = null) {
    $sortedMedia = [];
    $whitelist = ['image/bmp', 'image/gif', 'image/jpeg', 'image/png', 'image/svg+xml', 'video/flv', 'video/x-flv', 'video/mp4', 'video/m4v',
                'video/webm', 'video/wmv', 'video/quicktime', 'application/pdf'];
    $html5videos = [];
    $mediaCount = 0;

    foreach ($files as $media) {
        $mediaType = $media->mime_type;
        if (in_array($mediaType, $whitelist)) {
            $sortedMedia['lightMedia'][$mediaCount]['media'] = $media;
            if (strpos($mediaType,'video') !== false) {
                $html5videos[$mediaCount] = pathinfo($media->filename, PATHINFO_FILENAME);
                $sortedMedia['lightMedia'][$mediaCount]['tracks'] = [];
            }
            $mediaCount++;
        } else {
            $sortedMedia['otherMedia'][] = $media;
        }
    }
    if ((count($html5videos) > 0) && isset($sortedMedia['otherMedia'])) {
        foreach ($html5videos as $fileId => $filename) {
            foreach ($sortedMedia['otherMedia'] as $key => $otherMedia) {
                if ($otherMedia->filename == "$filename.vtt") {
                    $sortedMedia['lightMedia'][$fileId]['tracks'][] = $otherMedia;
                    unset($sortedMedia['otherMedia'][$key]);
                }
            }
        }   
    }

    return $sortedMedia;
}

function bigpicture_output_lightgallery($files = null) {
    $html = '<div id="itemfiles" class="media-list">';
    $mediaCaption = get_theme_option('media_caption');

    foreach ($files as $file) {
        $media = $file['media'];
        $source = (metadata($media, 'uri')) ? metadata($media, 'uri') : metadata($media, 'uri'); 
        $mediaCaptionOptions = [
            'none' => '',
            'title' => 'data-sub-html="' . metadata($media, 'display_title') . '"',
            'description' => 'data-sub-html="'. metadata($media, array('Dublin Core', 'Description')) . '"'
        ];
        $mediaCaptionAttribute = ($mediaCaption) ? $mediaCaptionOptions[$mediaCaption] : '';
        $mediaType = ($media->mime_type == 'video/quicktime') ? 'video/mp4' : $media->mime_type;
        if (strpos($mediaType, 'video') !== false) {
            $videoSrcObject = [
                'source' => [
                    [
                        'src' => $source, 
                        'type' => $mediaType,
                    ]
                ], 
                'attributes' => [
                    'preload' => false, 
                    'playsinline' => true, 
                    'controls' => true,
                ],
            ];
            if (isset($file['tracks'])) {
                foreach ($file['tracks'] as $key => $track) {
                    $label = metadata($track, 'display_title');
                    $srclang = (metadata($track, 'dcterms:language')) ? metadata($track, 'dcterms:language') : '';
                    $type = (metadata($track, 'dcterms:type')) ? metadata($track, 'dcterms:type') : 'captions';
                    $videoSrcObject['tracks'][$key]['src'] = $track->getWebPath();
                    $videoSrcObject['tracks'][$key]['label'] = $label;
                    $videoSrcObject['tracks'][$key]['srclang'] = $srclang;
                    $videoSrcObject['tracks'][$key]['kind'] = $type;
                }
            }
            $videoSrcJson = json_encode($videoSrcObject);
            $videoThumbnail = ($media->hasThumbnail()) ? metadata($media, 'thumbnail_uri') : img('fallback-video.png');
            $html .=  '<div data-video="' . html_escape($videoSrcJson) . '" ' . $mediaCaptionAttribute . 'data-thumb="' . html_escape($videoThumbnail) . '" data-download-url="' . $source . '" class="media resource">';
        } else if ($mediaType == 'application/pdf') {
            $html .=  '<div data-iframe="' . html_escape($source) . '" '. $mediaCaptionAttribute . 'data-src="' . $source . '" data-thumb="' . html_escape(metadata($media, 'thumbnail_uri')) . '" data-download-url="' . $source . '" class="media resource">';
        } else {
            $html .=  '<div data-src="' . $source . '" ' . $mediaCaptionAttribute . 'data-thumb="' . html_escape(metadata($media, 'thumbnail_uri')) . '" data-download-url="' . $source . '" class="media resource">';
        }
        $html .= file_markup($media);
        $html .= '</div>';
    }
    $html .= '</div>';

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
