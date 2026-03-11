<footer>
    <div class="footer_btn">
          <div class="footer_content footer_cta_item">
              <h2>Webサイト制作のご相談はこちら。</h2>
              <a href="<?php echo home_url('/contact/'); ?>" class="btn">無料で相談する</a>
          </div>
          <div class="footer_entry footer_cta_item">
              <h2>エントリーはこちら。</h2>
              <a href="<?php echo home_url('/recruit/') ?>" class="btn">エントリーする</a>
          </div>
      </div>
      <div class="footer_bar"></div>
    <div class="footer_inner">
      <a href="<?php echo home_url('/'); ?>" class="footer_logo">
          <h3>nextwave web studio</h3>
          <p>
            作って終わらないWEBサイトを。<br>更新しやすさまで、デザインする。
          </p>
      </a>
        <nav class="footer_nav">
          <ul>
              <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
               <li><a href="<?php echo home_url('/news/'); ?>">お知らせ</li>
              <li><a href="<?php echo home_url('/company/'); ?>">会社概要</a></li>
              <li><a href="<?php echo home_url('/service/'); ?>">サービス</a></li>
              <li><a href="<?php echo home_url('/recruit/') ?>">採用情報</a></li>
          </ul>
        </nav>
      <div class="footer_bottom">
        <ul>
          <li >会社情報</li>
          <li>〒160-0005</li>
          <li>東京都新宿区愛住町22第三山田ビル</li>
          <li>TEL:12-3456-7890</li>
        </ul>
      </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>