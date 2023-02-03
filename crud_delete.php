<?php
include("db_conn.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM tb_product WHERE id=$id");

header("Location:crud.php");
?>

