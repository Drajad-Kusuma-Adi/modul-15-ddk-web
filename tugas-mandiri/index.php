<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Halaman Web Dinamis Dengan PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="content">
        <header>
            <h1 class="judul">INI ADALAH HEADER</h1>
            <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
        </header>
        <div class="menu">
            <ul>
                <li>
                    <a href="index.php?page=home">HOME</a>
                </li>
                <li>
                    <a href="index.php?page=siswa">DATA SISWA</a>
                </li>
                <?php
                if ($_SESSION['level'] == 'admin') {
                    echo '
                    <li>
                        <a href="index.php?page=kelola">KELOLA DATA SISWA</a>
                    </li>
                    ';
                }
                ?>
            </ul>
        </div>
        <div class="badan">
            <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'home':
                            include "page/home.php";
                            break;
                        case 'siswa':
                            include "page/siswa.php";
                            break;
                        case 'kelola':
                            include "page/kelola.php";
                            break;
                        case 'edit':
                            include "page/edit.php";
                            break;
                        case 'delete':
                            include "page/delete.php";
                            break;
                        default:
                            echo "<center><h3>Maaf, Halaman tidak ditemukan.</h3></center>";
                    }
                } else {
                    include "page/home.php";
                }
            ?>
        </div>
        <footer>Ini adalah footer</footer>
    </div>
</body>
</html>