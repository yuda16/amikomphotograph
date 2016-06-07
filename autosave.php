<?php
//Meng-include-kan file konfigurasi Database
include('db_config.php');

$judul = mysql_real_escape_string($_POST['judul']);
$konten = mysql_real_escape_string($_POST['konten']);
$id = (int)$_POST['id_artikel'];

//Memnyimpan artikel ke database
mysql_query("UPDATE `artikel` SET judul = '$judul', konten = '$konten' WHERE id = '$id'");

//Mengambil data waktu
$query = mysql_query("SELECT waktu FROM `artikel` WHERE id = $id");
$waktu = mysql_result($query, 0);

//Menampilkan waktu terakhir artikel disimpan
echo 'Terakhir Disimpan : ', $waktu;
?>