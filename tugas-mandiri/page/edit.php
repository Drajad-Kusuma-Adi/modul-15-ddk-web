<div class="halaman">
    <h2>Halaman Edit Data Siswa</h2>
    <form action="" method="post">
        <label for="nis">NIS</label>
        <input type="text" name="nis" value="<?= $_GET['nis'] ?>">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $_GET['nama'] ?>">
        <input type="submit" value="Update">
    </form>
</div>

<?php
require_once "config.php";
if (isset($_POST['nis']) && isset($_POST['nama'])) {
    $sql = "UPDATE tb_siswa SET nis = ?, nama = ? WHERE nis = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $_POST['nis'], $_POST['nama'], $_GET['nis']);
    $stmt->execute();
    header("location: index.php?page=kelola");
}
?>