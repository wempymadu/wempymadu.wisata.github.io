<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
		<td valign="top" width="715"><h1>Galeri</h1>
		  <table width="100%" border="0">
            <tr>
              <?php
			  $strgal="SELECT * FROM ms_foto WHERE id_album='$id_album' ORDER BY id ASC";
			  $halgal=mysqli_query($strgal);
			  while($rowgal=mysqli_fetch_array($halgal))
			  {
			  ?>
			  <td><a href="galeri/<?php echo $rowgal[foto]; ?>" target="_blank"><img src="galeri/<?php echo $rowgal[foto]; ?>" width="100" height="100" />
			 </a>
			  </td>
              <?php
			  }
			  ?>
			</tr>
          </table>
		  </td>
</tr>
</table>
