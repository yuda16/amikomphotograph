<?php
//Meng-include-kan file konfigurasi Database
include('db_config.php');

$judul = mysql_real_escape_string($_POST['judul']);
$konten = mysql_real_escape_string($_POST['konten']);
$id = (int)$_POST['id_artikel'];

//Simpan artikel ke database
mysql_query("UPDATE `artikel` SET judul = '$judul', konten = '$konten' WHERE id = '$id'");

//Menampilkan waktu
$query = mysql_query("SELECT waktu FROM `artikel` WHERE id = $id");
$waktu = mysql_result($query, 0);

?>
<!doctype html>
<html>
<head>
	<title><?php echo $judul ?></title>
    <meta name="description" content="Tutorial jQuery Ajax - Membuat Fitur Auto Save dengan jQuery Ajax" />
	<meta name="keywords" content="eplusgo,php,mysql,ajax,jquery,autosave" />
	<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="konten" style="margin:30px auto;">
	<p>Artikel Berhasil Disimpan</p>
	<h2><?php echo $judul ?></h2>
	<p><?php echo $konten ?></p>
	<p>Terakhir Disimpan : <?php echo $waktu ?></p>
</div>
</body>
</html>