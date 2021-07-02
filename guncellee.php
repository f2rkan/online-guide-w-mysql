<?php 
ob_start();
include"farkli.php";
session_start();
if($_SESSION['giris'] != 1){
	header('location:giris.php');
	exit;
}
$id=$_POST["id"];
$ad =$_POST["ad"];
$soyad =$_POST["soyad"];
$adres =$_POST["adres"];
$eposta =$_POST["eposta"];
$telefon =$_POST["telefon"];
$up=$dbh->query("UPDATE tbl_kisiler SET ad = '{$ad}',soyad='{$soyad}',adres='{$adres}',telefon='{$telefon}',eposta='{$eposta}' WHERE id = {$id}");
if(!$up){
	
	echo "Güncelleme işlemi başarısız." ;
}
else{
	echo"Güncelleme Başarılı";
	header ("refresh:2;url=liste.php");
	
}
?>
