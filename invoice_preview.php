<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OnPharm - Stock</title>
  <?php
  include './head.php'
  ?>
  <style>
    .bg-invoice{
      background-color: rgba(255, 255, 255, .6);
      backdrop-filter: blur(25px);
    }
  </style>
</head>

<body>



  <main id="" class="container">


    <section class="col-8 justify-content-center mx-auto border rounded p-5 my-5 bg-invoice">
      <div class="row py-3">
        <div class="d-flex justify-content-between">
          <!-- <div class="logox"><img src="./assets/img/epfavcon.png" alt="pharmacy logo" class="my-0 py-0" style="height:100px;"></div> -->
          <div><p class="display-1 fw-bold" style="font-family:stop;">EP</p></div>
          <div class="name d-flex flex-column justify-content-center"><h2 class="display-4 fw-bold">Invoice</h2></div>
        </div>
      </div>
      <div class="row py-3">
        <div class="d-flex justify-content-between">
          <div class="billing">
            <h4>Billed to: </h4>
            <p class="my-0">Business Name</p>
            <p class="my-0">+256778518066</p>
            <p class="my-0">Address here</p>
          </div>
          <div class="invoice-details">
            <h4>Invoice No: </h4>
            <p class="my-0">Invoice date</p>
            <p class="my-0">Billed by :</p>
            <p class="my-0">Username from session</p>
          </div>
        </div>
      </div>
      <div class="row py-3">
        <hr>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col" colspan="5">Item</th>
                <th scope="col" class="text-end">Quantity</th>
                <th scope="col" class="text-center">Unit Price</th>
                <th scope="col" class="text-center">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr class="">
                <!-- <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td> -->
                <td scope="row">#</td>
                <td colspan="5">Item</td>
                <td class="text-end">Quantity</td>
                <td class="text-center">Unit Price</td>
                <td class="text-center">Amount</td>
              </tr>
              <tr class="">
                <td scope="row">#</td>
                <td colspan="5">Item</td>
                <td class="text-end">Quantity</td>
                <td class="text-center">Unit Price</td>
                <td class="text-center">Amount</td>
              </tr>
              <tr class="">
                <td scope="row" colspan="7" rowspan="3"></td>
                <!-- <td scope="col" colspan="5">Item</td> -->
                <!-- <td scope="col" class="text-center">Quantity</td> -->
                <td class="text-center">Sub-Total</td>
                <td class="text-center">Amount</td>
              </tr>
              <tr class="">
                <!-- <td scope="row" colspan="7"></td> -->
                <!-- <td scope="col" colspan="5">Item</td> -->
                <!-- <td scope="col" class="text-center">Quantity</td> -->
                <td class="text-center">Tax(%)</td>
                <td class="text-center">Amount</td>
              </tr>
              <tr class="">
                <!-- <td scope="row" colspan="7"></td> -->
                <!-- <td scope="col" colspan="5">Item</td> -->
                <!-- <td scope="col" class="text-center">Quantity</td> -->
                <td class="text-center fw-bold">Total</td>
                <td class="text-center fw-bold">Amount</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3 class="my-5">Thank You For Shopping With Us</h3>

      </div>
      <div class="row py-3">
        <div class="d-flex justify-content-between">
          <div class="payment-info">
            <h5 class="fw-bold">Payment Information</h5>
            <p class="my-0">Bank Name : Bank Name</p>
            <p class="my-0">Account Name : Account Name</p>
            <p class="my-0">Account Number : Account Number</p>
            <p class="my-0">Paid By: Name</p>
            <p class="my-0">Paid On: Date</p>
          </div>
        </div>
      </div>
    </section>

  </main>

</body>

</html>