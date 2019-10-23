<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Selamat Datang di Website Komodo</title>
<style type="text/css">
<!--
body {
	background: url(images/background.jpg)center top no-repeat fixed;#fff center top;
}
.style1 {color: #FFFFFF}
-->
</style>

<style type="text/css">
.dropmenu {
    background: #616161;
    height: 30px;
    list-style-type: none;
    margin: 0;
    padding: 0px;
}
.dropmenu li {
    border-right: solid 1px white;
    float: left;
    height: 30px;
}
.dropmenu li a {
    color: #fff;
    display: block;
    font: 12px arial, verdana, sans-serif;
    font-weight: bold;
    padding: 9px 20px;
    text-decoration: none;
}
.dropmenu li:hover { background: #778899; position: relative; }
.dropmenu li:hover a { text-decoration: underline; }
.dropmenu li:hover ul {
    background-color: #3f4a54;
    border: 1px solid grey;
    left: 0px;
    padding: 3px;
    top: 30px;
    width: 160px;
}
.dropmenu li:hover ul li { border: none; height: 18px; }
.dropmenu li:hover ul li a {
    background-color: #778899;
    border: 1px solid transparent;
    color: #fff;
    display: block;
    font-size: 11px;
    height: 18px;
    line-height: 18px;
    padding: 0px;
    text-decoration: none;
    text-indent: 5px;
    width: 158px;
    padding: 3px;
}
.dropmenu li:hover ul li a:hover {
    background: silver;
    border: solid 1px #444;
    color: #000;
    height: 18px;
    padding: 3px;
}
.dropmenu ul {
    left: -9999px;
    list-style-type: none;
    position: absolute;
    top: -9999px;
}
</style>

</head>
<?php
session_start();
$_SESSION['lang'] = NULL;
?>

<script language="JavaScript" type="text/JavaScript">
    <!--
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
    eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
    if (restore) selObj.selectedIndex=0;
    }
    //-->
</script>

<form name="form1" method="post" action="?lang=">

    Ganti Bahasa :
    <select name="menu1" onChange="MM_jumpMenu('parent',this,0)">

    <?php
    if(($_GET['lang'] == "indonesian") || (empty($_GET['lang']))) {
    ?>

    <option value="?lang=indonesian" selected>Indonesian</option>
    <option value="?lang=english">English</option>

    <?php
    } else {
    ?>

    <option value="?lang=indonesian">Indonesian</option>
    <option value="?lang=english" selected>English</option>

    <?php
    } // end else
    ?>

    </select>
</form>

<p>
    <?php
    if($_GET['lang'] == "english") {
        $a = include "language/english.php";
    } 
    else if ($_GET['lang'] == "indonesian") {
        $a = include "language/indonesian.php";
    } 
    else {
        $a = include "language/indonesian.php";
    }
    print "$_SESSION[lang] $home<br>$faq<br>$tes";
    ?>
</p>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="950">
<tr>
	<td align="center" width="100"><a href="index.php"><img src="images/logo.jpg" border="0"/></a></td>
	<td align="left" width="850"><img src="images/header.jpg"/></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="950">
<tr>
	<td height="20" align="center" bgcolor="A2C664"><ul class="dropmenu">
<li><a href="index.php">Home</a></li>
<li><a href="#1">Tentang Kami</a></li>
<li><a href="#1">Galeri</a></li>
<li><a href="#1">Video</a></li>
<li><a href="#1">Buku Tamu</a></li>
<li><a href="#2">Jenis Wisata</a>
    <ul>
    <li><a href="#21">Pulau Komodo</a></li>
    <li><a href="#22">Pula</a></li>
    <li><a href="#23">Sub Menu 3</a></li>
    <li><a href="#24">Sub Menu 4</a></li>
    </ul>
</li>
<li><a href="#2">Jenis Wisata</a>
    <ul>
    <li><a href="#21">Pulau Komodo</a></li>
    <li><a href="#22">Pula</a></li>
    <li><a href="#23">Sub Menu 3</a></li>
    <li><a href="#24">Sub Menu 4</a></li>
    </ul>
</li>
<li><a href="#3">Budaya</a>
    <ul>
    <li><a href="#31">Sub Menu 1</a></li>
    <li><a href="#32">Sub Menu 2</a></li>
    <li><a href="#33">Sub Menu 3</a></li>
    <li><a href="#34">Sub Menu 4</a></li>
    </ul>
</li>
</ul></td>
</tr>
</table>
<table border="1" cellpadding="0" cellspacing="0" align="center" width="950">
<tr>
	<td align="center" width="700" height="200">
    
	<td align="center" width="250"><p><a href="login.php"></a><a href="login.php"><img src="images/login-button.png" width="200" height="75" border="0" /></a></p>
	  <p>Berita Pilihan</p>
	  <p>Polling</p>
	  <p><div class="title_box">Statistik Pengunjung</div>
      <div class="border_box">
      
      <!-- Histats.com  START  (standard)-->
<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="invisible hit counter" ><script  type="text/javascript" >
try {Histats.start(1,3435698,4,397,112,48,"00011001");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3435698&101" alt="invisible hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
      </div>
</p>
	  <p>&nbsp;</p></td>
</tr>
</table>
<table border="1" cellpadding="0" cellspacing="0" align="center" width="950">
<tr>
	<td bgcolor="#6DB576"align="center" height="20"><span class="style1">Copyright &copy; 2016 Wempi.</span></td>
</tr>
</table>
<p>&nbsp;</p>
</body>
</html>
