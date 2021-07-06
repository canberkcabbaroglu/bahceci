 
<?php 
// Veri Yollamak İçin
require_once 'assets/db/baglan.php';


if (isset($_POST['send'])) {
  
  

  $kaydet=$db->prepare("INSERT into kullanici set
    kullanici_ad=:kullanici_ad,
    kullanici_tel=:kullanici_tel
    ");

  $sonuc=$kaydet->execute(array(
    'kullanici_ad' => $_POST['kullanici_ad'],
    'kullanici_tel' => $_POST['kullanici_tel']
  ));

  if ($sonuc) {
    
    //echo "kayıt başarılı";

    Header("Location:kayitbasarili.php");
    exit;

  } else {

    //echo "kayıt başarısız";
    Header("Location:kayitbasarisiz.php");
    exit;
  }

  
}

?>


