<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
    <style>
        *{
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $nama = "Muhammad Anas";
    echo $nama[3]; #a
    echo $nama[6]; #a
    echo $nama[9]; #A
    ?>
    <hr>
    <?php
    $pelajar[0] = 'ANAS';
    $pelajar[1] = 'BIN';
    $pelajar[2] = "HALIM";
    echo $pelajar[0];

    for($x = 0; $x < 3; $x++){
        echo $pelajar[$x]. ' ';
    }
    echo '<hr>';

    #foreach to loop arrays
    foreach ($pelajar as $pel){
        echo $pel . ' ';
    }
    echo '<hr>';

    #join array elements with a string
    $pelajars = implode(' ', $pelajar);
    echo $pelajars;
    echo '<hr>';

    #explode()
    $ptss = 'POLITEKNIK TUANKU SYED SIRAJUDDIN';
    $kata = explode(' ',$ptss);
    echo $kata[2];
    echo '<hr>';
    $senarai = 'Ali, Abu, Adi, Man, Adin';
    $ahli = explode(',',$senarai);
    echo '<pre>', print_r($ahli), '</pre>';
    ?>
    <ol>
        <?php
        foreach($ahli as $nama){
            echo "<li>$nama</li>";
        }
        ?>
        </ol>
        <hr>

        <?php
        $citacita = 'Doktor';
        $hasil = strcmp($citacita, 'Doktor');
        if($hasil < 0){
            echo 'kurang';
        }else{
            echo 'lebih';
        }
        ?>

</body>
</html>