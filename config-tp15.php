<?php
error_reporting(0);
ini_set('display_errors', 0);
 //******************************************************// 
//BUSINESS DETAILS - These details must not be spun but will always be common to all sites created from this template
//******************************************************// 

//THE CPANEL_USERNAME KEY VALUE PAIR MUST BE INCLUDED
    define ('CPANEL_USERNAME', 'fba27102023a');

//THE EXTERNAL_URL KEY VALUE PAIR MUST BE INCLUDED
    define ("EXTERNAL_URL", "https://www.ozmo-motorsport.co.uk");

//THE BUSINESS_NAME KEY VALUE PAIR MUST BE INCLUDED
    define ("BUSINESS_NAME","Cars Shop");

 // They have 3 emails and 3 numbers for different locations
    define ("PHONE_NUMBER1","01305 457750");
   //  define ("PHONE_NUMBER2","01527 852213");
   //  define ("PHONE_NUMBER3","01905 783188");

    define ("EMAIL_ADDRESS1", "info@ozmo-motorsport.co.uk");
   //  define ("EMAIL_ADDRESS2", "studley@jamesgilesandsonsltd.co.uk");
   //  define ("EMAIL_ADDRESS3", "droitwich@jamesgilesandsonsltd.co.uk");

    define ("MAP_LINK1", "https://www.google.com/maps/place/James+Giles+%26+Sons+Ltd/@52.3389587,-2.0575041,18z/data=!3m1!4b1!4m6!3m5!1s0x4870949d97011df9:0x2092054d8c580ec2!8m2!3d52.3389587!4d-2.0575041!16s%2Fg%2F1vs5w4d7?entry=ttu&g_ep=EgoyMDI1MTAxNC4wIKXMDSoASAFQAw%3D%3D");
    define ("MAP_LINK2", "https://www.google.com/maps/place/James+Giles+%26+Sons+Ltd/@52.272801,-1.8966862,17z/data=!3m1!4b1!4m6!3m5!1s0x4870c168b8dd49df:0xed956e3a1b961897!8m2!3d52.272801!4d-1.8966862!16s%2Fg%2F11ggtgv5yx?entry=ttu&g_ep=EgoyMDI1MTAxNC4wIKXMDSoASAFQAw%3D%3D");
    define ("MAP_LINK3", "https://www.google.com/maps/place/James+Giles+%26+Sons+Ltd/@52.267473,-2.1546183,17z/data=!3m1!4b1!4m6!3m5!1s0x4870ed78470d69c7:0x8557c358f72f3753!8m2!3d52.267473!4d-2.1546183!16s%2Fg%2F11tx7y8hj7?entry=ttu&g_ep=EgoyMDI1MTAxNC4wIKXMDSoASAFQAw%3D%3D");

    define ("LOCATION_NAME1", "Bromsgrove");
    define ("LOCATION_NAME2", "Studley");
    define ("LOCATION_NAME3", "Droitwich");

    //Templates must use Enterprise Recaptcha going forward. You do not need to get V3 Site Keys anymore - use the same enterprise keys for all sites - you don't need to do anything
    define ("RECAPTCHA_AUTH_KEY_KILE", '/home/'.CPANEL_USERNAME.'/libraries/template-sites-456308-f69eb28d0e90.json');
    define ('RECAPTCHA_ENTERPRISE_KEY', '6LcU_RcrAAAAAEe01foDDhIthyW91_yQ8Jvy1pyH');
    define ('RECAPTCHA_ENTERPRISE_PROJECT_ID', 'template-sites-456308');

    define ("MAIL_FROM", "development@becreativegroup.co.uk");
    define ("MAIL_PASS", "save26$1lightWhales");
    define ("MAIL_TO", "revisions@becreativegroup.co.uk");

    // Testimonials array with fake happy car buyers
    define("TESTIMONIALS", [
     [
        "name" => "Sarah Johnson",
        "location" => "Birmingham",
        "rating" => 5,
        "text" => "Absolutely fantastic service from James Giles & Sons! Found my perfect family car at the Bromsgrove branch. The team was so helpful and made the whole process stress-free. Highly recommended!",
        "car_purchased" => "2023 Volkswagen Tiguan"
     ],
     [
        "name" => "Michael Thompson",
        "location" => "Redditch",
        "rating" => 5,
        "text" => "Outstanding experience at the Studley location. They went above and beyond to find me my dream Audi A4. The after-sales support has been exceptional too. True professionals!",
        "car_purchased" => "2022 Audi A4 Sport"
     ],
     [
        "name" => "Emma and David Wilson",
        "location" => "Worcester",
        "rating" => 5,
        "text" => "We purchased our first family car from the Droitwich branch and couldn't be happier. The staff were patient, knowledgeable, and never pushy. Found us exactly what we needed within our budget.",
        "car_purchased" => "2021 Ford Focus"
     ],
     [
        "name" => "Robert Chen",
        "location" => "Kidderminster",
        "rating" => 4,
        "text" => "Great selection of quality used cars at competitive prices. The Bromsgrove team helped me get a fantastic deal on a nearly new BMW. Smooth financing process and friendly staff.",
        "car_purchased" => "2022 BMW 3 Series"
     ],
     [
        "name" => "Lisa Patterson",
        "location" => "Alcester",
        "rating" => 5,
        "text" => "After visiting several dealerships, James Giles & Sons stood out for their honesty and transparency. The car I bought from Studley has been perfect, and the warranty gives me peace of mind.",
        "car_purchased" => "2020 Mercedes-Benz A-Class"
    ]
   ]);

