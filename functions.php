<?php
function bigpicture_random_featured($type = null, $num = 5, $hasImage = true)
{
    $html = '';

    $featured = get_records(strtoupper($type), array('featured' => 1,
                    'sort_field' => 'random',
                    'hasImage' => $hasImage), $num
                );

    $html = '';
    foreach ($featured as $featuredRecord) {
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
?>