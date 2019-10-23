<?php
include "../global/config.inc.php";

$nama_album=$_REQUEST['nama_album'];

mysqli_query("UPDATE ms_album SET nama_album='$nama_album' WHERE id='$id'");

header("location:index.php?menu=galeri");
?>