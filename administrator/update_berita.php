<?php
include "../global/config.inc.php";

$judul=$_REQUEST['judul'];
$id_kategori=$_REQUEST['id_kategori'];
$deskripsi=$_REQUEST['deskripsi'];
$id=$_REQUEST['id'];

mysqli_query("UPDATE ms_berita SET judul='$judul', id_kategori='$id_kategori', deskripsi='$deskripsi' WHERE id='$id'");

header("location:index.php?menu=berita");
?>