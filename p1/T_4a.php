<!DOCTYPE html>
<html>
<head>
    <title>PERHITUNGAN GAJI KARYAWAN</title>
</head>
<body>
    <h2>PERHITUNGAN GAJI KARYAWAN</h2>
    <form method="post">
        <label>Golongan :</label>
        <select name="golongan">
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
        </select>
        <br><br>
        <button type="submit" name="hitung">HITUNG</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $golongan = $_POST['golongan'];

        switch ($golongan) {
            case 'I':
                $gapok = 500000;
                $tunjangan = 175000;
                $potongan = 0.10 * $gapok;
                break;
            case 'II':
                $gapok = 750000;
                $tunjangan = 155000;
                $potongan = 0.075 * $gapok;
                break;
            case 'III':
                $gapok = 1000000;
                $tunjangan = 146000;
                $potongan = 0.05 * $gapok;
                break;
            default:
                $gapok = $tunjangan = $potongan = 0;
        }

        $totalGaji = $gapok + $tunjangan + $potongan;

        echo "<br><br>";
        echo "Gaji Pokok : " . number_format($gapok, 0, ',', '.') . "<br>";
        echo "Tunjangan  : " . number_format($tunjangan, 0, ',', '.') . "<br>";
        echo "Potongan   : " . number_format($potongan, 0, ',', '.') . "<br>";
        echo "=============================<br>";
        echo "<b>Total Gaji : " . number_format($totalGaji, 0, ',', '.') . "</b>";
    }
    ?>
</body>
</html>
