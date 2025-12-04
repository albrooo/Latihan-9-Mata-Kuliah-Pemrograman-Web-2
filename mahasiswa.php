<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f0f0f0; }
        .box {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>

<div class="box">
    <h3 class="mb-3 text-center">Data Mahasiswa</h3>

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-secondary">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                <tr>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td><?= $row['angkatan']; ?></td>
                    <td><?= $row['email']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <a href="index.php" class="btn btn-dark mt-2">Kembali ke Menu</a>
</div>

</body>
</html>
