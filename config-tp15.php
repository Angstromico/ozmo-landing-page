<?php
 //******************************************************// 
//BUSINESS DETAILS - These details must not be spun but will always be common to all sites created from this template
//******************************************************// 

//THE CPANEL_USERNAME KEY VALUE PAIR MUST BE INCLUDED
    define ('CPANEL_USERNAME', 'fba27102023a');

//THE EXTERNAL_URL KEY VALUE PAIR MUST BE INCLUDED
    define ("EXTERNAL_URL", "https://www.jamesgilesandsonsltd.co.uk");

//THE BUSINESS_NAME KEY VALUE PAIR MUST BE INCLUDED
    define ("BUSINESS_NAME","Cars Shop");

 // They have 3 emails and 3 numbers for different locations
    define ("PHONE_NUMBER1","01527 872318");
    define ("PHONE_NUMBER2","01527 852213");
    define ("PHONE_NUMBER3","01905 783188");

    define ("EMAIL_ADDRESS1", "bromsgrove@jamesgilesandsonsltd.co.uk");
    define ("EMAIL_ADDRESS2", "studley@jamesgilesandsonsltd.co.uk");
    define ("EMAIL_ADDRESS3", "droitwich@jamesgilesandsonsltd.co.uk");

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

//----SPLIT HERE (DO NOT REMOVE THIS LINE)    
//******************************************************//    
//SITE SPECIFIC DETAILS - must not be spun by AI but is unique to the individual site rather than common to all sites created by the template - some need to be here because they utilise Site Specific CONSTANTS
//******************************************************// 

define('SITE_URL', 'https://www.ozmo-motorsport.co.uk');
define('SITE_TITLE', 'Ozmo Motorsport - The NO1 Remap Tuning Specialists in Dorset & the South of England');
define('META_DESCRIPTION', 'Ozmo Motorsport - We specialize in ECU remapping, ECU programming and chip tuning for almost any vehicle. We cover Dorset and the South of England. Mobile car remap.');
define('PHONE', '01305 457750');
define('EMAIL', 'info@ozmo-motorsport.co.uk');
define('ADDRESS_LINE1', 'Unit 5 Casterbridge Industrial Estate,');
define('ADDRESS_LINE2', 'London Road');
define('ADDRESS_LINE3', 'Dorchester');
define('ADDRESS_LINE4', 'Dorset');
define('POSTCODE', 'DT1 1PL');

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