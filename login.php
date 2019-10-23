<?php
$info=$_REQUEST['info'];
?>
<!html>
<head>
	<title>Login Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	
}
body,td,th {
	color: #999999;
}
-->
</style></head>
<body>
<?php
if ($info=="1")
{
	echo "<font color=red>Login Gagal, Silahkan Coba Lagi !!!</font>";
}
?><center>
<h1>Login</h1>
<form action="proses_login.php" method="post">
  <strong>
Username: 
<input type="text" name="username" maxlength="10" />
<br />
Password: 
<input type="password" name="password" maxlength="10" />
<br />
<input type="submit" value=" Login " />
  </strong>
</form></center><p>
<center><h2>silahkan di isi dengan baik dan benar</h2></center>
</body>
</html>