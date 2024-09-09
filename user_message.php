<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OnPharm - messages</title>
  <?php
  include './head.php';

  // session_start();
  // if (!isset($_SESSION["unique_id"])) {
  //   header("location: ./login.php");
  // }
  ?>
  <style>
    .bg-out {
      background: rgba(185, 188, 189, .5);
    }

    .bg-in {
      background: rgba(144, 224, 239, .5);
    }
  </style>
</head>

<body>
  <?php
  include './header.php'
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Messages</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./Manage_Pharmacy">Home</a></li>
          <li class="breadcrumb-item active"><a href="./User_messages">Messages</a></li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <section class="">
      <div class="row">
        <div class="container-fluid p-1">
          <div class="row">
            <div class="col-lg-12 px-sm-0">
              <div class="card border-0 px-1 bg-transparent m-1">
                <div class="card-bod p-1 px-0 pb-0">
                  <div class="px-0 pb-4">
                    <div class="row">
                      <div class="col-lg-3 mb-4 chatx">
                        <div class="card h-100 overflow-auto mb-5 mb-lg-0" style="max-height: 70vh;">
                          <form class="card-header">
                            <div class="input-group mb-0">
                              <input type="text" placeholder="Search" class="form-control">
                              <div class="input-group-append">
                                <span class="input-group-text">
                                  <i class="bi bi-search"></i>
                                </span>
                              </div>
                            </div>
                          </form>
                          <div class="card-body p-1">
                            <a href="#" class="d-block p-1">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                  <img alt="Image" src="./assets/img/messages-2.jpg" class="">
                                  <div class="ps-1">
                                    <div class="justify-content-between align-items-center">
                                      <h5 class="mb-0 mt-1">Allen Doe
                                      </h5>
                                      <small class="text-muted mb-0">Sales Executive</small>
                                    </div>
                                  </div>
                                </div>
                                <span class="badge bg-info float-end p-2 rounded-5">&nbsp;</span>
                              </div>
                            </a>
                            <hr class="my-1">
                            <a href="#" class="d-block p-1">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                  <img alt="Image" src="./assets/img/messages-1.jpg" class="">
                                  <div class="ps-1">
                                    <div class="justify-content-between align-items-center">
                                      <h5 class="mb-0 mt-1">Jahna Dioe
                                      </h5>
                                      <small class="text-muted mb-0">Lab Tech</small>
                                    </div>
                                  </div>
                                </div>
                                <span class="badge bg-info float-end p-2 rounded-5">3</span>
                              </div>
                            </a>
                            <hr class="my-1">
                            <a href="#" class="d-block p-1">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                  <img alt="Image" src="./assets/img/messages-3.jpg" class="">
                                  <div class="ps-1">
                                    <div class="justify-content-between align-items-center">
                                      <h5 class="mb-0 mt-1">Karl Deoe
                                      </h5>
                                      <small class="mb-0 text-xs font-weight-normal text-muted">Senior Health
                                        Officer</small>
                                    </div>
                                  </div>
                                </div>
                                <span class="badge bg-info float-end p-2 rounded-5 me-0">2</span>
                              </div>
                            </a>
                            <hr class="my-1">
                            <a href="#" class="d-block p-1">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                  <img alt="Image" src="./assets/img/messages-4.jpg" class="">
                                  <div class="ps-1">
                                    <div class="justify-content-between align-items-center">
                                      <h5 class="mb-0 mt-1">Eddie Daoe
                                      </h5>
                                      <small class="mb-0 text-xs font-weight-normal text-muted">Senior Health
                                        Officer</small>
                                    </div>
                                  </div>
                                </div>
                                <span class="badge bg-info float-end p-2 rounded-5 me-0">1</span>
                              </div>
                            </a>
                            <hr class="my-1">
                            <a href="#" class="d-block p-1">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                  <img alt="Image" src="./assets/img/messages-5.jpg" class="">
                                  <div class="ps-1">
                                    <div class="justify-content-between align-items-center">
                                      <h5 class="mb-0 mt-1">Rage Richarl
                                      </h5>
                                      <small class="mb-0 text-xs font-weight-normal text-muted">Senior Health
                                        Officer</small>
                                    </div>
                                  </div>
                                </div>
                                <span class="badge bg-info float-end p-2 rounded-5 me-0">4</span>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card" style="max-height: 70vh;">
                          <div class="card-header shadow-xl">
                            <div class="row">
                              <div class="col-md-10">
                                <div class="d-flex align-items-center chat-headx">
                                  <img alt="Image" src="./assets/img/messages-2.jpg" class="">
                                  <div class="ms-3">
                                    <h3 class="mb-0 d-block">Allen Doe</h3>
                                    <small class="text-sm text-muted"><span class="font-weight-bold">Sales
                                        Executive</span> | Sales Team</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-body bg-light overflow-auto overflow-x-hidden">
                            <div class="row justify-content-start mb-4">
                              <div class="col-auto">
                                <div class="card bg-in">
                                  <div class="p-2">
                                    <p class="mb-1">
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, perferendis?
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                      <i class="bi bi-clock px-1" aria-hidden="true"></i>
                                      <small>3:14am</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                              <div class="col-auto">
                                <div class="card bg-out">
                                  <div class="p-2">
                                    <p class="mb-1">
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit modi aspernatur sed!<br>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                      <i class="bi bi-check-all px-1 text-xs" aria-hidden="true"></i>
                                      <small>4:42pm</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-md-12 text-center">
                                <span class="badge text-dark">Wed, 3:27pm</span>
                              </div>
                            </div>
                            <div class="row justify-content-start mb-4">
                              <div class="col-auto">
                                <div class="card bg-in">
                                  <div class="p-2">
                                    <p class="mb-1">
                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero ad ullam optio.
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                      <i class="bi bi-clock px-1" aria-hidden="true"></i>
                                      <small>4:31pm</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                              <div class="col-auto">
                                <div class="card bg-out">
                                  <div class="p-2">
                                    <p class="mb-1">
                                      Lorem ipsum dolor sit amet.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                      <i class="bi bi-check-all px-1 text-xs" aria-hidden="true"></i>
                                      <small>4:42pm</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-start mb-4">
                              <div class="col-auto">
                                <div class="card bg-in">
                                  <div class="p-2">
                                    <p class="mb-1">
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, fugit officiis!
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                      <i class="bi bi-clock px-1" aria-hidden="true"></i>
                                      <small>4:42pm</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                              <div class="col-auto">
                                <div class="card bg-out">
                                  <div class="p-2">
                                    <p class="mb-1">
                                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, dolorum. Perferendis. <br>
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quod quam.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                      <i class="bi bi-check-all px-1 text-xs" aria-hidden="true"></i>
                                      <small>4:42pm</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-start mb-4">
                              <div class="col-5">
                                <div class="card bg-in">
                                  <div class="p-2">
                                    <div class="col-12 p-0">
                                      <img src="./assets/img/messages-1.jpg" alt="Rounded image" class="img-fluid mb-2 rounded msgx">
                                    </div>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                      <i class="bi bi-clock px-1" aria-hidden="true"></i>
                                      <small>4:47pm</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                              <div class="col-auto">
                                <div class="card bg-out">
                                  <div class="p-2">
                                    <p class="mb-0">
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et debitis perferendis dolore culpa, blanditiis delectus.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                      <i class="bi bi-check px-1 text-xs" aria-hidden="true"></i>
                                      <small>4:42pm</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-start">
                              <div class="col-auto">
                                <div class="card bg-in">
                                  <div class="p-2">
                                    <p class="mb-0 text-sm">
                                      Allen is Typing...
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                      <i class="bi bi-clock-history px-1 text-xs" aria-hidden="true"></i>
                                      <!-- <small>4:42pm</small> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer d-block">
                            <form class="align-items-center">
                              <div class="input-group mb-3">
                                <input type="text" placeholder="Search" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                  <span class="input-group-text">
                                    <i class="bi bi-send"></i>
                                  </span>
                                </div>
                              </div>
                            </form>
                          </div>

                        </div>





                      </div>
                      <div class="col-lg-3 profx">
                        <div class="card h-100 overflow-auto mb-5 mb-lg-0" style="max-height: 70vh;">
                          <div class="card-body p-2">
                            <div class="p-2 text-center">
                              <a href="#" class="d-block p-2">
                                <img alt="Image" src="./assets/img/messages-2.jpg" class="mb-0">
                              </a>
                              <div class="mt-0 mb-0 text-center">
                                <div class="align-items-center">
                                  <h3 class="mb-0 mt-1">Allen Doe</h3>
                                  <p class="mb-0 text-sm text-dark font-weight-normal">Sales Team</p>
                                  <p class="mb-0 text-sm text-dark font-weight-normal">Senior Sales executive</p>
                                </div>
                              </div>
                            </div>
                            <hr class="my-1">
                            <div class="mx-1 d-flex">
                              <i class="bi bi-info-circle px-1"></i>
                              <div class="">
                                <h4 class="mb-0">About</h4>
                                <p class="text-sm text-muted font-weight-normal">Lorem ipsum dolor sit, amet consectetur
                                  adipisicing elit. Sed, ratione!</p>
                              </div>
                            </div>
                            <hr class="my-1">
                            <div class="mx-1">
                              <div class="d-flex mb-3">
                                <i class="bi bi-envelope opacity-7 px-1"></i>
                                <div class="">
                                  <h5 class="mb-0">Email</h5>
                                  <span class="text-sm text-primary">user@user.com
                                  </span>
                                </div>
                              </div>
                              <div class="d-flex">
                                <i class="bi bi-phone opacity-7 px-1"></i>
                                <div class="">
                                  <h5 class="mb-0">Phone</h5>
                                  <span class="text-sm text-primary">0723922012
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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