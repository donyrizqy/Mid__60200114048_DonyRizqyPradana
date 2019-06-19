<?php
echo 'Menggabungkan Kata ' . ' atau kalimat dengan PHP';
echo 'Hari Jum\'at ' . " atau Jum\"at? "; 
echo "Hari Jum'at " . ' atau Jum"at? '; 


$nama = 'agusph';
$alamat = 'Solo';
echo 'Nama ' . $nama . ', alamat ' . $alamat; 
echo "Nama $nama, alamat $alamat";

function totalHarga($qty)
{
	return 5000 * $qty;
}
$nama = 'Fulan';
echo strtoupper($nama) . ' membeli barang dengan biaya ' . totalHarga(10);