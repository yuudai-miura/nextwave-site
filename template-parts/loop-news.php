<div id="post-<?php the_ID(); ?>" <?php post_class('cardList_item'); ?>>
    <a href="<?php the_permalink(); ?>" class="news_item card_item">
        <div class="news_img">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="No Image">
            <?php endif; ?>
        </div>
        <div class="news_list">
            <p><?php the_title(); ?></p>
            <time datetime="<?php the_time('Y-m-d'); ?>">
                <?php the_time('Y年m月d日'); ?>
            </time>
        </div>
    </a>
</div>
