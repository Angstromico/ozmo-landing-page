<?php
if (!defined('SITE_URL')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}
?>
<head>
  <base href="<?php echo SITE_URL; ?>" />
  <title><?php echo SITE_TITLE; ?></title>
  <meta name="keywords" content="" />
  <meta name="description" content="<?php echo META_DESCRIPTION; ?>" />

  <!-- Meta -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon.ico" /> 
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon" />

  <!-- Web Fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin" />

  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- CSS Header and Footer -->
  <link rel="stylesheet" href="assets/css/headers/header-default.css" />
  <link rel="stylesheet" href="assets/css/footers/footer-v1.css" />

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/plugins/animate.css" />
  <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css" />
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css" />
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css" />

  <!-- CSS Theme -->
  <link rel="stylesheet" href="assets/css/theme-skins/dark.css" />
  <link rel="stylesheet" href="assets/css/theme-colors/red.css" />
  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css" />
  <meta name="google-site-verification" content="e_t9UURXEyLTxbspfwbjKXlDzjY597rRD-akP-38naw" />

  <!-- Facebook Pixel Code -->
  <!-- <script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js"></script>
  <script async src="https://connect.facebook.net/en_US/fbevents.js"></script> -->
  <script>
    !(function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s);
    })(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2340207876081442');
    fbq('track', 'PageView');
  </script>
  <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
  <noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=2340207876081442&ev=PageView&noscript=1" />
  </noscript>
</head>

<?php
    
    if (isset($_POST['completeField']) && $_POST['completeField']=="") {   
        if (isset($_POST['gRecaptcha'])) {
            $rm = new recaptchaManager();

            $projectId = RECAPTCHA_ENTERPRISE_PROJECT_ID;
            $recaptchaToken = $_POST['gRecaptcha'];
            $recaptchaAction = 'submit';
            
            $credentials = json_decode(file_get_contents(RECAPTCHA_AUTH_KEY_KILE), true);

            $jwt = $rm->generate_jwt($credentials);
            
            $accessToken = $rm->fetch_access_token($jwt);

            $url = "https://recaptchaenterprise.googleapis.com/v1/projects/$projectId/assessments";
            $payload = [
              'event' => [
                'token' => $recaptchaToken,
                'siteKey' => RECAPTCHA_ENTERPRISE_KEY,
                'expectedAction' => $recaptchaAction,
              ],
            ];
            
            $headers = [
              'Authorization: Bearer ' . $accessToken,
              'Content-Type: application/json',
            ];
            
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            
            $data = json_decode($response, true);

            $score = $data['riskAnalysis']['score'] ?? null;

            if($score){
                if ($score < 0.6) {   
                    // Failure
                    $message = "<div class='alert alert-danger'>Recaptcha check failed. Please try again.</div>";
                    echo $message;
                } else {
                    // Success
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $formMessage = $_POST['message'];
                    $location = $_POST['subject'];
                    $mailFrom = $_POST['email'];
                    $mailTo = MAIL_TO;
                    $headers = "From: " . MAIL_FROM . "";
                    $txt = "You have recieved an email from " . "\n\n" . "Name:" . "\n" . $name . "\n\n" . "Subject:" . "\n" . $location . "\n\n" . "Enquiry:" . "\n" . $formMessage . "\n\n" . "Contact Number:" . "\n" . $phone . "\n\n" . "Email Address:" . "\n" . $mailFrom;
                    $subject = "An email from your website";
                    mail($mailTo, $subject, $txt, $headers);
                    $message = "<div class='alert alert-success'>Thank you for contacting us. We will be in touch as soon as we can.</div>";
                    echo $message;
                }
            }else{
                $message = "<div class='alert alert-danger'>There was a problem validating Recaptcha. Please try again.</div>";
                echo $message;
            }
        }
    }
?>
