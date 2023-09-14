<!DOCTYPE html>
<html lang="en">

<head>
  <title>Catigbian Mountain View</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Catigbian Mountain View" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/png" sizes="32x32" href="images/cmv_logo.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="images/cmv_logo.ico">
  <link rel="shortcut icon" type="image/x-icon" href="images/cmv_logo.ico">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css" />
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css" />
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css" />
  <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css" />
  <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/responsive.css" />
</head>

<body>
  <div class="super_container">
    <!-- Header -->

    <header class="header">
      <div class="header_content d-flex flex-row align-items-center justify-content-start">
          <a href="index.php?m=home"><img src="images/cmv_logo.png" alt="Your Logo" width=80px></a>
        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
          <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
              <li class="nav-item px-2"><a class="nav-link fw-medium 
                <?php if ($_GET['m'] == 'home') : ?>
                    active
                <?php endif; ?>" aria-current="page" href="index.php?m=home">Home</a></li>

              <li class="nav-item px-2"><a class="nav-link fw-medium 
                <?php if ($_GET['m'] == 'menu') : ?>
                    active
                <?php endif; ?>" aria-current="page" href="index.php?m=menu">Food Menu</a></li>

              <li class="nav-item px-2"><a class="nav-link fw-medium 
                <?php if ($_GET['m'] == 'services') : ?>
                    active
                <?php endif; ?>" aria-current="page" href="index.php?m=services">Services</a></li>

              <!-- <li><a href="menu.html">Food Menu</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li> -->
            </ul>
          </nav>
          <div class="book_button">
            <a href="#">Book Online</a>
          </div>
          <div class="header_phone d-flex flex-row align-items-center justify-content-center">
            <img src="images/phone.png" alt="" />
            <span>0183-12345678</span>
          </div>

          <!-- Hamburger nav -->
          <div class="hamburger">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- nav -->

    <div class="nav trans_400 d-flex flex-column align-items-end justify-content-start">
      <div class="nav_close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <div class="nav_content">
        <nav class="nav_nav text-right">
          <ul>
            <li class="nav-item px-2"><a class="nav-link fw-medium 
                <?php if ($_GET['m'] == 'home') : ?>
                    active
                <?php endif; ?>" aria-current="page" href="index.php?m=home">Home</a></li>

            <li class="nav-item px-2"><a class="nav-link fw-medium 
                <?php if ($_GET['m'] == 'menu') : ?>
                    active
                <?php endif; ?>" aria-current="page" href="index.php?m=menu">Food Menu</a></li>

            <li class="nav-item px-2"><a class="nav-link fw-medium 
                <?php if ($_GET['m'] == 'services') : ?>
                    active
                <?php endif; ?>" aria-current="page" href="index.php?m=services">Serivces</a></li>
          </ul>
        </nav>
      </div>
      <div class="nav_extra">
        <div class="nav_book text-right"><a href="#">Book online</a></div>
        <div class="nav_phone d-flex flex-row align-items-center justify-content-center">
          <img src="images/phone-2.png" alt="" />
          <span>0183-12345678</span>
        </div>
      </div>
    </div>