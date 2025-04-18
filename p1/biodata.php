<?php
$biodata = [
    "Nama" => "",
    "Umur" => "",
    "Alamat" => "",
    "Universitas" => "",
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $biodata["Nama"] = htmlspecialchars($_POST["nama"] ?? "");
    $biodata["Umur"] = htmlspecialchars($_POST["umur"] ?? "");
    $biodata["Alamat"] = htmlspecialchars($_POST["alamat"] ?? "");
    $biodata["Universitas"] = htmlspecialchars($_POST["universitas"] ?? "");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Input Biodata</h1>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($biodata["Nama"]); ?>"><br><br>

        <label for="umur">Umur:</label><br>
        <input type="number" id="umur" name="umur" value="<?= htmlspecialchars($biodata["Umur"]); ?>"><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?= htmlspecialchars($biodata["Alamat"]); ?>"><br><br>

        <label for="universitas">Universitas:</label><br>
        <input type="text" id="universitas" name="universitas" value="<?= htmlspecialchars($biodata["Universitas"]); ?>"><br><br>

        <button type="submit">Submit</button>
    </form>

    <h1>Biodata</h1>
    <table border="0" cellpadding="10" cellspacing="0">
        <?php foreach ($biodata as $key => $value): ?>
            <tr>
                <th><?= htmlspecialchars($key); ?></th>
                <td><?= htmlspecialchars($value); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>