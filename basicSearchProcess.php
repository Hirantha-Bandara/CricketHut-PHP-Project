<?php

include "connection.php";

$txt = $_POST["t"];
$select = $_POST["s"];

$query = "SELECT * FROM `product` ";

if (!empty($txt) && $select == 0) {
    $query .= "WHERE `title` LIKE '%" . $txt . "%'";
} else if (empty($txt) && $select != 0) {
    $query .= "WHERE `category_cat_id`='" . $select . "'";
} else if (!empty($txt) && $select != 0) {
    $query .= "WHERE `title` LIKE '%" . $txt . "%' AND `category_cat_id`='" . $select . "'";
}

$pageno = isset($_POST["page"]) ? $_POST["page"] : 1;

$product_rs = Database::search($query);
$product_num = $product_rs->num_rows;

$results_per_page = 100;
$number_of_pages = ceil($product_num / $results_per_page);

$page_results = max(($pageno - 1) * $results_per_page, 0); // Ensure page_results is non-negative
$selected_rs = Database::search($query . " LIMIT " . $results_per_page . " OFFSET " . $page_results);
$selected_num = $selected_rs->num_rows;

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
    <div class="rd-navbar-top-panel context-dark bg-dark p-3">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <div class="rd-navbar-brand">
                <a href="index.php"><img width='173' src='images/logo1.png' alt='' /></a>
            </div>
            <ul style="display: flex; list-style: none; padding: 10px; margin: 0;">
                <li style="margin-left: 20px;"><a href="index.php" style="font-size: 25px;" class="ri-home-line"></a></li>
                <li style="margin-left: 20px;"><a href="contacts.php" class="ri-contacts-line" style="font-size: 25px;"></a></li>
                <!-- <li style="margin-left: 20px;"><a href="" class="ri-shopping-cart-2-line" style="font-size: 25px;"></a></li> -->
            </ul>
        </div>
    </div>

    <div class="rd-navbar-top-panel context-dark bg-warning p-3">
        <div class="col-12 ">

            <input type="text" class="col-4 p-2" style=" border: 0;" aria-label="Text input with dropdown button" id="basic_search_txt" placeholder="Search here">

            <select class="" id="basic_search_select" style="background-color: white; padding: 11px; width: 140px; border: 0;">
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

            <button class="searchbtn" style="padding: 8px; background-color: black; border: 0; width: 90px; color: white; font-weight: bold;" onclick="basicSearch(0);">&nbsp;&nbsp;Search&nbsp;</button>

        </div>
        <div class="center">

        </div>
        <div class="right-side">
            <ul class="list-inline list-inline-sm">

            </ul>
        </div>
    </div>

    <?php
    if ($product_num == 0) {
        echo '<p class="text-center">No products found.</p>';
    } else {
        $count = 0; // Initialize a counter

        for ($x = 0; $x < $selected_num; $x++) {
            $selected_data = $selected_rs->fetch_assoc();
            if ($count % 4 == 0) { // Start a new row every 4 products
                if ($count != 0) {
                    echo '</div>'; // Close the previous row
                }
                echo '<div class="row justify-content-sm-center offset-top-66">'; // Start a new row
            }
            $count++;
    ?>

            <div class="col-md-6 col-xl-2">
                <?php
                $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $selected_data["id"] . "'");
                $img_data = $img_rs->fetch_assoc();
                ?>
                <div class="box-member">
                    <!-- <img class="img-fluid" src="images/post.jpg" alt="" /> -->
                    <img class="img-fluid" src="<?php echo $img_data["img_path"]; ?>" alt="" width="600px" height="600px" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);" />
                    <h5 class="font-weight-bold offset-top-20 "><a href='<?php echo "singleProductView.php?id=" . ($selected_data["id"]); ?>'><?php echo $selected_data["title"]; ?></a></h5>
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
                    <p class="offset-xl-top-0 text-muted ">&nbsp;Rs.<?php echo $selected_data["price"]; ?></p>
                    <!-- <p class="offset-xl-top-0 text-muted ">&nbsp;In Stock</p> -->
            </div>

    <?php
        }

        if ($count % 4 != 0) { // Close the last row if it wasn't closed
            echo '</div>';
        }
    }
    ?>

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="script.js"></script>
</body>
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

</html>