//----SPLIT HERE (DO NOT REMOVE THIS LINE)    
//******************************************************//    
//SITE SPECIFIC DETAILS - must not be spun by AI but is unique to the individual site rather than common to all sites created by the template - some need to be here because they utilise Site Specific CONSTANTS
//******************************************************// 

define('SITE_URL', '');
define('SITE_TITLE', 'Autocar Motorsport - The NO1 Remap Tuning Specialists in Dorset & the South of England');
define('META_DESCRIPTION', 'Autocar Motorsport - We specialize in ECU remapping, ECU programming and chip tuning for almost any vehicle. We cover Dorset and the South of England. Mobile car remap.');
define('PHONE', '0161 711 0834');
define('EMAIL', 'support@ecutuningexperts.co.uk');
define('ADDRESS_LINE1', 'Suite 5 Manchester Trade Centre');
define('ADDRESS_LINE2', 'Deansgate');
define('ADDRESS_LINE3', 'Manchester');
define('ADDRESS_LINE4', 'Lancashire');
define('POSTCODE', 'M3 4EN');

define("NAV_ITEMS", [
  "Home" => [
    "url" => EXTERNAL_URL . "/"
  ],
  "Pricing" => [
    "url" => EXTERNAL_URL . "/pricing"
  ],
  "About Us" => [
    "url" => EXTERNAL_URL . "/about-us"
  ],
  "Services" => [
    "url" => EXTERNAL_URL . "/services",
    "children" => [
      "Car / Van / 4x4" => EXTERNAL_URL . "/services/car-van-4x4",
      "Truck / HGV / Lorry" => EXTERNAL_URL . "/services/truck-hgv-lorry",
      "Tractor / Agricultural" => EXTERNAL_URL . "/services/tractor-agricultural",
      "Motorcycle" => EXTERNAL_URL . "/services/motorcycle-tuning",
      "Boat / Marine" => EXTERNAL_URL . "/services/boat-marine",
      "Bike & Car Rolling Road" => EXTERNAL_URL . "/services/bike-car-rolling-road",
      "Mileage Correction" => EXTERNAL_URL . "/services/mileage-correction"
    ]
  ],
  "Vehicle Search" => [
    "url" => EXTERNAL_URL . "/vehicle-statistics"
  ],
  "Carbon Cleaning" => [
    "url" => EXTERNAL_URL . "/carbon-cleaning",
    "children" => [
      "Engine Carbon Cleaning" => EXTERNAL_URL . "/carbon-cleaning/engine-carbon-cleaning",
      "Fuel System Clean" => EXTERNAL_URL . "/carbon-cleaning/fuel-system-clean",
      "DPF Diesel Particulate Filter Cleaning" => EXTERNAL_URL . "/carbon-cleaning/dpf-particulate-filter-clean"
    ]
  ],
  "Contact Us" => [
    "url" => EXTERNAL_URL . "/contact"
  ]
]);

define('CONTACT', EXTERNAL_URL . "/contact");

// Footer content
define("FOOTER_DESCRIPTION", "We are a premier automotive tuning specialist delivering exceptional performance enhancement services. Our team utilizes industry-leading tools and technology to provide comprehensive ECU optimization solutions. All our tuning services undergo rigorous testing and come with quality guarantees at competitive market rates.");
define("FOOTER_MOBILE_PHONE", "07700 919505");

// Latest posts
define("LATEST_POST_1_TITLE", "ADVANCED DIAGNOSTIC SYSTEMS NOW AVAILABLE");
define("LATEST_POST_1_LINK", "blog/advanced-diagnostic-systems-now-available");
define("LATEST_POST_1_DATE", "15th January 2024");

define("LATEST_POST_2_TITLE", "NEW PERFORMANCE TUNING PACKAGES LAUNCHED");
define("LATEST_POST_2_LINK", "blog/new-performance-tuning-packages-launched");
define("LATEST_POST_2_DATE", "28th November 2023");

// Social media links
define("FACEBOOK_URL", "https://www.facebook.com/p/James-Giles-and-Sons-Ltd-100090148819501/");
define("INSTAGRAM_URL", "https://www.instagram.com/ejamesgiles/?hl=en");

