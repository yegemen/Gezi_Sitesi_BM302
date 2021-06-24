<?php !defined("index") ? die("hacking"):null;?>

<?php

if ($_SESSION){
   ?>
    <div class="panel-giris">
        <ul>
           <li><a href="">admin paneli</a></li>
            <li><a href="">profil</a></li>
            <li><a href="">mesajlar</a></li>
            <li><a href="?do=cikis"> çıkıs yap </a></li>
        </ul>
    </div>
    <?php

}else{
    ?>
    <div class="giris">
        <form action="?do=uye" method="post">
            <ul>
                <li><i class="fa fa-user"></i> Kullanıcı adı</li>
                <li> <label for="g1"></label>
                    <input type="text" name="isim" id="g1"> <br /> </li>

                <li><i class="fa fa-lock"></i> şifre</li>
                <li> <label for="g2"></label>
                    <input type="password" name="sifre" id="g2"></li>
                <li><button type="submit">Giriş Yap</button></li>
            </ul>
        </form>
    </div>

    <?php
}


?>

