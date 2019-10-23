<?php
include "../global/config.inc.php";

$pertanyaan=$_REQUEST['pertanyaan'];
$jawab_a=$_REQUEST['jawab_a'];
$hasil_a=$_REQUEST['hasil_a'];
$jawab_b=$_REQUEST['jawab_b'];
$hasil_b=$_REQUEST['hasil_b'];
$jawab_c=$_REQUEST['jawab_c'];
$hasil_c=$_REQUEST['hasil_c'];
$jawab_d=$_REQUEST['jawab_d'];
$hasil_d=$_REQUEST['hasil_d'];
$jawab_e=$_REQUEST['jawab_e'];
$hasil_e=$_REQUEST['hasil_e'];

mysqli_query("INSERT INTO polling (pertanyaan, jawab_a, hasil_a, jawab_b, hasil_b, jawab_c, hasil_c, jawab_d, hasil_d, jawab_e, hasil_e) VALUES ('$pertanyaan','$jawab_a','$hasil_a','$jawab_b','$hasil_b','$jawab_c','$hasil_c','$jawab_d','$hasil_d','$jawab_e','$hasil_e')");

header("location:index.php?menu=polling");
?>