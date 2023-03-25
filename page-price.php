<?php
/*
Template Name: 料金体系ページ
*/
?>
<!DOCTYPE html>
<html><?php language_attributes(); ?>
<head>

    <?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-price/price.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

    <?php get_template_part('includes/header'); ?>

    <main>
        <div class="main-visual">
            <h2 class="ttl">コース・料金</h2>
        </div>

        <?php get_template_part('includes/bread-crumb'); ?>

        <section class="fee-structure">
            <div class="wrapper">
                <h3 class="ttl">料金体系</h3>
                <div class="fee-structure-content">
                    <p class="blue-category">入会金 39,800円</p>
                    <p class="blue-category">月額費用</p>
                </div>
                <p>Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
            </div><!--wrapper-->
        </section><!--fee-structure-->

        <section class="fee-table">
            <div class="wrapper">
                <h3 class="ttl">料金表</h3>
                <div class="fee-table-inner">
                    <div class="plan other-plan">
                        <h4>基礎プラン</h4>
                        <div class="plan-detail">
                            <h5><?php
                            $price = number_format(get_field('basic-plan'));
                            echo $price . '円〜';
                            ?></h5>
                            <p>*月額（税抜価格）</p>
                            <ul>
                                <li>カリキュラム作成</li>
                                <li>TOEFL学習サポート</li>
                                <li>週一回のビデオMTG</li>
                            </ul>
                        </div>
                    </div>
                    <div class="plan other-plan">
                        <h4>演習プラン</h4>
                        <div class="plan-detail">
                            <h5><?php
                            $price = number_format(get_field('practice-plan'));
                            echo $price . '円〜';
                            ?></h5>
                            <p>*月額（税抜価格）</p>
                            <ul>
                                <li>カリキュラム作成</li>
                                <li>TOEFL学習サポート</li>
                                <li>週一回のビデオMTG</li>
                                <li>月二回の模試（解説付き）</li>
                            </ul>
                        </div>
                    </div>
                    <div class="plan recommend-plan">
                        <h4><span>おすすめ</span>
                            <span>志望校対策プラン</span></h4>
                        <div class="plan-detail">
                            <h5><?php
                            $price = number_format(get_field('recommend-plan'));
                            echo $price . '円〜';
                            ?></h5>
                            <p>*月額（税抜価格）</p>
                            <ul>
                                <li>カリキュラム作成</li>
                                <li>TOEFL学習サポート</li>
                                <li>週一回のビデオMTG</li>
                                <li>月二回の模試（解説付き）</li>
                                <li>週一の英語面接対策</li>
                            </ul>
                        </div>
                    </div>
                    <div class="plan other-plan">
                        <h4>フレックスプラン</h4>
                        <div class="plan-detail">
                            <h5><?php
                            $price = number_format(get_field('flex-plan'));
                            echo $price . '円〜';
                            ?></h5>
                            <p>*月額（税抜価格）</p>
                            <ul>
                                <li class="none-before">＊別途ご相談ください</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--wrapper-->
        </section><!--fee-table-->
    </main>
    
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>