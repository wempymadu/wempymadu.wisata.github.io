<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
		<td valign="top" width="715"><h1>Galeri</h1>
		  <table width="100%" border="0">
            <tr>
              <?php
			  $strgal="SELECT * FROM ms_album ORDER BY id ASC";
			  $halgal = mysqli_query($strgal);
			  while($rowgal = mysqli_fetch_array($halgal))
			  {
			  ?>
			  <td><img src="images/folder.png" width="100" height="100" /><br />
			  <a href="index.php?menu=detil_galeri&id_album=<?php echo $rowgal[id]; ?>"><?= $rowgal[nama_album]; ?></a>
			  </td>
              <?php
			  }
			  ?>
			</tr>
          </table>
		  </td>
</tr>
</table>
