<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Buku</h2>
        <a href="add.php" class="btn btn-primary mb-3">Tambah Buku</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Baba</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM buku");
                $no = 1;
                while ($row = $result->fetch_assoc()):
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['judul']); ?></td>
                        <td><?= htmlspecialchars($row['penulis']); ?></td>
                        <td><?= htmlspecialchars($row['penerbit']); ?></td>
                        <td><?= htmlspecialchars($row['tahun']); ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>