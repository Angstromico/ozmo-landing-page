<?php
if (!defined('BASE_URL')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}
?>
  <!--=== Footer Version 1 ===-->
  <div class="footer-v1">
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- About -->
          <div class="wow fadeInUp" style="visibility: hidden; animation-name: none">
            <div class="col-md-3 md-margin-bottom-40">
              <img id="logo-footer" class="footer-logo img-responsive" src="upload/logo.png" alt="Ozmo Motorsport Performance Centre" width="220" />
              We are Dorset's Number One Remap Tuning And Engine Carbon Cleaning Specialist, We have been trading the longest with the most experience, Using the best GENUINE tools in the industry. All of our tuning is fully tested , insured, guaranteed and at very competitive pricing.
            </div>
            <!--/col-md-3-->
            <!-- End About -->

            <!-- Latest -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="posts">
                <div class="headline"><h2>Latest Posts</h2></div>
                <ul class="list-unstyled latest-list">
                  <li><a href="blog/fully-open-trading-for-business-during-covid-lockdown">FULLY OPEN TRADING FOR BUSINESS DURING COVID LOCKDOWN</a><small>16th February 2021</small></li>
                  <li><a href="blog/rolling-road-dyno-now-installed-bookings-available-now">Rolling Road Dyno now installed , bookings available now</a><small>7th October 2019</small></li>
                </ul>
              </div>
            </div>
            <!-- End Latest -->

            <!-- Address -->
            <div class="col-md-3 map-img md-margin-bottom-40">
              <div class="headline"><h2>Address</h2></div>
              <address class="md-margin-bottom-40">
                <?php echo ADDRESS_LINE1; ?><br />
                <?php echo ADDRESS_LINE2; ?><br />
                <?php echo ADDRESS_LINE3; ?><br />
                <?php echo ADDRESS_LINE4; ?><br />
                <?php echo POSTCODE; ?><br />
                Tel : <?php echo PHONE; ?><br />
                Mobile : 07790 919405
              </address>
            </div>
            <!--/col-md-3-->
            <!-- End Address -->

            <!-- Link List -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="headline"><h2>Connect with us</h2></div>
              <ul class="list-inline dark-social-v2">
                <li><a href="https://www.facebook.com/OzmoMotorsport/"><i class="rounded-sm fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/ozmomotorsport/"><i class="rounded-sm fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
            <!-- End Link List -->
          </div>
        </div>
      </div>
    </div>
    <!--/footer-->

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p>© All Rights Reserved | Web design: <a href="https://www.bensky.co.uk/tuning-websites" target="_blank"><img src="https://www.bensky.co.uk/img/logo-white.svg" alt="BENSKY webdesign for remapping companies" width="60" /></a></p>
          </div>
        </div>
      </div>
    </div>
    <!--/copyright-->
  </div>
  <!--=== End Footer Version 1 ===-->
</div>
<!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW({ mobile: false }).init();</script>

<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>
<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat" page_id="634514679915858" attribution="biz_inbox"></div>
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "634514679915858");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v13.0'
    });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160777481-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-160777481-1');
</script>

<!--[if lt IE 9]>
  <script src="assets/plugins/respond.js"></script>
  <script src="assets/plugins/html5shiv.js"></script>
  <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"></div>
</body>
</html>
