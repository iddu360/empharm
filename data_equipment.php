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
      <h1>Equipment Stock Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./Manage_Pharmacy">Home</a></li>
          <li class="breadcrumb-item active"><a href="./Equipment_Stock_inventory_management">Equipment Stock</a></li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <?php
    include './var.php';
    ?>

    <section class="section">
      <div class="row py-2">
        <div class="col-lg-12">
          <div class="card py-2" style="background:rgba(255, 255, 255, .2);backdrop-filter:blur(15px);">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                  <h2 class="heading-section">Overview</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">InStock</h4>
                      <p class="card-text">Total: <span>500</span></p>
                      <p class="card-text">Low count limit: <span>500</span></p>
                      <p class="card-text">Low count drugs: <span>500</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row py-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center">
                    <h2 class="">InStock</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                      <table class="table table-hover" id="">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Eq Code</th>
                            <th>Eq Name</th>
                            <th>Manufacturer</th>
                            <th>Quantity</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</th>
                            <td><?php echo $row1['eq_code']; ?></td>
                            <td><?php echo $row1['eq_name']; ?></td>
                            <td><?php echo $row1['manufacturer']; ?></td>
                            <td><?php echo $row1['quantity']; ?></td>
                            <td><?php echo $row1['price']; ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
      <div class="row py-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center">
                    <h2 class="heading-section">Out of Stock</h2>
                  </div>
                </div>
                <?php
                $outstocke = "SELECT * FROM equip_stock WHERE quantity=560";
                $outstockstate = $conn->prepare($outstocke);
                $outstockstate->execute();
                
                $out1e = $outstockstate->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($out1e as $outtastocke) {
                ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-wrap">
                      <table class="table table-hover" id="">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Eq Code</th>
                            <th>Eq Name</th>
                            <th>Overdue</th>
                            <th>Manufacturer</th>
                            <th>CPrice</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</th>
                            <td><?php echo $outtastocke["eq_code"]; ?></td>
                            <td><?php echo $outtastocke["eq_name"]; ?></td>
                            <td>25 days</td>
                            <td><?php echo $outtastocke["manufacturer"]; ?></td>
                            <td><?php echo $outtastocke["price"]; ?></td>
                          </tr>
                        </tbody>
                      </table>
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
      </div>
      <div class="row py-2" id="damaged">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center">
                    <h2 class="heading-section">Damaged</h2>
                  </div>
                </div>
                <?php
                $damaged = "SELECT * FROM equip_stock WHERE quantity=560";
                $damageds = $conn->prepare($damaged);
                $damageds->execute();
                
                $damage = $damageds->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($damage as $damagd) {
                ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-wrap">
                      <table class="table table-hover" id="">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Eq Code</th>
                            <th>Eq Name</th>
                            <th>Manufacturer</th>
                            <th>Quantity</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</th>
                            <td><?php echo $damagd["eq_code"]; ?></td>
                            <td><?php echo $damagd["eq_name"]; ?></td>
                            <td><?php echo $damagd["manufacturer"]; ?></td>
                            <td><?php echo $damagd["quantity"]; ?></td>
                            <td><?php echo $damagd["price"]; ?>.00</td>
                          </tr>
                        </tbody>
                      </table>
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

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: 'Sales Analytics',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        },
        animations: {
          tension: {
            duration: 1000,
            easing: 'linear'
          }
        }
      }
    });
  </script>


</body>

</html>