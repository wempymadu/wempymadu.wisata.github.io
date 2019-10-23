<?php
if ($aksi=="hapus")
{
	mysqli_query("DELETE FROM ms_album WHERE id='$id'");
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
<form method="post" action="insert_galeri.php">
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">
<tr>
	<td colspan="3" bgcolor="#CCCCCC" height="25" align="center">Tambah Gambar </td>
</tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Nama Album </font></td>
    	<td align="center">:</td>  
      <td><input type="text" name="nama_album" /></td>      
    </tr>
	
    <tr>
    	<td colspan="3"><input type="submit" value="Simpan" /> 
        <input type="button" value="Kembali" onclick="document.location='index.php?menu=galeri'" /></td>
	</tr>  
</table>
</form>
<?php	
}
elseif ($aksi=="edit")
{
	$strsql="SELECT * FROM ms_album WHERE id='$id'";
    $hasil=mysql_query($strsql);
	$row=mysql_fetch_array($hasil);
?>
<form method="post" action="update_galeri.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">
<tr>
	<td colspan="3" bgcolor="#CCCCCC" height="25" align="center">Edit Data Gambar </td>
</tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Nama Album </font></td>
   	    <td align="center">:</td>  
        <td><input type="text" name="nama_album" value="<?php echo $row[nama_album]; ?>" /></td>      
    </tr>
	
    <tr>
    	<td colspan="3"><input type="submit" value="Simpan" /> 
        <input type="button" value="Kembali" onclick="document.location='index.php?menu=galeri'" /></td>
	</tr>  
</table>
</form>
<p>
  <?php	
}
else
{
?>

<table cellpadding="2" cellspacing="2" border="0">
<tr>
	<td width="50" align="center"><a href="index.php?menu=galeri&aksi=tambah"><img src="images/add.png" width="32" height="32" border="0" /></a></td>
	<td width="50" align="center"><a href="index.php?menu=galeri"><img src="images/refresh.png" width="32" height="32" border="0" /></a></td>
</tr>
</table>
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:10px;">
	<tr bgcolor="#79ab2c" style="color:#FFF">
    	<td width="150" height="30"> Gambar </td>
    	<td colspan="2">&nbsp;</td>
    </tr>
    <?php
    $strsql="SELECT * FROM ms_album ORDER BY id DESC";
    $hasil=mysql_query($strsql);
	while($row=mysql_fetch_array($hasil))
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
	  <td height="25"><input type="file" name="file_gambar" accept="image/*" /></td>
	  <td width="50" align="center"><a href="index.php?menu=galeri&aksi=edit&id=<?php echo $row[id]; ?>"><img src="images/edit.png"/></a></td>
      <td width="50" align="center"><a href="index.php?menu=galeri&aksi=hapus&id=<?php echo $row[id]; ?>"><img src="images/delete.png"/></a></td>
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
