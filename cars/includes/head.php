<?php
if (!defined('BASE_URL')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}
?>
<head>
  <base href="<?php echo BASE_URL; ?>" />
  <title><?php echo SITE_TITLE; ?></title>
  <meta name="keywords" content="" />
  <meta name="description" content="<?php echo META_DESCRIPTION; ?>" />

  <!-- Meta -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- Web Fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin" />

  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- CSS Header and Footer -->
  <link rel="stylesheet" href="assets/css/headers/header-default.css" />
  <link rel="stylesheet" href="assets/css/footers/footer-v1.css" />

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/plugins/animate.css" />
  <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css" />
  <!-- <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" /> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css" />
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css" />

  <!-- CSS Theme -->
  <link rel="stylesheet" href="assets/css/theme-skins/dark.css" />
  <link rel="stylesheet" href="assets/css/theme-colors/red.css" />
  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css" />
  <meta name="google-site-verification" content="e_t9UURXEyLTxbspfwbjKXlDzjY597rRD-akP-38naw" />

  <!-- Facebook Pixel Code -->
  <script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js"></script>
  <script async src="https://connect.facebook.net/en_US/fbevents.js"></script>
  <script>
    !(function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s);
    })(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2340207876081442');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=2340207876081442&ev=PageView&noscript=1" />
  </noscript>
</head>
