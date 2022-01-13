<?php
require('fpdf/fpdf.php');
$pdf = new FPDF('l', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'DAFTAR PELANGGAN', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, '', 0, 1, '');
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 6, 'Kode order', 1, 0);
$pdf->Cell(50, 6, 'Tanggal order', 1, 0);
$pdf->Cell(50, 6, 'Total', 1, 0);
$pdf->Cell(30, 6, 'Status', 1, 1);
$pdf->SetFont('Arial', '', 10);
include 'dbconnect.php';
$detailorder = mysqli_query($conn, "select * from detailorder");
while ($row = mysqli_fetch_array($detailorder)) {
    $pdf->Cell(30, 6, $row['detailid'], 1, 0);
    $pdf->Cell(50, 6, $row['orderid'], 1, 0);
    $pdf->Cell(50, 6, $row['idproduk'], 1, 0);
    $pdf->Cell(30, 6, $row['qty'], 1, 1);
}
$pdf->Output();
?>