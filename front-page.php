<?php
/*
Template Name: トップページ
*/
?>
<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>
    <?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    
    <?php get_template_part('includes/header'); ?>

    <main>
        <section class="contact">
            <h2 class="ttl">TOEFL対策はEngress</h2>
            <p>日本人へのTOEFL指導歴豊かな講師陣の<br>
                コーチング型TOEFLスクール</p>
            <p class="round-btn"><a href="<?php echo esc_url( home_url('contact') ); ?>">資料請求</a></p>
            <a href="<?php echo esc_url( home_url('contact') ); ?>" class="contact-link">お問い合わせ</a>
        </section><!--contact-->

        <section class="about">
            <div class="wrapper">
                <h3 class="ttl">TOEFL学習で<br class="sp-only">こんな悩みありませんか？</h3>
                <div class="about-inner">
                    <p><span>勉強の習慣が</span><br class="pc-only">身についていない</p>
                    <p>勉強しているはず<br class="pc-only">なのに<span>点数が伸びない</span></p>
                    <p><span>正しい勉強方法</span>が<br class="pc-only">わからない</p>
                </div>
                <div class="about-content-wrapper">
                    <div class="about-content">
                        <h3 class="ttl">Engressは<br><span>TOEFLに特化した<br class="sp-only">スクール</span>です。</h3>
                        <p>完全オーダーメイドで、<br class="sp-only">１人１人の悩みに合わせた最適な指導で<br> 
                            TOEFLの苦手分野を克服します。</p>
                    </div>
                </div>
            </div><!--wrapper-->
        </section><!--about-->

        <section class="strength">
            <div class="wrapper">
                <h3 class="ttl">TOEFL対策に特化した<br class="sp-only">Engress3つの強み</h3>
                <div class="strength-content">
                    <div class="strength-detail">
                        <div class="feature">特長1</div>
                        <h4>TOEFLに最適化された<br>
                            無駄のないカリキュラム</h4>
                        <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
                    </div>
                    <div class="strength-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/feature01.png" alt="">
                    </div>
                </div>
                <div class="strength-content">
                    <div class="strength-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/feature02.png" alt="">
                    </div>
                    <div class="strength-detail">
                        <div class="feature">特長2</div>
                        <h4>日本人指導歴10年以上の<br> 
                            経験豊富な講師陣</h4>
                        <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
                    </div>
                </div>
                <div class="strength-content">
                    <div class="strength-detail">
                        <div class="feature">特長3</div>
                        <h4>平均3ヶ月でTOEFL iBT20点アップ</h4>
                        <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
                    </div>
                    <div class="strength-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/feature03.png" alt="">
                    </div>
                </div>

                <div class="lower-strength-content">
                    <h4>Engressの料金プランはこちら</h4>
                    <p><a href="">料金を見てみる</a></p>
                </div>
            </div><!--wrapper-->
        </section><!--strength-->

        <section class="success">
            <div class="wrapper">
                <h3 class="ttl">TOEFL成功事例</h3>
                <div class="success-inner">
                    <div class="success-content">
                        <P class="txt"><?php the_field('outcome-txt1'); ?></P>
                        <div class="success-img-bg">
                            <div class="success-img-wrapper blog-img-wrapper">
                                <img src="<?php the_field('success-img1'); ?>" alt="">
                            </div>
                        </div>
                        <div class="name">
                            <p><?php the_field('position1'); ?></p>
                            <p><?php the_field('name1'); ?></p>
                        </div>
                        <p><?php the_field('outcome1'); ?></p>
                    </div>
                    <div class="success-content">
                        <P class="txt"><?php the_field('outcome-txt2'); ?></P>
                        <div class="success-img-bg">
                            <div class="success-img-wrapper blog-img-wrapper">
                                <img src="<?php the_field('success-img2'); ?>" alt="">
                            </div>
                        </div>
                        <div class="name">
                            <p><?php the_field('position2'); ?></p>
                            <p><?php the_field('name2'); ?></p>
                        </div>
                        <p><?php the_field('outcome2'); ?></p>
                    </div>
                    <div class="success-content">
                        <P class="txt"><?php the_field('outcome-txt3'); ?></P>
                        <div class="success-img-bg">
                            <div class="success-img-wrapper blog-img-wrapper">
                                <img src="<?php the_field('success-img3'); ?>" alt="">
                            </div>
                        </div>
                        <div class="name">
                            <p><?php the_field('position3'); ?></p>
                            <p><?php the_field('name3'); ?></p>
                        </div>
                        <p><?php the_field('outcome3'); ?></p>
                    </div>
                </div> 
            </div><!--wrapper-->
        </section><!--success-->

        <section class="flow">
            <div class="wrapper">
                <h3 class="ttl">ご利用の流れ</h3>
                <div class="flow-content">
                    <p>01</p>
                    <div class="flow-content-inner">
                        <h4>お問い合わせ</h4>
                        <p>まずはフォームまたはお電話からお申し込みください。</p>
                    </div>
                </div>
                <div class="flow-content">
                    <p>02</p>
                    <div class="flow-content-inner">
                        <h4>ヒアリング</h4>
                        <p>現在の学習状況やTOEFLのスコア、目標のスコアをお聞きします。</p>
                    </div>
                </div>
                <div class="flow-content">
                    <p>03</p>
                    <div class="flow-content-inner">
                        <h4>学習プランの提供</h4>
                        <p>目標達成のために最適な学習プランをご提案致します。</p>
                    </div>
                </div>
                <div class="flow-content">
                    <p>04</p>
                    <div class="flow-content-inner">
                        <h4>ご入会</h4>
                        <p>お申込み完了後、レッスンがスタートします。</p>
                    </div>
                </div>
            </div><!--wrapper-->
        </section><!--flow-->

        <section class="question">
            <div class="wrapper">
                <h3 class="ttl">よくある質問</h3>
                <div class="question-content">
                    <h4 class="open">Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
                    <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                </div>
                <div class="question-content">
                    <h4>教材はオリジナルのものを使用しているのでしょうか？</h4>
                    <p>学習するレベルに適したオリジナルのものを提供しています。</p>
                </div>
                <div class="question-content">
                    <h4>講師に日本人はいますか？</h4>
                    <p>在籍しております。プランに応じて講師を選ぶことができます。</p>
                </div>
                <div class="question-content">
                    <h4>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
                    <p>TOEFL以外のサポートも手厚く行っております。</p>
                </div>
            </div><!--wrapper-->
        </section><!--question-->

        <div class="wrapper post">
            <section class="blog">
                <h3 class="ttl">ブログ</h3>

                <?php
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => 3 
                );
                
                $my_posts = get_posts($args);
                ?>
                
                <?php if(have_posts()) : foreach ($my_posts as $post) : setup_postdata($post); ?>
                
                <div class="blog-content">
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog-img-wrapper">
                        <?php get_template_part('includes/thumbnail'); ?>
                        <?php get_template_part('includes/blue-category'); ?>
                        </div>
                    </a>

                    <a href="<?php the_permalink(); ?>">
                        <div class="blog-detail">
                            <h4 class="blog-ttl"><?php the_title(); ?></h4>
                            <p>
                                <time><?php the_time('Y-m-d'); ?></time>
                            </p>
                        </div>
                    </a>
                </div>
                
                <?php endforeach; ?>
                <?php else : ?>
                    <p>お知らせはありません。</p>
                <?php
                endif;
                wp_reset_postdata(); ?>
            
            </section><!--blog-->

            <section class="news">
                <h3 class="ttl">お知らせ</h3>
                <?php
                $args = array(
                    'post_type' => 'news', 
                    'posts_per_page' => 3 
                );
                
                $my_posts = get_posts($args);
                ?>
                
                <?php if(have_posts()) : foreach ($my_posts as $post) : setup_postdata($post); ?>
                
                <a href="<?php the_permalink(); ?>">
                    <p>
                        <time><?php the_time('Y-m-d'); ?></time>
                    </p>
                    <h4 class="news-ttl"><?php the_title(); ?></h4>
                </a>
                
                <?php endforeach; ?>
                <?php else : ?>
                    <p>お知らせはありません。</p>
                <?php
                endif;
                wp_reset_postdata(); ?>
            
            </section><!--news-->
        </div>
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>