<?php
if (!defined('BASE_URL')) {
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
        <img src="upload/logo.png" width="275" alt="Ozmo Motorsport Performance Centre" />
      </a>
      <!-- End Logo -->

      <!-- Topbar -->
      <div class="topbar">
        <ul class="loginbar pull-right">
          <li>
            <i class="fa fa-phone highlight-color"></i>
            <a href="tel:<?php echo PHONE; ?>"><?php echo PHONE; ?> </a>
          </li>
          <li class="hidden-xs topbar-devider"></li>
          <li class="hidden-xs">
            <i class="fa fa-envelope highlight-color"></i>
            <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a>
          </li>
        </ul>
      </div>
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
          <li><a href="about-us">About Us</a></li>
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
