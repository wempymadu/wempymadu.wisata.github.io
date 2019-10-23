<?php
session_start();
$nameuser=$_SESSION['nameuser'];
$passuser=$_SESSION['passuser'];
include "config.inc.php";

$perintah="select * from ms_user where user='$nameuser' and pass='$passuser'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
$cek=mysql_num_rows($hasil);

//echo $nameuser;
//echo $passuser;

//echo $cek;

if ($cek<>'1')
{
	echo "<script>alert('Silahkan Anda LOGIN terlebih dahulu.'); document.location.href='../login.php';</script>\n";
		exit();
}
?>