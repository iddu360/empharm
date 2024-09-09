<?php


// variables being used in the dashboard
$today = date('d-m-Y');
$totalSales1 = 0;
$totalSales2 = 0;
$AlltimeSales1 = 0;
$AlltimeSales2 = 0;
$catMed = 0;
$catOutStock = 0;
$totalQuantity2 = 0;
$earliestDate = null;
$quantityx1 = array();
$quantityx2 = array();
$mytoday = new DateTime();
$myDays = array();
$i = 0;
$etsale = array();
$mtsale = array();
$startDate = date('Y-m-d', strtotime('-8 days'));


$query1 = "SELECT *  FROM equip_stock";
$statement1 = $conn->prepare($query1);
$statement1->execute();

$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);

foreach ($result1 as $row1) {
  $quantity1 = $row1['quantity'];
  $price1 = $row1['price'];
  $quantityx1[] = $quantity1;
  $sales1 = $quantity1 * $price1;
  $totalSales1 += $sales1;
  $AlltimeSales1 += $totalSales1;
  $quantityx1[] = $quantity1;
}

$sum1 = array_sum($quantityx1);

$query2 = "SELECT * FROM med_stock";
$statement2 = $conn->prepare($query2);
$statement2->execute();

$result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);

$totalExpiredSum = 0;
$sum2 = 0;
$workingSum = $sum2 - $totalExpiredSum;

foreach ($result2 as $row2) {
  $date2 = $row2['edate'];
  $drugCode = $row2['drug_code'];
  $drugCode = $row2['drug_code'];
  $quantity2 = $row2['quantity'];
  $price2 = $row2['price'];
  $sales2 = $quantity2 * $price2;
  $totalSales2 += $sales2;
  $AlltimeSales2 += $totalSales2;
  $quantityx2[] = $quantity2;

  $totalQuantity2 += $quantity2;
  if (strtotime($date2) < $today && $quantity2 >= 0) {
    $totalExpiredSum += $quantity2;
    $catMed++;
  }
  $sum2 += $quantity2;
  if ($quantity2 == 0) {
    $catOutStock++;
  }
  if ($earliestDate === null || strtotime($date2) < strtotime($earliestDate)) {
    $earliestDate = $date2;
  }
}
$sum2 = array_sum($quantityx2);

// $query3 = "SELECT * FROM sales";
$query3 = "SELECT * FROM sales WHERE date >='$startDate'";
$statement3 = $conn->prepare($query3);
$statement3->execute();

$result3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
foreach ($result3 as $row3) {
  $sdate = $row3['date'];
  $stocktype = $row3['stocktype'];
  if ($stocktype == 'equipment') {
    $etsale[] = $row3['tsale'];
    // $etsale = $row3['$tsale'];
  } elseif ($stocktype == 'medicine') {
    $mtsale[] = $row3['tsale'];
    // $mtsale = $row3['$tsale'];
  }
}


for ($i = 0; $i < 7; $i++) {
  $mydate = clone $mytoday;
  $mydate->modify("-$i days");
  $myDay = $mydate->format('l');
  $myDays[$i] = $myDay;
}

$day1 = $myDays[0];
$day2 = $myDays[1];
$day3 = $myDays[2];
$day4 = $myDays[3];
$day5 = $myDays[4];
$day6 = $myDays[5];
$day7 = $myDays[6];


$etsale1 = isset($etsale[0]) ? $etsale[0] : null;
$mtsale1 = isset($mtsale[0]) ? $mtsale[0] : null;

$etsale2 = isset($etsale[1]) ? $etsale[1] : null;
$mtsale2 = isset($mtsale[1]) ? $mtsale[1] : null;

$etsale3 = isset($etsale[2]) ? $etsale[2] : null;
$mtsale3 = isset($mtsale[2]) ? $mtsale[2] : null;

$etsale4 = isset($etsale[3]) ? $etsale[3] : null;
$mtsale4 = isset($mtsale[3]) ? $mtsale[3] : null;

$etsale5 = isset($etsale[4]) ? $etsale[4] : null;
$mtsale5 = isset($mtsale[4]) ? $mtsale[4] : null;

$etsale6 = isset($etsale[5]) ? $etsale[5] : null;
$mtsale6 = isset($mtsale[5]) ? $mtsale[5] : null;

$etsale7 = isset($etsale[6]) ? $etsale[6] : null;
$mtsale7 = isset($mtsale[6]) ? $mtsale[6] : null;


$dateTimestamp = strtotime($today);
$dayToday = date('l', $dateTimestamp);


$query4 = "SELECT * FROM purchases WHERE date >='$startDate'";
$statement4 = $conn->prepare($query4);
$statement4->execute();

$result4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
foreach ($result4 as $row4) {
  $purdate = $row4['date'];
  $pstocktype = $row4['pstock'];
  if ($pstocktype == 'equipment') {
    $etpurchase[] = $row4['purchases'];
  } elseif ($pstocktype == 'medicine') {
    $mtpurchase[] = $row4['purchases'];
  }
}

$etpurchase1 = isset($etpurchase[0]) ? $etpurchase[0] : null;
$mtpurchase1 = isset($mtpurchase[0]) ? $mtpurchase[0] : null;

$etpurchase2 = isset($etpurchase[1]) ? $etpurchase[1] : null;
$mtpurchase2 = isset($mtpurchase[1]) ? $mtpurchase[1] : null;

$etpurchase3 = isset($etpurchase[2]) ? $etpurchase[2] : null;
$mtpurchase3 = isset($mtpurchase[2]) ? $mtpurchase[2] : null;

$etpurchase4 = isset($etpurchase[3]) ? $etpurchase[3] : null;
$mtpurchase4 = isset($mtpurchase[3]) ? $mtpurchase[3] : null;

$etpurchase5 = isset($etpurchase[4]) ? $etpurchase[4] : null;
$mtpurchase5 = isset($mtpurchase[4]) ? $mtpurchase[4] : null;

$etpurchase6 = isset($etpurchase[5]) ? $etpurchase[5] : null;
$mtpurchase6 = isset($mtpurchase[5]) ? $mtpurchase[5] : null;

$etpurchase7 = isset($etpurchase[6]) ? $etpurchase[6] : null;
$mtpurchase7 = isset($mtpurchase[6]) ? $mtpurchase[6] : null;



$query5 = "SELECT * FROM visit_counts";
$statement5 = $conn->prepare($query5);
$statement5->execute();

$result5 = $statement5->fetchAll(PDO::FETCH_ASSOC);
foreach ($result5 as $row5) {
  $totalCount = $row5['total_count'];
  $dailyCount = $row5['daily_counts'];
  if ($totalCount && $dailyCount) {
    $totalCount++;
    $dailyCountArray = json_decode($row5['daily_counts'], true);
    $dailyCount++;
  } else {
    $totalCount = 1;
    $dailyCountArray = array();
  }
}

// Update the total visit count in the database
$query6 = "REPLACE INTO visit_counts SET total_count = :total_count";
$stmt6 = $conn->prepare($query6);
$stmt6->bindValue(':total_count', $totalCount);
$stmt6->execute();

// Increment the count for the current date
if (isset($dailyCountArray[$today])) {
  $dailyCountArray[$today]++;
} else {
  $dailyCountArray[$today] = 1;
}

// Update the daily visit counts in the database
$query7 = "UPDATE visit_counts SET daily_counts = :daily_counts";
$stmt7 = $conn->prepare($query7);
$stmt7->bindValue(':daily_counts', json_encode($dailyCountArray));
$stmt7->execute();