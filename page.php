<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while ( have_posts() ): the_post(); ?>

<main>
    <section class="section">
    <div class="inner">
        <header class="header">
            <h2><span><?php echo strtoupper($post->post_name); ?></span><br><?php the_title(); ?></h2>
        </header>
            <div class="page">
                <div class="page_list">
                    <?php the_content(); ?>
                </div>
            </div>
    </div>
    </section>
</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>