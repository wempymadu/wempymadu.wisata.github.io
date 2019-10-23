<table border="0" cellpadding="0" cellspacing="0" width="100%">
<?php
$strsqlberita="SELECT * FROM ms_berita WHERE id='$id'";
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
echo $kata;
  ?>  </td>
</tr>
<?php
}
?>
</table>
