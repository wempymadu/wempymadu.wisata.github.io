<?php
if ($aksi=="hapus")
{
	mysqli_query("DELETE FROM ms_user WHERE id='$id'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if ($aksi=="tambah")
{
?>
<form method="post" action="insert_user.php">
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">
<tr>
	<td colspan="3" bgcolor="#CCCCCC" height="30" align="center">Tambah Data User Manager</td>
</tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Username</font></td>
    	<td align="center" width="10">:</td>  
      <td width="200"><input type="text" name="user" /></td>      
    </tr>
	<tr>
    	<td bgcolor="#79ab2c" height="25"><font color="#FFFFFF">Password</font></td>
    	<td align="center">:</td>  
        <td><input type="text" name="pass" /></td>      
    </tr>  
    <tr>
    	<td colspan="3"><input type="submit" value="Simpan" /> 
        <input type="button" value="Kembali" onclick="document.location='index.php?menu=user'" /></td>
    </tr>  
</table>
</form>
<?php	
}
elseif ($aksi=="edit")
{
	$strsql="SELECT * FROM ms_user WHERE id='$id'";
    $hasil=mysqli_query($strsql);
	$row=mysqli_fetch_array($hasil);
?>
<form method="post" action="update_user.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">
<tr>
	<td colspan="3" bgcolor="#CCCCCC" height="30" align="center">Edit Data User Manager</td>
</tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Username</font></td>
    	<td align="center" width="10">:</td>  
      <td width="200"><input type="text" name="user" value="<?php echo $row[user]; ?>" /></td>      
    </tr>
	<tr>
    	<td bgcolor="#79ab2c" height="25"><font color="#FFFFFF">Password</font></td>
    	<td align="center">:</td>  
        <td><input type="text" name="pass" value="<?php echo $row[pass]; ?>" /></td>      
    </tr>  
    <tr>
    	<td colspan="3"><input type="submit" value="Simpan" /> 
        <input type="button" value="Kembali" onclick="document.location='index.php?menu=user'" /></td>
    </tr>  
</table>
</form>
<?php	
}
else
{
?>
<table cellpadding="2" cellspacing="2" border="0">
<tr>
	<td width="50" align="center"><a href="index.php?menu=user&aksi=tambah"><img src="images/add.png" width="32" height="32" border="0" /></a></td>
	<td width="50" align="center"><a href="index.php?menu=user"><img src="images/refresh.png" width="32" height="32" border="0" /></a></td>
</tr>
</table>
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:10px;">
	<tr bgcolor="#79ab2c" style="color:#FFF">
    	<td width="200" height="30">Username</td>
    	<td width="200" bgcolor="#79ab2c">Password</td>  
        <td width="100" colspan="2">&nbsp;</td>      
    </tr>
    <?php
    $strsql="SELECT * FROM ms_user ORDER BY id DESC";
    $hasil=mysqli_query($strsql);
	while($row=mysqli_fetch_array($hasil))
	{
		//untuk background warna warni
		$no++;
		if ($no%2<>0)
		{
			$bgcolor="#efefef";	
		}
		else
		{
			$bgcolor="#dddddd";
		}
	?>
	<tr bgcolor="<?php echo $bgcolor; ?>">
	  <td height="25"><?php echo $row[user]; ?></td>
	  <td><?php echo $row[pass]; ?></td>
      <td align="center" width="50"><a href="index.php?menu=user&aksi=edit&id=<?php echo $row[id]; ?>"><img src="images/edit.png"/></a></td>
	  <td align="center" width="50"><a href="index.php?menu=user&aksi=hapus&id=<?php echo $row[id]; ?>"><img src="images/delete.png"/></a></td>
  </tr>
  <?php
	}
  ?>
</table>
<?php
}
?>
</body>
</html>
