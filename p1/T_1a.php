<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
</head>
<body>
    <h1>Hitung Luas Lingkaran</h1>
    <form method="post" action="">
        <label for="radius">Masukkan Jari-jari:</label>
        <input type="number" name="radius" id="radius" step="0.01" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        define('PHI', 3.14); 
        $radius = floatval($_POST['radius']); 
        $area = PHI * $radius * $radius; 

        echo "<h2>Hasil:</h2>";
        echo "<p>Luas lingkaran dengan jari-jari $radius adalah $area</p>";
    }
    ?>
</body>
</html>