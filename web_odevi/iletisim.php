<?php

echo "Adınız : " . $_POST['fname'] . "<br>";

echo "Soyadınız : " . $_POST['lname'] . "<br>";

echo "Doğum tarihiniz : " . $_POST['date'] . "<br>";

echo "E-mail : " . $_POST['email'] . "<br>";

echo "Telefon numaranız : " . $_POST['phone'] . "<br>";

echo "Cinsiyetiniz : " . $_POST['gender'] . "<br>";
echo "Ülke : " . $_POST['country'] . "<br>";


echo "Konu : " . $_POST['subject'] . "<br>";

echo "Yaşınız : " . $_POST['age'] . "<br>";

echo "Acil İletişim ? : " . "<br>";
if (isset($_POST['Acil'])) {
    if ($_POST['Acil'] == 'on') {
        echo "Evet" . "<br>";
    } else {
        echo "Hayır" . "<br>";
    }
}

echo "Ena sevdiğiniz renk : " . $_POST['color'] . "<br>";

echo "<p> <a href='anaMenu.html'>&lt;Ana Sayfaya git&gt;</a></p>";

?>