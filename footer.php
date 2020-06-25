<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->
<!-- フッター -->
<div class="text-center mt-4 d-md-none">
<a href="https://comile.bionly.net/" target="_blank"><img src="<?php echo $wp_url; ?>/dist/images/btn_reserve.png" alt="予約する"></a>
</div>
<footer class="footer py-5">
<a class="footer-cta btn btn-primary d-md-none" href="https://comile.bionly.net/">CMILE<br>ご予約はこちら</a>
<div class="container">
<p class="footer-icon">
  <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
</p>
<p class="footer-tel"><a href="tel:052-253-5426">tel.052-253-5426</a></p>
<p class="footer-address">愛知県名古屋市中区上前津１ー２ー３４
<br>火・水・土・日 １０：００ー１９：００ <br class="d-md-none">木・金 １２：００-２１：００
<br>定休日：毎週月曜日 / 第１・３火曜日 </p>
</div>
</footer>
<p class="socket">©️COMILE. All Rights Reserved.</p>
<!-- フッター終了 -->
<?php wp_footer(); ?>
</body>
</html>