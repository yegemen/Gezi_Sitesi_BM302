<?php !defined("index") ? die("hacking"):null;?>

<?php
if (!empty($baglan)) {
    $c =$baglan->prepare("select * from gkatagoriler");
    $c->execute(array());
    $m =$c->fetchAll(PDO::FETCH_ASSOC);
    $k =$c->rowCount();
    if ($k){
        foreach ($m as $g){
            echo ' <li><a href="?do=kategori&id='.$g["katagori_id"].'"><i class="fa fa-caret-right"></i> '.$g["katagori_adi"].' </a></li>';
        }
    }else{
        echo '<div>henüz hiç kategori bulunmuyor</div>';
    }

}

?>