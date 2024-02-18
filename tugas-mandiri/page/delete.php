<?php
require_once "config.php";
$sql = "DELETE FROM tb_siswa WHERE nis = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['nis']);
if ($stmt->execute()) {
    header("location: index.php?page=kelola");
}
?>