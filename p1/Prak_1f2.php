<!DOCTYPE html>
<html>
<body>
    <form name="form1" action="Prak_1f2.php" method="get">
        <pre>
NIM: <input type="text" name="NIM" maxlength="11">
<input type="submit" name="tampil" value="TAMPILKAN">
        </pre>
    </form>

    <?php 
    if (isset($_GET['tampil'])) {
        $NIM = $_GET['NIM'];
        echo "NIM Anda = $NIM";
    }
    ?>
</body>
</html>
