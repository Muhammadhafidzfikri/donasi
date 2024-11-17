<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
// Logout pengguna
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: login.php");
    exit();
}
echo "Selamat datang, " . $_SESSION['user_name'] . "!";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pengguna</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>
    <header>
        <h1>Dashboard Pengguna</h1>
        <nav>
            <ul>
                <li><a href="?action=logout">Logout</a></li>
                <!-- Tambahkan link lain sesuai kebutuhan -->
            </ul>
        </nav>
    </header>

    <main>
    <h2>Selamat datang, <?php echo htmlspecialchars($userName); ?>!</h2>
    <!-- Kode untuk menampilkan kampanye, donasi, dll. -->
    </main>
</body>
</html>