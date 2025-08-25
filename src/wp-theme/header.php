<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />

  <?php wp_head(); ?>
</head>

<body>

  <?php include("link.php") ?>

  <header class="header layout-header">
    <div class="header__inner">
      <?php $tag = is_front_page() ? 'h1' : 'h2'; ?>
      <<?php echo $tag; ?> class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="LOGO" width="" height="" loading="lazy" decoding="async">
        </a>
      </<?php echo $tag; ?>>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a href="#">top</a>
          </li>
          <li class="header__nav-item">
            <a href="#">about</a>
          </li>
          <li class="header__nav-item">
            <a href="#">works</a>
          </li>
          <li class="header__nav-item header__nav-item--contact">
            <a href="<?php echo $contact; ?>" target="_blank" rel="noopener">contact</a>
          </li>
        </ul>
      </nav>
      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="header__drawer js-drawer">
        <nav class="header__drawer-nav">
          <ul class="header__drawer-list">
            <li class="header__drawer-item">
              <a href="#">top</a>
            </li>
            <li class="header__drawer-item">
              <a href="#">about</a>
            </li>
            <li class="header__drawer-item">
              <a href="#">works</a>
            </li>
            <li class="header__drawer-item header__drawer-item--contact">
              <a href="<?php echo $contact; ?>" target="_blank" rel="noopener">contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>