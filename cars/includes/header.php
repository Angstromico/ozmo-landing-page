<?php
if (!defined('BASE_URL')) {
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
          <li class="active"><a href="/">Home</a></li>
          <li><a href="pricing">Pricing</a></li>
          <li><a href="<?php echo EXTERNAL_URL; ?>">About Us</a></li>
          <li class="dropdown">
            <a href="services">Services</a>
            <ul class="dropdown-menu">
              <li><a href="services/car-van-4x4">Car / Van / 4x4</a></li>
              <li><a href="services/truck-hgv-lorry">Truck / HGV / Lorry</a></li>
              <li><a href="services/tractor-agricultural">Tractor / Agricultural</a></li>
              <li><a href="services/motorcycle-tuning">Motorcycle</a></li>
              <li><a href="services/boat-marine">Boat / Marine</a></li>
              <li><a href="services/bike-car-rolling-road">Bike &amp; Car Rolling Road</a></li>
              <li><a href="services/mileage-correction">Mileage Correction</a></li>
            </ul>
          </li>
          <li><a href="vehicle-statistics">Vehicle Search</a></li>
          <li class="dropdown">
            <a href="carbon-cleaning">Carbon Cleaning</a>
            <ul class="dropdown-menu">
              <li><a href="carbon-cleaning/engine-carbon-cleaning">Engine Carbon Cleaning</a></li>
              <li><a href="carbon-cleaning/fuel-system-clean">Fuel System Clean</a></li>
              <li><a href="carbon-cleaning/dpf-particulate-filter-clean">DPF Diesel Particulate Filter Cleaning</a></li>
            </ul>
          </li>
          <li><a href="contact">Contact Us </a></li>
        </ul>
      </div>
      <!--/end container-->
    </div>
    <!--/navbar-collapse-->
  </div>
  <!--=== End Header ===-->
