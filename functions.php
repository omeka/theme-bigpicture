<?php
function bigpicture_random_featured($type = null, $num = 5, $hasImage = true)
{
    $html = '';

    $items = get_random_featured_items($num, $hasImage);
    $collections = get_random_featured_collection();

    if ($items) {
        $html = '';
        foreach ($items as $item) {
            $html .= get_view()->partial('items/featured.php', array('item' => $item));
            release_object($item);
        }
    }

    return $html;
}
?>