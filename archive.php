<?php get_header(); ?>

<section class="section blog-index">
    <div class="container">
        <h1 class="section-title">
            <?php the_archive_title(); ?>
        </h1>
        <p class="section-subtitle">
            <?php the_archive_description(); ?>
        </p>

        <div class="blog-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class('blog-card'); ?> >
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 24); ?></p>
                        <span class="blog-card-meta">
                            <?php echo get_the_date('d/m/Y'); ?>
                        </span>
                    </a>
                </article>
            <?php endwhile; else : ?>
                <p>Không tìm thấy bài nào.</p>
            <?php endif; ?>
        </div>

        <div class="pagination">
            <?php
            the_posts_pagination([
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
            ]);
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
