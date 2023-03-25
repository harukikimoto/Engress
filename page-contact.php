<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>
    
    <?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-contact/contact.css">
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

        <?php get_template_part('includes/bread-crumb'); ?>

        <div class="form-wrapper">
            <p>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
            <?php echo do_shortcode( '[contact-form-7 id="2454" title="お問い合わせ"]' ); ?>
        </div>
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>