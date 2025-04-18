<!DOCTYPE html>
<html>
<head>
    <title>Hitung Nilai Akhir</title>
</head>
<body>
    <form method="post">
        <label for="uas">Nilai UAS:</label>
        <input type="text" name="uas" id="uas" required><br><br>

        <label for="uts">Nilai UTS:</label>
        <input type="text" name="uts" id="uts" required><br><br>

        <label for="quiz">Nilai QUIZ:</label>
        <input type="text" name="quiz" id="quiz" required><br><br>

        <label for="tugas">Nilai TUGAS:</label>
        <input type="text" name="tugas" id="tugas" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uas = isset($_POST['uas']) ? (float)$_POST['uas'] : 0;
        $uts = isset($_POST['uts']) ? (float)$_POST['uts'] : 0;
        $quiz = isset($_POST['quiz']) ? (float)$_POST['quiz'] : 0;
        $tugas = isset($_POST['tugas']) ? (float)$_POST['tugas'] : 0;

        $NA = (0.3 * $uas) + (0.3 * $uts) + (0.2 * $quiz) + (0.2 * $tugas);

        if ($NA >= 90) {
            $HM = 'A';
        } elseif ($NA >= 70) {
            $HM = 'B';
        } elseif ($NA >= 60) {
            $HM = 'C';
        } elseif ($NA >= 50) {
            $HM = 'D';
        } else {
            $HM = 'E';
        }

        echo "<br>Nilai Akhir Anda = $NA<br>Huruf Mutu = $HM";
    }
    ?>
</body>
</html>