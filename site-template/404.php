        <?php include 'includes/head.php' ?>
        <meta name="title" content="404 Page">
        <meta name="description" content="404 Error - Page Not Found">
        <meta name="keywords" content="404 rror, Error, Page Not Found">
        
        <meta name="robots" content="noindex">
        <meta name="robots" content="nofollow">
    </head>
    
    <style>

    .Banner1 {
        height: 550px;
        background-image: '';
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        background-color: #00000030;
    }
    </style>
    
  <body>
        <?php include 'includes/header.php' ?>
        
        <div class="Banner1">
            <div class="container bannerText">
                <h2 class="buisnessJob">404 Error</h2>
                <p class="buisnessInfo">Page Not Found</p>
                <a href="<?php echo SITE_URL; ?>">
                    <button class="buttonQuote" id="buttonBanner">Return Home<i class="fa-solid fa-angle-right rightArrow"></i></button>
                </a>
            </div>
        </div>
      
        <?php include 'includes/footer.php' ?>
      
  </body>
  
</html>