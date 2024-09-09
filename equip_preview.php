<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmPharm</title>
  <?php
  include './head.php';
  session_start();

  if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
      $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
      if (!in_array($_GET["id"], $item_array_id)) {
        $count = count($_SESSION["shopping_cart"]);
        $item_array = array(
          'item_id' => $id,
          'item_name' => $_POST["hidden_name"],
          'item_price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][$count] = $item_array;
      } else {
        // echo '<script>alert{"Item Already added!"}</script>';
        echo '<script>window.location="./Your_selected_item_preview</script>';
      }
    } else {
      $item_array = array(
        'item_id' => $id,
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][0] = $item_array;
    }
  }

  if (isset($_GET["action"])) {
    if ($_GET["action"] == "add") {
      foreach ($_SESSION["shopping_cart"] as $keys => $values) {
        if ($values["item_id"] == $id) {
          unset($_SESSION["shopping_cart"][$keys]);
          // echo '<script>alert("Item Removed!")</script>';
          echo '<script>window.locaton="./Your_selected_item_preview"</script>';
        }
      }
    } elseif ($_GET["action"] == "remove") {
      foreach ($_SESSION["shopping_cart"] as $keys => $values) {
        if ($values["item_id"] == $id) {
          unset($_SESSION["shopping_cart"][$keys]);
          // echo '<script>alert("Item Removed!")</script>';
          echo '<script>window.locaton="./Your_selected_item_preview"</script>';
        }
      }
    }
  }

  ?>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">E</span>m<span class="text-primary">P</span>harm</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <div class="m-auto">
          <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        <div class="m-auto">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./index.php" aria-current="page"> <span class="bx bx-home"></span> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Onpharm_shopping_cart"><span class="bx bx-cart"></span> View Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5 pt-3">
    <div class="d-flex">
      <div class="col-4 m-1">
        <form action="cart.php?action=add&id=<?php echo $row["eq_id"]; ?>">
          <div class="card">
            <?php

            $id = '';
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
            }

            // $sqlout = 'SELECT * FROM med_stock WHERE drug_id=$id';
            $sqlout = 'SELECT * FROM equip_stock ';
            $query = $conn->prepare($sqlout);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
              $itemId = $row['eq_id'];
              $itemName = $row['eq_name'];
              $itemPrice = $row['price'];
              // $itemQuantity = $_POST['quantity'];
            ?>
              <img class="card-img-top" src="./assets/img/<?php echo $row['eq_image']; ?>" alt="Title">
              <div class="card-body text-center p-1">
                <h4 class="card-title"><?php echo $itemName ?></h4>
                <div class="row">
                  <div class="d-flex">
                    <div class="col-4">
                      <div class="card m-1">
                        <img src="./assets/img/<?php echo $row['eq_image']; ?>" alt="alt drug" class="img-fluid card-img-top">
                      </div>
                    </div>
                  </div>
                </div>
                <p class="card-text mb-0"><?php echo $row['manufacturer']; ?></p>
                <span class="card-text"><?php echo $itemPrice ?></span><br>
                <div class="row">
                  <p class="my-0">Availability: <?php
                                                if ($row['quantity'] == 0) {
                                                  echo '<span class="text-danger">Out of Stock</span>';
                                                } else {
                                                  echo '<span class="text-success">In Stock</span>';
                                                }
                                                ?></p>
                </div>
                <!-- <button class="btn btn-info my-1">Add to Cart <span class="bx bx-cart-add"></span></button> -->
                <input type="number" min="1" class="form-control-sm" name="quantity">
                <input type="hidden" name="hidden_name" value="<?php echo $row['eq_name']; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
                <input type="submit" name="add_to_cart" value="Add To Cart" class="btn btn-info my-1">
              </div>
          </div>
        </form>
        <div class="card my-1 p-1">
          <div class="">
            <p class="mb-0">Ratings</p>
            <span class="bx bxs-star"></span>
            <span class="bx bxs-star"></span>
            <span class="bx bxs-star"></span>
            <span class="bx bx-star"></span>
            <span class="bx bx-star"></span>
          </div>
          <hr>
          <div>
            <p class="mb-0">Share <span class="bx bx-share" style="transform:rotateY(180deg);"></span></p>
            <span class="bx bxl-facebook"></span>
            <span class="bx bxl-whatsapp"></span>
            <span class="bx bxl-twitter"></span>
          </div>
          <hr>
          <div>
            <p class="mb-0">Find related Equipment</p>
            <div class="d-flex">
              <div class="d-flex">
                <?php

                $class = '';
                if (isset($_GET['class'])) {
                  $class = $_GET['class'];
                }

                // $sqlout = 'SELECT * FROM med_stock WHERE drug_class=$class';
                $sqlout2 = 'SELECT * FROM equip_stock';
                $query2 = $conn->prepare($sqlout2);
                $query2->execute();
                $result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result2 as $row2) {
                ?>
                  <div class="col-3">
                    <div class="card m-1">
                      <img src="./assets/img/<?php echo $row2['eq_image']; ?>" alt="alt equipment" class="img-fluid card-img-top">
                      <div class="card-body py-1 px-m-0">
                        <small class="m-0 card-text"><?php echo $row2['eq_name']; ?></small>
                      </div>
                    <?php
                  }
                    ?>
                    </div>
                  </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-8 m-1">
        <div class="card p-1">
          <h5 class="fw-bold">Equipment Information</h5>
          <hr>
          <p class="mb-0"><b>Equipment Name:</b> <?php echo $row['eq_name']; ?></p>
          <p class="mb-0"><b>Brand Name:</b> <?php echo $row['eq_code']; ?></p>
          <p class="mb-0"><b>Equipment Category:</b> <?php echo $row['category']; ?></p>
          <p class="mb-0"><b>Price</b> <?php echo $row['price']; ?> </p>
          <p class="mb-0"><b>Manufacturer Information:</b> <?php echo $row['manufacturer']; ?></p>
          <hr>
          <h5>FeedBack</h5>
          <div>
            <p class="fw-bold my-0"><span class="bx bx-user"></span> User1</p>
            <small>Lorem ipsum dolor sit amet.</small>
          </div>
          <div>
            <p class="fw-bold my-0"><span class="bx bx-user"></span> User2</p>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
          </div>
          <div>
            <p class="fw-bold my-0"><span class="bx bx-user"></span> User3</p>
            <small>lorem</small>
          </div>
        </div>
        <div class="d-flex">
          <div class="col-6 m-1">
            <div class="card my-1 p-1">
              <h5 class="fw-bold mt-2">Cart Details <span class="bx bx-cart"></span></h5>
              <hr>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Item</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="">
                      <td scope="row">Item 1</td>
                      <td>3</td>
                      <td>$500</td>
                      <td><span class="bx bx-plus bg-primary rounded-1"></span> <span class="bx bx-minus bg-danger rounded-1"></span></td>

                    </tr>
                    <?php
                    if (!empty($_SESSION["shopping_cart"])) {
                      $total = 0;
                      foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    ?>
                        <tr>
                          <td scope="row">
                            <?php echo $values["item_name"]; ?>
                          </td>
                          <td>
                            <input type="number" min="1" class="form-control-sm" name="quantity">
                            <!-- <?php echo $values["item_quantity"]; ?> -->
                          </td>
                          <td>
                            <?php echo $values["item_price"]; ?>
                          </td>
                          <td>
                            <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>
                          </td>
                          <td><a href="./Your_selected_item_preview?action=add&id=<?php echo $values["item_id"]; ?>"><span class="bx bx-plus bg-primary rounded-1"></span></a>
                            <a href="./Your_selected_item_preview?action=remove&id=<?php echo $values["item_id"]; ?>">
                              <span class="bx bx-minus bg-danger rounded-1"></span>
                            </a>
                          </td>
                        </tr>

                    <?php

                      }
                    }

                    ?>

                    </tr>
                    <tr class="">
                      <td scope="row">Item 2</td>
                      <td>5</td>
                      <td>$650</td>
                      <td><span class="bx bx-plus bg-primary rounded-1"></span> <span class="bx bx-minus bg-danger rounded-1"></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          <div class="col-6 m-1">
            <div class="card my-1 p-1">
              <h5 class="fw-bold mt-2">Checkout Details <span class="bx bx-cart"></span></h5>
              <div class="table-responsive">
                <table class="table table-hover">
                  <?php
                  if (!empty($_SESSION["shopping_cart"])) {
                    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                      $total = $total + ($values["item_quantity"] * $values["item_price"]);

                      $tax = 500;
                      $shipping = 1000;
                  ?>
                      <thead>
                        <tr>
                          <th scope="col">Subtotal</th>
                          <th scope="col">$<?php echo number_format($total, 2); ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr class="">
                      <td scope="row">Discounts</td>
                      <td>$657</td>
                    </tr> -->
                        <tr class="">
                          <td scope="row">Tax</td>
                          <td><?php echo $tax; ?></td>
                        </tr>
                        <tr class="">
                          <td scope="row">Shipping</td>
                          <td><?php echo $shipping; ?></td>
                        </tr>
                        <tr class="">
                          <td scope="row">Total</td>
                          <?php $gtotal = $total + $tax + $shipping; ?>
                          <td><?php echo $gtotal; ?></td>
                        </tr>
                      </tbody>
                </table>
              </div>
          <?php
                    }
                  }else{
                    echo '<h4 class="text-center">Cart is empty!</h4>';
                  }
          ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>


    <script>
      AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>