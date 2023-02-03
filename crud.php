<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
<?php
include_once("db_conn.php");
$result = mysqli_query($conn, "SELECT * FROM tb_product ORDER BY id DESC"); // using mysqli_query instead
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <title>Satia Katalog</title>
  </head>
	<body>
		<div class="border border-primary subbody w-100 d-flex flex-column">
			<div class="header w-100 shadow-sm p-3 mb-5 bg-body rounded  fixed-top">
				<div class="subheader row" style="margin: 0px 10%;  height:50px">
				<div class="title col-md-8 d-flex">
						<div class="h-75 my-auto"><a class="fw-bold fs-4" style="color: #cc0000; text-decoration: none" href="home.php">Satia Katalog</a> </div>
					</div>
					<div class="navigasi col-md-4 d-flex">
					<div class="h-75 w-100 m-auto row">
							<div class="home col m-auto fw-bold"><a  style="color: #cc0000; text-decoration: none" href="home.php">Home</a></div>
							<div class="home col m-auto fw-bold"><a  style="color: #cc0000; text-decoration: none" href="katalog_login.php">Katalog</a></div>
							<div class="home col m-auto fw-bold"><a  class="border rounded-2 p-2" style="color: #cc0000; text-decoration: none" href="crud.php">Manage</a></div>
							<div class="home col m-auto fw-bold"><a  style="color: #cc0000; text-decoration: none" href="about_login.php">About</a></div>
							<a class="btn col m-auto text-white fw-bold rounded-pill" style=" width:20px; background-color:#cc0000" href="akun.php"> <?php echo $_SESSION['username']; ?></a>
						</div>
					</div>
				</div>
			</div>

			<div class="content d-flex flex-column align-items-center min-vh-100" style="margin-top: 70px;'); ">
                <div class="w-75 mt-5 d-flex pb-4" style="border-bottom: solid 1px #cc0000">
                    <h3 class="fw-bold" style="color: #cc0000">Managemen Produk</h3>
                </div>
                <div class="w-75 my-5 min-vh-100 d-flex flex-column">
                    <h4 class="d-flex justify-content-end" >
                        <a class="btn text-white fw-bold rounded-pill m-3" style="width: 15%; background-color:#cc0000" href="form_add.php">Tambah Produk</a>
                    </h4>
                    <table class="table table-striped border">
                        <thead class="table-light">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($res = mysqli_fetch_array($result)) { 		
                                    echo "<tr>";
                                    echo "<td>".$res['id']."</td>";
                                    echo "<td>".$res['nama']."</td>";
                                    echo "<td>".$res['harga']."</td>";
                                    echo "<td>".$res['gambar']."</td>";	
                                    echo "<td><a href=\"crud_edit.php?id=$res[id]\">Edit</a> | <a href=\"crud_delete.php?id=$res[id]\" onClick=\"return confirm('hapus produk?')\">Delete</a></td>";		
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
			</div>

			<div class="footer border-top shadow-lg bg-light mt-3">
				<div class="subfooter d-flex flex-row justify-content-between" style="margin: 0px 10%;  height:150px">
					<div class="d-flex flex-column w-25">
						<div class="d-flex flex-column my-auto" style="height:120px">
							<div class="fw-bold fs-4 mb-1" style="color: #cc0000">Satia Katalog</div>
							<div class="" style="color: #cc0000">Gd. Sains and Techno Park</div>
							<div class="" style="color: #cc0000">Jln Ganesa no 15</div>
							<div class="" style="color: #cc0000">Lebak Siliwangi, Kec Coblong</div>
							<div class="" style="color: #cc0000">Kota Bandung 40132</div>
						</div>
					</div>
					<div class=" d-flex flex-column">
					<div class="d-flex flex-column my-auto" style="height:120px">
							<div class="fw-bold fs-4 mb-1" style="color: #cc0000">Navigasi</div>
							<a href="home.php" class="" style="text-decoration:none; color: #cc0000">Home</a>
							<a href="katalog_login.php" class="" style="text-decoration:none; color: #cc0000">Katalog</a>
							<a href="about_login.php" class="" style="text-decoration:none; color: #cc0000">About</a>
							<a href="akun.php" class="" style="text-decoration:none; color: #cc0000">Account</a>
						</div>
					</div>
					<div class="d-flex flex-column w-25">
						<div class="d-flex flex-column my-auto" style="height:120px">
							<div class="fw-bold fs-4 mb-1" style="margin-left: 5%; color: #cc0000">Find Us</div>
							<div class=" d-flex flex-row justify-content-around mt-4">
                            <a class="mx-1" href="https://github.com/alisatia/web_e_katalog"><img src="https://alisatia.000webhostapp.com/assets/icon/github.png" alt="Github" style="width:40px"></a>
								<a class="mx-1" href="https://www.youtube.com/@errorsans9074"><img src="https://alisatia.000webhostapp.com/assets/icon/youtube.png" alt="Youtube" style="width:40px"></a>
								<a class="mx-1" href="https://instagram.com/ali.satia?igshid=ZmZhODViOGI="><img src="https://alisatia.000webhostapp.com/assets/icon/IG.png" alt="IG" style="width:40px"></a>
								<a class="mx-1" href="https://www.facebook.com/profile.php?id=100004565477202&mibextid=ZbWKwL"><img src="https://alisatia.000webhostapp.com/assets/icon/fb.png" alt="FB" style="width:40px"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="copyright d-flex align-items-center" style="height:35px; background-color: #cc0000">
				<div class="text mx-auto text-white fw-bold">Copyright &copy;  20552011200_Ahmad Ali Satia_TIF K 20 CID_UASWEB1</div>
			</div>
		</div>
	</body>
</html>

<?php 
}else{
	header("Location: login.php");
     exit();
}
 ?>