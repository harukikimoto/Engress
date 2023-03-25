<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>

    <?php get_header(); ?>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-blog-detail/blog-detail.css">
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
                            <a href="<?php echo esc_url( home_url('blog') ); ?>">ブログ</a>
                            <span class="separator">></span>
                        </li>
                        <li>
                        <?php $category = get_the_category(); ?>
                            <a href="<?php echo get_category_link($category[0] -> term_id); ?>">
                                <?php echo $category[0]->name ;?>
                            </a>
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

            <div class="article-wrapper">
                <article>
                    <?php get_template_part('includes/blue-category'); ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="time-wrapper">
                        <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
                        <p>
                            <time><?php the_time('Y-m-d'); ?></time>
                        </p>
                    </div>
                    <div class="blog-img-wrapper">
                    <?php get_template_part('includes/thumbnail'); ?>
                    </div>
                    <div><?php the_content(); ?></div>
                </article><!--article-->

                <section class="blog">
                    <h3 class="ttl">おすすめの記事</h3>
                    <?php
                    $post_id = get_the_ID();
                    
                    $recommend_args = [
                        'post_type' => 'post', 
                        'posts_per_page' => '3', 
                        'tag_id' => '151',
                        'post__not_in' => [$post_id]
                    ];
                    $custom_posts = get_posts($recommend_args);

                    if ($custom_posts) : foreach ( $custom_posts as $post ): setup_postdata($post); ?>

                    <div class="blog-content">
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-img-wrapper">
                                <?php get_template_part('includes/thumbnail'); ?>
                                <?php get_template_part('includes/blue-category'); ?>
                            </div>
                        </a>
                        
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-detail">
                                <p>
                                    <time><?php the_time('Y-m-d'); ?></time>
                                </p>
                                <h4 class="blog-ttl"><?php the_title(); ?></h4>
                            </div>
                        </a>
                    </div>

                    <?php endforeach; ?>
                    <?php else: ?>
                        <p>おすすめの記事がありません</p>
                        <?php
                        endif;
                        wp_reset_postdata(); ?>
                    
                </section><!--blog-->
            </div><!--article-wrapper-->
            <aside class="sidebar">
                <div class="related-blog">
                    <h3 class="blue-category">関連記事</h3>

                    <?php
                    $post_id = get_the_ID(); 
                    $categories = get_the_category($post_id);
                    $cat_ids = []; 

                    foreach ($categories as $category) :
                    array_push($cat_ids, $category->term_id); 
                    endforeach;

                    $related_args = [
                    'post_type' => 'post',
                    'posts_per_page' => '3', 
                    'category__in' => $cat_ids, 
                    'post__not_in' => [$post_id] 
                    ];

                    $related_cats_query = get_posts($related_args);
                    ?>

                    
                    <?php if ($related_cats_query) : foreach ($related_cats_query as $post) : setup_postdata($post); ?>

                    <div class="related-article-content">
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-img-wrapper">
                            <?php get_template_part('includes/thumbnail'); ?>
                            </div>
                            <h4 class="blog-ttl"><?php the_title(); ?></h4>
                        </a>
                    </div>

                    <?php endforeach; ?>
                    <?php else : ?>
                        <p>関連記事はありません。</p>
                    <?php endif;?>
                </div><!--related-blog-->
                <div class="category">
                    <h3 class="blue-category">カテゴリー</h3>
                        <ul>
                            <?php query_posts('posts_per_page=2'); ?>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li><?php the_category('、'); ?></li>
                            <?php endwhile; ?>
                            <?php else: ?>
                                <p>記事がありません</p>
                            <?php endif; ?>
                        </ul>
                </div><!--category-->
            </aside><!--sidebar-->

        </div><!--wrapper-->
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>

</body>
</html>