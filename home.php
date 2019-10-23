<table border="0" cellpadding="0" cellspacing="0" width="100%">
<?php
$strsqlberita="SELECT * FROM ms_berita WHERE aktif='1' ORDER BY id DESC LIMIT 3,5";
$hasilberita=mysqli_query($strsqlberita);
while($rowberita=mysqli_fetch_array($hasilberita))
{
?>
<tr>

		<td><strong><?php echo $rowberita[judul]; ?></strong><br />Tgl. & Jam: <?php echo $rowberita[tgl_jam]; ?></td>
</tr>
<tr>
  <td><img src="galeri/<?php echo $rowberita[gambar]; ?>" width="280" height="150" align="left" hspace="10" /> 
  <?php 
$kata = str_replace("\n", "\n<br>\n", $rowberita[deskripsi]);
$kata=strtok($rowberita[deskripsi]," ");
for ($z=1;$z<=50;$z++)
{
echo($kata);
echo(" ");
$kata=strtok(" ");
}
echo(".....<A HREF='index.php?menu=selengkapnya&id=$rowberita[id]' class=link><b>[Selengkapnya]</b></A>");
  ?>  </td>
</tr>
<tr>
  <td style="border-bottom:1px dashed #000;">&nbsp;</td>
</tr>
<?php
}
?>
</table>
