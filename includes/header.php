    <?php wp_body_open();?>
    <header>
        <div class="navigation">
            <h1 class="logo"><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo (2).png" alt=""></a></img></h1>
            <nav>
                <li><a href="<?php echo esc_url( home_url('/') ); ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url( home_url('news') ); ?>">お知らせ</a></li>
                <li><a href="<?php echo esc_url( home_url('blog') ); ?>">ブログ</a></li>
                <li><a href="<?php echo esc_url( home_url('price') ); ?>">コース・料金</a></li>
            </nav>
        </div>
        <div class="contact-btn-wrapper">
            <div class="contact-btn">
                <div class="contact-btn-inner">
                    <p class="business-hours">平日08:00〜20:00</p>
                    <div class="tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/パス 29.svg" alt="">
                        <p>0123-456-7890</p>
                    </div>
                </div>
                <div class="btn"><a href="<?php echo esc_url( home_url('contact') ); ?>">資料請求</a></div>
                <div class="btn"><a href="<?php echo esc_url( home_url('contact') ); ?>">お問い合わせ</a></div>
            </div>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>