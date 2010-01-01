<?php echo $html->css('/social_bookmarks/css/social_bookmarks.css'); ?>
<div class="social-bookmarks">
    <?php
        foreach ($defaults AS $default) {
            if (!isset($bookmarks[$default])) continue;
            $link = str_replace('{url}', urlencode($html->url($layout->node('url'), true)), $bookmarks[$default]['link']);
            $link = str_replace('{title}', $layout->node('title'), $link);
            echo $html->link($html->image('/social_bookmarks/img/'.$bookmarks[$default]['icon'], array('alt' => $bookmarks[$default]['name'])), $link, array('title' => $bookmarks[$default]['name']), null, false);
        }
    ?>
</div>