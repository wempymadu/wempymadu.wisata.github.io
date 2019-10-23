<style type="text/css">
<!--
body {
	background-color: #999999;	
}
-->
</style><table border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" align="center" width="950">
<?php
if (empty($menu))
{
?>
<tr>
	<td align="center" width="475"><?php include "slideshow_berita/index.php"; ?></td>
	<td align="center" width="237" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	<marquee height="380" direction="up" behavior="scroll" scrolldelay="100" style="margin-left:18px;">
	<?php
	$strsql_testimoni="SELECT * FROM ms_bukutamu ORDER BY id DESC LIMIT 0,5";
	$hasil_testimoni=mysqli_query($strsql_testimoni);
	while($row_testimoni=mysqli_fetch_array($hasil_testimoni))
	{
	?>
	<strong>Nama:</strong> <?php echo $row_testimoni[nama]; ?><br>
	<strong>E-mail:</strong> <?php echo $row_testimoni[email]; ?><br>
	<strong>Pesan:</strong> <?php echo $row_testimoni[pesan]; ?><br><br>
	<?php
	}
	?>
	</marquee>	
	</td>
	<td align="center" width="238" valign="top">
	<marquee height="380" direction="down" behavior="scroll" scrolldelay="100" style="margin-left:18px;">
	<?php
	$strsql_galeri="SELECT * FROM ms_foto ORDER BY id DESC LIMIT 0,5";
	$hasil_galeri=mysqli_query($strsql_galeri);
	while($row_galeri=mysqli_fetch_array($hasil_galeri))
	{
	?>
	<img src="galeri/<?php echo $row_galeri[foto]; ?>" width="200" height="180" style="border:1px solid #ccc;" vspace="10"><br>
	<?php
	}
	?>
	</marquee>
	</td>
</tr>
<?php
}
?>
<tr>
  <td align="center" colspan="3">
  <table width="100%" cellpadding="2" cellspacing="2" border="0">
  	<tr>
		<td valign="top" width="715">
		  <p>
		    <?php
		if ($menu=="tentang_kami")
		{ include "tentang_kami.php"; }
		elseif ($menu=="galeri")
		{ include "galeri.php"; }
		elseif ($menu=="bukutamu")
		{ include "bukutamu.php"; }	
		elseif ($menu=="budaya")
		{ include "budaya.php"; }
		elseif ($menu=="hotel")
		{ include "hotel.php"; }
		elseif ($menu=="transport")
		{ include "transport.php"; }
		elseif ($menu=="dermaga")
		{ include "dermaga.php"; }
		elseif ($menu=="video")
		{ include "video.php"; }
		elseif ($menu=="lohliang")
		{ include "lohliang.php"; }
		elseif ($menu=="pulau_rinca")
		{ include "pulau_rinca.php"; }
		elseif ($menu=="pulau_gili")
		{ include "pulau_gili.php"; }
		elseif ($menu=="pulau_nusakode")
		{ include "pulau_nusakode.php"; }
		elseif ($menu=="pulau_kelor")
		{ include "pulau_kelor.php"; }
		elseif ($menu=="pulau_sebita")
		{ include "pulau_sebita.php"; }
		elseif ($menu=="pulau_bugis")
		{ include "pulau_bugis.php"; }
		elseif ($menu=="pulau_serai")
		{ include "pulau_serai.php"; }
		elseif ($menu=="pulau_merah")
		{ include "pulau_merah.php"; }
		elseif ($menu=="pantai_pasirmerah")
		{ include "pantai_pasirmerah.php"; }
		elseif ($menu=="pulau_gilimotang")
		{ include "pulau_gilimotang.php"; }
		elseif ($menu=="selengkapnya")
		{ include "selengkapnya.php"; }
		elseif ($menu=="detil_galeri")
		{ include "detil_galeri.php"; }
		else
		{ include "home.php"; }
		?>
		  </p>
		  </td>
		<td valign="top"  bgcolor="#FFFFFF"width="235" align="center"><?php include "menu-login.php"; ?>
		<?php include "visitor.php"; ?>
		<?php include "kontak.php"; ?>
		<?php include "berita-pilihan.php"; ?>
		<?php include "polling.php"; ?>
		<?php include "chating.php"; ?>
		<?php include "facebook.php"; ?>
		</td>
	</tr>
  </table>
  </td>
</tr>
</table>
