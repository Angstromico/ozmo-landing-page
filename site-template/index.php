<?php
require_once __DIR__ . '/../config-tp15.php';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
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
      <p><i><?php echo nl2br(SLIDER_DESCRIPTION_1); ?></i></p>
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
      <p><i><?php echo nl2br(SLIDER_DESCRIPTION_2); ?></i></p>
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
      <p><i><?php echo nl2br(SLIDER_DESCRIPTION_3); ?></i></p>
      <div class="da-img">
        <img src="assets/plugins/parallax-slider/img/4.png" alt="image01" />
      </div>
    </div>

    <div class="da-arrows">
      <span class="da-arrows-prev"></span>
      <span class="da-arrows-next"></span>
    </div>
    <nav class="da-dots">
      <span></span><span></span><span class="da-dots-current"></span>
    </nav>
  </div>
</div>
<!--=== End Slider ===-->

<!--=== Content Part ===-->
<div class="container content-sm">
  <!-- Locations -->
  <h2 style="text-align: center;">Our Locations</h2>
  <div class="row margin-bottom-30 animated fadeInDown">
    <?php
    $locations = [
      ['icon' => 'fa-tachometer', 'name' => LOCATION_NAME1, 'address' => LOCATION_1_ADDRESS, 'link' => MAP_LINK1],
      ['icon' => 'fa-line-chart', 'name' => LOCATION_NAME2, 'address' => LOCATION_2_ADDRESS, 'link' => MAP_LINK2],
      ['icon' => 'fa-bolt', 'name' => LOCATION_NAME3, 'address' => LOCATION_3_ADDRESS, 'link' => MAP_LINK3]
    ];

    foreach ($locations as $loc): ?>
      <a class="col-md-4" href="<?= htmlspecialchars($loc['link']) ?>" target="_blank">
        <div class="service">
          <i class="fa <?= htmlspecialchars($loc['icon']) ?> service-icon"></i>
          <div class="desc">
            <h4><?= htmlspecialchars($loc['name']) ?></h4>
            <p><?= nl2br(htmlspecialchars($loc['address'])) ?></p>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
  <!-- End Locations -->

  <!-- Info Blocks -->
  <div class="row margin-bottom-30">
    <!-- Welcome -->
    <div class="col-md-7 md-margin-bottom-40 wow fadeInLeft">
      <div class="skycontent">
        <div class="headline"><h2><?php echo WELCOME_TITLE; ?></h2></div>
        <p><?php echo WELCOME_PARAGRAPH_1; ?></p>
        <p><?php echo WELCOME_PARAGRAPH_2; ?></p>
        <p><?php echo WELCOME_PARAGRAPH_3; ?></p>
        <p><?php echo WELCOME_PARAGRAPH_4; ?></p>
      </div>
    </div>

    <!-- Offer Card -->
    <div class="col-md-5 wow fadeInRight">
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
  </div>

  <!-- Testimonials -->
  <div class="headline"><h2><?php echo TESTIMONIALS_TITLE; ?></h2></div>
  <div class="margin-bottom-30">
    <div class="owl-ts-v1 owl-carousel owl-theme">
      <?php foreach (TESTIMONIALS as $testimonial):
        $rating = (int)($testimonial['rating'] ?? 5);
      ?>
      <div class="item">
        <div class="testimonial-box" style="text-align: center; background: #fff; padding: 30px 40px; border-radius: 8px; border: 1px solid #eee; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
          <div class="testimonial-rating margin-bottom-10" style="font-size: 1.2rem;">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <i class="fa <?= $i < $rating ? 'fa-star' : 'fa-star-o' ?>" style="color: <?= $i < $rating ? '#f7b731' : '#ccc' ?>;"></i>
            <?php endfor; ?>
          </div>
          <p style="font-style: italic; font-size: 1.1em; line-height: 1.6; color: #555; margin-bottom: 25px;">
            "<?= htmlspecialchars($testimonial['text']) ?>"
          </p>
          <div class="testimonial-author">
            <strong style="display: block; font-size: 1.2em; color: #e9242d;">
              <?= htmlspecialchars($testimonial['name']) ?>
            </strong>
            <span style="font-size: 0.9em; color: #888;">
              <?= htmlspecialchars($testimonial['location']) ?> | Purchased: <?= htmlspecialchars($testimonial['car_purchased']) ?>
            </span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!--=== Purchase Block ===-->
<div class="purchase">
  <div class="container">
    <div class="row">
      <div class="col-md-9 wow fadeInLeft">
        <span><?php echo PURCHASE_TITLE; ?></span>
        <p><?php echo PURCHASE_DESCRIPTION; ?></p>
      </div>
      <div class="col-md-3 btn-buy wow fadeInRight">
        <a href="<?php echo CONTACT; ?>" class="btn-u btn-u-lg">
          <i class="fa fa-edit"></i> <?php echo PURCHASE_BUTTON_TEXT; ?>
        </a>
      </div>
    </div>
  </div>
</div>
<!--/row-->

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

<?php include __DIR__ . '/includes/footer.php'; ?>
