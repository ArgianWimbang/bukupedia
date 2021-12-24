<?php

	$koneksi = mysqli_connect("172.10.0.2","root","admin","toko_buku");
	 if ($koneksi) {
	 	echo "Koneksi Berhasil !";
	}
	 else
	 {
	 	echo "Koneksi Gagal !";
	 }
?>
