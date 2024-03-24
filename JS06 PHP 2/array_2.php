<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo "<table>";
    echo "<th>Informasi Dosen</th><th>Isi</th>";
    echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
    echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
    echo "</table>";
    ?>
</body>

</html>