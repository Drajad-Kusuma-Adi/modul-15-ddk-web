<div class="halaman">
    <?php
    include "koneksi.php";
    if (isset($_GET['page'])) {
        $aksi = $_GET['aksi'];
        switch ($aksi) {
            default:
            $query = "SELECT * FROM tb_konten";
            $hasil = mysqli_query($koneksi_db, $query);
    ?>
    <center><h2>Halaman Kelola Konten</h2></center>
    <a href="?page=kelola&aksi=tambah">Tambah</a>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $data['kategori'] . "</td>";
            echo "<td>" . $data['isi'] . "</td>";
            echo "<td><a href='?page=kelola&aksi=lihat&id=" . $data['id_konten'] . "'>View</a>";
            echo "<td><a href='?page=kelola&aksi=update&id=" . $data['id_konten'] . "'>Update</a></td>";
            echo "<td><a href='?page=kelola&aksi=delete&id=" . $data['id_konten'] . "'onclick='return confirm('Apakah Anda yakin menghapus data?')'>Delete</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
    <?php
    break;
    case "tambah":
        include "tambah.php";
        break;
    case "lihat":
        include "lihat.php";
        break;
    case "update":
        include "update.php";
        break;
    case "delete":
        include "delete.php";
        break;
    }
    } else {
            include "home.php";
        }
    ?>
</div>