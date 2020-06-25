<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv">
<div class="container position-relative">
<h2 class="m-0"><img src="<?php echo $wp_url; ?>/dist/images/mv_copy.png" alt="自分らしく" srcset="<?php echo $wp_url; ?>/dist/images/mv_copy.png 1x, <?php echo $wp_url; ?>/dist/images/mv_copy@2x.png 2x"></h2>
</div>
</section>

<div class="sec">
<div class="container">
<div class="text-center">
<a class="btn btn-primary" href="">2020.1.8 NEW OPEN.<br>名古屋 上前津</a>
</div>
<div class="text-center mt-4 d-md-none">
<a href="https://comile.bionly.net/" target="_blank"><img src="<?php echo $wp_url; ?>/dist/images/btn_reserve.png" alt="予約する"></a>
</div>
</div>
</div>

<section id="home-news" class="sec">
<div class="container">
<h2 class="text-center">salon news</h2>
<ul class="news__list">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'news',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
$data = mb_strimwidth(strip_tags(get_the_content()), 0, 300, '…');
?>
<li class="news__list__inner">
<a href="<?php echo $p; ?>">
<h3 class="news__list__inner-ttl"><?php echo $t; ?></h3>
<span class="news__list__inner-time"><?php the_time('Y/m/d'); ?></span>
<p class="news__list__inner-data"><?php echo $data; ?></p>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
</section>

<section class="sec bg-info">
<div class="container">
<h2 class="ttl-h2">Instagram</h2>
<div class="instagram-feed">
<?php echo do_shortcode('[instagram-feed num=4 cols=4 showfollow=false]'); ?>
</div>
<div class="mt-5 text-center">
<a class="btn btn-primary" href="">follow</a>
</div>
</div>
</section>

<section class="sec">
<div class="container">
<h2 class="ttl-h2">Recommended</h2>
<ul class="home-recommend">
<?php
$args = [
    'posts_per_page' => 3,
    'category_name' => 'recommended',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
?>
<li>
<h3><a href="<?php echo $p; ?>"><?php echo $t; ?></a></h3>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
</section>

<section class="sec pt-0">
<div class="container">
<h2 class="ttl-h2">salon blog</h2>
<ul class="home-slonblog">
<?php
$args = [
    'posts_per_page' => 3,
    'category' => '-1',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = '';
}
$content = get_the_content();
?>
<li>
<?php if ($thumbnail != ''): ?>
<figure>
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</figure>
<?php endif; ?>
<h3><?php echo $t; ?></h3>
<p class="time"><?php the_time('Y/n/j'); ?></p>
<p><?php
if (mb_strlen($content, 'UTF-8') > 150) {
    $content= mb_substr(strip_tags($content), 0, 150, 'UTF-8');
    echo $content.'…';
} else {
    echo strip_tags($content);
}
?><a href="<?php echo $p; ?>">続きを見る</a></p>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
</section>

<section class="about">
<span class="about-bg"></span>
<span class="about-bg"></span>
<div class="container">
<div class="about__inner">
<h2 class="ttl-h2">COMILE ?</h2>
<p>COMILE とはフランス語からの造語で『自分らしく』という気持ちをこめて名付けました。
<br>流行は知りながらも追いすぎるのではなく日々を前向きに楽しむ
<br>女性たちに寄り添う居心地のよいスタイルを提案していくサロンを目指していきます。</p>
<div class="mt-4 text-center">
<a class="btn btn-primary" href="">サロン紹介</a>
</div>
</div>
</div>
</section>

<section class="staff">
<div class="container">

<div class="staff__list">
<a href="" target="_blank">
<img src="<?php echo $wp_url; ?>/dist/images/staff_1.png" alt="">
</a>
<a href="" target="_blank">
<img src="<?php echo $wp_url; ?>/dist/images/staff_2.png" alt="">
</a>
</div>

<div class="mt-5 text-center">
<a class="btn btn-primary" href="">スタッフ紹介</a>
</div>
</div>
</section>

<?php get_footer();
