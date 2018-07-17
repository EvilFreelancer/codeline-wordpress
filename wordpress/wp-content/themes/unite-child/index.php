<?php get_header(); ?>

<div class="row">
    <div class="col-sm-8 blog-main">
        <?php
        $args = array('post_type' => 'films', 'posts_per_page' => 10);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) {
            $loop->the_post();
            ?>
            <div class="blog-post">
                <?php
                get_template_part('content', 'films');
                ?>
            </div>
            <?php
        }
        ?>
    </div>
    <aside class="col-md-4 blog-sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>

<?php get_footer(); ?>
