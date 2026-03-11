<?php get_header(); ?>
    <main>
        <section class="news section">
            <div class="news_inner inner">
                <header class="news_header header">
                    <h2><span>-最新情報-</span><br><?php wp_title(''); ?></h2>
                </header>
                    <div class="archive">
                    <div class="archive_category">
                        <h2 class="archive_title">カテゴリー</h2>
                        <ul class="archive_list">
                <?php
                wp_list_categories(array(
                    'title_li' => '',
                ));
                ?>
                        </ul>
                    </div>
                    <div class="archive_yearly">
                        <h2 class="archive_title">年別</h2>
                        <ul class="archive_list">
                <?php
                wp_get_archives(array(
                    'type' => 'yearly',
                    'format' => 'html',
                    'show_post_count' => false
                ));
                ?>
                        </ul>
                    </div>
                </div>
                    <?php if(have_posts()): ?>
                <div class="card_list">
                    <?php while(have_posts()): the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'news'); ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>