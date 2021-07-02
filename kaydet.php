<?php

ob_start();
session_start();
if($_SESSION['giris'] != 1){
	header('location:giris.php');
	exit;
}
?>
<html>
<title>Rehber</title>
<body>
<FORM action="kaydett.php" method="post">
Adı:<INPUT TYPE="TEXT" name="ad" value="">
<br><br>
Soyadı:<INPUT TYPE="TEXT" name="soyad" value="">
<br><br>
Telefonu:<INPUT TYPE="TEXT" name="telefon" value="">
<br><br>
e-posta adresi:<INPUT TYPE="TEXT" name="eposta" value="">
<br><br>
Adresi:<INPUT TYPE="TEXT" name="adres" value="">
<br><br>
<INPUT TYPE="SUBMIT" name="gonder" value="Kaydet"> </FORM>
<button onclick="window.location.href='yeni.php'">Ana Sayfa</button>
</body>
</html>
