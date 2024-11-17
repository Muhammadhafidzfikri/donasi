<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Periksa apakah pengguna ada di database
    $sql = "SELECT * FROM users WHERE username='$username' AND email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Kirim email untuk pemulihan password (bisa ditambahkan dengan logika pengiriman email)
        echo "Email pemulihan password telah dikirim ke $email.";
    } else {
        echo "Username atau email tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password</title>
</head>
<body>
    <h1>Lupa Password</h1>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Kirim Instruksi Pemulihan">
    </form>
</body>
</html>
