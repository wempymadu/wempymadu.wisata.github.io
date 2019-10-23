<?php
include "../global/config.inc.php";

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$id=$_REQUEST['id'];

mysqli_query("UPDATE ms_user SET user='$user', pass='$pass' WHERE id='$id'");

header("location:index.php?menu=user");
?>