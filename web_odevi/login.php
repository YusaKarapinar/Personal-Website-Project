<?php
// Formdan gelen kullanıcı adı ve şifre

$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifrenin doğruluğunu kontrol et
if ($username == "b231210070" && $password == "Yusa0000") {
    // Kullanıcı doğrulandıysa ana sayfaya yönlendir
    header("Location: ana_sayfa.html");
    exit;
} else {
    // Kullanıcı doğrulanamadıysa hata mesajı göster
    echo "Hatalı kullanıcı adı veya şifre. Lütfen tekrar deneyin.";
}
