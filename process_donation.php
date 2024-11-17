<?php
session_start();
include 'db.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    echo "Anda harus login untuk melakukan donasi.";
    exit();
}

// Mendapatkan data dari form
$campaign_id = $_POST['campaign_id'];
$amount = $_POST['amount'];
$user_id = $_SESSION['user_id']; // Misalkan Anda menyimpan user_id dalam session

// Menyimpan donasi ke database
$sql = "INSERT INTO donations (amount, donation_date) VALUES ('$amount', NOW())";
if ($conn->query($sql) === TRUE) {
    echo "Donasi berhasil dilakukan!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
