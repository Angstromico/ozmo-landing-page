<?php
if (!defined('SITE_URL')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}
function render_contact_topbar($contacts) {
    echo '<div class="topbar" style="flex-direction: column; gap: 5px; display: flex; margin-left: 55%;">';
    
    foreach ($contacts as $contact) {
        $phone = $contact['phone'] ?? '';
        $email = $contact['email'] ?? '';
        
        echo '<ul class="loginbar pull-right">';
        
        if ($phone) {
            echo '<li style="font-size: 9px;">
                    <i class="fa fa-phone highlight-color"></i>
                    <a href="tel:' . htmlspecialchars($phone) . '">' . htmlspecialchars($phone) . '</a>
                  </li>';
        }
        
        if ($phone && $email) {
            echo '<li class="hidden-xs topbar-devider"></li>';
        }
        
        if ($email) {
            echo '<li class="hidden-xs" style="font-size: 9px;">
                    <i class="fa fa-envelope highlight-color"></i>
                    <a href="mailto:' . htmlspecialchars($email) . '" style="font-size: 9px;">' . htmlspecialchars($email) . '</a>
                  </li>';
        }
        
        echo '</ul>';
    }
    
    echo '</div>';
}

/**
 * Renders the main navigation menu from a simple associative array.
 * @param array $items The navigation items (Title => URL).
 */
function render_nav_menu($items) {
    // NOTE: In a real environment, this logic should check $_SERVER['REQUEST_URI']
    // against the $url to dynamically set the 'active' class on the current page.
    $current_path = '/'; 

    foreach ($items as $title => $url) {
        // Simple check: if URL is '/', mark as active.
        $isActive = ($url == $current_path || ($title == 'Home' && $current_path == '/')) ? 'active' : '';
        
        echo '<li class="' . htmlspecialchars($isActive) . '">';
        echo '  <a href="' . htmlspecialchars($url) . '">' . htmlspecialchars($title) . '</a>';
        echo '</li>';
    }
}

?>

<body class="dark">
<div class="wrapper">
  <!--=== Header ===-->
  <div class="header">
    <div class="container">
      <!-- Logo -->
      <a class="logo" href="/">
        <img src="upload/logo.png" width="275" alt="<?php echo BUSINESS_NAME; ?>" />
      </a>
      <!-- End Logo -->

      <!-- Topbar -->
       <?php
        render_contact_topbar([
          [
            'phone' => PHONE_NUMBER1,
            'email' => EMAIL_ADDRESS1
          ],
          [
            'phone' => PHONE_NUMBER2,
            'email' => EMAIL_ADDRESS2
          ],
          [
            'phone' => PHONE_NUMBER3,
            'email' => EMAIL_ADDRESS3
          ]
        ]);
      ?>
      <!-- End Topbar -->

      <!-- Toggle get grouped for better mobile display -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-bars"></span>
      </button>
      <!-- End Toggle -->
    </div>
    <!--/end container-->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
      <div class="container">
        <ul class="nav navbar-nav">
          <?php
            // Renders the links defined in NAV_ITEMS dynamically
            render_nav_menu(NAV_ITEMS); 
          ?>
        </ul>
      </div>
      <!--/end container-->
    </div>
    <!--/navbar-collapse-->
  </div>
  <!--=== End Header ===-->
