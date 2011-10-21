<?php echo $this->Html->css('/social_bookmarks/css/social_bookmarks.css'); ?>
<div class="social-bookmarks">
    <?php
        foreach ($defaults AS $default) {
            if (!isset($bookmarks[$default])) continue;
            $link = str_replace('{url}', urlencode($this->Html->url($this->Layout->node('url'), true)), $bookmarks[$default]['link']);
            $link = str_replace('{title}', $this->Layout->node('title'), $link);
            echo $this->Html->link($this->Html->image('/social_bookmarks/img/'.$bookmarks[$default]['icon'], array('alt' => $bookmarks[$default]['name'])), $link, array(
                'title' => $bookmarks[$default]['name'],
                'escape' => false,
            ));
        }
    ?>
</div>