// Copyright and credits
define("COPYRIGHT_TEXT", "© All Rights Reserved | Web design: ");

// Facebook Messenger
define("FACEBOOK_PAGE_ID", "634514679915858");

// Google Analytics
define("GOOGLE_ANALYTICS_ID", "UA-160777481-1");

// Slider content
define("SLIDER_TITLE_1", "ADVANCED PERFORMANCE");
define("SLIDER_SUBTITLE_1", "TUNING TECHNOLOGY");
define("SLIDER_SUBTITLE_1_2", "FOR OPTIMAL RESULTS");
define("SLIDER_DESCRIPTION_1", "Professional ECU optimization\nfor maximum power output\nand improved efficiency");

define("SLIDER_TITLE_2", "COMPREHENSIVE COVERAGE");
define("SLIDER_SUBTITLE_2", "MULTI-PLATFORM SUPPORT");
define("SLIDER_SUBTITLE_2_2", "ACROSS ALL VEHICLES");
define("SLIDER_DESCRIPTION_2", "Advanced tuning solutions\nfor diverse vehicle platforms\nand engine types");

define("SLIDER_TITLE_3", "PRECISION TESTING");
define("SLIDER_SUBTITLE_3", "DYNAMIC PERFORMANCE");
define("SLIDER_SUBTITLE_3_2", "VALIDATION SYSTEMS");
define("SLIDER_DESCRIPTION_3", "State-of-the-art equipment\nfor accurate performance\nmeasurement and verification");

// Welcome section
define("WELCOME_TITLE", "Welcome to Autocar Motorsport");
define("WELCOME_PARAGRAPH_1", "Autocar Motorsport is a premier automotive tuning company dedicated to delivering exceptional performance enhancements for all types of vehicles. With decades of combined experience in the industry, our team of certified technicians brings cutting-edge expertise to every project, ensuring optimal results and complete customer satisfaction.");
define("WELCOME_PARAGRAPH_2", "As a leading force in vehicle performance optimization, we specialize in comprehensive ECU recalibration services that unlock your vehicle's true potential. Our advanced remapping and chip tuning solutions are tailored to meet your specific driving needs, whether you're seeking improved fuel efficiency, enhanced power output, or superior throttle response.");
define("WELCOME_PARAGRAPH_3", "Our commitment to excellence extends beyond standard tuning services. We utilize state-of-the-art diagnostic equipment and proprietary software to deliver precise, reliable results for every vehicle we service. Each tuning solution is thoroughly tested and validated to ensure maximum performance gains while maintaining engine longevity and reliability.");
define("WELCOME_PARAGRAPH_4", "Discover the difference that professional tuning can make. Contact us today to schedule a consultation and experience the transformative power of precision engine optimization with Autocar Motorsport.");

// Vehicle statistics
define("STATS_TITLE", "Vehicle Statistics");
define("STATS_TOTAL_VEHICLES", "2847");
define("STATS_ONLINE_NOW", "2671");
define("STATS_OFFLINE", "176");
define("STATS_UPTIME", "98.7");
define("STATS_LIVE_TEXT", "Live Fleet Monitoring System");

// Testimonials section
define("TESTIMONIALS_TITLE", "Testimonials");

// Purchase block
define("PURCHASE_TITLE", "Request a custom quote for your vehicle remap.");
define("PURCHASE_DESCRIPTION", "Whether you're seeking improved fuel economy or enhanced performance, contact us today for a personalized quote tailored to your vehicle.");
define("PURCHASE_BUTTON_TEXT", "Get Your Quote");

// Locations section
define("LOCATIONS_TITLE", "Our Locations");
define("LOCATION_1_ADDRESS", "24 Stourbridge Road,\nBromsgrove,\nWorcestershire,\nB61 0AE");
define("LOCATION_2_ADDRESS", "24 Stourbridge Road,\nBromsgrove,\nWorcestershire,\nB61 0AE");
define("LOCATION_3_ADDRESS", "24 Stourbridge Road,\nBromsgrove,\nWorcestershire,\nB61 0AE");

//******************************************************// 
//ADDITIONAL CONTENT - Must come after everything else
//******************************************************//    
    session_start();
    if(!isset($_SESSION["token"])){
        $token = md5(uniqid().rand(1000000, 9999999));
        $_SESSION["token"] = $token;
    }
    
    // include classes
    include(dirname(__FILE__) . '/classes/recaptcha.class.php');
    include(dirname(__FILE__) . '/classes/email.class.php');
    
    
    include (dirname(__FILE__) . '/libraries/phpmailer/src/Exception.php');
    include (dirname(__FILE__) . '/libraries/phpmailer/src/PHPMailer.php');
    include (dirname(__FILE__) . '/libraries/phpmailer/src/SMTP.php');