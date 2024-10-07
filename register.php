<?php
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

// Proses registrasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $no_hp = $_POST['no_hp'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Query untuk insert user baru
    $sql = "INSERT INTO users (username, no_hp, password) VALUES ('$username', '$no_hp', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil! <a href='login.php'>Login sekarang</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
