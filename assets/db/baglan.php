<?php 
 // Veri Yollamak İçin
try {

	$db=new PDO("mysql:host=localhost;dbname=kullanici;charset=utf8",'root','');

	echo "Veritabanı bağlantısı başarılı";

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>


