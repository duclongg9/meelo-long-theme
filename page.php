<?php get_header(); ?>

<section class="section basic-page">
    <div class="container basic-page-inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class('basic-article'); ?> >
                <h1 class="basic-title"><?php the_title(); ?></h1>
                <div class="basic-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
