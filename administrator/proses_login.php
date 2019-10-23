<?php
//include file koneksi database
include "global/config.php";
//ambil var
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
//tgl+jam
//$jam = date("H:i:s");                         
$sekarang=date("y-m-d, H:i:s");
//$sekarang="$hari $jam";
//echo $sekarang;
//ambil tabel
$perintah="SELECT id,login,pwd,tipe,aktif FROM usermanager WHERE login='$username' AND pwd='$password'";
$hasil=mysqli_query($perintah);
$row=mysqli_fetch_array($hasil);
$num=mysqli_num_rows($hasil);
if (empty($username))
{
echo "<script>alert('Anda belum memasukkan Username.'); document.location.href='login.php?username=$username&password=$password';</script>\n";
		exit();
}

if (empty($password))
{
echo "<script>alert('Anda belum memasukkan Password.'); document.location.href='login.php?username=$username&password=$password';</script>\n";
		exit();
}
if ($num != 0)
{
session_start();
$_SESSION["nameuser"] = $row[login];
$_SESSION["passuser"] = $row[pwd];
$_SESSION["tipe"] = $row[tipe];
		header("location:administrator/index.php");
}
else
{
echo "<script>alert('Silahkan masukkan Username dan Password Anda dengan benar.'); document.location.href='login.php?username=$username&password=$password';</script>\n";
		exit();
}
?>