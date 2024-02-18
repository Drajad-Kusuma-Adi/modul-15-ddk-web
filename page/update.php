<div class="halaman">
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_konten WHERE id_konten='$id'";
    $hasil = mysqli_query($koneksi_db, $query);
    $data = mysqli_fetch_array($hasil)
    ?>
    <h3>Edit Data</h3>
    <form action="" method="post">
        <table border="1" align="center">
            <tr>
                <input type="hidden" name="id_konten" value="<?php echo $data['id_konten']; ?>">
            </tr>
            <tr>
                <td>Kategori : </td><td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required></td>
            </tr>
            <tr>
                <td>Isi : </td><td><textarea name="isi" required><?php echo $data['isi']; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="UPDATE">
                </td>
            </tr>
        </table>
    </form>
    <a href="?page=kelola">Kembali Kelola</a>
</div>
<?php
$id_konten = $_POST['id_konten'];
$kategori = $_POST['kategori'];
$isi = $_POST['isi'];
$submit = $_POST['submit'];
if ($submit) {
    $query_update = "UPDATE tb_konten SET kategori='$kategori', isi='$isi' WHERE id_konten='$id_konten'";
    $hasil = mysqli_query($koneksi_db, $query_update) or die("ERROR UPDATE DATA");
    if ($hasil) {
        header("Location: ?page=kelola");
    }
}
?>