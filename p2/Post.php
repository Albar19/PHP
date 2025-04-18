<!DOCTYPE html>
<html>
<body>
    <form name="FORM1" method="GET" action="Post.php">
        <label for="jumlah">Masukkan jumlah input:</label>
        <input type="number" id="jumlah" name="jumlah" value="<?php echo isset($_GET['jumlah']) ? $_GET['jumlah'] : 3; ?>" min="1">
        <input type="submit" name="setJumlah" value="SET">
        <br><br>
        
        <?php 
        if (isset($_GET['setJumlah']) || isset($_GET['tampil'])) {
            $jumlah = isset($_GET['jumlah']) ? (int)$_GET['jumlah'] : 3;
            for ($i = 0; $i < $jumlah; $i++) { 
                echo '<input type="text" name="nama_nama[' . $i . ']"><br>';
            }
        }
        ?>
        <input type="submit" name="tampil" value="TAMPIL">
        
        <?php 
        if (isset($_GET['tampil'])) { 
            echo '<br>===============<br>';
            echo 'Data Nama-nama:<br>';
            echo '======================<br>';
            
            if (isset($_GET['nama_nama'])) {
                $nama_nama = $_GET['nama_nama'];
                $nama_nama = array_filter($nama_nama, fn($item) => !empty($item));
                sort($nama_nama, SORT_STRING);
                foreach ($nama_nama as $nama) { 
                    echo htmlspecialchars($nama) . '<br>';
                }
                echo '<br>Jumlah Input: ' . count($nama_nama);
            }
        } 
        ?>
    </form>
</body>
</html>
