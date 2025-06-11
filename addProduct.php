<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Add Product | .store</title>
  <link rel="stylesheet" href="bootstrap_2.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="icon" href="resource/logo.png" />

</head>

<body>

  <div class="container-fluid col-8">
    <div class="row gy-3">
      <?php

      session_start();

      // include "header.php";

      if (isset($_SESSION["u"])) {

        include "connection.php";

      ?>

        <div class="col-12" style="padding: 20px;">
          <div class="row">

            <div class="col-12 ">
              <h2 class="h2 text-primary fw-bold">Add New Product</h2>
            </div>

            <div class="" style="border: 1px solid black; padding: 20px; box-shadow: black;">
              <div class="col-12">
                <div class="row">

                  <div class="col-12">
                    <div class="row">
                      <div class="col-12">
                        <label class="form-label fw-bold" style="font-size: 20px;">
                          Add a Title to your Product
                        </label>
                      </div>
                      <div class="offset-0 offset-lg-2 col-12 col-lg-8" style="margin-left: 0;">
                        <input type="text" class="form-control" id="title" style="border-radius: 0;" />
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <hr class="border-success" />
                  </div>

                  <div class="col-12 col-lg-4 border-end border-dark">
                    <div class="row">

                      <div class="col-12">
                        <label class="form-label fw-bold" style="font-size: 20px;">Select Product Category</label>
                      </div>

                      <div class="col-12">
                        <select class="form-select text-center" id="category" style="border-radius: 0;">
                          <option value="0">Select Category</option>
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
                      </div>

                    </div>
                  </div>

                  <div class="col-12 col-lg-4 border-end border-dark">
                    <div class="row">

                      <div class="col-12">
                        <label class="form-label fw-bold" style="font-size: 20px;">Select Product Brand</label>
                      </div>

                      <div class="col-12">
                        <select class="form-select text-center" id="brand" style="border-radius: 0;">
                          <option value="0">Select Brand</option>
                          <?php
                          $brand_rs = Database::search("SELECT * FROM `brand`");
                          $brand_num = $brand_rs->num_rows;

                          for ($x = 0; $x < $brand_num; $x++) {
                            $brand_data = $brand_rs->fetch_assoc();
                          ?>
                            <option value="<?php echo $brand_data["brand_id"]; ?>">
                              <?php echo $brand_data["brand_name"]; ?>
                            </option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>

                    </div>
                  </div>

                  <div class="col-12 col-lg-4 ">
                    <div class="row">

                      <div class="col-12">
                        <label class="form-label fw-bold" style="font-size: 20px;">Select Product Model</label>
                      </div>

                      <div class="col-12">
                        <select class="form-select text-center" id="model" style="border-radius: 0;">
                          <option value="0">Select Model</option>
                          <?php
                          $model_rs = Database::search("SELECT * FROM `model`");
                          $model_num = $model_rs->num_rows;

                          for ($x = 0; $x < $model_num; $x++) {
                            $model_data = $model_rs->fetch_assoc();
                          ?>
                            <option value="<?php echo $model_data["model_id"]; ?>">
                              <?php echo $model_data["model_name"]; ?>
                            </option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>

                    </div>
                  </div>

                  <div class="col-12">
                    <hr class="border-success" />
                  </div>





                  <div class="col-12">
                    <div class="row">

                      <div class="col-12 col-lg-4 border-end border-success">
                        <div class="row">
                          <div class="col-12">
                            <label class="form-label fw-bold" style="font-size: 20px;">Select Product Condition</label>
                          </div>
                          <div class="col-12">
                            <div class="form-check form-check-inline mx-5">
                              <input class="form-check-input" type="radio" name="c" id="b" checked />
                              <label class="form-check-label fw-bold" for="b">Brandnew</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="c" id="u" />
                              <label class="form-check-label fw-bold" for="u">Used</label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 col-lg-4 border-end border-success">
                        <div class="row">

                          <div class="col-12">
                            <label class="form-label fw-bold" style="font-size: 20px;">Select Product Colour</label>
                          </div>

                          <div class="col-12">

                            <select class="col-12 form-select" id="clr" style="border-radius: 0;">
                              <option value="0">Select Colour</option>
                              <?php
                              $clr_rs = Database::search("SELECT * FROM `color`");
                              $clr_num = $clr_rs->num_rows;

                              for ($x = 0; $x < $clr_num; $x++) {
                                $clr_data = $clr_rs->fetch_assoc();
                              ?>
                                <option value="<?php echo $clr_data["clr_id"]; ?>">
                                  <?php echo $clr_data["clr_name"]; ?>
                                </option>
                              <?php
                              }
                              ?>
                            </select>

                          </div>

                        </div>
                      </div>

                      <div class="col-12 col-lg-4">
                        <div class="row">
                          <div class="col-12">
                            <label class="form-label fw-bold" style="font-size: 20px;">Add Product Quantity</label>
                          </div>
                          <div class="col-12">
                            <input type="number" class="form-control" value="0" min="0" id="qty" style="border-radius: 0;" />
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-12">
                    <hr class="border-success" />
                  </div>
                  <div class="col-12 col-lg-4 border-end border-dark">
                    <div class="row">

                      <div class="col-12">
                        <label class="form-label fw-bold" style="font-size: 20px;">Cost Per Item</label>
                      </div>

                      <div class="col-12">
                        <div class="">
                          <div class="input-group mb-2 mt-2">
                            <span class="input-group-text" style="border-radius: 0;">Rs.</span>
                            <input type="text" class="form-control" id="cost" />
                            <span class="input-group-text" style="border-radius: 0;">.00</span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-12 col-lg-4 border-end border-dark">
                    <div class="row">

                      <div class="col-12">
                        <label class="form-label fw-bold" style="font-size: 20px;">Delivery cost Within Colombo</label>
                      </div>

                      <div class="col-12">
                        <div class="input-group mb-2 mt-2">
                          <span class="input-group-text" style="border-radius: 0;">Rs.</span>
                          <input type="text" class="form-control" id="dwc" />
                          <span class="input-group-text" style="border-radius: 0;">.00</span>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-12 col-lg-4 ">
                    <div class="row">

                      <div class="col-12">
                        <label class="form-label fw-bold" style="font-size: 20px;">Delivery cost out of Colombo</label>
                      </div>

                      <div class="col-12">
                        <div class="input-group mb-2 mt-2">
                          <span class="input-group-text" style="border-radius: 0;">Rs.</span>
                          <input type="text" class="form-control" id="doc" />
                          <span class="input-group-text" style="border-radius: 0;">.00</span>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
              </div>

              <div class="col-12">
                <hr class="border-success" />
              </div>

              <div class="col-12">
                <div class="row">
                  <div class="col-12">
                    <label class="form-label fw-bold" style="font-size: 20px;">Product Description</label>
                  </div>
                  <div class="col-12">
                    <textarea cols="10" rows="5" class="form-control" id="desc"></textarea>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <hr class="border-dark" />
              </div>

              <div class="col-12">
                <div class="row">
                  <div class="col-12">
                    <label class="form-label fw-bold" style="font-size: 20px;">Add Product Images</label>
                  </div>
                  <div class="offset-lg-3 col-12 col-lg-6">
                    <div class="row">
                      <div class="col-4 border border-primary rounded">
                        <img src="resource/addproductimg.svg" class="img-fluid" style="width: 250px;" id="i0" />
                      </div>
                      <div class="col-4 border border-primary rounded">
                        <img src="resource/addproductimg.svg" class="img-fluid" style="width: 250px;" id="i1" />
                      </div>
                      <div class="col-4 border border-primary rounded">
                        <img src="resource/addproductimg.svg" class="img-fluid" style="width: 250px;" id="i2" />
                      </div>
                    </div>
                  </div>
                  <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3">
                    <input type="file" class="d-none" multiple id="imageuploader" />
                    <label for="imageuploader" class="col-12 btn btn-dark" style="border-radius: 0;" onclick="changeProductImage();">Upload Images</label>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <hr class="border-success" />
              </div>

              <div class="offset-lg-4 col-12 col-lg-4 d-grid mt-3 mb-3">
                <button class="btn btn-warning" onclick="addProduct();" style="border-radius: 0;" id="liveToastBtn">Save Product</button>
              </div>

            </div>
          </div>
        </div>

    </div>
  </div>

<?php

      } else {
        header("Location: home.php");
      }

?>


</div>
</div>



<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <i class="ri-notification-3-line"></i>
      <strong class="me-auto">Notice...</strong>
      <small>Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      We are taking 5% of the product from price from every product as a service charge.
    </div>
  </div>
</div>

<!-- <?php include "footer.php"; ?> -->
<script src="bootstrap.bundle.js"></script>
<script src="bootstrap.js"></script>
<script src="script.js"></script>
</body>

</html>