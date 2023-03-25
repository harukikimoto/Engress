<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>

    <?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-news/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

    <?php get_template_part('includes/header'); ?>

    <main>

        <div class="main-visual">
            <h2 class="ttl">コース・料金</h2>
        </div>

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
                    </ol>
                </div>
            </div>
        </div>

        <div class="news-archive">
            <div class="wrapper">
                <h3 class="ttl">お知らせ一覧</h3>

                
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="news-content">
                        <a href="<?php the_permalink() ?>">
                            <p><time><?php the_time('Y-m-d'); ?></time></p>
                            <h4 class="news-ttl"><?php the_title(); ?></h4>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <h2>お知らせがありません</h2>
                <?php endif; ?>

                <?php get_template_part('includes/page-nation'); ?>

            </div><!--wrapper-->
        </div><!--news-article-->
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>