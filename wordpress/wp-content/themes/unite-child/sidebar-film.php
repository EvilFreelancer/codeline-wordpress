<?php
$post = get_post();
$fields = get_post_custom($post->ID);

// Price of ticket
$ticket_price = $fields['ticket_price'][0];

// Price of ticket
$release_date = $fields['release_date'][0];
$release_date = DateTime::createFromFormat('Ymd', $release_date);
$release_date = $release_date->format('d/m/Y');

// Taxonomies
$tax_year = get_the_terms($post, 'year');
$tax_genre = get_the_terms($post, 'genre');
$tax_actors = get_the_terms($post, 'actors');
$tax_country = get_the_terms($post, 'country');

// Recent posts
$recent_posts = wp_get_recent_posts(['numberposts' => 5, 'post_type' => 'films', 'post_status' => 'publish'], OBJECT);
?>
<div class="sidebar-module sidebar-module-inset">
    <h4>About this film</h4>
    <p>Ticker Price: <strong>$<?= $ticket_price ?></strong></p>
    <p>Release Date: <strong><?= $release_date ?></strong></p>
</div>

<div class="sidebar-module">
    <h4>Year</h4>
    <ul>
        <?php
        foreach ($tax_year as $item) {
            echo "<li>$item->name</li>";
        }
        ?>
    </ul>

    <h4>Genre</h4>
    <ul>
        <?php
        foreach ($tax_genre as $item) {
            echo "<li>$item->name</li>";
        }
        ?>
    </ul>

    <h4>Country</h4>
    <ul>
        <?php
        foreach ($tax_country as $item) {
            echo "<li>$item->name</li>";
        }
        ?>
    </ul>

    <h4>Actors</h4>
    <ul>
        <?php
        foreach ($tax_actors as $item) {
            echo "<li>$item->name</li>";
        }
        ?>
    </ul>

</div>

<div class="sidebar-module sidebar-module-inset">
    <h4>Recent 5 films:</h4>
    <ul>
        <?php
        foreach ($recent_posts as $post) {
            echo "<li>$post->post_title</li>";
        }
        ?>
    </ul>
</div>
