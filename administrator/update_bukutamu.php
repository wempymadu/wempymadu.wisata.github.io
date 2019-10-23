<?php
include "../global/config.inc.php";

$nama=$_REQUEST['nama'];
$email=$_REQUEST['email'];
$pesan=$_REQUEST['pesan'];
$id=$_REQUEST['id'];

mysqli_query("UPDATE ms_bukutamu SET nama='$nama', email='$email', pesan='$pesan' WHERE id='$id'");

header("location:index.php?menu=bukutamu");
?>