<?php
// Recent posts
$recent_posts = wp_get_recent_posts(['numberposts' => 5, 'post_type' => 'films', 'post_status' => 'publish'], OBJECT);
?>

<div class="sidebar-module sidebar-module-inset">
    <h4>Recent 5 films:</h4>
    <ul>
        <?php
        foreach ($recent_posts as $post) {
            ?>
            <li>
                <a href="<?= get_permalink($post->ID) ?>">
                    <?= $post->post_title ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
