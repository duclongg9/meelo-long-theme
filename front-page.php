<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <span class="hero-badge"># Hello, I'm Long</span>
            <h1>
                Kỹ sư hướng Nhật,<br>
                <span>viết về BA, BRSE & hành trình làm dev.</span>
            </h1>
            <p>
                Mình chia sẻ về phân tích nghiệp vụ, cầu nối Nhật – Việt, backend & văn hoá làm việc kiểu Nhật,
                dưới góc nhìn của một người đang đi lại từ đầu.
            </p>

            <div class="hero-actions">
                <a href="#projects" class="btn-primary">Xem các dự án</a>
                <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="btn-ghost">Đọc blog</a>
            </div>
        </div>

        <div class="hero-avatar">
            <div class="hero-blob"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.jpg" alt="Long">
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="section services">
    <div class="container">
        <h2 class="section-title">Mình làm gì?</h2>
        <p class="section-subtitle">
            Một chút về các mảng mình đam mê và thường chia sẻ / nhận job freelance.
        </p>

        <div class="service-grid">
            <div class="service-card service-1">
                <h3>BA & Requirements</h3>
                <p>Phân tích & viết tài liệu yêu cầu theo cách rõ ràng, thực tế, dễ hiểu cho team dev.</p>
            </div>
            <div class="service-card service-2">
                <h3>BRSE Japan</h3>
                <p>Làm cầu nối giữa khách hàng Nhật và team, giúp hai bên hiểu đúng & giảm hiểu lầm.</p>
            </div>
            <div class="service-card service-3">
                <h3>Backend & System Design</h3>
                <p>Thiết kế API, database, flow xử lý & đảm bảo hệ thống dễ mở rộng.</p>
            </div>
            <div class="service-card service-4">
                <h3>Sharing & Mentoring</h3>
                <p>Viết blog, chia sẻ hành trình học lại từ đầu & giúp người mới dễ hình dung hơn.</p>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="section projects">
    <div class="container">
        <h2 class="section-title">Một vài dự án tiêu biểu</h2>
        <p class="section-subtitle">
            Những thứ mình đang hoặc đã xây dựng, như cách luyện tập suy nghĩ về sản phẩm & hệ thống.
        </p>

        <div class="project-grid">
            <article class="project-card">
                <h3>MMO Trader Market</h3>
                <p>Nền tảng mua bán tài khoản game với ví điện tử, KYC, escrow & xử lý tranh chấp.</p>
                <span class="project-tag">Java · MySQL · Servlet</span>
            </article>

            <article class="project-card">
                <h3>Kanji Learner App</h3>
                <p>Ứng dụng Android học Kanji N5–N1, offline, tập trung vào trải nghiệm & dashboard học tập.</p>
                <span class="project-tag">Android · Kotlin</span>
            </article>

            <article class="project-card">
                <h3>DUYLONG TECHCOM</h3>
                <p>Hệ thống bán máy tính, gợi ý cấu hình & quản lý bảo hành, định hướng dùng AI hỗ trợ.</p>
                <span class="project-tag">Spring Boot (dự kiến)</span>
            </article>
        </div>
    </div>
</section>

<!-- STATS / QUICK INFO -->
<section class="section stats">
    <div class="container stats-grid">
        <div class="stat-item">
            <span class="stat-number">3+</span>
            <span class="stat-label">Năm tự học & làm dev</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">2</span>
            <span class="stat-label">Dự án học & làm về Nhật</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">∞</span>
            <span class="stat-label">Lần refactor cuộc đời</span>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="section process">
    <div class="container">
        <h2 class="section-title">Cách mình thường làm việc</h2>
        <div class="process-grid">
            <div class="process-step">
                <span class="process-step-number">01</span>
                <h3>Hiểu vấn đề</h3>
                <p>Trao đổi bối cảnh, requirement, constraint & kỳ vọng kết quả.</p>
            </div>
            <div class="process-step">
                <span class="process-step-number">02</span>
                <h3>Phác flow & kiến trúc</h3>
                <p>Vẽ flow, use case, xác định entity, API & cách đo lường.</p>
            </div>
            <div class="process-step">
                <span class="process-step-number">03</span>
                <h3>Xây & refine</h3>
                <p>Bắt tay vào code, test & cải thiện dần (Kaizen).</p>
            </div>
        </div>
    </div>
</section>

<!-- BLOG PREVIEW -->
<section class="section home-blog">
    <div class="container">
        <h2 class="section-title">Bài viết mới nhất</h2>
        <div class="blog-grid">
            <?php
            $home_posts = new WP_Query([
                'posts_per_page' => 3,
            ]);
            if ($home_posts->have_posts()) :
                while ($home_posts->have_posts()) : $home_posts->the_post(); ?>
                    <article class="blog-card">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
                            <span class="blog-card-meta">
                                <?php echo get_the_date('d/m/Y'); ?>
                            </span>
                        </a>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Chưa có bài nào, sắp tới sẽ có nhiều nội dung về BA, BRSE & dev Nhật ở đây.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="section cta">
    <div class="container cta-inner">
        <div>
            <h2>Muốn theo dõi hành trình & bài viết mới?</h2>
            <p>Hãy lưu lại trang này, hoặc kết nối với mình qua mạng xã hội / email.</p>
        </div>
        <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="btn-primary">
            Đọc blog
        </a>
    </div>
</section>

<?php get_footer(); ?>