<?php get_header(); ?>
<main>

    <section class="news section">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post_wrap'); ?>>
                    <div class="news_inner inner">

                        <header class="post_header header">
                            <h2><?php the_title(); ?></h2>
                        </header>
                        <div class="post_list">
                            <div>
                                <?php the_content(); ?>
                            </div>
                        </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="post_footer">
            <div class="post_inner inner">
                <header class="post_header ">
                    <h2>その他-news</h2>
                </header>
                <div class="footer_list">
                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'post__not_in'   => array(get_the_ID()),
                    );
                    $recent_query = new WP_Query($args);
                    if ($recent_query->have_posts()) :
                        while ($recent_query->have_posts()) : $recent_query->the_post();
                    ?>
                            <a href="<?php the_permalink(); ?>" class="footer_item card_item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="path/to/no-image.jpg" alt="No Image"> <?php endif; ?>

                                <div class="news_list">
                                    <p><?php the_title(); ?></p>
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                </div>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>