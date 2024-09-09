<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OnPharm - register</title>
  <?php
  include './head.php'
  ?>
</head>

<body>

  <main>
    <div class="container">

      <section class="section min-vh-100 d-flex align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/epfavicon.png" alt="">
                  <span class="d-none d-lg-block">EmPharm</span>
                </a>
              </div> -->
              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="d-flex justify-content-center py-4">
                    <a href="./Empharm_Online_Pharmacy_home" class="logo align-items-center w-auto text-center">
                      <img src="assets/img/epfavicon.png" alt="" class="">
                      <h2 class="d-lg-block fw-bold text-info">EmPharm</h2>
                    </a>
                  </div>

                  <h3 class="text-center">Step 4 of 4</h3>

                  <form class="row g-3 needs-validation" method="post" novalidate>
                    <!-- <div class="col-12">
                      <label for="pharmacyOpen" class="form-label">Pharmacy Opening Time</label>
                      <div class="input-group flex-nowrap">
                        <input type="time" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" id="pharmacyOpen" required>
                        <span class="input-group-text rounded" id="addon-wrapping"><i class="bi bi bi-chevron-down"></i></span>
                        <div class="invalid-feedback">Please, enter the Opening time!</div>
                      </div>
                    </div> -->

                    <div class="col-12">
                      <label class="col-form-label">Preferred payment methods</label>
                      <div class="">
                        <select class="form-select" aria-label="">
                          <option selected="">Select accepted Payment options for clients</option>
                          <option value="1">Visa</option>
                          <option value="2">Paypal</option>
                          <option value="3">Credit</option>
                        </select>
                      </div>
                    </div>

                    <hr class="my-2">

                    <h4 class="fw-bold">Checkout details</h4>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="contactNum" class="form-label">Contact<span class="text-secondary">()</span></label>
                        <input type="text" class="form-control" id="contactNum" placeholder="Enter number" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Number.
                        </div>
                      </div>

                      <div class="col-md-6">
                        <label for="contactEm" class="form-label">Email</label>
                        <input type="email" class="form-control" id="contactEm" placeholder="Enter your Email" required="">
                        <div class="invalid-feedback">
                          Your telephone number is required.
                        </div>
                      </div>
                    </div>

                    <hr class="my-2">

                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="addressEm">
                      <label class="form-check-label" for="addressEm">Receive email Notifications <span class="text-secondary">(Otherwise, SMS)</span></label>
                    </div>

                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="infoSave">
                      <label class="form-check-label" for="infoSave">Save payment info to Dashboard</label>
                    </div>

                    <hr class="my-2">

                    <h4 class="">Payment Option</h4>

                    <div class="my-1">
                      <div class="form-chegck">
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

                    <div class="row">
                      <div class="col-md-6">
                        <label for="cardName" class="form-label">Name on Card</label>
                        <input type="text" class="form-control" id="cardName" placeholder="" required="">
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

                      <div class="col-md-6">
                        <label for="" class="form-label">Validity</label>
                        <input type="date" class="form-control" id="" placeholder="" required="" pattern="mm/yy">
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>

                      <div class="col-md-6">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>

                      <div class="col-md-12">
                        <label for="cc-cvv" class="form-label">Paypal id <span class="text-secondary">(paypal account email)</span></label>
                        <input type="email" class="form-control" id="cc-cvv" placeholder="" required="">
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>

                    <hr class="my-2">

                    <div class="col-12">
                      <a class="btn btn-outline-info w-100" href="./Onpharm_registration_success">Proceed to checkout</a>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>