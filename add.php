<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Tambah Anggota</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Tambah</button>
        <a href="anggota_index.php" class="btn btn-secondary">Kembali</a>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        
        $conn->query("INSERT INTO anggota (nama, alamat, no_hp) VALUES ('$nama', '$alamat', '$no_hp')");
        echo "<script>alert('Anggota berhasil ditambahkan!'); window.location='anggota_index.php';</script>";
    }
    ?>
</div>
</body>
</html>
