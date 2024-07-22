<?php
session_start();
if (!isset($_SESSION['ceklog'])) {
    header('Location: login.php');
    exit();
} else {
    include "koneksi.php";
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <a href="index.php" class="brand">Aplikasi <sup>Perpustakaan</sup></a>
            </div>
            <ul class="nav-links">                
                    <li><a href="../buku/buku.php">Buku Yang Tersedia</a></li>
                    <li><a href="../anggota/anggota.php">Anggota Perpustakaan</a></li>
                    <li><a href="../petugas/petugas.php">Petugas Perpustakaan</a></li>
                <!---->
                <li class="dropdown">
                    <a href="#">More</a>
                    <ul class="isi-dropdown">
                    <!--<li><a href="../buku tersedia/buku_tersedia.php">Buku</a></li>-->
                    <li><a href="../peminjaman/peminjaman.php">Peminjaman Buku</a></li>
                    <li><a href="../pengembalian/pengembalian.php">Pengembalian Buku</a></li>
                    </ul>
                </li>
                <li>
                    <form method="POST" action="" class="logout-form">
                        <button type="submit" name="logout" class="logout-button">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="hero">
        <div class="hero-text">
            <h1>Selamat Datang di Perpustakaan</h1>
            <p>Welcome to the Library Management System</p>
            <button class="explore-button">Jelajahi Dunia Buku</button>
        </div>
    </div>
</body>
</html>
