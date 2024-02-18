<div class="halaman">
    <h2>Halaman Data Siswa</h2>
    <form action="page/create.php" method="post">
        <h4>Create Data Siswa Baru</h4>
        <label for="nis">NIS</label>
        <input type="text" name="nis">
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <input type="submit" value="Create" name="create">
    </form>
    <table border="1" align="center">
        <tr>
            <td>NIS</td>
            <td>Nama</td>
        </tr>
        <?php
        require_once "config.php";
        $sql = "SELECT * FROM tb_siswa";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($row as $siswa) {
            echo "<tr>";
            echo "<td>" . $siswa['nis'] . "</td>";
            echo "<td>" . $siswa['nama'] . "</td>";
            echo "<td>" . "<a href='index.php?page=edit&nis=" . $siswa['nis'] . "&nama=" . $siswa['nama'] . "'>Edit</a> " . "</td>";
            echo "<td>" . "<a href='index.php?page=delete&nis=" . $siswa['nis'] . "'>Delete</a>" . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>