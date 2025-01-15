<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM buku WHERE id=$id");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Edit Buku</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($data['judul']); ?>" required>
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" value="<?= htmlspecialchars($data['penulis']); ?>" required>
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?= htmlspecialchars($data['penerbit']); ?>" required>
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" value="<?= htmlspecialchars($data['tahun']); ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        
        $conn->query("UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun='$tahun' WHERE id=$id");
        echo "<script>alert('Buku berhasil diupdate!'); window.location='index.php';</script>";
    }
    ?>
</div>
</body>
</html>
