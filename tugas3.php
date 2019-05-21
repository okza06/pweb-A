<!DOCTYPE html>
<html>
<body>
<?php 
$nama = $nim = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["nim"])) {
	$nama = $_POST["nama"];
	$nim  = $_POST["nim"];
}
 ?>
 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 	NAMA : <input type="text" name="nama"><br>
 	NIM  : <input type="number" min="1" max="9999999999" name="nim"><br>
 	<input type="submit" name="submit">
 	
 </form>
 <?php 
 if (!empty($nama) && !empty($nim)) {
  	echo "<h2>selamat datang</h2>";
  	echo $nama . "<br>" . $nim;
  } 
  else if (!empty($nama)) {
  	echo "<h2> Nim Belum Diisi</h2>";
  }
  else if (!empty($nim)) {
  	echo "<h2> Nama Belum Diisi</h2>";
  }
  ?>
</body>
</html>