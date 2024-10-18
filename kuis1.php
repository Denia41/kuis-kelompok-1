<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Penghitung Diskon</h2>
    <form method="POST" action="">
        <label for="jumlahBayar">Masukkan Jumlah Bayar (Rp):</label>
        <input type="number" name="jumlahBayar" id="jumlahBayar" placeholder="Contoh: 120000" required>
        <button type="submit">Hitung Diskon</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlahBayar = $_POST["jumlahBayar"];
        $diskon = 0;

        if ($jumlahBayar >= 500000) {
            $diskon = 50;
        } elseif ($jumlahBayar >= 100000) {
            $diskon = 10;
        } elseif ($jumlahBayar >= 50000) {
            $diskon = 5;
        }

        $totalDiskon = ($diskon / 100) * $jumlahBayar;
        $totalBayar = $jumlahBayar - $totalDiskon;

        echo "<div class='result'>";
        echo "Diskon: " . $diskon . "%<br>";
        echo "Total Diskon: Rp " . number_format($totalDiskon, 2, ',', '.') . "<br>";
        echo "Total Bayar Setelah Diskon: Rp " . number_format($totalBayar, 2, ',', '.');
        echo "</div>";
    }
    ?>
</body>
</html>