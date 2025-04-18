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
        } else {
            switch (true) {
                case ($NA >= 90):
                    $HM = "A";
                    break;
                case ($NA >= 70):
                    $HM = "B";
                    break;
                case ($NA >= 60):
                    $HM = "C";
                    break;
                case ($NA >= 50):
                    $HM = "D";
                    break;
                default:
                    $HM = "E";
            }

            echo "Nilai = $NA<br>Huruf Mutu = $HM";
        }
    }
    ?>
</body>
</html>
