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
  <link rel="stylesheet" href="style2.scss">

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

  <?php
  $category_rs2 = Database::search("SELECT * FROM `category`");
  $category_num2 = $category_rs2->num_rows;

  for ($y = 0; $y < $category_num2; $y++) {
    $category_data2 = $category_rs2->fetch_assoc();
  ?>
    <section id="product1" class="section-98 section-md-110 novi-background" data-preset='{"title":"Team","category":"content, team","reload":false,"id":"team"}'>
      <div class="container">
        <!--<h1 class="text-center"><?php echo $category_data2["cat_name"]; ?></h1>
        <hr class="divider bg-danger">-->
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

                  <!-- <div class="box-member"><img class="img-fluid" src="<?php echo $img_data["img_path"]; ?>" alt="" /> -->


                  <?php
                  if ($product_data["qty"] > 0) {

                  ?><div class="box-member">
                    <img class="img-fluid" src="images/post.jpg" alt="" />

                      <h5 class="font-weight-bold offset-top-20"><a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>'><?php echo $product_data["title"]; ?></a>
                      </h5>
                      <!-- <span class="card-text text-warning fw-bold">In Stock</span><br />
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
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                    <p class="offset-xl-top-0 text-muted">He has more than 10 years of experience in CrossFit and professional athletics.</p>
              </div>
              <div class="">

              </div>
              <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">

              <?php
                }
              ?>
              </div>
            </div>

            <a class="offset-top-66 btn btn-danger" href="about-coach.html">view all coaches</a>
          </div>
        </div>
      </div>
    </section>
  <?php
  }

  ?>



<!-- <section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
				</div>
				<img src="https://res.cloudinary.com/john-mantas/image/upload/v1537291846/codepen/delicious-apples/green-apple-with-slice.png" alt="green apple slice">
			</div>
			<div class="photo-album">
				<ul>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303532/codepen/delicious-apples/half-apple.png" alt="half apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303160/codepen/delicious-apples/green-apple-flipped.png" alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303708/codepen/delicious-apples/apple-top.png" alt="apple top"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1>Delicious Apples</h1>
			<span>COD: 45999</span>
		</div>
		<div class="price">
			R$ <span>7.93</span>
		</div>
		<div class="variant">
			<h3>SELECT A COLOR</h3>
			<ul>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302752/codepen/delicious-apples/yellow-apple.png" alt="yellow apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302427/codepen/delicious-apples/orange-apple.png" alt="orange apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302285/codepen/delicious-apples/red-apple.png" alt="red apple"></li>
			</ul>
		</div>
		<div class="description">
			<h3>BENEFITS</h3>
			<ul>
				<li>Apples are nutricious</li>
				<li>Apples may be good for weight loss</li>
				<li>Apples may be good for bone health</li>
				<li>They're linked to a lowest risk of diabetes</li>
			</ul>
		</div>
		<button class="buy--btn">ADD TO CART</button>
	</div>
</section>

<footer>
	<p>Design from <a href="https://dribbble.com/shots/5216438-Daily-UI-012">dribbble shot</a> of <a href="https://dribbble.com/rodrigorramos">Rodrigo Ramos</a></p>
</footer> -->


<!-- 2 -->
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="https://i.imgur.com/Dhebu4F.jpg" width="250" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">$20</span>
                                    <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div>
                                </div>
                            </div>
                            <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                            </div>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function change_image(image){

var container = document.getElementById("main-image");

container.src = image.src;
}



document.addEventListener("DOMContentLoaded", function(event) {







});
</script>


  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script src="script.js"></script>
</body>

</html>