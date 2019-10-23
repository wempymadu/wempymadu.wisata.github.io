<?php
$id_album=$_REQUEST['id_album'];

if ($aksi=="hapus")
{
	mysqli_query("DELETE FROM ms_foto WHERE id='$id'");
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
<form method="post" action="insert_galeri_detil.php" enctype="multipart/form-data">
<?php
	  $strsql="select * from ms_album where id='$id_album'";
	  $hasil=mysqli_query($strsql);
	  $row=mysqli_fetch_array($hasil);
?>
<input type="hidden" name="id_album" value="<?php echo $id_album; ?>" />
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">
<tr>
	<td colspan="3" bgcolor="#CCCCCC" height="25" align="center">Tambah Gambar Galeri </td>
</tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Nama Album </font></td>
    	<td align="center">:</td>  
      <td>
	  <?php
	  
	  echo $row[nama_album];
	  ?>
	  </td>      
    </tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Gambar</font></td>
    	<td align="center">:</td>  
      <td><input type="file" name="gambar" /></td>      
    </tr>
    <tr>
    	<td colspan="3"><input type="submit" value="Simpan" /> 
        <input type="button" value="Kembali" onclick="document.location='index.php?menu=galeri_detil&id_album=<?php echo $id_album; ?>'" /></td>
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
	<td width="50" align="center"><a href="index.php?menu=galeri"><img src="images/back.png" width="32" height="32" border="0" /></a></td>
	<td width="50" align="center"><a href="index.php?menu=galeri_detil&aksi=tambah&id_album=<?php echo $id_album; ?>"><img src="images/add.png" width="32" height="32" border="0" /></a></td>
	<td width="50" align="center"><a href="index.php?menu=galeri_detil&id_album=<?php echo $id_album; ?>"><img src="images/refresh.png" width="32" height="32" border="0" /></a></td>
</tr>
</table>
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:10px;">
	<tr bgcolor="#79ab2c" style="color:#000">
    	<td height="30" colspan="3" bgcolor="#CCCCCC"><strong>Nama Album:</strong>    	  <?php
	  $strsql="select * from ms_album where id='$id_album'";
	  $hasil=mysqli_query($strsql);
	  $row=mysqli_fetch_array($hasil);
	  
	  echo $row[nama_album];
		?>		</td>
   	</tr>
	<tr bgcolor="#79ab2c" style="color:#FFF">
    	<td width="200" height="30">Gambar</td>
    	<td>&nbsp;</td>
    </tr>
    <?php
    $strsql2="SELECT * FROM ms_foto where id_album='$id_album' ORDER BY id DESC";
    $hasil2=mysqli_query($strsql2);
	while($row2=mysqli_fetch_array($hasil2))
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
	  <td height="25" align="center"><a href="../galeri/<?php echo $row2[foto]; ?>" target="_blank"><img src='../galeri/<?php echo $row2[foto]; ?>' width="80" height="80"></a></td>
      <td width="50" align="center"><a href="index.php?menu=galeri_detil&aksi=hapus&id=<?php echo $row2[id]; ?>&id_album=<?php echo $id_album; ?>"><img src="images/delete.png" border="0"/></a></td>
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
