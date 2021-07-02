<?php
ob_start();
session_start();
if($_SESSION['giris'] != 1){
	header('location:giris.php');
	exit;
}
?>
<title>Rehber</title>
<button onclick="window.location.href='kaydet.php'">Yeni Kayıt Ekle</button><br>
<button onclick="window.location.href='cikis_yap.php'">&#199;ıkış yap</button><br>
<button onclick="window.location.href='liste.php'">Kayıtlar</button><br>
