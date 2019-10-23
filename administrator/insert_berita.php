<?php
include "../global/config.inc.php";

$judul=$_REQUEST['judul'];
$id_kategori=$_REQUEST['id_kategori'];
$deskripsi=$_REQUEST['deskripsi'];
$gambar=$_REQUEST['gambar'];
$uploaddir = '../galeri/';
$uploadfile = $uploaddir . basename($_FILES['gambar']['name']);

$tgl_skr=date("Y-m-d, H:i:s");
$fileName = $_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile);


mysqli_query("INSERT INTO ms_berita (judul, id_kategori, deskripsi, gambar, tgl_jam) VALUES ('$judul','$id_kategori','$deskripsi','$fileName','$tgl_skr')");

header("location:index.php?menu=berita");
?>