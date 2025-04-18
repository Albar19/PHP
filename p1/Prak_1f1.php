<!DOCTYPE html>
<html>
<body>
    <form name="form1" action="Prak_1f1.php" method="post">
        <pre>
NIM: <input type="text" name="NIM" maxlength="11">
<input type="submit" name="tampil" value="TAMPILKAN">
        </pre>
    </form>

    <?php
    if (isset($_POST['tampil'])) {
        $NIM = $_POST['NIM'];
        echo "NIM Anda = $NIM";
    }
    ?>
</body>
</html>
