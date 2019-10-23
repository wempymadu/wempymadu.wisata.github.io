<?php
include "global/config.inc.php";
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$sql="SELECT * FROM ms_user WHERE user='$username' AND pass='$password'";
$hasil=mysqli_query($sql);
$row=mysqli_fetch_array($hasil);
$cek=mysqli_num_rows($hasil);

if ($cek=="1")
{
	session_start();
	//session_register("nameuser");
	//session_register("passuser");
	//$nameuser = $row[user];
	//$passuser = $row[pass];
	$_SESSION["nameuser"] = $username;
	$_SESSION["passuser"] = $password;

	header("location:administrator/index.php");
}
else
{
	header("location:login.php?info=1");
}
?>