<?php

include "connection.php";

?>

<!DOCTYPE html>
<html class="wow-animation" lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="keywords" content="intense web design multipurpose template">
  <meta name="date" content="Dec 26">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <!-- IE Panel-->
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <div class="page-loader page-loader-variant-1">
    <div><img width='200' src='images/logo1.png' alt='' />
      <div class="offset-top-41 text-center">
        <div class="spinner"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page text-center">
    <!-- Page Head-->
    <header class="page-head slider-menu-position" data-preset='{"title":"Header with slider","category":"header, slider","reload":true,"id":"header-1"}'>
      <!-- RD Navbar Transparent-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
          <div class="rd-navbar-inner">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel context-dark bg-danger">
              <div class="left-side">
                <address class="contact-info text-left"><a href="tel:#"><span class="icon mdi mdi-cellphone-android novi-icon"></span><span class="text-middle">+94740447508</span></a></address>
              </div>
              <!-- <div class="center">
                  <address class="contact-info text-left"><a href="#"><span class="icon mdi mdi-map-marker-radius novi-icon"></span><span class="text-middle">2130 Fulton Street San Francisco, CA 94117-1080 USA</span></a></address>
                </div> -->
              <div class="right-side">
                <ul class="list-inline list-inline-sm">
                  <li class="list-inline-item"><a class="novi-icon fa fa-facebook" href="#"></a></li>
                  <li class="list-inline-item"><a class="novi-icon fa fa-twitter" href="#"></a></li>
                  <li class="list-inline-item"><a class="novi-icon fa fa-google-plus" href="#"></a></li>
                  <li class="list-inline-item"><a class="novi-icon fa fa-youtube" href="#"></a></li>
                </ul>
              </div>
            </div>
            <!-- RD Navbar Panel -->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Top Panel Toggle-->
              <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
              <!--Navbar Brand-->
              <div class="rd-navbar-brand"><a href="index.html"><img width='173' src='images/logo1.png' alt='' /></a></div>
            </div>
            <div class="rd-navbar-menu-wrap">
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-mobile-scroll">
                  <!--Navbar Brand Mobile-->
                  <div class="rd-navbar-mobile-brand"><a href="index.php"><img width='173' src='images/logo1.png' alt='' /></a></div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <!-- <li><input type="text" class="" style="background-color: transparent; border: 1; border-color: white;" aria-label="Text input with dropdown button" id="basic_search_txt" placeholder="Search in Cricket Hut">

                      <select class="" id="basic_search_select" style="padding: 4px;background-color: transparent; border: 0;">
                        <option value="0">All Categories</option>
                        <?php

                        $category_rs = Database::search("SELECT * FROM `category`");
                        $category_num = $category_rs->num_rows;

                        for ($x = 0; $x < $category_num; $x++) {
                          $category_data = $category_rs->fetch_assoc();
                        ?>
                          <option value="<?php echo $category_data["cat_id"]; ?>">
                            <?php echo $category_data["cat_name"]; ?>
                          </option>
                        <?php
                        }

                        ?>
                      </select>

                      <button style="padding: 2px; background-color: white;" onclick="basicSearch(0);">&nbsp;&nbsp;Search&nbsp;</button>
                    </li> -->

                    <li class="active"><a href="index.php"><span>Home</span></a></li>
                    <!-- <li><a href="about-coach.html"><span>About Coach</span></a></li>
                    <li><a href="typography.html"><span>Typography</span></a></li> -->
                    <li><a href="contacts.php"><span>Contact Us</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!--Swiper-->
      <div class="swiper-container swiper-slider" data-loop="false" data-autoplay="5500" data-dragable="false">
        <div class="swiper-wrapper text-center">
          <!-- <div class="swiper-slide" style="background-color: black;">
            <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-xl-center">
                    <div class="col-xl-12">
                      <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">No Pain No Gain</div>
                    </div>
                    <div class="col-xl-8 offset-top-10">
                      <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                        Having a perfect body requires a lot of training. Nice-looking body and
                        powerful organism are interconnected – and we can help you with both.
                      </h5>
                      <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="swiper-slide" data-slide-bg="images/20240805_094258.jpg" data-preview-bg="images/20240805_094258.jpg">
            <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-xl-center">
                    <div class="col-xl-12">
                      <div class="font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">
                        <h1>The Choice of Champions</h1>
                      </div>
                    </div>
                    <div class="col-xl-8 offset-top-10">
                      <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">New Balance Cricket Bats</h5>
                      <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/20240805_090952.jpg" data-preview-bg="images/20240805_090952.jpg">
            <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-xl-center">
                    <div class="col-xl-12">
                      <div class="font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">
                        <h1>Lead From The Front</h1>
                      </div>
                    </div>
                    <div class="col-xl-8 offset-top-10">
                      <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Gunn & Moore Cricket Bats</h5>
                      <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
        <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
        <div class="swiper-pagination"></div>
      </div>
    </header>

    <?php
    $category_rs2 = Database::search("SELECT * FROM `category` WHERE `cat_name`='Cricket Helmets'");
    $category_num2 = $category_rs2->num_rows;

    for ($y = 0; $y < $category_num2; $y++) {
      $category_data2 = $category_rs2->fetch_assoc();
    ?>
      <section id="product1" class="section-98 section-md-110 novi-background" data-preset='{"title":"Team","category":"content, team","reload":false,"id":"team"}'>
        <div class="container">
          <!-- <h1 class="text-center"><?php echo $category_data2["cat_name"]; ?></h1>
          <hr class="divider bg-danger"> -->
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-md-10 col-xl-12">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <?php

                  $product_rs = Database::search("SELECT * FROM `product` WHERE `category_cat_id`='" . $category_data2["cat_id"] . "' 
                                                AND `status_status_id`='1' ORDER BY `datetime_added`");

                  $product_num = $product_rs->num_rows;

                  for ($z = 0; $z < $product_num; $z++) {
                    $product_data = $product_rs->fetch_assoc();
                  ?>

                    <?php
                    $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "'");
                    $img_data = $img_rs->fetch_assoc();
                    ?>

                    <div class="box-member"><img class="img-fluid" src="<?php echo $img_data["img_path"]; ?>" alt="" />


                      <?php
                      if ($product_data["qty"] > 0) {

                      ?>
                        <!-- <div class="box-member"><img class="img-fluid" src="images/post.jpg" alt="" /> -->

                        <h5 class="font-weight-bold offset-top-20 text-left"><a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>'><?php echo $product_data["title"]; ?></a>
                        </h5>
                        <!--<span class="card-text text-warning fw-bold">In Stock</span><br />
                        <span class="card-text text-success fw-bold"><?php echo $product_data["qty"]; ?> Items Available</span><br /><br />
                        <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="col-6 btn btn-success" style="border-radius: 0;">
                          Buy Now
                        </a>
                        <button class="cart">
                          <i class="ri-shopping-cart-line i" onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                        </button> -->
                      <?php

                      } else {
                      ?>
                        <!-- <span class="card-text text-danger fw-bold">Out Of Stock</span><br /> -->
                        <!-- <span class="card-text text-danger fw-bold">00 Items Available</span><br /><br /> -->
                        <!-- <span class="card-text text-success fw-bold"><?php echo $product_data["qty"]; ?> Items Available</span><br /><br />
                        <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="col-6 btn btn-success" style="border-radius: 0;">
                          Buy Now
                        </a>
                        <button class="cart">
                          <i class="ri-shopping-cart-line i" onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                        </button> -->

                      <?php
                      }
                      ?>

                      <div class="box-member-caption">
                        <div class="box-member-caption-inner">
                          <ul class="list-inline list-inline-xs">
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="https://www.facebook.com/profile.php?id=61563666020045&mibextid=ZbWKwL"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-whatsapp icon-xs icon-circle icon-darkest-filled" href="https://wa.me/+94701826874?hi"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <p class="offset-xl-top-0 text-muted text-left">Rs.<?php echo $product_data["price"]; ?></p>
                    <p class="offset-xl-top-0 text-muted text-left">In Stock</p>
                </div>
                <div class="">

                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">

                <?php
                  }

                ?> </div>
              </div>
              <!-- <a class="offset-top-66 btn btn-danger" href="about-coach.html">view all coaches</a> -->
            </div>
          </div>
        </div>
      </section>
    <?php
    }

    ?>
    <!-- Page Footer-->
    <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
      <div class="container">
        <div class="row justify-content-md-center text-xl-left">
          <div class="col-md-12">
            <div class="row justify-content-sm-center">
              <div class="col-sm-10 col-md-3 text-left order-md-4 col-md-10 col-xl-3 offset-md-top-50 offset-xl-top-0 order-xl-2">
                <!-- Twitter Feed-->
                <p class="text-uppercase text-spacing-60 font-weight-bold text-center text-xl-left">Contact</p>
                
                <div class="offset-top-20">
                  <div class="" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                  
                    <!-- <p><strong>Address: </strong>Neelammahara, Kattuwawala, Colombo, Sri Lanka</p> -->
                    <p><strong>Phone: </strong>+94701826874</p>
                    <p><strong>Email: </strong>crickethut2024@gmail.com</p>
                    <!-- <div class="follow">
                        <h4>Follow us</h4>
                        <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="col-sm-10 col-md-3 offset-top-66 order-md-3 col-md-10 col-xl-2 offset-xl-top-0 order-xl-3">
                <!-- Flickr Feed-->
                <!-- <p class="text-uppercase text-spacing-60 font-weight-bold">Gallery</p>
                <div class="offset-top-24">
                  <div class="group-xs flickr widget-flickrfeed" data-lightgallery="group" data-flickr-tags="tm58888_landscapes"><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                  </div>
                </div> -->
              </div>
              <div class="col-sm-10 col-md-3 offset-top-66 order-md-2 offset-md-top-0 col-md-6 col-xl-4 order-xl-4">
                <div class="inset-xl-left-20">
                  <p class="text-uppercase text-spacing-60 font-weight-bold">Newsletter</p>
                  <p class="offset-top-20 text-left">
                    Keep up with our always upcoming news and updates. Enter your e-mail and
                    subscribe to our newsletter.
                  </p>
                  <div class="offset-top-30">
                    <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-group">
                        <div class="input-group input-group-sm"><span class="input-group-prepend"><span class="input-group-text input-group-icon"><span class="mdi mdi-email novi-icon"></span></span></span>
                          <input class="form-control" placeholder="Type your E-Mail" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-append">
                            <button class="btn btn-sm btn-danger" type="submit">Subscribe</button></span>
                        </div>
                      </div>
                      <div class="form-output" id="form-subscribe-footer"></div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-10 col-md-3 offset-top-66 order-md-1 offset-md-top-0 col-md-6 col-xl-3 order-xl-1">
                <!-- Footer brand-->
                <div class="footer-brand"><a href="index.php"><img width='173' height='30' src='images/logo1.png' alt='' /></a></div>
                <div class="offset-top-50 text-sm-center text-xl-left">
                  <ul class="list-inline">
                    <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="https://www.facebook.com/profile.php?id=61563666020045&mibextid=ZbWKwL"></a></li>
                    <li class="list-inline-item"><a class="novi-icon icon fa fa-whatsapp icon-xxs icon-circle icon-darkest-filled" href="https://wa.me/+94701826874?hi"></a></li>
                    <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                    <li class="list-inline-item"><a class="novi-icon icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Java script-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script src="script.js"></script>
</body>

</html>