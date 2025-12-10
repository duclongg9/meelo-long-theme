<?php get_header(); ?>
<div class="container basic-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class('basic-article'); ?>>
            <h1 class="basic-title"><?php the_title(); ?></h1>
            <div class="basic-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>