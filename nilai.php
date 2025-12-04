<?php
include "koneksi.php";
$data = mysqli_query($conn,
    "SELECT tbl_nilai.*, 
            tbl_mahasiswa.nama AS namaMhs,
            tbl_matkul.namaMatkul,
            tbl_dosen.nama AS namaDosen
     FROM tbl_nilai
     JOIN tbl_mahasiswa ON tbl_nilai.nim = tbl_mahasiswa.nim
     JOIN tbl_matkul ON tbl_nilai.kodeMatkul = tbl_matkul.kodeMatkul
     JOIN tbl_dosen ON tbl_nilai.nidn = tbl_dosen.nidn");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
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
    <h3 class="mb-3 text-center">Data Nilai Mahasiswa</h3>

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Mahasiswa</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                    <th>Nilai</th>
                    <th>Huruf</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                <tr>
                    <td><?= $row['id_nilai']; ?></td>
                    <td><?= $row['namaMhs']; ?></td>
                    <td><?= $row['namaMatkul']; ?></td>
                    <td><?= $row['namaDosen']; ?></td>
                    <td><?= $row['nilai']; ?></td>
                    <td><?= $row['nilaiHuruf']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <a href="index.php" class="btn btn-dark mt-2">Kembali ke Menu</a>
</div>

</body>
</html>
