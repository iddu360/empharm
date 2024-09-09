<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmPharm</title>
  <?php
  include './head.php'
  ?>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
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
        <div class="">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./Empharm_Online_Pharmacy_home" aria-current="page"> <span class="bx bx-home"></span> Home</a>
            </li>
            <li class="nav-item">
              <input type="submit" class="btn btn-outline-info btn-sm my-2" value="Check Out">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <div class="container mt-5 pt-5 bg-light rounded">
    <!-- <div class="d-flex"> -->
    <!-- <section class="container my-5 bg-light rounded"> -->
    <h2 class="text-center pt-5">Cart Checkout</h2>
    <div class="row p-3">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Location</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Pickup Station</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <hr>

          <div class="row g-3">

            <h4 class="mb-3">Payment</h4>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="" id="" checked />
              <label class="form-check-label" for="">
                <h5 class="fw-bold">Mobile Money</h5>
              </label>
            </div>

            <div class="col-sm-4">
              <label for="" class="form-label">Country</label>
              <select class="form-select form-select" name="" id="">
                <option selected>Select Country</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
              </select>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-3">
              <label for="" class="form-label">Operator</label>
              <select class="form-select form-select" name="" id="">
                <option selected>Select operator</option>
                <option value="">Mtn</option>
                <option value="">Airtel</option>
                <option value="">Lyca</option>
              </select>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-5">
              <label for="lastName" class="form-label">Contact</label>
              <div class="input-group has-validation">
                <span class="input-group-text">+256 </span>
                <input type="text" class="form-control" id="" placeholder="Contact" required="">
                <div class="invalid-feedback">
                  Your Contact is required.
                </div>
              </div>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <button class="btn btn-primary">Checkout</button>

          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Notify me via email <span class="text-secondary">(Otherwise, SMS)</span></label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">


          <div class="my-3">

            <div class="form-check">
              <input class="form-check-input" type="radio" name="" id="" />
              <label class="form-check-label" for="">
                <h5 class="fw-bold">Cards Billing</h5>
              </label>
            </div>

            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary" type="submit">Checkout</button>
        </form>
      </div>

      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
        <?php
                    if (!empty($_SESSION["shopping_cart"])) {
                      $total = 0;
                      foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    ?>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?php echo $values["item_name"]; ?></h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary"><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong><?php echo $total+=$total; ?></strong>
          </li>
        </ul>
        <?php } } ?>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
    </div>
    <!-- </section> -->
    <!-- </div> -->
  </div>

  <script>
    AOS.init();
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>