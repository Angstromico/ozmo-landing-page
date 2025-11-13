<?php
if (!defined('SITE_URL')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}
?>

<body class="dark">
<div class="wrapper">
  <!--=== Header ===-->
  <div class="header">
    <div class="container">
      <!-- Logo -->
      <a class="logo" href="/">
        <img src="upload/logo.webp" width="275" alt="<?php echo BUSINESS_NAME; ?>" />
      </a>
      <!-- End Logo -->

      <!-- Topbar -->
      <div class="topbar" style="flex-direction: column; gap: 5px; display: flex; margin-left: 55%;">
        <?php
        $contacts = [
          ['phone' => PHONE_NUMBER1, 'email' => EMAIL_ADDRESS1],
          // ['phone' => PHONE_NUMBER2, 'email' => EMAIL_ADDRESS2],
          // ['phone' => PHONE_NUMBER3, 'email' => EMAIL_ADDRESS3]
        ];

        foreach ($contacts as $contact):
          $phone = $contact['phone'] ?? '';
          $email = $contact['email'] ?? '';
        ?>
          <ul class="loginbar pull-right">
            <?php if ($phone): ?>
              <li>
                <i class="fa fa-phone highlight-color"></i>
                <a href="tel:<?= htmlspecialchars($phone) ?>"><?= htmlspecialchars($phone) ?></a>
              </li>
            <?php endif; ?>

            <?php if ($phone && $email): ?>
              <li class="hidden-xs topbar-devider"></li>
            <?php endif; ?>

            <?php if ($email): ?>
              <li class="hidden-xs">
                <i class="fa fa-envelope highlight-color"></i>
                <a href="mailto:<?= htmlspecialchars($email) ?>">
                  <?= htmlspecialchars($email) ?>
                </a>
              </li>
            <?php endif; ?>
          </ul>
        <?php endforeach; ?>
      </div>
      <!-- End Topbar -->

      <!-- Toggle (mobile button) -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-bars"></span>
      </button>
      <!-- End Toggle -->
    </div>
    <!--/end container-->

    <!-- Navigation Menu -->
    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
      <div class="container">
        <ul class="nav navbar-nav">
  <?php
  $current_path = '/';

  foreach (NAV_ITEMS as $title => $data):
    $url = $data['url'] ?? '#';
    $isActive = ($url == $current_path || ($title == 'Home' && $current_path == '/')) ? 'active' : '';
    $hasChildren = !empty($data['children']);
  ?>
    <li class="<?= $isActive ?><?= $hasChildren ? ' dropdown' : '' ?>">
      <a href="<?= htmlspecialchars($url) ?>"><?= htmlspecialchars($title) ?></a>

      <?php if ($hasChildren): ?>
        <ul class="dropdown-menu">
          <?php foreach ($data['children'] as $childTitle => $childUrl): ?>
            <li><a href="<?= htmlspecialchars($childUrl) ?>"><?= htmlspecialchars($childTitle) ?></a></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>

      </div>
    </div>
    <!--/navbar-collapse-->
  </div>
  <!--=== End Header ===-->
