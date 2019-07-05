<?php 
	include "koneksi.php"; //memangil file koneksi
	if (isset($_POST['login'])) { // jika login bernilai
		$user = $_POST['user'];  // var berisi user
		$pass = $_POST['pass']; //var berisi pass

		$query = "SELECT * FROM data_pengguna WHERE username='$user' AND password='$pass' ";//query menampilkan data_pengguna
		$data = mysqli_query($konek,$query); //koneksi query dengan database
		$cek = mysqli_num_rows($data); //menampilkan data perbaris
		if ($password != "" && $user != "") { //jika pass dan user tidak kosong
			header("location: catatan.html"); // masuk ke catatan
		}else{
			header("location: index.php"); //masih tetap
		}
	}
 ?>