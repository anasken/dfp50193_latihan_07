<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <?php
    $tajuk = '<h1>Hello world</h1>';
    $sisi = 'You are great';
    echo $tajuk . $sisi;
    $jumlah = strlen($tajuk) + strlen($sisi);
    echo "<p>Bilangan huruf = $jumlah</p>";

    $nama = "Muhammad Anas";
    $cari = strstr($nama, 'amb');
    echo "<p>$cari</p>";

    $nomatrik = "18DDT19F1088";
    $bilangan = strstr($nomatrik,'F');

    #substr()
    $kod = substr($nomatrik, 2, 3);
    echo "<p>$kod</p>";

    #strpos()  & substr()
    $lokasi = strpos($nomatrik, 'F') + 1;
    $bilangan = substr($nomatrik, $lokasi);
    echo "<p>Bilangan: $bilangan</p>";
    ?>
    
</body>
</html>