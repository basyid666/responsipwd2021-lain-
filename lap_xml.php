<?php
include "dbconnect.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM detailorder";
$hasil = mysqli_query($conn,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<detailorder>";
 echo"<detailid>",$data['detailid'],"</detailid>";
 echo"<orderid>",$data['orderid'],"</orderid>";
 echo"<idproduk>",$data['idproduk'],"</idproduk>";
 echo"<qty>",$data['qty'],"</qty>";
 echo "</detailorder>";
}
echo "</data>";
?>
