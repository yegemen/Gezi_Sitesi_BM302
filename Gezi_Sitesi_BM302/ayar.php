<?php !defined("index") ? die("hacking"):null;?>
<?php

$host="localhost";
$username="root";
$password="";
$dbname="projeyazilim";

try {

    $baglan=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$username","$password");
    $baglan->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
    echo 'hata mesajı'.$e->getMessage();
}


?>
