<?php
if ($aksi=="hapus")
{
	mysqli_query("DELETE FROM ms_berita WHERE id='$id'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<?php
if ($aksi=="tambah")
{
?>
<form method="post" action="insert_berita.php" enctype="multipart/form-data">
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">
<tr>
	<td colspan="3" bgcolor="#CCCCCC" height="25" align="center">Tambah Berita </td>
</tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Judul </font></td>
    	<td align="center">:</td>  
      <td><input type="text" name="judul" size="50" /></td>      
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Kategori Berita</font></td>
	  <td align="center">:</td>
	  <td>
	  <select name="id_kategori">
	  <?php
	  $strsql="SELECT * FROM ms_kategoriberita WHERE aktif='1' ORDER by id ASC";
	  $hasil=mysqli_query($strsql);
	  while($row=mysqli_fetch_array($hasil))
	  {
	  ?>
	  	<option value="<?php echo $row[id]; ?>">
		<?php echo $row[nama_kategori]; ?>
		</option>
	  <?php
	  }
	  ?>
	  </select>
	  </td>
    </tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Isi Berita </font></td>
    	<td align="center">:</td>  
        <td><label>
          <textarea name="deskripsi" cols="50" rows="10">Tuliskan Deskripsi Berita Anda</textarea>
        </label></td>      
    </tr>
	<tr>
    	<td width="100" height="25" bgcolor="#79ab2c"><font color="#FFFFFF">Input Gambar  </font></td>
    	<td align="center">:</td>  
        <td><input type="file" name="gambar" /></td>
	</tr>  
    <tr>
    	<td colspan="3"><input type="submit" value="Simpan" /> 
        <input type="button" value="Kembali" onclick="document.location='index.php?menu=berita'" /></td>
    </tr>  
</table>
</form>
<?php	
}
elseif ($aksi=="edit")
{
	$strsql="SELECT * FROM ms_berita WHERE id='$id'";
    $hasil=mysqli_query($strsql);
	$row=mysqli_fetch_array($hasil);
?>
<form method="post" action="update_berita.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">
<tr>
	<td colspan="3" bgcolor="#CCCCCC" height="25" align="center">Edit  Berita</td>
</tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Judul</font></td>
   	  <td align="center">:</td>  
        <td><input type="text" name="judul" value="<?php echo $row[judul]; ?>" size="50" /></td>      
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Kategori Berita</font></td>
	  <td align="center">:</td>
	  <td><select name="id_kategori">
	  <?php
	  $strsql2="SELECT * FROM ms_kategoriberita WHERE aktif='1' ORDER by id ASC";
	  $hasil2=mysqli_query($strsql2);
	  while($row2=mysqli_fetch_array($hasil2))
	  {
	  ?>
	  	<option value="<?php echo $row2[id]; ?>">
		<?php echo $row2[nama_kategori]; ?>
		</option>
	  <?php
	  }
	  ?>
	  </select></td>
    </tr>
	<tr>
    	<td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Isi Berita </font></td>
   	    <td align="center">:</td>  
        <td><label>
        <textarea name="deskripsi" cols="50" rows="10"><?php echo $row[deskripsi]; ?></textarea>
        </label></td>      
    </tr>  
    <tr>
    	<td width="100" height="25" bgcolor="#79ab2c"><font color="#FFFFFF">Input Gambar  </font></td>
    	<td align="center">:</td>  
        <td><input type="file" name="gambar" /></td>
	</tr>
	<tr>
    	<td colspan="3"><input type="submit" value="Simpan" /> 
        <input type="button" value="Kembali" onclick="document.location='index.php?menu=berita'" /></td>
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
	<td width="50" align="center"><a href="index.php?menu=berita&aksi=tambah"><img src="images/add.png" width="32" height="32" border="0" /></a></td>
	<td width="50" align="center"><a href="index.php?menu=berita"><img src="images/refresh.png" width="32" height="32" border="0" /></a></td>
</tr>
</table>
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:10px;">
	<tr bgcolor="#79ab2c" style="color:#FFF">
    	<td width="300" height="30">Judul</td>
    	<td width="200" height="30">Tgl. & Jam</td>		
    	<td width="100">Kategori</td>
    	<td width="400">Isi Berita </td>  
        <td colspan="2">&nbsp;</td>
    </tr>
    <?php
    $strsql="SELECT a.*,b.nama_kategori FROM ms_berita a, ms_kategoriberita b WHERE b.id=a.id_kategori ORDER BY a.id DESC";
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
	  <td height="25"><?php echo $row[judul]; ?></td>
	  <td height="25"><?php echo $row[tgl_jam]; ?></td>
	  <td><?php echo $row[nama_kategori]; ?></td>
	  <td><?php echo $row[deskripsi]; ?></td>
      <td width="50" align="center"><a href="index.php?menu=berita&aksi=edit&id=<?php echo $row[id]; ?>"><img src="images/edit.png" border="0"/></a></td>
      <td width="50" align="center"><a href="index.php?menu=berita&aksi=hapus&id=<?php echo $row[id]; ?>"><img src="images/delete.png" border="0"/></a></td>
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
