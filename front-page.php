<?php get_header(); ?>
<main>
    <section class="mv">
        <div class="mv_inner">
            <div class="mv_text">
                <div class="mv_item">
                    <h1 class="mv_title">作って終わらないWEBサイトを。<br>更新しやすさまで、デザインする。</h1>
                    <h3>更新したいのに、できないままになっていませんか？</h3>
                </div>
            </div>

            <?php
            $args = [
                'post_type' => 'main-visual',
                'posts_per_page' => -1,
            ];
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):
            ?>
                <div class="mv_pic">
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        $pic = get_field('pic');
                    ?>
                        <div class="slider"><img src="<?php echo esc_url($pic['url']); ?>" alt=""></div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <div class="mv_button">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn">無料で相談する</a>
                <a href="<?php echo home_url('/service/'); ?>" class="btn">サービスを見る</a>
            </div>

        </div>
    </section>

    <?php if (have_posts()): ?>

        <section class="news section">
            <div class="news_inner inner">
                <header class="news_header header">
                    <h2><span>-news-</span><br>お知らせ</h2>
                    <a href="<?php echo home_url('/category/wordpress/'); ?>" class="click">お知らせ一覧を見る</a>
                </header>
                <div class="card_list">
                    <?php while (have_posts()): the_post(); ?>
                        <?php get_template_part('template-parts/loop',  'news'); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="reason section">
        <div class="reason_inner inner">
            <header class="reason_header header">
                <h2>私たちが選ばれた理由</h2>
                <a href="<?php echo home_url('/company/'); ?>" class="click">私たちについて</a>
            </header>
            <p>私たちは「つくること」そのものではなく、成果につながるWebサイトをつくることを大切にしています。丁寧なヒアリングを通して課題を明確にし、公開後の運用まで見据えた設計をご提案します。</p>
        </div>
    </section>

    <section class="service section">
        <div class="service_inner inner">
            <header class="service_header header">
                <h2><span>-service-</span><br>サービス概要</h2>
                <a href="<?php echo home_url('/service/'); ?>" class="click">サービス概要を見る</a>
            </header>
            <div class="card_list">
                <div class="service_item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pc.jpeg" alt="" class="service_pic">
                    <div class="service_list">
                        <h3>コーポレートサイト</h3>
                        <p>企業・店舗・サービスの魅力を正しく伝えるための オリジナルWordPressサイトを制作します。</p>
                    </div>
                </div>
                <div class="service_item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/reload.jpeg" alt="" class="service_pic">
                    <div class="service_list">
                        <h3>Webサイトリニューアル</h3>
                        <p>現在のWebサイトが抱える課題を整理し、デザイン・構造・運用面を改善するリニューアルを行います。</p>
                    </div>
                </div>
                <div class="service_item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/security_mark.jpeg" alt="" class="service_pic">
                    <div class="service_list">
                        <h3>Web運用・保守サポート</h3>
                        <p>Webサイト公開後も安心して運用できるよう、継続的なサポートを行います。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>