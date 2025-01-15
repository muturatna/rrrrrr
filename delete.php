<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM buku WHERE id=$id");
echo "<script>alert('Buku berhasil dihapus!'); window.location='index.php';</script>";
?>
