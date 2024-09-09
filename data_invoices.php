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
      <h1>Invoices</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./Manage_Pharmacy">Home</a></li>
          <li class="breadcrumb-item active"><a href="./Invoice_management">Invoices</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row py-2" id="generate">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Generate Invoice</h4>
              <p class="text-center">Fill in the fields below to generate an invoice for a client</p>
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div class="billing-address col-md-6 px-md-5">
                    <p class="my-0">Billing to:</p>
                    <div class="d-flex justify-content-between my-1">
                      <label for="">Business Name &nbsp;</label>
                      <input type="text" class="form-control-sm bg-transparent">
                    </div>
                    <div class="d-flex justify-content-between my-1">
                      <label for="">Contact &nbsp;</label>
                      <input type="text" class="form-control-sm bg-transparent">
                    </div>
                    <div class="d-flex justify-content-between my-1">
                      <label for="">Address &nbsp;</label>
                      <input type="text" class="form-control-sm bg-transparent">
                    </div>
                  </div>
                  <div class="billing-address col-md-6 px-md-5">
                    <p class="my-0">Invoice Details </p>
                    <div class="d-flex justify-content-between my-1">
                      <label for="">Invoice No : &nbsp;</label>
                      <input type="text" class="form-control-sm bg-transparent">
                    </div>
                    <div class="d-flex justify-content-between my-1">
                      <label for="">Date : &nbsp;</label>
                      <input type="text" class="form-control-sm bg-transparent">
                    </div>
                    <div class="d-flex justify-content-between my-1">
                      <label for="">Billed By : &nbsp;</label>
                      <input type="text" class="form-control-sm bg-transparent">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <h5 class="text-center my-3">Item Details</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Drug Code</th>
                      <th scope="col">Drug Name</th>
                      <th scope="col">Type</th>
                      <th scope="col">Manufacturer</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">1</th>
                      <td>001</td>
                      <td>Amoxyllin</td>
                      <td>Capsule</td>
                      <td>Oxfil pharm</td>
                      <td>$200.00</td>
                      <td>500</td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
                <div>
                  <button class="btn btn-outline-danger float-end mx-1">Discard</button>
                  <a href="./Your_invoice_preview" class="btn btn-outline-primary float-end mx-1">Preview</a>
                  <button class="btn btn-outline-success float-end mx-1">Save</button>
                  <button class="btn btn-outline-info float-end mx-1">Add</button>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
      <div class="row py-2" id="pending">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Pending Invoices</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Business / Client Name</th>
                    <th scope="col">Overdue</th>
                    <th scope="col">Drugs</th>
                    <th scope="col">Equipment</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td>Pharm Pharmaceuticals inc</td>
                    <td>15 days</td>
                    <td>
                      <input class="form-check-input" type="checkbox" value="" id="">
                      <!-- <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="">
                    </div> -->
                    <td><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                    <td>$500</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
      <div class="row py-2" id="approved">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Approved Invoices</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Business / Client Name</th>
                    <!-- <th scope="col">Overdue</th> -->
                    <th scope="col">Drugs</th>
                    <th scope="col">Equipment</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td>Pharm Pharmaceuticals inc</td>
                    <td>15 days</td>
                    <td>
                      <input class="form-check-input" type="checkbox" value="" id="">
                      <!-- <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="">
                    </div> -->
                    <td><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                    <td>$500</td>
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