<?php
include "dbconnect.php";
$sql="select * from detailorder";
$order = mysqli_query($conn,$sql);
if (mysqli_num_rows($order) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($order)) {
 $h['detailid'] = $r['detailid'];
 $h['orderid'] = $r['orderid'];
 $h['idproduk'] = $r['idproduk'];
 $h['qty'] = $r['qty'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>