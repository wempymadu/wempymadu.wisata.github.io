<?php
if ($aksi=="hapus")
{
	mysqli_query("DELETE FROM polling WHERE id='$id'");
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
<form method="post" action="insert_polling.php">
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">

	<tr>
	  <td colspan="3" bgcolor="#CCCCCC" height="25" align="center">Polling Website Komodo</td>
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Pertanyaan</font></td>
	  <td>:</td>
	  <td height="25" bgcolor="#79ab2c"><input type="text" name="pertanyaan" size="50" /></td>
    </tr>
	

    <tr>
      <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Jawab A</font></td>
	  <td>:</td>
      <td height="25" bgcolor="#79ab2c"><input type="text" name="jawab_a" size="50"/></td>
    </tr>
    <tr>
      <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Jawab B </font></td>
	  <td>:</td>
      <td height="25" bgcolor="#79ab2c"><input type="text" name="jawab_b" size="50"/></td>
    </tr>
    <tr>
      <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Jawab C </font></td>
	  <td>:</td>
      <td height="25" bgcolor="#79ab2c"><input type="text" name="jawab_c" size="50"/></td>
    </tr>
    <tr>
      <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Jawab D </font></td>
	  <td>:</td>
      <td height="25" bgcolor="#79ab2c"><input type="text" name="jawab_d" size="50"/></td>
    </tr>
    <tr>
      <td bgcolor="#79ab2c" width="100" height="25"><font color="#FFFFFF">Jawab E </font></td>
	  <td>:</td>
      <td height="25" bgcolor="#79ab2c"><input type="text" name="jawab_e" size="50"/></td>
    </tr>
    <tr>
      <td colspan="3"><input name="submit" type="submit" value="Simpan" />
      <input name="button2" type="button" onclick="document.location='index.php?menu=polling'" value="Kembali" /></td>
    </tr>  
</table>
</form>
<?php	
}
elseif ($aksi=="edit")
{
	$strsql="SELECT * FROM polling WHERE id='$id'";
    $hasil=mysqli_query($strsql);
	$row=mysqli_fetch_array($hasil);
?>
<form method="post" action="update_polling.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:20px; border:1px solid #CCC">

	<tr>
	  <td colspan="3" bgcolor="#CCCCCC" height="25" align="center">Polling Website Komodo</td>
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" height="25"><font color="#FFFFFF">Pertanyaan</font></td>
	  <td>:</td>
	  <td bgcolor="#79ab2c" height="25"><input type="text" name="pertanyaan" size="50"/></td>
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" height="25"><font color="#FFFFFF">Jawab A </font></td>
	  <td>:</td>
	  <td bgcolor="#79ab2c" height="25"><input type="text" name="jawab_a" size="50"/></td>
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" height="25"><font color="#FFFFFF">Jawab B </font></td>
	  <td>:</td>
	  <td bgcolor="#79ab2c" height="25"><input type="text" name="jawab_b" size="50"/></td>
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" height="25"><font color="#FFFFFF">Jawab C </font></td>
	  <td>:</td>
	  <td bgcolor="#79ab2c" height="25"><input type="text" name="jawab_c" size="50"/></td>
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" height="25"><font color="#FFFFFF">Jawab D </font></td>
	 <td>:</td>
	  <td bgcolor="#79ab2c" height="25"><input type="text" name="jawab_d" size="50"/></td>
    </tr>
	<tr>
	  <td bgcolor="#79ab2c" width="124" height="25"><font color="#FFFFFF">Jawab E </font></td>
	  <td>:</td>
	  <td bgcolor="#79ab2c" width="144" height="25"><input type="text" name="jawab_e" size="50"/></td>
    </tr>
	
	
    <tr>
      <td colspan="3"><input name="submit" type="submit" value="Simpan" />
      <input name="button" type="button" onclick="document.location='index.php?menu=polling'" value="Kembali" /></td>
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
	<td width="50" align="center"><a href="index.php?menu=polling&aksi=tambah"><img src="images/add.png" width="32" height="32" border="0" /></a></td>
	<td width="50" align="center"><a href="index.php?menu=polling"><img src="images/refresh.png" width="32" height="32" border="0" /></a></td>
</tr>
</table>
<table cellpadding="1" cellspacing="1" border="0" style="margin-left:10px;">
	<tr bgcolor="#79ab2c" style="color:#FFF">
    	<td width="300" height="30">Pertanyaan</td>
    	<td width="100" height="30">Jawab A</td>
    	<td width="100" height="30">Jawab B</td>
    	<td width="100" height="30">Jawab C</td>
    	<td width="100" height="30">Jawab D</td>
    	<td width="100" height="30">Jawab E</td>
    	<td colspan="2">&nbsp;</td>
   	</tr>
    <?php
    $strsql="SELECT * FROM polling ORDER BY id DESC";
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
	  <td height="25"><?php echo $row[pertanyaan]; ?></td>
	  <td height="25"><?php echo $row[jawab_a]; ?><br />
	  <font color="#FF3300"><?php echo $row[hasil_a]; ?></font></td>
	  <td height="25"><?php echo $row[jawab_b]; ?><br />
	  <font color="#FF3300"><?php echo $row[hasil_b]; ?></font></td>
	  <td height="25"><?php echo $row[jawab_c]; ?><br /> 
	  <font color="#FF3300"><?php echo $row[hasil_c]; ?></font></td>
	  <td height="25"><?php echo $row[jawab_d]; ?><br />
	  <font color="#FF3300"><?php echo $row[hasil_d]; ?></font></td>
	  <td height="25"><?php echo $row[jawab_e]; ?><br />
	  <font color="#FF3300"><?php echo $row[hasil_e]; ?></font></td>
	  <td width="50"><div align="center"><a href="index.php?menu=polling&aksi=edit&id=<?php echo $row[id]; ?>"><img src="images/edit.png"/></a></div></td>
	  <td width="50"><div align="center"><a href="index.php?menu=polling&aksi=hapus&id=<?php echo $row[id]; ?>"><img src="images/delete.png"/></a></div></td>
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
