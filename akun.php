<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
<?php
include_once("db_conn.php");
$id2=$_SESSION['id'];
$result = mysqli_query($conn, "SELECT  * FROM  tb_user WHERE  id=$id2"); 
while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$email = $res['email'];
	$password = $res['password'];
}
?>

<?php
if(isset($_POST['update']))
{	
	$id2 = mysqli_real_escape_string($conn, $_POST['id']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);	
	
	if(empty($username) || empty($email) || empty($password)) {	
		if(empty($username)) {
			echo "<font color='red'>username nama kosong</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>email harga kosong</font><br/>";
		}
		if(empty($password)) {
			echo "<font color='red'>password gambar kosong.</font><br/>";
		}		
	} else {	
		$result = mysqli_query($conn, "UPDATE tb_user SET email='$email' , username='$username',  password='$password' WHERE id=$id2");
		echo "da";
        header("Location: akun.php?sukses=data akun sudah di perbaharui");
	}
}
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
		<div class="subbody w-100 d-flex flex-column">
			<div class="header w-100 shadow-sm p-3 mb-5 bg-body rounded  fixed-top">
				<div class="subheader row" style="margin: 0px 10%;  height:50px">
				<div class="title col-md-8 d-flex">
						<div class="h-75 my-auto"><a class="fw-bold fs-4" style="color: #cc0000; text-decoration: none" href="home.php">Satia Katalog</a> </div>
					</div>
					<div class="navigasi col-md-4 d-flex">
					<div class="h-75 w-100 m-auto row">
							<div class="home col m-auto fw-bold"><a style="color: #cc0000; text-decoration: none" href="home.php">Home</a></div>
							<div class="home col m-auto fw-bold"><a  style="color: #cc0000; text-decoration: none" href="katalog_login.php">Katalog</a></div>
							<div class="home col m-auto fw-bold"><a  style="color: #cc0000; text-decoration: none" href="crud.php">Manage</a></div>
							<div class="home col m-auto fw-bold"><a  style="color: #cc0000; text-decoration: none" href="about_login.php">About</a></div>
							<a class="btn col m-auto text-white fw-bold rounded-pill" style=" width:20px; background-color:#cc0000" href="akun.php"> <?php echo $_SESSION['username']; ?></a>
						</div>
					</div>
				</div>
			</div>

			<div class="content d-flex flex-column align-items-center" style="margin-top: 70px;'); ">
                <div class="w-75 mt-5 d-flex flex-row pb-4 justify-content-between" style="border-bottom: solid 1px #cc0000">
                    <h3 class="fw-bold" style="color: #cc0000">My Account</h3>
					<div class="w-75"></div>
					<a class="btn col m-auto text-white fw-bold rounded-pill" style=" width:90px; background-color:#cc0000" href="logout.php">Logout</a>
                </div>
                <div class="w-50 my-5  d-flex flex-column">
                    <div class=" d-flex">
                        <img class="mx-auto" style="height: 180px" src="assets/avatar.png" alt="avatar">
                    </div>
                    <form name="form3" method="post" action="akun.php" class="shadow border d-flex rounded-5">
                        <div class="d-flex flex-column w-100" style="height: 350px">
                            <?php if (isset($_GET['sukses'])) { ?>
								<p class="sukses fw-bold fs-5 mx-auto text-danger mt-3"><?php echo $_GET['sukses']; ?></p>
							<?php } ?>
                            <input type="text" name="username" value="<?php echo $username;?>" class="border rounded w-50 mx-auto my-3 h-25">
                            <input type="text" name="email" value="<?php echo $email;?>" class="border rounded w-50 mx-auto mb-3 h-25">
                            <input type="text" name="password" value="<?php echo $password;?>"  class="border rounded w-50 mx-auto mb-3 h-25">
                            <input type="hidden" name="id" value="<?php echo $id2?>"/>
                            <input type="submit" name="update" value="Update"class="rounded-4 mb-5 w-25 mx-auto mb-3 h-25 text-white fw-bold fs-5" / style="background-color: #cc0000;">
                        </div>
                    </form>
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
     header("Location: index.php");
     exit();
}
 ?>