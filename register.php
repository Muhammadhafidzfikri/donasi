<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Jika username sudah ada
        echo "Username sudah terdaftar. Silakan gunakan username lain.";
    } else {
        // Jika username belum ada, simpan pengguna baru ke database
        $sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            // Mengatur pesan session untuk menunjukkan bahwa pendaftaran berhasil
            $_SESSION['message'] = "Pendaftaran berhasil! Silakan login.";
            header("Location: login.php"); // Redirect ke halaman login
            exit(); // Pastikan script berhenti setelah redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 flex justify-center mb-6 md:mb-0">
            <img alt="Placeholder image" class="rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/XISuJGEViPIXFl8uXbwqFXH74Sfcyp151mcetFmFqOnizRvTA.jpg" width="400"/>
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>
            <form method="post" action="">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Your Name" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username" required />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password" required />
                </div>
                <div class="flex items-center justify-between mb-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Sign Up</button>
                </div>
            </form>
            <p class="text-center text-gray-600 text-sm">
                Already have an account?
                <a class="text-blue-500 hover:text-blue-800" href="login.php">Login</a>
            </p>
        </div>
    </div>
</body>
</html>
