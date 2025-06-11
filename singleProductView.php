<?php
include "connection.php";

if (isset($_GET["id"])) {

    $pid = $_GET["id"];

    $product_rs = Database::search("SELECT product.id, product.price, product.qty, product.description, product.title, product.datetime_added, product.delivery_fee_colombo, product.delivery_fee_other, product.category_cat_id, product.model_has_brand_id, product.condition_condition_id, product.status_status_id, product.user_email, model.model_name AS mname, brand.brand_name AS bname FROM `product` INNER JOIN `model_has_brand` ON model_has_brand.id = product.model_has_brand_id INNER JOIN `brand` ON brand.brand_id = model_has_brand.brand_brand_id INNER JOIN `model` ON model.model_id = model_has_brand.model_model_id WHERE product.id = '" . $pid . "'");

    $product_num = $product_rs->num_rows;
    if ($product_num == 1) {

        $product_data = $product_rs->fetch_assoc();
?>

        <!DOCTYPE html>
        <html class="wow-animation" lang="en">

        <head>
            <title><?php echo $product_data["title"]; ?> | Cricket Hut</title>
            <meta charset="utf-8">
            <meta name="format-detection" content="telephone=no">
            <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="keywords" content="intense web design multipurpose template">
            <meta name="date" content="Dec 26">
            <link rel="icon" href="images/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="style2.scss">
            <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
            <style>
                body,
                html {
                    height: 100%;
                    margin: 0;
                }

                .container-center {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100%;
                }

                .card {
                    width: 100%;
                    max-width: 900px;
                    /* Optional: set a max-width for better responsiveness */
                }
            </style>
        </head>

        <body style="background-color: white;">
            
            <div class="rd-navbar-top-panel context-dark bg-dark p-3" style="margin-bottom: 100px;">
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div class="rd-navbar-brand">
                        <a href="index.php"><img width='173' src='images/logo1.png' alt='' /></a>
                    </div>
                    <ul style="display: flex; list-style: none; padding: 10px; margin: 0;">
                        <li style="margin-left: 20px;"><a href="index.php" style="font-size: 25px;" class="ri-home-line"></a></li>
                        <li style="margin-left: 20px;"><a href="contacts.php" class="ri-contacts-line" style="font-size: 25px;"></a></li>
                    </ul>
                </div>
            </div>
            <!-- <br><br><br><br> -->
            <div class="container-center"style="margin-bottom: 100px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <?php
                                $image_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $pid . "'");
                                $image_num = $image_rs->num_rows;
                                $img = array();

                                if ($image_num != 0) {
                                    for ($x = 0; $x < $image_num; $x++) {
                                        $image_data = $image_rs->fetch_assoc();
                                        $img[$x] = $image_data["img_path"];
                                    }
                                ?>
                                    <div class="text-center p-4">
                                        <img id="main-image" src="<?php echo $img[0]; ?>" width="300" alt="Product Image" />
                                    </div>
                                    <div class="thumbnail text-center">
                                        <?php
                                        for ($x = 0; $x < $image_num; $x++) {
                                        ?>
                                            <img onclick="change_image(this)" src="<?php echo $img[$x]; ?>" width="70" alt="Product Thumbnail">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="text-center p-4">
                                        <img id="main-image" src="images/default-product.jpg" width="250" alt="Default Product Image" />
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i><a class="ml-1" href="javascript:history.back();">Back</a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?php echo $product_data["bname"]; ?></span>
                                    <h5 class="text-uppercase"><?php echo $product_data["title"]; ?></h5>

                                    <?php
                                    $price = $product_data["price"];
                                    $adding_price = ($price / 100) * 10;
                                    $new_price = $price + $adding_price;
                                    $difference = $new_price - $price;
                                    ?>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price">Rs.<?php echo $price; ?>.00</span>
                                        <div class="ml-2"> <small class="dis-price" style="color: red;"> Rs.<?php echo $new_price; ?>.00</small> <span>10% OFF</span> </div>
                                    </div>
                                </div>
                                <p class="about"><?php echo $product_data["description"]; ?></p>
                                <div class="cart mt-4 align-items-center">
                                    <a href="https://wa.me/+94701826874?text=<?php echo urlencode('Hi, I am interested in buying the product ' . $product_data['title'] . ' priced at Rs.' . $product_data['price'] . '. Description: ' . $product_data['description']); ?>" class="btn btn-danger text-uppercase mr-2 px-4">Buy Now</a>
                                    <i class="fa fa-share-alt text-muted" onclick="shareProduct()" style="cursor:pointer;"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <br><br><br><br><br><br> -->
            <script>
                function change_image(image) {
                    var container = document.getElementById("main-image");
                    container.src = image.src;
                }

                function shareProduct() {
                    if (navigator.share) {
                        navigator.share({
                            title: '<?php echo $product_data["title"]; ?>',
                            text: '<?php echo $product_data["description"]; ?>',
                            url: window.location.href
                        }).then(() => {
                            console.log('Thanks for sharing!');
                        }).catch((err) => {
                            console.error('Error sharing:', err);
                        });
                    } else {
                        alert('Web Share API is not supported in your browser.');
                    }
                }

                document.addEventListener("DOMContentLoaded", function(event) {
                    // Add any additional event listeners if needed
                });
            </script>

        </body>

        </html>

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
<?php
    }
}
?>
