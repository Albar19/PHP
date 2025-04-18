<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Persegi Panjang</title>
</head>
<body>
    <form method="POST" action="">
        <label for="panjang">Panjang:</label>
        <input type="number" name="panjang" id="panjang" required>
        <br>
        <label for="lebar">Lebar:</label>
        <input type="number" name="lebar" id="lebar" required>
        <br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    function hitungLuasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        if (is_numeric($panjang) && is_numeric($lebar)) {
            $luas = hitungLuasPersegiPanjang($panjang, $lebar);
            echo "<p>Panjang: $panjang, Lebar: $lebar, Luas: $luas</p>";
        } else {
            echo "<p>Masukkan nilai numerik untuk panjang dan lebar.</p>";
        }
    }
    ?>
</body>
</html>