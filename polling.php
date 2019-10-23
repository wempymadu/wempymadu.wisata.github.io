<?php
$sqlpoll="SELECT * FROM polling";
$hasilpoll=mysqli_query($sqlpoll);
$rowpoll=mysqli_fetch_array($hasilpoll);
?>
<table border="0"  background="images/2.png"cellpadding="" cellspacing="0" width="100%">
<form method="post" action="insert_polling.php">
<input type="hidden" name="id" value="<?php echo $rowpoll[id]; ?>" />
<tr>
  <td valign="top" colspan="2"><strong>Polling</strong></td>
</tr>
<tr>
  <td colspan="2"><?php echo $rowpoll[pertanyaan]; ?></td>
</tr>
<tr>
  <td width="32"><input type="radio" value="1" name="a" /></td> 
  <td width="1077"><?php echo $rowpoll[jawab_a]; ?></td>
</tr>
<tr>
  <td width="32"><input type="radio" value="1" name="b" /></td> 
  <td width="1077"><?php echo $rowpoll[jawab_b]; ?> </td>
</tr>
<tr>
  <td width="32"><input type="radio" value="1" name="c" /></td> 
  <td width="1077"><?php echo $rowpoll[jawab_c]; ?> </td>
</tr>
<tr>
  <td width="32"><input type="radio" value="1" name="d" /></td> 
  <td width="1077"><?php echo $rowpoll[jawab_d]; ?> </td>
</tr>
<tr>
  <td width="32"><input type="radio" value="1" name="e" /></td> 
  <td width="1077"><?php echo $rowpoll[jawab_e]; ?> </td>
</tr>
<tr>
  <td colspan="2"><input type="submit" value="Submit" /></td>
  </tr>
  </form>
</table>
