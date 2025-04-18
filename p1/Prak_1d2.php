<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Dinamis</title>
</head>
<body>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai Anda:</label>
        <input type="number" name="nilai" id="nilai" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $NA = $_POST['nilai'];

        if ($NA > 100 || $NA < 0) {
            echo "Maaf Nilai Anda Harus > 0 dan < 100";
        } elseif ($NA >= 90) {
            $HM = "A";
        } elseif ($NA >= 70) {
            $HM = "B";
        } elseif ($NA >= 60) {
            $HM = "C";
        } elseif ($NA >= 50) {
            $HM = "D";
        } else {
            $HM = "E";
        }

        if (isset($HM)) {
            echo "Nilai = $NA<br>Huruf Mutu = $HM";
        }
    }
    ?>
</body>
</html>
