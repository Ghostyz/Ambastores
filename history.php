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

$user_id = $_SESSION['user_id'];

// Query untuk mengambil riwayat top-up
$sql = "SELECT * FROM topup_transactions WHERE user_id='$user_id' ORDER BY date DESC";
$result = $conn->query($sql);
?>
