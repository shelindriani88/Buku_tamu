<?php
	include 'koneksi.php';
	$hasil = mysqli_query($conn, "select * from bukutamu");
	$jumlah = mysqli_num_rows($hasil);
	echo "<center> Daftar Pengujung </center>";
	echo "Jumlah Pengujung  : $jumlah";
	$a=1;
	while($baris = mysqli_fetch_array($hasil)){
		echo "<br>";
		echo $a;
		echo "<br>";
		echo "Nama :";
		echo $baris[0];
		echo "<br>";
		echo "email : ";
		echo $baris[1];
		echo "<br>";
		echo "Komentar :";
		echo $baris[2];
		$a++;
	}

?>