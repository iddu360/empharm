<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OnPharm Login</title>
  <?php
  include './head.php'
  ?>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 d-flex flex-column align-items-center justify-content-center">

              <!-- <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/epfavicon.png" alt="">
                  <span class="d-none d-lg-block">OnPharm</span>
                </a>
              </div> -->
              <!-- End Logo -->

              <div class="card mb-3 bg-out">

                <div class="card-body">
                  <div class="d-flex justify-content-center pt-4 text-center">
                    <a href="#" class="logo align-items-center w-auto">
                      <img src="assets/img/epfavicon.png" alt="">
                      <span class="d-none d-lg-block">OnPharm</span>
                    </a>
                  </div>

                  <div class="pt-3 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Welcome to OnPharm </h5>
                    <p class="text-center small">Enter your credentials to access your OnPharm Pharmacy account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>


                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <!-- <div class="invalid-feedback">Please enter your username.</div> -->
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <!-- <div class="invalid-feedback">Please enter your damn password!</div> -->
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <a class="btn btn-outline-info w-100" href="./Manage_Pharmacy">Login</a>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="./Setup_online_pharmacy">Create an account</a></p>
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