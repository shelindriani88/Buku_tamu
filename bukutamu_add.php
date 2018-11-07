<?php

	include ('koneksi.php');
	
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];

	echo "Nama    : $nama <br> ";
	echo "Email   : $email <br> ";
	echo "Komentar   : $komentar <br> ";

	$sqlstr = "insert into bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
	$hasil=mysqli_query($conn, $sqlstr);
	echo "simpan buku tamu berhasil disimpan";
	echo "<br>";
	echo "<a href='bukutamu.html'>kembali</a>";

?>