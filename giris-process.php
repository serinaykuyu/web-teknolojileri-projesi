<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Sabit kullanıcı bilgisi (örnek)
$dogru_kullanici = "b241210030@sakarya.edu.tr";
$dogru_sifre = "b241210030";

// Formdan gelen verileri al
$kullanici = $_POST['email'] ?? '';
$sifre = $_POST['password'] ?? '';

// Kontrol
if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    echo "<h2 style='text-align:center; margin-top:50px;'>Hoşgeldiniz, $kullanici</h2>";

    // 5 saniye sonra ana menüye yönlendirir
    echo "<script>
        setTimeout(function() {
            window.location.href = 'index.html';
        }, 5000);
    </script>";
} else {
    header("Location: giris.html");
    exit();
}
?>
