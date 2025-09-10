<?php

/* 基本設定 */
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');


/* Contact Form 7で自動挿入されるPタグ、brタグを削除 */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}


/* wordpressバージョン情報の削除 */
remove_action("wp_head", "wp_generator");


/* 投稿者一覧ページを自動で生成されないようにする */
function disable_author_archive()
{
  if (preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
    wp_redirect(esc_url(home_url('/404.php')));
    exit;
  }
}
add_action('init', 'disable_author_archive');

/* テンプレートパスの取得 */
function temp_path()
{
  echo esc_url(get_template_directory_uri());
}

/* assetsパスの取得 */
function assets_path()
{
  echo esc_url(get_template_directory_uri() . '/assets');
}

/* imgパスの取得 */
function img_path()
{
  echo esc_url(get_template_directory_uri() . '/assets/images');
}


/* blogの最大投稿数 */
function custom_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    // カスタム投稿のスラッグを記述
    if (is_post_type_archive('blog')) {
      // 表示件数を指定
      $query->set('posts_per_page', 6);
    }
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');


// テーマ設定を初期化
add_action('after_setup_theme', 'my_setup');


/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
  // Google Fonts
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700;900&display=swap',
    array(),
    null
  );

  // Swiper CSS
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
    array(),
    '8.0.0'
  );

  // Font Awesome
  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
    array(),
    '6.4.0'
  );

  // カスタムスタイルシート
  wp_enqueue_style(
    'custom-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    '1.0.0'
  );

  // jQuery
  wp_enqueue_script(
    'jquery',
    'https://code.jquery.com/jquery-3.6.0.js',
    array(),
    '3.6.0',
    true
  );

  // Swiper JS
  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
    array('jquery'), // jQueryを依存関係として追加
    '8.0.0',
    true
  );

  // GSAP
  wp_enqueue_script(
    'gsap',
    'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
    array(),
    '3.12.5',
    true
  );

  // ScrollTrigger
  wp_enqueue_script(
    'scrolltrigger',
    'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
    array('gsap'),
    '3.12.5',
    true
  );

  // gsap.js
  wp_enqueue_script(
    'custom-gsap',
    get_template_directory_uri() . '/assets/js/gsap.js',
    array('jquery', 'gsap'),
    '1.0.0',
    true
  );

  // カスタムスクリプト
  wp_enqueue_script(
    'custom-script',
    get_template_directory_uri() . '/assets/js/script.js',
    array('jquery', 'gsap'),
    '1.0.0',
    true
  );

  // Yubinbango
  wp_enqueue_script(
    'yubinbango',
    'https://yubinbango.github.io/yubinbango/yubinbango.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'my_script_init');


// コンタクトフォーム ひらがなバリデーション
function custom_hiragana_validation_filter($result, $tag)
{
  if ('your-hiragana-field' == $tag->name) {
    $value = isset($_POST[$tag->name]) ? trim(wp_unslash(strtr((string)$_POST[$tag->name], "\n", " "))) : '';

    if (!preg_match("/^[ぁ-ん]+$/u", $value)) {
      $result->invalidate($tag, "ひらがなで入力してください。");
    }
  }

  return $result;
}
