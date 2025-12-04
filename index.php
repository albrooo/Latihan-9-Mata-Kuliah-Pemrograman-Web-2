<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f0f0;
        }
        .center-box {
            max-width: 500px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .menu-row {
            background-color: #e9f1ff;
            cursor: pointer;
            transition: 0.2s;
        }
        .menu-row:hover {
            background-color: #cbdcff;
        }
        td {
            padding: 15px;
            text-align: center;
            font-weight: 600;
            color: #333;
        }
        h3 {
            font-weight: 700;
            color: #333;
        }
        .subtitle {
            color: #777;
        }
    </style>
</head>

<body>

<div class="center-box">
    <h3 class="text-center mb-2">Sistem Informasi Akademik Kampus</h3>
    <p class="text-center subtitle mb-4">Menu Data</p>

    <table class="table table-bordered">

        <tr class="menu-row" onclick="window.location='mahasiswa.php'">
            <td>Data Mahasiswa</td>
        </tr>

        <tr class="menu-row" onclick="window.location='dosen.php'">
            <td>Data Dosen</td>
        </tr>

        <tr class="menu-row" onclick="window.location='matkul.php'">
            <td>Data Mata Kuliah</td>
        </tr>

        <tr class="menu-row" onclick="window.location='nilai.php'">
            <td>Data Nilai</td>
        </tr>

    </table>
</div>

</body>
</html>
