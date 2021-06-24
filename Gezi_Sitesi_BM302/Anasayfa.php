<?php !defined("index") ? die("hacking"):null;?>
<div class="left">
<?php
if (!empty($baglan)) {
    $v=$baglan->prepare("select * from gkonular inner join gkatagoriler on gkatagoriler.katagori_id=gkonular.konu_katagori");
    $v->execute(array());
    $m =$v->fetchAll(PDO::FETCH_ASSOC);
    $c =$v->rowCount();


        foreach ($m as $d){
     ?>
            <div class="left2">
                <h2><i class="fa fa-chevron-right"></i> <?php echo $d["konu_baslik"]; ?> <span style="float: right;"> <i class="fa fa-tags"></i> Kategori: <?php echo $d["katagori_adi"]; ?>  </span> </h2>

                <div class="img-card">
                    <img src="<?php echo $d["konu_resim"]; ?>" alt="">
                    <div class="img-yazi">
                        <a href="?do=devam&id=<?php echo $d["konu_id"];?>">devamını oku</a>
                    </div>
                </div>
                <p>
                   <?php echo substr($d["konu_aciklama"],0,495); ?>
                </p>

            </div>
         <?php
        }



}

?>
    </div>

<div class="right">


    <div class="right2">
        <h2> Son Geziler </h2>
        <ul>
            <?php
            if (!empty($baglan)) {
                $s=$baglan->prepare("select * from gkonular order by konu_id desc limit 8 ");
                $s->execute(array());
                $f =$s->fetchAll(PDO::FETCH_ASSOC);
                $d =$s->rowCount();

                if ($d){
                    foreach ($f as $m){
                        echo ' <li><a href="?do=devam&id='.$m["konu_id"].'"><i class="fa fa-chevron-right"></i> '.$m["konu_baslik"].'</a></li>';
                    }
                }else{
                    echo '<div>henüz hiç konu eklenmemiş</div>';
                }
            }
            ?>

        </ul>

    </div>

    <div class="right3">
        <h2>EN ÇOK RAĞBET GÖREN GEZİLER</h2>
        <ul>
            <?php
            if (!empty($baglan)) {
                $s=$baglan->prepare("select * from gkonular order by konu_hit desc limit 8 ");
                $s->execute(array());
                $f =$s->fetchAll(PDO::FETCH_ASSOC);
                $d =$s->rowCount();

                if ($d){
                    foreach ($f as $m){
                        echo ' <li><a href="?do=devam&id='.$m["konu_id"].'"><i class="fa fa-chevron-right"></i> '.$m["konu_baslik"].'</a></li>';
                    }
                }else{
                    echo '<div>henüz hiç konu eklenmemiş</div>';
                }
            }
            ?>

        </ul>

    </div>

    <div class="reklam">
        <img src="img/reklam2.png" alt="reklam">
    </div>

    <div class="bizeulasin">
        <h2>
            <marquee align="middle" scrollamount="2" height="30" width="100%" direction="down" scrolldelay="1"><i class="fa fa-chevron-right"></i> BİZE ULAŞIN:  0216 254 78 95</marquee> </h2>
    </div>

</div>
