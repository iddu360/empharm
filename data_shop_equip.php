<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OnPharm - Stock</title>
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
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./Manage_Pharmacy">Home</a></li>
          <li class="breadcrumb-item active"><a href="./data_shop">Manage Shop</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row py-2">
        <div class="col-lg-12">

          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title text-center">Add Medicine</h5>
              <p>Fill in the medicine details below to add it to the stock database.</p>

              <div class="row">
                <div class="col-md-6 col-sm-12 px-3">
                  <div class="d-flex justify-content-between my-1">
                    <label for="" class="form-label">Eq Code</label>
                    <input type="text" name="" class="form-control-sm">
                  </div>
                  <div class="d-flex justify-content-between my-1">
                    <label for="" class="form-label">Eq Name</label>
                    <input type="text" name="" class="form-control-sm">
                  </div>
                  <div class="d-flex justify-content-between my-1">
                    <label for="" class="form-label">Order No</label>
                    <input type="text" name="" class="form-control-sm">
                  </div>
                  <!-- <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                  </div> -->
                </div>
                <div class="col-md-6 col-sm-12 px-3">
                  <div class="d-flex justify-content-between my-1">
                    <label for="" class="form-label">Manufacturer</label>
                    <input type="text" name="" class="form-control-sm">
                  </div>
                  <div class="d-flex justify-content-between my-1">
                    <label for="" class="form-label">Quantity</label>
                    <input type="text" name="" class="form-control-sm">
                  </div>
                  <div class="d-flex justify-content-between my-1">
                    <label for="" class="form-label">Price</label>
                    <input type="text" name="" class="form-control-sm">
                  </div>
                  <!-- <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                  </div> -->
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <button class="btn btn-outline-dark m-5">Save</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row py-2">
        <div class="col-lg-12">

          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title text-center">Manage Equipment Stock</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover" id="">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Eq Code</th>
                    <th>Eq Name</th>
                    <!-- <th>Production</th> -->
                    <!-- <th>Expiry</th> -->
                    <th>Manufacturer</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <!-- <th>Type</th> -->
                    <!-- <th>Description</th> -->
                    <!-- <th>Prescription</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</th>
                    <td>001</td>
                    <td>Amoxyllin</td>
                    <!-- <td>01/01/2023</td> -->
                    <!-- <td>01/01/2023</td> -->
                    <td>Oxfil pharm</td>
                    <td>500</td>
                    <td>$200.00</td>
                    <!-- <td>Capsule</td> -->
                    <!-- <td>fever, Headache</td> -->
                    <!-- <td>Adults: 3-4<i class="bi bi-chevron-down"></i></td> -->
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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