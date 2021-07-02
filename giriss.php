<html>
<title>Rehber</title>
<?php
include "farkli.php";
ob_start();
session_start();
$kadi = $_POST['ad']; 
$sifre = $_POST['sifre']; 
 
$sql_check = $dbh->query("select * from tbl_yonetici where kullanici='".$kadi."' and sifre='".$sifre."' ");
    
if($sql_check->rowCount() > 0 )  {
	header("location:yeni.php");
	$_SESSION['giris'] = 1;
}else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
?>
</html>
