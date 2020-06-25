<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<aside class="blog-aside">
<?php if (is_active_sidebar('side-bar')) {
    dynamic_sidebar('side-bar');
} ?>
</aside>
