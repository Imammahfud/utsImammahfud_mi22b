<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .menu {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .menu h2 {
            margin-bottom: 20px;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
        }
        .menu li {
            margin-bottom: 10px;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
        }
        .menu a:hover {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h2>Menu Utama</h2>
        <ul>
            <li><a href="index.php?page=home">Beranda</a></li>
            <li><a href="index.php?page=login">Login</a></li>
            <li><a href="index.php?page=loop">Loop</a></li>
            <li><a href="index.php?page=profil">Profil</a></li>
        </ul>
    </div>
</body>
</html>

<?php
// Ambil nilai parameter 'page' dari URL jika ada
$page = isset($_GET['page']) ? $_GET['page'] : '';

// Lakukan tindakan berdasarkan nilai 'page'
switch ($page) {
    case 'home':
        echo "<h1>Halaman Beranda</h1>";
        // Tambahkan kode PHP atau HTML untuk halaman Beranda
        break;
    case 'login':
        echo "<h1>Halaman Login</h1>";
        // Tambahkan kode PHP atau HTML untuk halaman Login
        break;
    case 'loop':
        echo "<h1>Halaman Loop</h1>";
        // Tambahkan kode PHP atau HTML untuk halaman Loop
        break;
    case 'profil':
        echo "<h1>Halaman Profil</h1>";
        // Tambahkan kode PHP atau HTML untuk halaman Profil
        break;
    default:
        // Untuk kasus di mana 'page' tidak ada atau tidak valid
        echo "<h1>Selamat Datang di Halaman Utama</h1>";
        break;
}
?>