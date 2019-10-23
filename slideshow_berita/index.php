<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Slideshow News</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script src="./script/jquery.min.js" type="text/javascript"></script>
<script src="script/js2.js"></script>
<script src="script/js3.js"></script>
<script src="script/js4.js"></script>
<script src="script/js5.js"></script>

<body>
  <!-- Featured Content Slider Started -->
<div class="featuredposts clearfix">
<div class="fp-slides" style="position: relative; width: 468px; height: 345px;">

<?php
$strsqlslide="SELECT * FROM ms_berita WHERE aktif='1' ORDER BY id DESC LIMIT 0,3";
$hasilslide=mysqli_query($strsqlslide);
while($rowslide=mysqli_fetch_array($hasilslide))
{
?>
<div class="fp-post" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0;">
<div class="fp-thumbnail"><a href="galeri/<?php echo $rowslide[gambar]; ?>" target="_blank"><img src="galeri/<?php echo $rowslide[gambar]; ?>"></a></div>
<h3 class="fp-title"><a href="index.php?menu=selengkapnya&id=<?php echo $rowslide[id]; ?>"><?php echo $rowslide[judul]; ?></a></h3>
<p>  <?php 
$kata = str_replace("\n", "\n<br>\n", $rowslide[deskripsi]);
$kata=strtok($rowslide[deskripsi]," ");
for ($z=1;$z<=20;$z++)
{
echo($kata);
echo(" ");
$kata=strtok(" ");
}
  ?> </p>
</div>
<?php
}
?>

</div>
<div class="fp-nav clearfix">
<a class="fp-next" href="index.html/#fp-next"></a>
<a class="fp-prev" href="index.html/#fp-prev"></a>
</div>
</div>
<!-- Featured Content Slider End --></div>


</body>
</html>