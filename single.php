<?php
/*
template name: blog
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec">
<div class="container">
<div class="blog-wrap">
<div class="blog-list">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<h2 class="h3 mb-3"><?php the_title(); ?></h2>
<p class="small text-primary mb-5"><?php the_time('Y/m/d'); ?></p>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
</section>
<?php get_footer();