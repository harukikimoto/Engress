<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>

    <?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-news-detail/news-detail.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

    <?php get_template_part('includes/header'); ?>

    
    <main>
    <div class="bread-crumbs">
            <div class="wrapper">
                <div class="breadcrumb-container">
                    <ol>
                        <li>
                            <a href="<?php echo esc_url( home_url('/') ); ?>">ホーム</a>
                            <span class="separator">></span>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url('news') ); ?>">お知らせ</a>
                            <span class="separator">></span>
                        </li>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span class="separator">></span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <h3><?php the_title(); ?></h3>
            <p>
                <time><?php the_time('Y-m-d'); ?></time>
            </p>
            <div class="content"><?php the_content(); ?></div>
        </div>
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>