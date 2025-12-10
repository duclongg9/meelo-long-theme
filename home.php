<?php get_header(); ?>

<section class="section blog-index">
    <div class="container">
        <h1 class="section-title">Blog</h1>
        <p class="section-subtitle">
            Nơi mình lưu lại các ghi chép về BA, BRSE, dev, câu chuyện cá nhân & những thứ mình đang học.
        </p>

        <div class="blog-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class('blog-card'); ?> >
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 24); ?></p>
                        <span class="blog-card-meta">
                            <?php echo get_the_date('d/m/Y'); ?>
                            <?php
                            $cats = get_the_category();
                            if ($cats) {
                                echo ' · ' . esc_html($cats[0]->name);
                            }
                            ?>
                        </span>
                    </a>
                </article>
            <?php endwhile; else : ?>
                <p>Chưa có bài viết nào. Thử quay lại sau nhé.</p>
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
