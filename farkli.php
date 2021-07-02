<html>
<?php
try{
	$dbh = new PDO('mysql:host=localhost;dbname=rehber', "root", "");
}
catch(PDOException $e){
	print $e->getMessage();
}

?>
</html>
