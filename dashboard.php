<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - OnPharm</title>
  <?php
  include './head.php';
  session_start();

  // if (!isset($_SESSION['user_name'])) {
  //   // header('location:dashboard.php');
  //   header('location:login.php');
  // }

  ?>
</head>

<body>
  <?php
  include './header.php';
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="./Manage_Pharmacy">Dashboard</a></li>
        </ol>
      </nav>
    </div>

    <!-- End Page Title -->

    <section class="section dashboard dashx">
      <div class="row">
        <div class="col-sm-6 col-md-4 p-1">
          <div class="card h-100">
            <?php

            include "./var.php";

            ?>
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h4 class="card-title">InStock Equipment</h4>
                  <h3 class="my-0 fw-bold num" data-val="<?= $sum1 ?>">000</h3>
                  <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                </div>
                <div class="float-end position-relative">
                  <h2><span class="badge bg-info"><i class="bi bi-nvme"></i></span></h2>
                  <div class="progress position-absolute bottom-0 w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">stock</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 p-1">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="col-9">
                  <h4 class="card-title my-0">Todays Sales</h4>
                  <div class="row d-flex">
                    <div class="col-6">
                      <small>Medicine</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= number_format($totalSales2, 2); ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                    <div class="col-6">
                      <small>Equipment</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= number_format($totalSales1, 2); ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                  </div>
                </div>
                <div class="col-3 float-end position-relative">
                  <h2><span class="badge bg-primary"><i class="bi bi-graph-up-arrow"></i></span></h2>
                  <div class="progress position-absolute bottom-0 w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">sales</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 p-1">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="col-9">
                  <h4 class="card-title">Sales To Date</h4>
                  <div class="row d-flex">
                    <div class="col-6">
                      <small>Medicine</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= number_format($AlltimeSales2, 2); ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                    <div class="col-6">
                      <small>Equipment</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= number_format($AlltimeSales1, 2); ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                  </div>
                </div>
                <div class="col-3 float-end position-relative">
                  <h2><span class="badge bg-info"><i class="bi bi-folder-plus"></i></span></h2>
                  <div class="progress position-absolute bottom-0 w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">received</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 p-1">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="col-9">
                  <h4 class="card-title">InStock Medicine</h4>
                  <div class="row d-flex">
                    <div class="col-6">
                      <small>Total Stock</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= $sum2 ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                    <div class="col-6">
                      <small>Working Stock</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= $workingSum; ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                  </div>
                </div>
                <div class="col-3 float-end position-relative">
                  <h2><span class="badge bg-success"><i class="bi bi-prescription2"></i></span></h2>
                  <div class="progress position-absolute bottom-0 w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">instock</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 p-1">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="col-9">
                  <h4 class="card-title">OutStocked Medicine</h4>
                  <div class="row d-flex">
                    <div class="col-5">
                      <small>Category</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= number_format($catOutStock, 2); ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                    <div class="col-7">
                      <small>StockOut date</small>
                      <h4 class="my-0 fw-bold num" data-val="<?= $earliestDate; ?>">000</h4>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                  </div>
                </div>
                <div class="col-3 float-end position-relative">
                  <h2><span class="badge bg-danger"><i class="bi bi-prescription"></i></span></h2>
                  <div class="progress position-absolute bottom-0 w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">outstock</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 p-1">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="col-9">
                  <h4 class="card-title">Expiry</h4>
                  <div class="row d-flex">
                    <div class="col-6">
                      <small>Category</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= number_format($catMed, 2); ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                    <div class="col-6">
                      <small>Quantity</small>
                      <h3 class="my-0 fw-bold num" data-val="<?= $totalExpiredSum; ?>">000</h3>
                      <small>0.15% <i class="bi bi-arrow-up-short"></i></small>
                    </div>
                  </div>
                </div>
                <div class="col-3 float-end position-relative">
                  <h2><span class="badge bg-secondary"><i class="bi bi-folder-x"></i></span></h2>
                  <div class="progress position-absolute bottom-0 w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Expiry</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-sm-12 p-1">
          <div class="card my-1">
            <div class="card-body">
              <h4 class="card-title text-center fw-bold">Sales Analytics</h4>
              <!-- <p class="card-text">Graph reading last 30 days</p> -->
              <canvas id="myChart"></canvas>
            </div>
          </div>
          <div class="card my-1">
            <div class="card-body">
              <h4 class="card-title text-center fw-bold">Purchases Analytics</h4>
              <canvas id="myChart02"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 p-1">
          <div class="card">
            <div class="card-body">
              <div class="">
                <h4 class="card-title text-center">Overview</h4>
              </div>
              <hr>
              <div class="d-flex justify-content-between">
                <h6 class="card-title fw-bold">Total Visitors</h6>
                <p class="card-text"><i class="bi bi-plus"></i><?= $totalCount ?></p>
              </div>
              <hr>
              <div class="d-flex justify-content-between">
                <h6 class="card-title fw-bold">New Visitors</h6>
                <p class="card-text"><i class="bi bi-plus"></i><?= $dailyCountArray[$currentDate]; ?></p>
              </div>
              <hr>
              <div class="d-flex justify-content-between">
                <h6 class="card-title fw-bold">New Orders</h6>
                <p class="card-text"><i class="bi bi-plus"></i></p>
              </div>
              <hr>
              <div class="d-flex justify-content-between">
                <h6 class="card-title fw-bold">New Orders</h6>
                <p class="card-text"><i class="bi bi-plus"></i></p>
              </div>
              <hr>
              <div class="d-flex justify-content-between">
                <h6 class="card-title fw-bold">Revenue</h6>
                <p class="card-text"><i class="bi bi-plus"></i>56</p>
              </div>
            </div>
          </div>
          <div class="card my-1">
            <div class="card-body">
              <h4 class="card-title text-center">Medicine</h4>
              <canvas id="myChart03"></canvas>
            </div>
          </div>
          <div class="card my-1">
            <div class="card-body">
              <h4 class="card-title text-center">Equipment</h4>
              <canvas id="myChart04"></canvas>
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



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script></script>
  <script>
    const salesNum = [{
        day: '<?= $day7 ?>',
        sales: {
          equipment: <?= $etsale7; ?>,
          medicine: <?= $etsale7; ?>
        }
      },
      {
        day: '<?= $day6 ?>',
        sales: {
          equipment: <?= $etsale6; ?>,
          medicine: <?= $etsale6; ?>
        }
      },
      {
        day: '<?= $day5 ?>',
        sales: {
          equipment: <?= $etsale5; ?>,
          medicine: <?= $etsale5; ?>
        }
      },
      {
        day: '<?= $day4 ?>',
        sales: {
          equipment: <?= $etsale4; ?>,
          medicine: <?= $etsale4; ?>
        }
      },
      {
        day: '<?= $day3 ?>',
        sales: {
          equipment: <?= $etsale3; ?>,
          medicine: <?= $etsale3; ?>
        }
      },
      {
        day: '<?= $day2 ?>',
        sales: {
          equipment: <?= $etsale2; ?>,
          medicine: <?= $etsale2; ?>
        }
      },
      {
        day: '<?= $day1 ?>',
        sales: {
          equipment: <?= $etsale1; ?>,
          medicine: <?= $etsale1; ?>
        }
      }
    ];

    const purchasesNum = [{
        day: '<?= $day7 ?>',
        purchases: {
          equipment: <?= $etpurchase7 ?>,
          medicine: <?= $mtpurchase7 ?>
        }
      },
      {
        day: '<?= $day6 ?>',
        purchases: {
          equipment: <?= $etpurchase6 ?>,
          medicine: <?= $mtpurchase6 ?>
        }
      },
      {
        day: '<?= $day5 ?>',
        purchases: {
          equipment: <?= $etpurchase5 ?>,
          medicine: <?= $mtpurchase5 ?>
        }
      },
      {
        day: '<?= $day4 ?>',
        purchases: {
          equipment: <?= $etpurchase4 ?>,
          medicine: <?= $mtpurchase4 ?>
        }
      },
      {
        day: '<?= $day3 ?>',
        purchases: {
          equipment: <?= $etpurchase3 ?>,
          medicine: <?= $mtpurchase3 ?>
        }
      },
      {
        day: '<?= $day2 ?>',
        purchases: {
          equipment: <?= $etpurchase2 ?>,
          medicine: <?= $mtpurchase2 ?>
        }
      },
      {
        day: '<?= $day1 ?>',
        purchases: {
          equipment: <?= $etpurchase1 ?>,
          medicine: <?= $mtpurchase1 ?>
        }
      }
    ];

    // 'rgba(255, 0, 0,.4)',
    //         'rgba(0, 0, 255,.4)'

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'line',
      data: {
        // labels: ['orange', 'Blue', 'Yellow', 'Green', 'Purple', '<?php echo $day1 ?>'],
        // labels: ['<?php echo $day1 . ', ' . $day1 . ', ' . $day1 . ', ' . $day1 . ', ' . $day1 . ', ' . $day1 ?>'],
        datasets: [{
            label: 'Medical Sales Analytics',
            data: salesNum,
            // data: [12, 19, 3, 5, 2, <?php echo $etsale1; ?>],
            backgroundColor: 'rgba(255, 0, 0,.4)',
            borderColor: 'rgba(255, 0, 0,.4)',
            borderWidth: 1,
            tension: 0.1,
            parsing: {
              xAxisKey: 'day',
              yAxisKey: 'sales.medicine'
            }
          },
          {
            label: 'Equipment Sales Analytics',
            data: salesNum,
            // data: [12, 19, 3, 5, 2, <?php echo $etsale1; ?>],
            backgroundColor: 'rgba(0, 0, 255,.4)',
            borderColor: 'rgba(0, 0, 255,.4)',
            borderWidth: 1,
            tension: 0.1,
            parsing: {
              xAxisKey: 'day',
              yAxisKey: 'sales.equipment'
            }
          }
        ]
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
      type: 'line',
      data: {
        // labels: ['orange', 'Blue', 'Yellow', 'Green', 'Purple', '<?php echo $day1 ?>'],
        // labels: ['<?php echo $day1 . ', ' . $day1 . ', ' . $day1 . ', ' . $day1 . ', ' . $day1 . ', ' . $day1 ?>'],
        datasets: [{
            label: 'Medical Purchases Analytics',
            data: purchasesNum,
            // data: [12, 19, 3, 5, 2, <?php echo $etsale1; ?>],
            backgroundColor: 'rgba(255, 0, 0,.4)',
            borderColor: 'rgba(255, 0, 0,.4)',
            borderWidth: 1,
            tension: 0.1,
            parsing: {
              xAxisKey: 'day',
              yAxisKey: 'purchases.medicine'
            }
          },
          {
            label: 'Equipment Purchases Analytics',
            data: purchasesNum,
            // data: [12, 19, 3, 5, 2, <?php echo $etsale1; ?>],
            backgroundColor: 'rgba(0, 0, 255,.4)',
            borderColor: 'rgba(0, 0, 255,.4)',
            borderWidth: 1,
            tension: 0.1,
            parsing: {
              xAxisKey: 'day',
              yAxisKey: 'purchases.equipment'
            }
          }
        ]
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
      // type: 'line',
      // data: {
      //   labels: ['<?php echo $day7 ?>', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      //   datasets: [{
      //     label: 'Purchases Analytics',
      //     data: [16, 3, 13, 8, 12, 6],
      //     borderWidth: 1
      //   }]
      // },
      // options: {
      //   scales: {
      //     y: {
      //       beginAtZero: true
      //     }
      //   },
      //   animations: {
      //     tension: {
      //       duration: 1000,
      //       easing: 'linear'
      //     }
      //   }
      // }
    });

    const ctx3 = document.getElementById('myChart03');
    new Chart(ctx3, {
      type: 'polarArea',
      data: {
        labels: [
          'Outstock', 'Instock', 'Received', 'Expiry', 'Sales'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [7, 5, 8, 4, 5],
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
        animations: {
          animateRotate: {
            duration: 1000,
            easing: 'linear'
          }
        },
      }
    });

    const ctx4 = document.getElementById('myChart04');
    new Chart(ctx4, {
      type: 'polarArea',
      data: {
        labels: [
          'Outstock', 'Received', 'Instock', 'Damaged', 'Sales'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [12, 16, 7, 10, 14],
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
        animations: {
          animateRotate: {
            duration: 1000,
            easing: 'linear'
          }
        },
      }
    });
  </script>

  <script>
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 2000;

    valueDisplays.forEach((valueDisplay) => {
      let startValue = 0;
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endValue);
      let counter = setInterval(function() {
        if (endValue > 0) {
          startValue += 1;
          valueDisplay.textContent = startValue;
          if (startValue == endValue) {
            clearInterval(counter);
          }
        }else{
          clearInterval(counter);
        }
      }, duration);
    });
  </script>

</body>

</html>