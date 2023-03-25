<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>
    
    <?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-contact-end/contact-end.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

    <?php get_template_part('includes/header'); ?>

    <main>
        <div class="bread-crumbs">
            <div class="wrapper">
                <?php echo do_shortcode("[breadcrumb]"); ?>
            </div>
        </div>

        <p>お問い合わせいただきありがとうございます<br>
            内容を確認した後、担当者よりご連絡いたします</p>
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="contact-link">ホームへ戻る</a>
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>