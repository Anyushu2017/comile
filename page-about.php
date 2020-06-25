<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv-sub">
<img class="d-md-block d-none" src="<?php echo $wp_url; ?>/dist/images/mv_sub_about_pc.png" alt="写真">
<img class="d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_sub_about_sp.png" alt="写真">
</div>

<section class="sec pb-0">
<div class="container">
<h2 class="ttl-h2">about<span>コミレについて</span></h2>
</div>
<img class="w-100 mb-5" src="<?php echo $wp_url; ?>/dist/images/img_ttl.png" alt="コミレについて">
<div class="container">
<p class="text-center about-p">COMILE とはフランス語からの造語で<br>「自分らしく」という気持ちをこめて名付けました。</p>
</div>
<div class="about__img">
<span><img src="<?php echo $wp_url; ?>/dist/images/icon_dry.png" alt="アイコン"></span>
<img class="d-md-block d-none" src="<?php echo $wp_url; ?>/dist/images/about_pic_pc.png" alt="写真">
<img class="d-md-none" src="<?php echo $wp_url; ?>/dist/images/about_pic_sp.png" alt="写真">
</div>
</section>

<div class="sec about__txt">
<div class="container">
<p class="mb-0 text-center lh-2 about-p">流行は知りながらも追いすぎるのではなく
<br>日々を前向きに楽しむ女性たちに寄り添う
<br>居心地のよいスタイルを
<br>提案していくサロンを目指していきます。
<br>カットはもちろん、技術にこだわり尽くした
<br>カラー・パーマ・縮毛矯正・トリートメント
<br>を駆使し、今のあなたに似合う
<br>最高にナチュラルで上質な
<br>ヘアスタイルを提案していきます。</p>
<img src="<?php echo $wp_url; ?>/dist/images/icon_clip.png" alt="アイコン">
</div>
</div>

<div class="about__foot">
<span></span>
<span></span>
</div>

<?php get_footer();