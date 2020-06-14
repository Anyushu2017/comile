<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv">
<div class="container position-relative">
<h2 class="m-0"><img src="<?php echo $wp_url; ?>/dist/images/mv_copy.png" alt="自分らしく" srcset="<?php echo $wp_url; ?>/dist/images/mv_copy.png 1x, <?php echo $wp_url; ?>/dist/images/mv_copy@2x.png 2x"></h2>
</div>
</section>

<?php get_footer();