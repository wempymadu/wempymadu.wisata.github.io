<?php
include "../global/config.inc.php";

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

mysqli_query("INSERT INTO ms_user (user, pass) VALUES ('$user','$pass')");

header("location:index.php?menu=user");
?>