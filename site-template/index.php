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

<!-- 3D Rotating Card Banner -->
<div class="col-md-5 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight">
  <div class="headline"><h2>Special Offer</h2></div>
  
  <div class="card-3d-container">
    <div class="card-3d">
      <div class="card-front">
        <div class="card-content">
          <div class="card-icon">
            <i class="fa fa-bolt" style="color: #e9242d; font-size: 3rem;"></i>
          </div>
          <h3>Performance Tuning</h3>
          <p class="card-price">From £299</p>
          <p class="card-desc">+30% HP & Torque<br>Improved Throttle Response<br>Better Fuel Economy</p>
          <div class="card-badge">Limited Time</div>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
          <div class="card-icon">
            <i class="fa fa-calendar-check-o" style="color: #e9242d; font-size: 3rem;"></i>
          </div>
          <h3>Book Now</h3>
          <p class="card-desc">Free Diagnostic Check<br>12 Month Warranty<br>Mobile Service Available</p>
          <a href="<?php echo EXTERNAL_URL; ?>/contact" class="btn-u btn-u-red">Get Quote</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.card-3d-container {
  perspective: 1500px;
  height: 350px;
}

.card-3d {
  position: relative;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: transform 1s ease-in-out;
  cursor: pointer;
}

.card-3d:hover {
  transform: rotateY(180deg);
}

.card-front, .card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 15px;
  box-shadow: 0 15px 35px rgba(0,0,0,0.2);
  display: flex;
  align-items: center;
  justify-content: center;
}

.card-front {
  background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
  color: white;
}

.card-back {
  background: linear-gradient(135deg, #e9242d 0%, #c41e25 100%);
  color: white;
  transform: rotateY(180deg);
}

.card-content {
  text-align: center;
  padding: 30px;
  width: 100%;
}

.card-icon {
  margin-bottom: 20px;
}

.card-3d h3 {
  font-size: 1.5rem;
  margin-bottom: 15px;
  font-weight: bold;
}

.card-price {
  font-size: 2rem;
  font-weight: bold;
  color: #e9242d;
  margin-bottom: 15px;
}

.card-front .card-price {
  color: #e9242d;
}

.card-back .card-price {
  color: white;
}

.card-desc {
  font-size: 0.9rem;
  line-height: 1.6;
  margin-bottom: 20px;
  opacity: 0.9;
}

.card-badge {
  position: absolute;
  top: 15px;
  right: 15px;
  background: #e9242d;
  color: white;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
}

.btn-u-red {
  background: #1a1a1a;
  color: white;
  border: 2px solid white;
  padding: 10px 25px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: bold;
  transition: all 0.3s ease;
}

.btn-u-red:hover {
  background: white;
  color: #e9242d;
  transform: translateY(-2px);
}
</style>
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