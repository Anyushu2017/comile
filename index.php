<?php
/*
template name: blog
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section>
<div class="container">
<div class="blog-wrap">
<div class="blog-list">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
$data = get_the_content();
if (has_post_thumbnail()) {
  $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
  $thumbnail = '';
}
?>
<article class="blog__main">
<h2 class="blog__main-ttl"><?php echo $t; ?></h2>
<span class="blog__main-time"><?php the_time('Y/n/j'); ?></span>
<?php if ($thumbnail != ''): ?>
<figure class="blog__main-img">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</figure>
<?php endif; ?>
<div class="blog__main-content">
<?php echo $data; ?>
</div>
</article>
<?php endwhile; endif; ?>
<?php wp_pagenavi(); ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
</section>
<?php get_footer();