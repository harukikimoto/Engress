<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>
    
    <?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-blog/blog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

    <?php get_template_part('includes/header'); ?>

    <main>
        <div class="main-visual">
            <h2 class="ttl">ブログ</h2>
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
                            <a href="<?php echo esc_url( home_url('blog') ); ?>">ブログ</a>
                            <span class="separator">></span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="blog-archive">
            <div class="wrapper">
                <h3 class="ttl">
                    <?php if(is_category()): ?>
                        <?php $category = get_the_category(); ?>
                        <?php echo $category[0]->name ;?>一覧
                    <?php else: ?>
                        新着一覧
                    <?php endif; ?>
                </h3>


                <?php 
                $list_cnt = 10; //表示させたい件数
                $sticky = get_option('sticky_posts'); //先頭固定の記事
                if ( !empty($sticky) ) $list_cnt -= count($sticky); //もし先頭固定の記事があったら、その件数を「$list_cnt」の値から引く
                if ( count($sticky) > 0 ):
                    $the_query = get_posts(array(
                        'posts_per_page'=>10,
                        'post__in' => $sticky,
                    ));?>
                    <?php foreach ($the_query as $post) : setup_postdata($post); ?>

                <div class="blog-content">
                    <a href="<?php the_permalink() ?>">
                        <div class="blog-img-wrapper">
                            <?php get_template_part('includes/thumbnail'); ?>
                            <?php get_template_part('includes/blue-category'); ?>
                        </div>
                    </a>

                    <a href="<?php the_permalink() ?>">
                        <div class="blog-detail">
                            <p>
                                <time><?php the_time('Y-m-d'); ?></time>
                            </p>
                            <h4 class="blog-ttl"><?php the_title(); ?></h4>
                            <?php get_template_part('includes/blog-txt'); ?>
                        </div>
                    </a>
                </div>

                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if ( $list_cnt > 0 ):
                    $the_query = get_posts(array(
                        'posts_per_page' => $list_cnt,
                        'ignore_sticky_posts' => 1,
                        'post__not_in' => get_option('sticky_posts'),
                        'paged' => get_query_var('paged')
                    ));?>
                    <?php foreach ($the_query as $post) : setup_postdata($post); ?> 

                    <div class="blog-content">
                        <a href="<?php the_permalink() ?>">
                            <div class="blog-img-wrapper">
                                <?php get_template_part('includes/thumbnail'); ?>
                                <?php get_template_part('includes/blue-category'); ?>
                            </div>
                        </a>

                        <a href="<?php the_permalink() ?>">
                            <div class="blog-detail">
                                <p>
                                    <time><?php the_time('Y-m-d'); ?></time>
                                </p>
                                <h4 class="blog-ttl"><?php the_title(); ?></h4>
                                <?php get_template_part('includes/blog-txt'); ?>
                            </div>
                        </a>
                    </div>
                            
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>


                    <?php get_template_part('includes/page-nation'); ?>
                
            </div><!--wrapper-->
        </div><!--blog-archive-->
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>