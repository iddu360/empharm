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

                  <h3 class="text-center">Step 2 of 4</h3>

                  <form class="row g-3 needs-validation">
                    <div class="col-12">
                      <label for="pharmacyName" class="form-label">Pharmacy Name</label>
                      <input type="text" name="name" class="form-control" id="pharmacyName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="pharmacyEmail" class="form-label">Pharmacy Email</label>
                      <input type="email" name="email" class="form-control" id="pharmacyEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="pharmacyAddress" class="form-label">Pharmacy Address</label>
                      <div class="input-group has-validation">
                        <input type="text" name="pharmacyAddress" class="form-control" id="pharmacyAddress" required>
                        <div class="invalid-feedback">Please enter Pharmacy address.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="pharmacyContact" class="form-label">Pharmacy Contact</label>
                      <input type="tel" name="oharmacyContact" class="form-control" id="pharmacyContact" required>
                      <div class="invalid-feedback">Please enter Pharmacy Contact!</div>
                    </div>
                    <div class="col-12">
                      <a class="btn btn-outline-info w-100" href="./Register_to_Ompharm_online_pharmacy_3">Next</a>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="./Login_to_your_account">Log in</a></p>
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