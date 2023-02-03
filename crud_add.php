<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once("db_conn.php");

if(isset($_POST['Submit'])) {	
	$nama = mysqli_real_escape_string($conn, $_POST['nama']);
	$harga = mysqli_real_escape_string($conn, $_POST['harga']);
	$gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
		
	if(empty($nama) || empty($harga) || empty($gambar)) {
		if(empty($nama)) {
			echo "<font color='red'>kolom nama kosong</font><br/>";
		}
		if(empty($harga)) {
			echo "<font color='red'>kolom harga kosong</font><br/>";
		}
		if(empty($gambar)) {
			echo "<font color='red'>kolong gambar kosong</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		$result = mysqli_query($conn, "INSERT INTO tb_product (nama,gambar,harga) VALUES ('$nama','$gambar','$harga')");
		header("Location: crud.php");
	}
}
?>
</body>
</html>
