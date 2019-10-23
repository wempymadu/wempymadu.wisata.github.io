<?php
include "../global/config.inc.php";

$gambar=$_REQUEST['gambar'];
$id_album=$_REQUEST['id_album'];

$uploaddir = '../galeri/';
$uploadfile = $uploaddir . basename($_FILES['gambar']['name']);

$fileName = $_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile);
mysqli_query("INSERT INTO ms_foto (id_album, foto) VALUES ('$id_album','$fileName')");

header("location:index.php?menu=galeri_detil&id_album=$id_album");
?>