<?php
require_once __DIR__ . '/../config-tp15.php';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';

function render_locations($locations) {
    echo '<h2 style="text-align: center;">Our Locations</h2>';
    echo '<div class="row margin-bottom-30 animated fadeInDown">';
    
    foreach ($locations as $loc) {
        $icon = $loc['icon'] ?? 'fa-map-marker';
        $name = $loc['name'] ?? 'Location';
        $address = $loc['address'] ?? '';
        $link = $loc['link'] ?? '#';
        
        echo '<a class="col-md-4" href="' . htmlspecialchars($link) . '" target="_blank">';
        echo '  <div class="service">';
        echo '    <i class="fa ' . htmlspecialchars($icon) . ' service-icon"></i>';
        echo '    <div class="desc">';
        echo '      <h4>' . htmlspecialchars($name) . '</h4>';
        echo '      <p>' . nl2br(htmlspecialchars($address)) . '</p>';
        echo '    </div>';
        echo '  </div>';
        echo '</a>';
    }
    
    echo '</div>';
}

?>

<!--=== Slider ===-->
<div class="slider-inner">
  <div id="da-slider" class="da-slider" style="background-position: 11650% 0%">
    <div class="da-slide da-slide-toleft">
      <h2>
        <i>TOP CLASS</i> <br />
        <i>TUNING SERVICES</i> <br />
        <i>FOR ANY VEHICLE</i>
      </h2>
      <p>
        <i>We specialise in optimising</i> <br />
        <i>your vehicle to get the best</i> <br />
        <i>performance or economy.</i>
      </p>
      <div class="da-img">
        <img class="img-responsive" src="assets/plugins/parallax-slider/img/1.png" alt="" />
      </div>
    </div>
    <div class="da-slide da-slide-toleft">
      <h2>
        <i>WE SUPPORT 99%</i> <br />
        <i>OF VEHICLE MAKES</i> <br />
        <i>AND MODELS</i>
      </h2>
      <p>
        <i>From BMWs all the way to IVECO</i> <br />
        <i>trucks, we have a solution for you.</i>
      </p>
      <div class="da-img">
        <img class="img-responsive" src="assets/plugins/parallax-slider/img/2.png" alt="" />
      </div>
    </div>
    <div class="da-slide da-slide-fromright da-slide-current">
      <h2>
        <i>2WD DYNO</i> <br />
        <i>SO WE CAN</i> <br />
        <i> MEASURE PERFORMANCE</i>
      </h2>
      <p>
        <i>We can measure all manners of</i> <br />
        <i>engine performance with our dyno!</i>
      </p>
      <div class="da-img">
        <img src="assets/plugins/parallax-slider/img/4.png" alt="image01" />
      </div>
    </div>
    <div class="da-arrows">
      <span class="da-arrows-prev"></span>
      <span class="da-arrows-next"></span>
    </div>
    <nav class="da-dots">
      <span class=""></span><span class=""></span><span class="da-dots-current"></span>
    </nav>
  </div>
</div>
<!--/slider-->
<!--=== End Slider ===-->

<!--=== Content Part ===-->
<div class="container content-sm">
  <!-- Directions Blocks -->
   <?php
    render_locations([
      [
        'icon'    => 'fa-tachometer',
        'name'    => LOCATION_NAME1,
        'address' => "24 Stourbridge Road,\nBromsgrove,\nWorcestershire,\nB61 0AE",
        'link'    => MAP_LINK1
      ],
      [
        'icon'    => 'fa-line-chart',
        'name'    => LOCATION_NAME2,
        'address' => "24 Stourbridge Road,\nBromsgrove,\nWorcestershire,\nB61 0AE",
        'link'    => MAP_LINK2
      ],
      [
        'icon'    => 'fa-bolt',
        'name'    => LOCATION_NAME3,
        'address' => "24 Stourbridge Road,\nBromsgrove,\nWorcestershire,\nB61 0AE",
        'link'    => MAP_LINK3
      ]
  ]);
  ?>
  <!-- End Service Blokcs -->

  <!-- Info Blokcs -->
  <div class="row margin-bottom-30">
    <!-- Welcome Block -->
    <div class="col-md-7 md-margin-bottom-40 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft">
      <div class="skycontent">
        <div class="headline"><h2>Welcome to Ozmo Motorsport</h2></div>
        <p>
          Ozmo Motorsport is a long established tuning company started by Craig Osmond aka Ozmo, with over with over 19 years in the mechannical vehicle industry and a career all his life in the motor trade. We specialize in ECU recalibration, commonly known as remapping and chip tuning, for almost any vehicle on the market and offer quality tuning at competive prices.
        </p>
        <p>We are Dorset’s number 1 remap tuning specialist, we are also the longest established ecu tuning experts in the area. We are specialists in ALL vehicles and not just cars, we have the best tools in the industry to work on CARS, VANS, MOTORHOMES, MOTORCYCLES, 4X4, TRUCK HGV LORRY, TRACTOR , BOAT MARINE AND EVEN JET SKI’S. If it has a ecu then we have the knowledge and tools to work on it.</p>
        <p>We also have 2 rolling road dyno dynamometers at our performance centre in Dorchester Dorset, to cater for all vehicles.</p>
        <p>Please make yourselves at home and have a browse of our website</p>
      </div>
    </div>

