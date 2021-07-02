<?php
session_start();
include "farkli.php";

if($_SESSION['giris'] != 1){
	header('location:giris.php');
	exit;
}

?>
<html>
<title>Rehber</title>
<?php

$id=$_GET["id"];


$row = $dbh->query('SELECT * from tbl_kisiler where id='.$id)->fetch(PDO::FETCH_NAMED);


?>

<FORM action="guncellee.php" method="post">
<INPUT TYPE="hidden" name="id" value="<?=$row["id"]?>">

Adı:<INPUT TYPE="TEXT" name="ad" value="<?=$row["ad"]?>">
<br><br>
Soyadı:<INPUT TYPE="TEXT" name="soyad" value="<?=$row["soyad"]?>">
<br><br>
Telefonu:<INPUT TYPE="TEXT" name="telefon" value="<?=$row["telefon"]?>">
<br><br>
e-posta adresi:<INPUT TYPE="TEXT" name="eposta" value="<?=$row["eposta"]?>">
<br><br>
Adresi:<INPUT TYPE="TEXT" name="adres" value="<?=$row["adres"]?>">
<br><br>
<INPUT TYPE="SUBMIT" name="gonder" value="Güncelles"> </FORM>


</html>
