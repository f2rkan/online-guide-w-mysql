
<?php 
ob_start();
session_start();
if($_SESSION['giris'] != 1){
	header('location:giris.php');
	exit;
}
include "farkli.php";
if($_POST){
$ad = $_POST["ad"];
$soyad=$_POST["soyad"];
$telefon=$_POST["telefon"];
$eposta=$_POST["eposta"];
$adres=$_POST["adres"];
}
else{
	header('location:kaydet.php');
	exit;
}
try{
	$kayit = "INSERT INTO tbl_kisiler (ad,soyad,telefon,eposta,adres) VALUES('$ad','$soyad','$telefon','$eposta','$adres')";
	$dbh->query($kayit);
    echo 'Kayıt Eklendi.';
	}
    catch (PDOException $e) { 
    throw new pdoDbException($e); 
} 
?>
<html>
<title>Rehber</title>
<meta http-equiv="refresh" content="1;URL=yeni.php">
</html>
