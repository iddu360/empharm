<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmPharm</title>
  <?php
  include './head.php'
  ?>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">E</span>m<span class="text-primary">P</span>harm</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <div class="m-auto">
          <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        <div class="m-auto">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="./Empharm_Online_Pharmacy_home" aria-current="page"> <span class="bx bx-home"></span>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Setup_online_pharmacy"><span class="bx bx-store"></span>Create Shop</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5 pt-3">

    <div class="row d-flex">
      <div class="col-12 d-flex">
        <div class="m-auto btn-group text-center justify-center">
          <!-- <button type="button" class="btn btn-info">Medicine</button>
          <button type="button" class="btn btn-info">Equipment</button> -->
          <a href="./Empharm_Online_Pharmacy_home" class="btn btn-info">Medicine</a>
          <a href="./Empharm_Online_Pharmacy_Equipment_Section" class="btn btn-info">Equipment</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class=" m-auto">
        <ul class="nav nav-tabs nav-tabs-bordered m-auto text-center  justify-content-center mt-1 mt-md-2">
          <li class="nav-item">
            <button class="nav-link active" aria-current="page" data-bs-toggle="tab" data-bs-target="#general">General</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-info" data-bs-toggle="tab" data-bs-target="#headaches">Headaches</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-info" data-bs-toggle="tab" data-bs-target="#fever">Fever</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-info" data-bs-toggle="tab" data-bs-target="#malaria">Malaria</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-info" data-bs-toggle="tab" data-bs-target="#antibacterial">Antibacterial</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-info" data-bs-toggle="tab" data-bs-target="#asthma">Asthma</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-info" data-bs-toggle="tab" data-bs-target="#pregnancy">Pregnancy</button>
          </li>
        </ul>






        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Launch static backdrop modal
        </button> -->

        <!-- Modal -->
        <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div> -->


        <div class="tab-content py-2">

          <div class="tab-pane fade show active" id="general">
            <div class="row d-flex">
              <div class="col-sm-4 col-xs-6 col-md-2 p-1">
                <div class="card">
                  <?php
                  $sqlout = 'SELECT * FROM med_stock';
                  $query = $conn->prepare($sqlout);
                  $query->execute();
                  $result = $query->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($result as $row) {
                  ?>
                    <img class="card-img-top" src="./assets/img/<?php echo $row['drug_image']; ?>" alt="Title">
                    <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $row['drug_name']; ?></h4>
                      <a href="./Your_item_preview?id=<?php echo $row['drug_id'] ?>" class="btn btn-sm btn-outline-dark">View</a> <br>
                      <!-- <small class="p-2"><?php echo $row['description']; ?></small> -->
                      <span class="card-text"><?php echo $row['manufacturer']; ?></span>
                      <p class="card-text"><?php echo $row['price']; ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="headaches">
            <div class="row d-flex">
              <div class="col-2 p-1">
                <div class="card">
                  <?php
                  $sqlout = 'SELECT * FROM med_stock where strength like "%ADHD%"';
                  $query = $conn->prepare($sqlout);
                  $query->execute();
                  $result = $query->fetchAll();
                  foreach ($result as $row) {
                  ?>
                    <img class="card-img-top" src="./assets/img/<?php echo $row['drug_image']; ?>" alt="Title">
                    <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $row['drug_name']; ?></h4>
                      <a href="./Your_item_preview" class="btn btn-sm btn-outline-dark">View</a> <br>
                      <span class="card-text"><?php echo $row['manufacturer']; ?></span>
                      <p class="card-text"><?php echo $row['price']; ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="fever">
            <div class="row d-flex">
              <div class="col-2 p-1">
                <div class="card">
                  <?php
                  $sqlout = 'SELECT * FROM med_stock where drug_class like "%malaria%"';
                  $query = $conn->prepare($sqlout);
                  $query->execute();
                  $result = $query->fetchAll();
                  foreach ($result as $row) {
                  ?>
                    <img class="card-img-top" src="./assets/img/<?php echo $row['drug_image']; ?>" alt="Title">
                    <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $row['drug_name']; ?></h4>
                      <a href="./Your_item_preview" class="btn btn-sm btn-outline-dark">View</a> <br>
                      <span class="card-text"><?php echo $row['manufacturer']; ?></span>
                      <p class="card-text"><?php echo $row['price']; ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="malaria">
            <div class="row d-flex">
              <div class="col-2 p-1">
                <div class="card">
                  <?php
                  $sqlout = 'SELECT * FROM med_stock where drug_class like "%malaria%"';
                  $query = $conn->prepare($sqlout);
                  $query->execute();
                  $result = $query->fetchAll();
                  foreach ($result as $row) {
                  ?>
                    <img class="card-img-top" src="./assets/img/<?php echo $row['drug_image']; ?>" alt="Title">
                    <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $row['drug_name']; ?></h4>
                      <a href="./Your_item_preview" class="btn btn-sm btn-outline-dark">View</a> <br>
                      <span class="card-text"><?php echo $row['manufacturer']; ?></span>
                      <p class="card-text"><?php echo $row['price']; ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="antibacterial">
            <div class="row d-flex">
              <div class="col-2 p-1">
                <div class="card">
                  <?php
                  $sqlout = 'SELECT * FROM med_stock where drug_class like "%antibacterial%"';
                  $query = $conn->prepare($sqlout);
                  $query->execute();
                  $result = $query->fetchAll();
                  foreach ($result as $row) {
                  ?>
                    <img class="card-img-top" src="./assets/img/<?php echo $row['drug_image']; ?>" alt="Title">
                    <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $row['drug_name']; ?></h4>
                      <a href="./Your_item_preview" class="btn btn-sm btn-outline-dark">View</a> <br>
                      <span class="card-text"><?php echo $row['manufacturer']; ?></span>
                      <p class="card-text"><?php echo $row['price']; ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="asthma">
            <div class="row d-flex">
              <div class="col-2 p-1">
                <div class="card">
                  <?php
                  $sqlout = 'SELECT * FROM med_stock where drug_class like "%asthma%"';
                  $query = $conn->prepare($sqlout);
                  $query->execute();
                  $result = $query->fetchAll();
                  foreach ($result as $row) {
                  ?>
                    <img class="card-img-top" src="./assets/img/<?php echo $row['drug_image']; ?>" alt="Title">
                    <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $row['drug_name']; ?></h4>
                      <a href="./Your_item_preview" class="btn btn-sm btn-outline-dark">View</a> <br>
                      <span class="card-text"><?php echo $row['manufacturer']; ?></span>
                      <p class="card-text"><?php echo $row['price']; ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pregnancy">
            <div class="row d-flex">
              <div class="col-2 p-1">
                <div class="card">
                  <?php
                  $sqlout = 'SELECT * FROM med_stock where drug_class like "%pregnancy%"';
                  $query = $conn->prepare($sqlout);
                  $query->execute();
                  $result = $query->fetchAll();
                  foreach ($result as $row) {
                  ?>
                    <img class="card-img-top" src="./assets/img/<?php echo $row['drug_image']; ?>" alt="Title">
                    <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $row['drug_name']; ?></h4>
                      <a href="./Your_item_preview" class="btn btn-sm btn-outline-dark">View</a> <br>
                      <span class="card-text"><?php echo $row['manufacturer']; ?></span>
                      <p class="card-text"><?php echo $row['price']; ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <script>
    AOS.init();
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>