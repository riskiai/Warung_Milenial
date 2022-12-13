<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'DAFTAR PENGUNJUNG PER TANGGAL',0,1,'C');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'WARUNG MILENIAL TAHUN 2022 - 2023',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'Id',1,0);
$pdf->Cell(85,6,'tanggal Pemesanan',1,0);

$pdf->Cell(40,6,'total',1,0);
$pdf->Cell(55,6,'tanggal',1,1);

$pdf->SetFont('Arial','',10);

include '../koneksi.php';
$mahasiswa = mysqli_query($koneksi, "select * from pemesanan");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(10,6,$row['id_pemesanan'],1,0);
    $pdf->Cell(85,6,$row['tanggal_pemesanan'],1,0);
    $pdf->Cell(40,6,$row['total_belanja'],1,0); 
    $pdf->Cell(55,6,$row['tanggal_pemesanan'],1,1); 
}
    


$pdf->Output();
?>