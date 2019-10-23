<?php
include "global/config.inc.php";

$nama=$_REQUEST['nama'];
$email=$_REQUEST['email'];
$pesan=$_REQUEST['pesan'];

mysqli_query("INSERT INTO ms_bukutamu (nama, email, pesan) VALUES ('$nama','$email','$pesan')");

header("location:index.php");
?>