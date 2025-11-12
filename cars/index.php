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

function render_star_rating($rating) {
    $stars = '';
    // Use the fa-star for full stars and fa-star-o for empty
    for ($i = 0; $i < 5; $i++) {
        if ($i < $rating) {
            // Full star (using gold/yellow for visibility)
            $stars .= '<i class="fa fa-star" style="color: #f7b731;"></i>'; 
        } else {
            // Empty star
            $stars .= '<i class="fa fa-star-o" style="color: #ccc;"></i>'; 
        }
    }
    return $stars;
}

function render_testimonials($testimonials) {
    // We use owl-ts-v1 (Testimonials v1) for single item slides as defined in the JS init snippet
    echo '<div class="owl-ts-v1 owl-carousel owl-theme">'; 

    foreach ($testimonials as $testimonial) {
        $name = htmlspecialchars($testimonial['name']);
        $location = htmlspecialchars($testimonial['location']);
        $text = htmlspecialchars($testimonial['text']);
        $car = htmlspecialchars($testimonial['car_purchased']);
        $rating = (int)($testimonial['rating'] ?? 5);
        $stars = render_star_rating($rating);

        // Individual testimonial slide structure
        echo '<div class="item">';
        echo '  <div class="testimonial-box" style="text-align: center; background: #fff; padding: 30px 40px; border-radius: 8px; border: 1px solid #eee; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">';
        
        // Rating Stars
        echo '    <div class="testimonial-rating margin-bottom-10" style="font-size: 1.2rem;">' . $stars . '</div>';
        
        // Quote Text
        echo '    <p style="font-style: italic; font-size: 1.1em; line-height: 1.6; color: #555; margin-bottom: 25px;">"' . $text . '"</p>';
        
        // Customer Info
        echo '    <div class="testimonial-author">';
        echo '      <strong style="display: block; font-size: 1.2em; color: #e9242d;">' . $name . '</strong>';
        echo '      <span style="font-size: 0.9em; color: #888;">' . $location . ' | Purchased: ' . $car . '</span>';
        echo '    </div>';
        
        echo '  </div>';
        echo '</div>';
    }

    echo '</div>'; // close owl-ts-v1
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
  <div class="headline"><h2>Testimonials</h2></div>
  <div class="margin-bottom-30">
    <?php
        // Renders the testimonials using the owl-ts-v1 class for single-item sliding.
        render_testimonials(TESTIMONIALS); 
    ?>
  </div>
  <!-- End Owl Clients v1 -->
</div>
<!--/container-->
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