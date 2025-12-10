<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                Longneee<span>.</span>
            </a>
        </div>

        <nav class="main-nav">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-list',
                ]);
            } else {
                echo '<ul class="nav-list">';
                wp_list_pages([
                    'title_li' => '',
                ]);
                echo '</ul>';
            }
            ?>
        </nav>
    </div>
</header>

<main class="site-main">