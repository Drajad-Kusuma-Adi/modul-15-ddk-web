<?php
require_once "config.php";

$sql = "INSERT INTO tb_siswa (nis, nama) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST['nis'], $_POST['nama']);
if ($stmt->execute()) {
    header("location: ../index.php?page=kelola");
}
?>