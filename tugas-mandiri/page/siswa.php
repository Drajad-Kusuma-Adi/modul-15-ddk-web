<div class="halaman">
    <h2>Halaman Data Siswa</h2>
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
            echo "</tr>";
        }
        ?>
    </table>
</div>