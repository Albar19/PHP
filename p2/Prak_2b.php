<!DOCTYPE html>
<html>
<body>
    <form name="FORM1" method="GET" action="Prak_2b.php">
        <?php 
        for ($i = 0; $i <= 2; $i++) { 
            echo '<input type="text" name="buah_buahan[' . $i . ']"><br>';
        } 
        ?>
        <input type="submit" name="tampil" value="TAMPIL">
        
        <?php 
        if (isset($_GET['tampil'])) { 
            echo '<br>===============<br>';
            echo 'Data Buah-Buahan:<br>';
            echo '======================<br>';
            
            if (isset($_GET['buah_buahan'])) {
                $buah_buahan = $_GET['buah_buahan'];
                for ($i = 0; $i <= 2; $i++) { 
                    echo htmlspecialchars($buah_buahan[$i]) . '<br>';
                }
            }
        } 
        ?>
    </form>
</body>
</html>