<?php
// filepath: c:\xampp\htdocs\tugas\api.php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 10000;
}

$saldo_minimum = 5000;
$response = ["code" => 0, "message" => "Invalid request", "saldo" => $_SESSION['saldo']];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    $jumlah = intval($data['jumlah']);
    $kode_transaksi = intval($data['kode_transaksi']);

    if ($kode_transaksi === 0) {
        $_SESSION['saldo'] += $jumlah;
        $response = ["code" => 0, "message" => "Berhasil menyetor Rp. " . number_format($jumlah, 0, ',', '.'), "saldo" => $_SESSION['saldo']];
    } elseif ($kode_transaksi === 1) {
        if ($_SESSION['saldo'] - $jumlah >= $saldo_minimum) {
            $_SESSION['saldo'] -= $jumlah;
            $response = ["code" => 1, "message" => "Berhasil mengambil Rp. " . number_format($jumlah, 0, ',', '.'), "saldo" => $_SESSION['saldo']];
        } else {
            $response = ["code" => 0, "message" => "Saldo tidak mencukupi untuk melakukan transaksi ini.", "saldo" => $_SESSION['saldo']];
        }
    } else {
        $response = ["code" => 0, "message" => "Kode transaksi tidak valid.", "saldo" => $_SESSION['saldo']];
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $response = ["code" => 0, "message" => "Saldo saat ini.", "saldo" => $_SESSION['saldo']];
}

echo json_encode($response);
?>