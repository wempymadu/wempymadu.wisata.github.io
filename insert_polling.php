<?php
include "global/config.inc.php";

$a=$_REQUEST['a'];
$b=$_REQUEST['b'];
$c=$_REQUEST['c'];
$d=$_REQUEST['d'];
$e=$_REQUEST['e'];
$id=$_REQUEST['id'];

if ($a)
{
mysqli_query("UPDATE polling SET hasil_a=hasil_a+1 WHERE id='$id'");
}
elseif ($b)
{
mysqli_query("UPDATE polling SET hasil_b=hasil_b+1 WHERE id='$id'");
}
elseif ($c)
{
mysqli_query("UPDATE polling SET hasil_c=hasil_c+1 WHERE id='$id'");
}
elseif ($d)
{
mysqli_query("UPDATE polling SET hasil_d=hasil_d+1 WHERE id='$id'");
}
elseif ($e)
{
mysqli_query("UPDATE polling SET hasil_e=hasil_e+1 WHERE id='$id'");
}

header("location:index.php");
?>