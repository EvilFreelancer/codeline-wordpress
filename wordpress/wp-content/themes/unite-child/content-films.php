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
?>
<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="<?php the_permalink() ?>">
            <?php the_title() ?>
        </a>
    </h2>
    <p class="blog-post-meta"><?php the_date('Y-m-d H:i:s') ?></p>
    <?php the_excerpt() ?>
    <span class="label label-default"><?= $tax_country[0]->name ?></span>
    <span class="label label-default"><?= $tax_genre[0]->name ?></span>
    <span class="label label-default">$<?= $ticket_price ?></span>
    <span class="label label-default"><?= $release_date ?></span>
</div>
