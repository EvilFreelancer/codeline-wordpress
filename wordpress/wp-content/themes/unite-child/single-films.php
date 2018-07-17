<?php
/*
Template Name: Single film
Template Post Type: single-film
*/
get_header();

$post = get_post();
$custom = get_post_custom($post->ID);
?>
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php echo $post->post_date ?></p>
                <?php echo $post->post_content ?>
            </div>
        </div>
        <aside class="col-md-4 blog-sidebar">
            <?php get_sidebar('film'); ?>
        </aside>
    </div>
<?php
get_footer();
