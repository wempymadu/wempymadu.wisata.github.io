<?php
include "../global/config.inc.php";

$nama_album=$_REQUEST['nama_album'];

mysqli_query("INSERT INTO ms_album (nama_album) VALUES ('$nama_album')");

header("location:index.php?menu=galeri");
?>