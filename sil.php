<?php
include "farkli.php";
session_start();
if($_SESSION['giris'] != 1){
	header('location:giris.php');
	exit;
}
$id=$_GET["id"];
$del=$dbh->query("DELETE FROM tbl_kisiler where id={$id}");

if(!$del){
	
	echo "Silme işlemi başarısız." ;
}
else{
	echo"Silme İşlemi Başarılı";
	header ("refresh:2;url=liste.php");
	
}
 ?>
