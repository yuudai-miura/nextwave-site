<?php get_header(); ?>

<main>
    <section class="section">
        <div class="inner">
            <header class=" header">
               <h2><span>-404-</span><br>エラーページ</h2>
            </header>
             <p>お探しのページが見つかりませんでした。</p>
                <p>申し訳ございませんが、<a href="<?php echo home_url( '/' ); ?>" id="error">こちらのリンク</a>からトップページにお戻りください。</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>