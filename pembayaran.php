<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "topup_game";

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$user_id = $_SESSION['user_id'];
$game = $_POST['game'];
$amount = $_POST['amount'];
$payment_method = $_POST['payment_method'];

// Query untuk menyimpan transaksi top-up
$sql = "INSERT INTO topup_transactions (user_id, game, amount, payment_method) 
        VALUES ('$user_id', '$game', '$amount', '$payment_method')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Top-Up Berhasil!</h2>";
    echo "Game: $game <br>";
    echo "Nominal Top-Up: Rp " . number_format($amount, 0, ',', '.') . "<br>";
    echo "Metode Pembayaran: $payment_method <br>";
    echo "<a href='history.php'>Lihat Riwayat Top-Up</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
