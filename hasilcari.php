<?php
	include 'koneksi.php';

	$kolom = $_POST['kolom'];
	$cari = $_POST['cari'];
	$hasil = mysqli_query($conn,"select * from bukutamu where $kolom like '%$cari%'");
	$jumlah = mysqli_num_rows($hasil);
	echo "<br>";
	echo "ditemukan : $jumlah";
	echo "<br>";
	while ($baris = mysqli_fetch_array($hasil)){
		echo "Nama :";
		echo $baris[0];
		echo "<br>";
		echo "email : ";
		echo $baris[1];
		echo "<br>";
		echo "Komentar :";
		echo $baris[2];
	}

?>