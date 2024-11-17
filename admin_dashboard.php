<?php
session_start();
include 'db.php';

// Periksa apakah admin sudah login
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
// Logout admin
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: login.php");
    exit();
}
// Menghitung total donasi harian, bulanan, dan tahunan
$total_donations_today = 0;
$total_donations_this_month = 0;
$total_donations_this_year = 0;

// Menghitung total donasi hari ini
$sql_today = "SELECT SUM(amount) AS total FROM donations WHERE DATE(donation_date) = CURDATE()";
$result_today = $conn->query($sql_today);
if ($result_today->num_rows > 0) {
    $row_today = $result_today->fetch_assoc();
    $total_donations_today = $row_today['total'] ? $row_today['total'] : 0;
}

// Menghitung total donasi bulan ini
$sql_month = "SELECT SUM(amount) AS total FROM donations WHERE MONTH(donation_date) = MONTH(CURDATE()) AND YEAR(donation_date) = YEAR(CURDATE())";
$result_month = $conn->query($sql_month);
if ($result_month->num_rows > 0) {
    $row_month = $result_month->fetch_assoc();
    $total_donations_this_month = $row_month['total'] ? $row_month['total'] : 0;
}

// Menghitung total donasi tahun ini
$sql_year = "SELECT SUM(amount) AS total FROM donations WHERE YEAR(donation_date) = YEAR(CURDATE())";
$result_year = $conn->query($sql_year);
if ($result_year->num_rows > 0) {
    $row_year = $result_year->fetch_assoc();
    $total_donations_this_year = $row_year['total'] ? $row_year['total'] : 0;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Selamat datang di Dashboard Admin!</h1>
    <nav>
            <ul>
                <li><a href="?action=logout">Logout</a></li>
                <!-- Tambahkan link lain untuk manajemen kampanye, donasi, dll. -->
            </ul>
        </nav>
    <h2>Total Donasi</h2>
    <p>Total Donasi Hari Ini: Rp <?php echo number_format($total_donations_today, 2, ',', '.'); ?></p>
    <p>Total Donasi Bulan Ini: Rp <?php echo number_format($total_donations_this_month, 2, ',', '.'); ?></p>
    <p>Total Donasi Tahun Ini: Rp <?php echo number_format($total_donations_this_year, 2, ',', '.'); ?></p>

    <h2>Tambahkan Kampanye</h2>
    <form method="post">
        Nama Kampanye: <input type="text" name="campaign_name" required><br>
        <input type="submit" name="add_campaign" value="Tambah Kampanye">
    </form>

    <h2>Daftar Kampanye</h2>
    <ul>
        <?php
        // Menampilkan daftar kampanye
        $sql = "SELECT * FROM campaigns";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['name'] . "</li>";
            }
        } else {
            echo "<li>Tidak ada kampanye yang tersedia.</li>";
        }
        ?>
    </ul>
</body>
</html>

<?php
$conn->close();
?>
