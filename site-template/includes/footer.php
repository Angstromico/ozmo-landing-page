<?php
if (!defined('SITE_URL')) {
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
              <img id="logo-footer" class="footer-logo img-responsive" src="upload/logo.png" alt="Autocar Motorsport Performance Centre" width="220" />
              <?php echo FOOTER_DESCRIPTION; ?>
            </div>
            <!--/col-md-3-->
            <!-- End About -->

            <!-- Latest -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="posts">
                <div class="headline"><h2>Latest Posts</h2></div>
                <ul class="list-unstyled latest-list">
                  <li>
                    <a href="<?php echo LATEST_POST_1_LINK; ?>"><?php echo LATEST_POST_1_TITLE; ?></a>
                    <small><?php echo LATEST_POST_1_DATE; ?></small>
                  </li>
                  <li>
                    <a href="<?php echo LATEST_POST_2_LINK; ?>"><?php echo LATEST_POST_2_TITLE; ?></a>
                  <small><?php echo LATEST_POST_2_DATE; ?></small>
                  </li>
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
                Mobile : <?php echo FOOTER_MOBILE_PHONE; ?>
              </address>
            </div>
            <!--/col-md-3-->
            <!-- End Address -->

            <!-- Link List -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="headline"><h2>Connect with us</h2></div>
              <ul class="list-inline dark-social-v2">
                <li><a href="<?php echo FACEBOOK_URL; ?>"><i class="rounded-sm fa-brands fa-facebook"></i></a></li>
                <li><a href="<?php echo INSTAGRAM_URL; ?>"><i class="rounded-sm fa-brands fa-instagram"></i></a></li>
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
  chatbox.setAttribute("page_id", "<?php echo FACEBOOK_PAGE_ID; ?>");
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
  gtag('config', '<?php echo GOOGLE_ANALYTICS_ID; ?>');
</script>

<script src="https://www.google.com/recaptcha/enterprise.js?render=<?php echo RECAPTCHA_ENTERPRISE_KEY; ?>"></script>

<script>
        
        $(document).on('click','#submitForm',function(e){

            e.preventDefault();
            let formToSubmit = $(this).closest("form");

            let nameField = $(".formNameInput");
            let emailField = $(".formEmailInput");
            let numberField = $(".formPhoneInput");
            let locationField = $(".formSubjectInput");
            let enquiryField = $(".formMessageInput");
            let completeField = $(".completeField");
            let errors = [];

            if ($(nameField).val() === "") {
                errors.push("nameField");
                $(nameField).addClass('isError');
            }else {
                $(nameField).removeClass('isError');
            }
            
            if ($(emailField).val() === "") {
                errors.push("emailField");
                $(emailField).addClass('isError');
            }else {
                $(emailField).removeClass('isError');
            }
            
            if ($(numberField).val() === "") {
                errors.push("numberField");
                $(numberField).addClass('isError');
            }else {
                $(numberField).removeClass('isError');
            }
            
            if ($(locationField).val() === "") {
                errors.push("locationField");
                $(locationField).addClass('isError');
            }else {
                $(locationField).removeClass('isError');
            }
            
            if ($(enquiryField).val() === "") {
                errors.push("enquiryField");
                $(enquiryField).addClass('isError');
            }else {
                $(enquiryField).removeClass('isError');
            }
            
            if ($(completeField).val() !== "") {
                errors.push("complete");
            }
            console.log(errors);
           
            if (errors.length > 0) {
               document.getElementById("emptyInput").innerHTML = '<div class="alert alert-danger">Please Complete All Required Fields</div>';
               
            }else {
    
                if (formToSubmit[0].reportValidity()) {
    
                    grecaptcha.enterprise.ready(function() {
    
                        grecaptcha.enterprise.execute('<?php echo RECAPTCHA_ENTERPRISE_KEY; ?>', {action: 'submit'}).then(function(token) {
    
                            $('.gRecaptcha').val(token);
                            formToSubmit.submit();
    
                        });
                    });
                }    
            }
        });
         
</script>

<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"></div>
</body>
</html>
