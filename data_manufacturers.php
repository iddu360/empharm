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
          <li class="breadcrumb-item active"><a href="./Suppliers_and_Manufacturers_database_management">Manufacturers</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row py-2">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Drug Suppliers</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover" id="">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Drugs Supplied</th>
                    <th>State</th>
                    <th>specs(mg)</th>
                    <th>Quantity instock</th>
                    <th>Action</th>
                    <!-- include action for call to refill/restock -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="2">1</th>
                    <td rowspan="2">Pharma inc</td>
                    <td>Amoxyllin</td>
                    <td>Warning</td>
                    <td>500mg</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <!-- <td></th> -->
                    <!-- <td>Pharma inc</td> -->
                    <td>Panadol</td>
                    <td>outstocked</td>
                    <td>100mg</td>
                    <td>0</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
      <div class="row py-2">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Equipment Suppliers</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover" id="">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Equipment Supplied</th>
                    <th>State</th>
                    <th>specs</th>
                    <th>Quantity instock</th>
                    <th>Action</th>
                    <!-- include action for call to refill/restock -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="2">1</th>
                    <td rowspan="2">Pharma inc</td>
                    <td>Surgery Beds</td>
                    <td>Warning</td>
                    <td>medium</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <!-- <td></th> -->
                    <!-- <td rowspan="2">Pharma inc</td> -->
                    <td>Surgery lights</td>
                    <td>Warning</td>
                    <td>large</td>
                    <td>500</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
      <div class="row py-2">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Non-Suppliers (Drugs)</h5>

              
              <!-- Table with stripped rows -->
              <table class="table table-hover" id="">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Drugs Supplied</th>
                    <th>specs(mg)</th>
                    <th>State</th>
                    <th>Quantity instock</th>
                    <th>Action</th>
                    <!-- include action for call to refill/restock -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="2">1</th>
                    <td rowspan="2">Pharma inc</td>
                    <td>Amoxyllin</td>
                    <td>500mg</td>
                    <td>No-contact</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <!-- <td></th> -->
                    <!-- <td>Pharma inc</td> -->
                    <td>Panadol</td>
                    <td>100mg</td>
                    <td>Contact</td>
                    <td>0</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->


            </div>
          </div>

        </div>
      </div>


      <div class="row py-2">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Non-Suppliers (Equipment)</h5>

              
             <!-- Table with stripped rows -->
             <table class="table table-hover" id="">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Equipment Supplied</th>
                    <th>specs</th>
                    <th>State</th>
                    <th>Quantity instock</th>
                    <th>Action</th>
                    <!-- include action for call to refill/restock -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="2">1</th>
                    <td rowspan="2">Pharma inc</td>
                    <td>Surgery Beds</td>
                    <td>medium</td>
                    <td>Contact</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <!-- <td></th> -->
                    <!-- <td rowspan="2">Pharma inc</td> -->
                    <td>Surgery lights</td>
                    <td>large</td>
                    <td>Non-Contact</td>
                    <td>500</td>
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