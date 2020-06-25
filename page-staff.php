<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv-sub">
<img class="d-md-block d-none" src="<?php echo $wp_url; ?>/dist/images/mv_sub_staff_pc.png" alt="写真">
<img class="d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_sub_staff_sp.png" alt="写真">
</div>

<section class="sec">
<div class="container">
<h2 class="ttl-h2">staff<span>スタッフ紹介</span></h2>

<div class="staff__wrap">

<div class="staff__wrap__inner">
  <a class="staff__wrap__inner-img" href="" target="_blank">
    <img src="<?php echo $wp_url; ?>/dist/images/staff_img_1.png" alt="服部">
    <i class="fab fa-instagram"></i>
  </a>
  <div class="staff__wrap__inner-info">
  <p class="staff__wrap__inner-manage">stylist</p>
  <p class="staff__wrap__inner-name">服部 洋季</p>
  <p class="staff__wrap__inner-furi">Hiroki Hattori</p>
  </div>
  <div class="staff__wrap__inner-desc">
    <p class="staff__wrap__inner-year">スタイリスト歴　15年</p>
    <div class="staff__wrap__inner__messe">
      <p class="staff__wrap__inner__messe-ttl">メッセージ</p>
      <p class="staff__wrap__inner__messe-txt">自然体でフィットし、ダメージレス、ノーストレスなヘアスタイルを提案しています。髪の毛に艶がでない、まとまらない、パサついて広がる…そんな悩みをクリアにしフィットするヘアスタイルが得意です。髪の悩みは是非ご相談ください。</p>
    </div>
  </div>
</div>

<div class="staff__wrap__inner">
  <a class="staff__wrap__inner-img" href="" target="_blank">
    <img src="<?php echo $wp_url; ?>/dist/images/staff_img_2.png" alt="大橋">
    <i class="fab fa-instagram"></i>
  </a>
  <div class="staff__wrap__inner-info">
  <p class="staff__wrap__inner-manage">stylist</p>
  <p class="staff__wrap__inner-name">大橋 裕子</p>
  <p class="staff__wrap__inner-furi">Hiroko Ohashi</p>
  </div>
  <div class="staff__wrap__inner-desc">
    <p class="staff__wrap__inner-year">スタイリスト歴　15年</p>
    <div class="staff__wrap__inner__messe">
      <p class="staff__wrap__inner__messe-ttl">メッセージ</p>
      <p class="staff__wrap__inner__messe-txt">忙しい毎日のお手入れを少しでもラクに、心地よく、そしてちょっとだけ良い気分でいられるようなヘアをご提案したいと思っています。<br><br>現在育休中です。復帰時期はまたお知らせ致します。</p>
    </div>
  </div>
</div>

<div class="staff__wrap__inner">
  <a class="staff__wrap__inner-img" href="" target="_blank">
    <img src="<?php echo $wp_url; ?>/dist/images/staff_img_3.png" alt="野中 琉磨">
    <i class="fab fa-instagram"></i>
  </a>
  <div class="staff__wrap__inner-info">
  <p class="staff__wrap__inner-manage">assistant</p>
  <p class="staff__wrap__inner-name">野中 琉磨</p>
  <p class="staff__wrap__inner-furi">Ryuma Nonaka</p>
  </div>
  <div class="staff__wrap__inner-desc">
    <p class="staff__wrap__inner-year">アシスタント</p>
    <div class="staff__wrap__inner__messe">
      <p class="staff__wrap__inner__messe-ttl">メッセージ</p>
      <p class="staff__wrap__inner__messe-txt">お客様が自分らしくいられる「美」を追求させていただき、外見だけでなく内面からも繋がっていけるよう全力でお手伝いさせていただきます。<br><br>ヘッドスパ、頭皮の環境改善については僕にご相談ください。</p>
    </div>
  </div>
</div>

</div>

</div>
</section>
<?php get_footer();