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
      <h1>Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./Manage_Pharmacy">Home</a></li>
          <li class="breadcrumb-item active"><a href="./Reports_and_inventory_management">Reports</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card shadow">
        <div class="card-body">
          <h3 class="text-center">Chart Sales Data</h3>
          <div class="row">
            <div class="col-8">
              <h4 class="text-center">Monthly Sales: Month</h4>
              <canvas id="myChart"></canvas>
            </div>
            <div class="col-4">
              <h4 class="text-center">Bulk Sales</h4>
              <canvas id="myChart02"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-3 bg-transparent">
        <div class="card border-0 bg-transparent">
          <div class="">
            <h3 class="card-title text-center">Sales Analytics</h3>
            <div class="row">
              <div class="col-6">
                <div class="card shadow">
                  <div class="card-body">
                    <h4 class="text-center">Recent Sales</h4>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Position</th>
                          <th scope="col">Age</th>
                          <th scope="col">Start Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Brandon Jacob</td>
                          <td>Designer</td>
                          <td>28</td>
                          <td>2016-05-25</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Bridie Kessler</td>
                          <td>Developer</td>
                          <td>35</td>
                          <td>2014-12-05</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Ashleigh Langosh</td>
                          <td>Finance</td>
                          <td>45</td>
                          <td>2011-08-12</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Angus Grady</td>
                          <td>HR</td>
                          <td>34</td>
                          <td>2012-06-11</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Raheem Lehner</td>
                          <td>Dynamic Division Officer</td>
                          <td>47</td>
                          <td>2011-04-19</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card shadow h-100">
                  <div class="card-body">
                    <!-- Table with stripped rows -->
                    <h4 class="text-center">Sales Overview</h4>
                    <div class="d-flex justify-content-between">
                      <h5>Total Revenue</h5>
                      <h5>$500</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                      <h5>Number of Transactions</h5>
                      <h5>$500</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                      <h5>Average Order Value</h5>
                      <h5>$500</h5>
                    </div>
                    <!-- End Table with stripped rows -->
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      <div class="card shadow">
        <div class="card-body">
          <h3 class="text-center">Chart Purchases Data</h3>
          <div class="row">
            <div class="col-8">
              <h4 class="text-center">Monthly Purchases: Month</h4>
              <canvas id="myChart03"></canvas>
            </div>
            <div class="col-4">
              <h4 class="text-center">Bulk Purchases</h4>
              <canvas id="myChart04"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-3 bg-transparent">
        <div class="card border-0 bg-transparent">
          <div class="">
            <h3 class="card-title text-center">Purchases Analytics</h3>
            <div class="row">
              <div class="col-6">
                <div class="card shadow">
                  <div class="card-body">
                    <h4 class="text-center">Recent Purchases</h4>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Position</th>
                          <th scope="col">Age</th>
                          <th scope="col">Start Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Brandon Jacob</td>
                          <td>Designer</td>
                          <td>28</td>
                          <td>2016-05-25</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Bridie Kessler</td>
                          <td>Developer</td>
                          <td>35</td>
                          <td>2014-12-05</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Ashleigh Langosh</td>
                          <td>Finance</td>
                          <td>45</td>
                          <td>2011-08-12</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Angus Grady</td>
                          <td>HR</td>
                          <td>34</td>
                          <td>2012-06-11</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Raheem Lehner</td>
                          <td>Dynamic Division Officer</td>
                          <td>47</td>
                          <td>2011-04-19</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card shadow h-100">
                  <div class="card-body">
                    <!-- Table with stripped rows -->
                    <h4 class="text-center">Purchases Overview</h4>
                    <div class="d-flex justify-content-between">
                      <h5>Total Revenue</h5>
                      <h5>$500</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                      <h5>Number of Transactions</h5>
                      <h5>$500</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                      <h5>Average Order Value</h5>
                      <h5>$500</h5>
                    </div>
                    <!-- End Table with stripped rows -->
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
      type: 'line',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Orange', 'Orange', 'Orange', 'Orange', 'Orange', 'Orange'],
        datasets: [{
          label: 'Sales Analytics',
          data: [12, 9, 3, 5, 2, 3, 4, 6, 2, 5, 7, 8],
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


    const ctx2 = document.getElementById('myChart02');
    new Chart(ctx2, {
      type: 'doughnut',
      data: {
        labels: [
          'Outstock', 'Instock', 'Received', 'Expiry', 'Sales'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [12, 16, 10, 7, 14],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
          ]
        }]
      },
      options: {
        // animations: {
        //   animateRotate: {
        //     duration: 1000,
        //     easing: 'linear'
        //   }
        // }
      }
    });

    const ctx3 = document.getElementById('myChart03');

    new Chart(ctx3, {
      type: 'line',
      data: {
        labels: ['Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Orange', 'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
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

    const ctx4 = document.getElementById('myChart04');
    new Chart(ctx4, {
      type: 'doughnut',
      data: {
        labels: [
          'Outstock', 'Instock', 'Received', 'Expiry', 'Sales'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [12, 16, 10, 7, 14],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
          ]
        }]
      },
      options: {
        // animations: {
        //   animateRotate: {
        //     duration: 1000,
        //     easing: 'linear'
        //   }
        // }
      }
    });
  </script>


</body>

</html>