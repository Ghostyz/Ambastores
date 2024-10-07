<?php
session_start();
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

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan no_hp
    $sql = "SELECT * FROM users WHERE no_hp='$no_hp'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Nomor HP tidak ditemukan!";
    }
}

$conn->close();
?>
