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
    for ($i = 0; $i < 5; $i++) {
        if ($i < $rating) {
            $stars .= '<i class="fa fa-star" style="color: #f7b731;"></i>'; 
        } else {
            $stars .= '<i class="fa fa-star-o" style="color: #ccc;"></i>'; 
        }
    }
    return $stars;
}

function render_testimonials($testimonials) {
    echo '<div class="owl-ts-v1 owl-carousel owl-theme">'; 

    foreach ($testimonials as $testimonial) {
        $name = htmlspecialchars($testimonial['name']);
        $location = htmlspecialchars($testimonial['location']);
        $text = htmlspecialchars($testimonial['text']);
        $car = htmlspecialchars($testimonial['car_purchased']);
        $rating = (int)($testimonial['rating'] ?? 5);
        $stars = render_star_rating($rating);

        echo '<div class="item">';
        echo '  <div class="testimonial-box" style="text-align: center; background: #fff; padding: 30px 40px; border-radius: 8px; border: 1px solid #eee; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">';
        echo '    <div class="testimonial-rating margin-bottom-10" style="font-size: 1.2rem;">' . $stars . '</div>';
        echo '    <p style="font-style: italic; font-size: 1.1em; line-height: 1.6; color: #555; margin-bottom: 25px;">"' . $text . '"</p>';
        echo '    <div class="testimonial-author">';
        echo '      <strong style="display: block; font-size: 1.2em; color: #e9242d;">' . $name . '</strong>';
        echo '      <span style="font-size: 0.9em; color: #888;">' . $location . ' | Purchased: ' . $car . '</span>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }

    echo '</div>';
}

?>

<!--=== Slider ===-->
<div class="slider-inner">
  <div id="da-slider" class="da-slider" style="background-position: 11650% 0%">
    <div class="da-slide da-slide-toleft">
      <h2>
        <i><?php echo SLIDER_TITLE_1; ?></i> <br />
        <i><?php echo SLIDER_SUBTITLE_1; ?></i> <br />
        <i><?php echo SLIDER_SUBTITLE_1_2; ?></i>
      </h2>
      <p>
        <i><?php echo nl2br(SLIDER_DESCRIPTION_1); ?></i>
      </p>
      <div class="da-img">
        <img class="img-responsive" src="assets/plugins/parallax-slider/img/1.png" alt="" />
      </div>
    </div>
    <div class="da-slide da-slide-toleft">
      <h2>
        <i><?php echo SLIDER_TITLE_2; ?></i> <br />
        <i><?php echo SLIDER_SUBTITLE_2; ?></i> <br />
        <i><?php echo SLIDER_SUBTITLE_2_2; ?></i>
      </h2>
      <p>
        <i><?php echo nl2br(SLIDER_DESCRIPTION_2); ?></i>
      </p>
      <div class="da-img">
        <img class="img-responsive" src="assets/plugins/parallax-slider/img/2.png" alt="" />
      </div>
    </div>
    <div class="da-slide da-slide-fromright da-slide-current">
      <h2>
        <i><?php echo SLIDER_TITLE_3; ?></i> <br />
        <i><?php echo SLIDER_SUBTITLE_3; ?></i> <br />
        <i><?php echo SLIDER_SUBTITLE_3_2; ?></i>
      </h2>
      <p>
        <i><?php echo nl2br(SLIDER_DESCRIPTION_3); ?></i>
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
        'address' => LOCATION_1_ADDRESS,
        'link'    => MAP_LINK1
      ],
      [
        'icon'    => 'fa-line-chart',
        'name'    => LOCATION_NAME2,
        'address' => LOCATION_2_ADDRESS,
        'link'    => MAP_LINK2
      ],
      [
        'icon'    => 'fa-bolt',
        'name'    => LOCATION_NAME3,
        'address' => LOCATION_3_ADDRESS,
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
        <div class="headline"><h2><?php echo WELCOME_TITLE; ?></h2></div>
          <p><?php echo WELCOME_PARAGRAPH_1; ?></p>
          <p><?php echo WELCOME_PARAGRAPH_2; ?></p>
          <p><?php echo WELCOME_PARAGRAPH_3; ?></p>
          <p><?php echo WELCOME_PARAGRAPH_4; ?></p>
      </div>
    </div>

<!-- Latest Shots -->
<div class="col-md-5 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight">
  <div class="headline"><?php echo STATS_TITLE; ?></div>

  <div class="vehicle-stats-widget" style="background: #1a1a1a; border-radius: 12px; padding: 20px; color: white; font-family: 'Segoe UI', sans-serif; box-shadow: 0 10px 30px rgba(233, 36, 45, 0.3);">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; text-align: center;">
      
      <div class="stat-item">
        <div class="stat-number" data-target="<?php echo STATS_TOTAL_VEHICLES; ?>">0</div>
        <div class="stat-label">Total Vehicles</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number" data-target="<?php echo STATS_ONLINE_NOW; ?>">0</div>
        <div class="stat-label text-success">Online Now</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number" data-target="<?php echo STATS_OFFLINE; ?>">0</div>
        <div class="stat-label text-danger">Offline</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number" data-target="<?php echo STATS_UPTIME; ?>">0</div>
        <div class="stat-label">Uptime %</div>
      </div>
    </div>

    <div style="margin-top: 20px; text-align: center; font-size: 14px; opacity: 0.8;">
      <span style="color: #e9242d;">●</span> <?php echo STATS_LIVE_TEXT; ?>
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

    const widget = document.querySelector('.vehicle-stats-widget');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          counters.forEach(c => c.innerText = '0');
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
  <div class="headline"><h2><?php echo TESTIMONIALS_TITLE; ?></h2></div>
  <div class="margin-bottom-30">
    <?php
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
        <span><?php echo PURCHASE_TITLE; ?></span>
        <p><?php echo PURCHASE_DESCRIPTION; ?></p>
      </div>
      <div class="col-md-3 btn-buy wow fadeInRight" style="visibility: hidden; animation-name: none">
        <a href="<?php echo CONTACT ?>" class="btn-u btn-u-lg"><i class="fa fa-edit"></i> <?php echo PURCHASE_BUTTON_TEXT; ?></a>
      </div>
    </div>
  </div>
</div>
<!--/row-->
<!-- End Purchase Block -->
<?php
include __DIR__ . '/includes/footer.php';
?>