<!-- Latest Shots -->
<div class="col-md-5 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight">
  <div class="headline"><h2>Vehicle Statistics</h2></div>

  <div class="vehicle-stats-widget" style="background: #1a1a1a; border-radius: 12px; padding: 20px; color: white; font-family: 'Segoe UI', sans-serif; box-shadow: 0 10px 30px rgba(233, 36, 45, 0.3);">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; text-align: center;">
      
      <div class="stat-item">
        <div class="stat-number" data-target="2847">0</div>
        <div class="stat-label">Total Vehicles</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number" data-target="2671">0</div>
        <div class="stat-label text-success">Online Now</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number" data-target="176">0</div>
        <div class="stat-label text-danger">Offline</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number" data-target="98.7">0</div>
        <div class="stat-label">Uptime %</div>
      </div>
    </div>

    <div style="margin-top: 20px; text-align: center; font-size: 14px; opacity: 0.8;">
      <span style="color: #e9242d;">●</span> Live Fleet Monitoring System
    </div>
  </div>

  <style>
    .stat-number {
      font-size: 2.2rem;
      font-weight: bold;
      color: #e9242d;
      margin-bottom: 5px;
    }
    .stat-label {
      font-size: 0.9rem;
      opacity: 0.9;
      letter-spacing: 0.5px;
    }
    .text-success { color: #4ade80 !important; }
    .text-danger { color: #f87171 !important; }
  </style>

  <script>
    // Animated counter function
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;

    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = target / speed;

        if (count < target) {
          counter.innerText = target % 1 === 0 
            ? Math.ceil(count + inc)
            : (count + inc).toFixed(1);
          setTimeout(updateCount, 15);
        } else {
          counter.innerText = target % 1 === 0 ? target : target.toFixed(1);
        }
      };
      updateCount();
    });

    // Trigger animation when in viewport
    const widget = document.querySelector('.vehicle-stats-widget');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          counters.forEach(c => c.innerText = '0'); // reset
          counters.forEach(updateCount);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    observer.observe(widget);
  </script>
</div>
</div>
  <!-- End Info Blokcs -->

  <!-- Owl Clients v1 -->
  <div class="headline"><h2>Manufacturers Supported</h2></div>
  <div class="owl-clients-v1 margin-bottom-30 owl-carousel owl-theme" style="opacity: 1; display: block">
    <div class="owl-wrapper-outer">
      <div class="owl-wrapper" style="width: 14472px; left: 0px; display: block; transition: 800ms; transform: translate3d(-1474px, 0px, 0px);">
         <img src="assets/img/manufacturers/1.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/2.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/3.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/4.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/5.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/6.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/7.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/8.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/9.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/10.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/11.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/12.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/13.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/14.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/15.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/16.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/17.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/18.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/19.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/20.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/21.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/22.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/23.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/24.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/25.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/26.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/27.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/28.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/29.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/30.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/31.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/32.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/33.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/34.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/35.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/36.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/37.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/38.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/40.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/41.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/42.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/43.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/44.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/45.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/46.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/47.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/48.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/49.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/50.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/51.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/52.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/53.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/54.png" alt="">
            </div></div><div class="owl-item" style="width: 163px;"><div class="item">
                <img src="assets/img/manufacturers/55.png" alt="">
      </div>
    </div>

    <script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function () {
    App.init();
    OwlCarousel.initOwlCarousel();
    ParallaxSlider.initParallaxSlider();
  });
</script>

    <div class="owl-controls clickable">
      <div class="owl-pagination">
        <div class="owl-page"><span class=""></span></div>
        <div class="owl-page active"><span class=""></span></div>
        <div class="owl-page"><span class=""></span></div>
        <div class="owl-page"><span class=""></span></div>
        <div class="owl-page"><span class=""></span></div>
        <div class="owl-page"><span class=""></span></div>
        <div class="owl-page"><span class=""></span></div>
        <div class="owl-page"><span class=""></span></div>
      </div>
    </div>
  </div>
  <!-- End Owl Clients v1 -->
</div>
<!--/container-->
</div>
<!-- End Content Part -->

<!--=== Purchase Block ===-->
<div class="purchase">
  <div class="container">
    <div class="row">
      <div class="col-md-9 wow fadeInLeft" style="visibility: hidden; animation-name: none">
        <span>Get a quote to remap your vehicle.</span>
        <p>Whether you're looking for an economy or performance remap, get in touch with us to get a quote to remap your vehicle.</p>
      </div>
      <div class="col-md-3 btn-buy wow fadeInRight" style="visibility: hidden; animation-name: none">
        <a href="contact" class="btn-u btn-u-lg"><i class="fa fa-edit"></i> Get a quote now</a>
      </div>
    </div>
  </div>
</div>
<!--/row-->
<!-- End Purchase Block -->
<?php
include __DIR__ . '/includes/footer.php';
?>