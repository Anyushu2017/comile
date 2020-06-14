<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body>

<header class="header">
<div class="container position-relative">
<nav class="navbar navbar-expand-md navbar-light">
<h1 class="navbar-brand"><a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo("name"); ?>"></a></h1>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav w-100 justify-content-center">
<li class="nav-item"><a class="nav-link text-primary" href="<?php echo $home; ?>/">home</a></li>
<li class="nav-item"><a class="nav-link text-primary" href="<?php echo $home; ?>/about/">about</a></li>
<li class="nav-item"><a class="nav-link text-primary" href="<?php echo $home; ?>/menu/">menu</a></li>
<li class="nav-item"><a class="nav-link text-primary" href="<?php echo $home; ?>/blog/">blog</a></li>
<li class="nav-item"><a class="nav-link text-primary" href="<?php echo $home; ?>/staff/">staff</a></li>
<li class="nav-item"><a class="nav-link text-primary" href="<?php echo $home; ?>/access/">access</a></li>
</ul>
</div>
</nav>

<a class="header-reserve" href="https://comile.bionly.net/" target="_blank"><img src="<?php echo $wp_url; ?>/dist/images/btn_reserve.png" alt="予約する"></a>

</div>
</header>

<main>
