<html>
<?php
include "farkli.php";
session_start();

if($_SESSION['giris'] != 1){
	header('location:giris.php');
	exit;
}
?>
<table border=1>
<tr>
<td>id</td>
<td>Ad</td>
<td>Soyad</td>
<td>Telefon</td>
<td>e-posta</td>
<td>Adres</td>
<td>işlem</td>

</tr>
<?php
$sira =0;
foreach($dbh->query('SELECT * from tbl_kisiler') as $row) {
?>
<tr>
<td><?=$sira+=1?></td>
<td><?=$row["ad"]?></td>
<td><?=$row["soyad"]?></td>
<td><?=$row["telefon"]?></td>
<td><?=$row["eposta"]?></td>
<td><?=$row["adres"]?></td>

<td>
	<a href ="guncelle.php?id=<?=$row["id"]?>">Güncelle</a>
	<a href ="sil.php?id=<?=$row["id"]?>">Sil</a>
</td>

</tr>
<?php
}
?>
</table>
<?php


?>
<button onclick="window.location.href='yeni.php'">Geri</button><br><br><br>


</html>
