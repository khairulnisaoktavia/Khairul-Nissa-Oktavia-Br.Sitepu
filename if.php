<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action="method"="get">
        Nilai : <input type="number" name="nilai"/>
        <input type="sumbit" value="Proses" />
    </from>
    <?php
    $nilai = $_GET['nilai'];
    if($nilai >100){
        echo "Data Anda Tidak Valid";
    }elseif($nilai >=70){
        echo "Lulus Ujian Dengan Baik";
    }elseif{
        echo "Tidak Lulus Ujian";
    }
    ?>
</body>
</html>