<?php 
	include "koneksi.php"; //memangil file koneksi

	if (isset($_POST['daftar'])) {  //jika daftar bernilai
		$user = $_POST['user']; //var berisi user
		$pass = $_POST['pass']; //var berisi pass
		$nama = $_POST['nama']; //var berisi nama
		$t_lahir = $_POST['t_lahir']; //var berisi tanggal lahir

		$query = "INSERT INTO data_pengguna VALUES ('$user','$pass','$nama','$t_lahir')"; //query untuk menambah 
		mysqli_query($konek,$query); //mengubungkan database dengan query
		header("location: index.php"); // masuk ke index.php
	}
 ?>