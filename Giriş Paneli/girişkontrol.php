<?php
    $kullanıcı=$_POST['kullanıcı'];
    $şifre=$_POST['şifre'];
    if ($kullanıcı == 'root' && $şifre == '123') {
        echo 'Sayın '.$kullanıcı;  
?>
    Ana Sayfa'ya gitmek istiyorsanız
    <a href="giriş.php">TIKLAYINIZ</a>
<?php
    }
    else {
        echo 'Sayın '.$kullanıcı;
?>
    Bilgiler Yanlış Tekrar giriş yapmak istiyorsanız
    <a href="giriş.php">TIKLAYINIZ</a>
<?php
    }
?>