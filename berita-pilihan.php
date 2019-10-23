<table border="0"  background="images/3.png"cellpadding="0" cellspacing="0" width="100%">
<tr>
		<td valign="top" width="715"><strong>Berita Pilihan </strong></td>
</tr>
<?php
$sqlpilihan="SELECT * FROM ms_berita WHERE aktif='1' ORDER BY id DESC LIMIT 6,11";
$hasilpilihan= mysqli_query($sqlpilihan);
while($rowpilihan= mysqli_fetch_array($hasilpilihan))
{
?>
<tr>
  <td valign="top" style="border-bottom:1px dashed #000;"><a href="index.php?menu=selengkapnya&id=<?php echo $rowpilihan[id]; ?>"><?php echo $rowpilihan[judul]; ?></a></td>
</tr>
<?php
}
?>
</table>
