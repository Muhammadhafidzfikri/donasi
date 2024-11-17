<?php
session_start();
include 'db.php';

// Memeriksa apakah kampanye ID ada di URL
if (!isset($_GET['campaign_id'])) {
    echo "Kampanye tidak ditemukan.";
    exit();
}

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    echo "Silakan <a href='login.php'>login</a> untuk melanjutkan proses donasi.";
    exit();
}

// Mendapatkan detail kampanye
$campaign_id = $_GET['campaign_id'];
$sql = "SELECT * FROM campaigns WHERE id = '$campaign_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $campaign = $result->fetch_assoc();
    echo "<h2>Donasi untuk " . $campaign['name'] . "</h2>";
    // Form donasi
    echo "<form method='post' action='process_donation.php'>";
    echo "<input type='hidden' name='campaign_id' value='" . $campaign['id'] . "'>";
    echo "Jumlah Donasi: <input type='number' name='amount' required><br>";
    echo "<input type='submit' value='Donasi'>";
    echo "</form>";
} else {
    echo "Kampanye tidak ditemukan.";
}
?>
