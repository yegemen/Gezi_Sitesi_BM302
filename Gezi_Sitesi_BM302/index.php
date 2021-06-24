<?php define("index",true);?>
<?php include ("ayar.php"); ?>
<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sty.css">

    <script src="https://kit.fontawesome.com/ab7283eac0.js" crossorigin="anonymous"></script>
    <title>Title</title>
</head>
<body>


<header class="header">

    <input type="checkbox" id="check-bars">
    <label for="check-bars" id="check-label"><i class="fa fa-bars"></i></label>

    <div class="logo"><a href="">LOGO <span style="color: #f1f1f1;">İSİM</span> </a></div>

    <div class="links-area">

        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i>Ana Sayfa</a></li>
            <li>
                <input type="checkbox" id="drop-check">
                <label for="drop-check"><i class="fa fa-tags"></i> Kategorilerimiz <i class="fa fa-caret-down"></i></label>
                <ul class="dropdown">
                    <?php echo include("kategoriler.php"); ?>
                </ul>

            </li>

            <li><a href="?do=hakkimizda"><i class="fa fa-user"></i> Hakkımızda</a></li>
            <li><a href=""><i class="fa fa-bell"></i> İletişim</a></li>
            <li><a href="?do=giris"><i class="fa fa-sign-in"></i> Giriş Yap</a></li>
            <li><a href=""><i class="fa fa-sign-out"></i> Kayıt Ol</a></li>


        </ul>

        <form action="?do=ara" method="post">
            <input type="search" id="search" name="ara" placeholder="Site İçi Arama Yap...">
            <label for="search"><i class="fa fa-search"></i></label>
        </form>
    </div>


</header>


<div class="content">




    <?php

    $do=@$_GET["do"];

    switch ($do) {
        case "devam":
            include ("devam.php");
            break;
        case "hakkimizda":
            include ("hakkimizda.php");
            break;
        case "giris":
            include ("giris.php");
            break;
        case "ara":
            include ("ara.php");
            break;
        case "uye":
            include ("uye.php");
            break;
        case "kategori":
            include ("kategori_liste.php");
            break;
        case "cikis":
            session_destroy();
            echo '<div class="uye-cikis">başarıyla çıkıs yaptınız yönlendiriliyorsunuz</div>';
            header("refresh:2; url=index.php");
            break;
        default:
            include("Anasayfa.php");

            break;
    }

    ?>



</div>








<footer class="footer-area">
    <div class="main">
        <div class="footer">
            <div class="single-footer">
                <h4>LOGO İSİM</h4>
                <p>
                    adada afafasfa afafafaf afafaf
                    afafafa afafaf afafaf afafafa
                    afafaf afafaf afafafa afafaf
                </p>
                <div class="footer-social">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                    <a href=""><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="single-footer">
                <h4><span style="padding-left : 10px">MENÜ</span></h4>
                <ul>
                    <li><i class="fas fa-chevron-right"></i><a href="index.php">Ana Sayfa</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="">İletişim</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="?do=hakkimizda">Biz Kimiz</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="">Bize Katılın</a></li>
                </ul>
            </div>
            <div class="single-footer">
                <h4><span style="padding-left : 10px">About Us</span> </h4>
                <ul>
                    <li><i class="fas fa-map-marker"></i><a href=""> Bilecik/TURKEY</a></li>
                    <li><i class="fas fa-phone"></i><a href=""> 0212 456 78 12</a></li>
                    <li><i class="fas fa-envelope"></i><a href=""> info@gmail.com </a></li>
                    <li><i class="fas fa-globe-europe"></i><a href=""> www.bizgezdik.com</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copy">
        <span style=" color: rgba(0,238,0, 0.7);box-shadow: 0 5px 10px  rgba(194, 226, 253,0.7);">&copy;2021</span> TÜM HAKLARI SAKLIDIR | LOGO İSMİ
    </div>
</footer>

</body>
</html>

