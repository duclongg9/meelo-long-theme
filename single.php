<?php get_header(); ?>

<section class="section single-post">
    <div class="container single-inner">
        <article <?php post_class('single-article'); ?> >
            <header class="single-header">
                <div class="single-meta">
                    <span><?php echo get_the_date('d/m/Y'); ?></span>
                    <?php
                    $cats = get_the_category();
                    if ($cats) {
                        echo ' · ' . esc_html($cats[0]->name);
                    }
                    ?>
                </div>
                <h1 class="single-title"><?php the_title(); ?></h1>
            </header>

            <div class="single-content">
                <?php the_content(); ?>
            </div>

            <footer class="single-footer">
                <div class="single-tags">
                    <?php the_tags('', '', ''); ?>
                </div>
            </footer>
        </article>

        <aside class="single-sidebar">
            <div class="sidebar-card">
                <h3>Về Long</h3>
                <p>Kỹ sư hướng Nhật, thích chia sẻ về BA, BRSE, backend và hành trình tự học.</p>
            </div>
            <div class="sidebar-card">
                <h3>Bài mới</h3>
                <ul class="sidebar-list">
                    <?php
                    $recent = new WP_Query([
                        'posts_per_page' => 5,
                        'post__not_in'   => [get_the_ID()],
                    ]);
                    if ($recent->have_posts()) :
                        while ($recent->have_posts()) : $recent->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </aside>
    </div>
</section>

<?php get_footer(); ?>
