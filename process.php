<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    // Menghitung nilai rata-rata
    $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

    // Menentukan status kelulusan
    if ($rata_rata >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penilaian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .result {
            margin-top: 20px;
        }
        .status {
            color: green;
            font-weight: bold;
        }
        .status.fail {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Penilaian Mahasiswa</h2>
        <div class="result">
            <p>Nilai Rata-Rata: <?php echo round($rata_rata, 2); ?></p>
            <p>Status Kelulusan: <span class="status <?php echo $rata_rata < 60 ? 'fail' : ''; ?>">
                <?php echo $status; ?>
            </span></p>
        </div>
        <a href="index.html">Hitung Lagi</a>
    </div>
</body>
</html>