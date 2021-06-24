<?php

if ($_POST){

    $name=strip_tags(trim($_POST["isim"]));
    $sifre=strip_tags(trim(md5($_POST["sifre"])));

    if (!$name || !$sifre){
        echo '<div>boş alanları doldurmalısınız</div>';
    }else{

        if (!empty($baglan)) {
            $uye=$baglan->prepare("select * from uyeler where uye_adi=? and uye_sifre=?");
            $uye->execute(array($name,$sifre));
            $d =$uye->fetchAll(PDO::FETCH_ASSOC);
            $u =$uye->rowCount();
            if ($u){
             foreach ($d as $m){
                 $_SESSION["isim"]=$m["uye_adi"];
                 $_SESSION["id"]=$m["uye_id"];
                 $_SESSION["eposta"]=$m["uye_eposta"];
                 $_SESSION["rutbe"]=$m["uye_rutbe"];
                 header("location:index.php");
             }
            }else{
                echo '<div>kullanıcı adi veya sifre hatalı</div>';
            }

        }
    }

}


?>
