<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OnPharm - users</title>
  <?php
  include './head.php'
  ?>
</head>

<body>

  <?php
  include './header.php'
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./Manage_Pharmacy">Dashboard</a></li>
          <li class="breadcrumb-item active"><a href="./Manage_users">Users</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card" style="background:rgba(255, 255, 255, .5);backdrop-filter:blur(15px);">
            <div class=" p-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered m-auto text-center  justify-content-center">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#management">Management</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#accounts">Accounts</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sales">Sales</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#stores">Stores</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#manage">Manage</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active" id="management">
                  <div class="row d-flex">
                    <!-- Management Team -->
                    <div class="col-xl-4 p-1">
                      <div class="card shadow">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 p-1">
                      <div class="card shadow">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Management Team -->
                  </div>
                </div>

                <div class="tab-pane fade pt-3" id="accounts">

                  <div class="row d-flex">
                    <!-- Accounts Team -->
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Accounts Team -->
                  </div>

                </div>

                <div class="tab-pane fade pt-3" id="sales">

                  <div class="row d-flex">
                    <!-- Sales team -->
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Sales team -->
                  </div>

                </div>

                <div class="tab-pane fade pt-3" id="stores">
                  <div class="row d-flex">
                    <!-- Stores Team -->
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 p-1">
                      <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <h2>Username</h2>
                          <h3>Position</h3>
                          <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Stores Team -->
                  </div>

                </div>

                <div class="tab-pane fade pt-3" id="manage">
                  <div class="row d-flex">
                    <!-- Manage Users -->
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid asperiores minus qui placeat aspernatur ipsa corporis impedit veritatis vel mollitia! Architecto, eum ratione repellat voluptate labore unde id sequi impedit.
                    <!-- Manage Users -->
                  </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>DaemonCypher</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">Daemon507</a>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>