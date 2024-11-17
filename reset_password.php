<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hashing password

    // Perbarui password di database
    $sql = "UPDATE users SET password='$new_password' WHERE username='{$_SESSION['username']}'"; // Gunakan session untuk mendapatkan username
    if ($conn->query($sql) === TRUE) {
        echo "Password berhasil diubah! Silakan login.";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Atur Ulang Password</title>
</head>
<body>
    <h1>Atur Ulang Password</h1>
    <form method="post" action="">
        Password Baru: <input type="password" name="new_password" required><br>
        <input type="submit" value="Ubah Password">
    </form>
</body>
</html>
