<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Anggota</h2>
    <a href="create.php" class="btn btn-primary">Tambah Anggota</a>
    <br><br>
    <?php
    include('koneksi.php');

    $query = "SELECT * FROM anggota order by id desc";
    $result = mysqli_query($koneksi, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $no = 1;
        echo "<table>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Nama</th>";
        echo "<th>Jenis Kelamin</th>";
        echo "<th>Alamat</th>";
        echo "<th>No. Telp</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            $kelamin = ($row["jenis_kelamin"] == 'L') ? 'Laki-Laki' : 'Perempuan';
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $kelamin . "</td>";
            echo "<td>" . $row["alamat"] . "</td>";
            echo "<td>" . $row["no_telp"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data";
    }
    mysqli_close($koneksi);
    ?>
    <script>
        function konfirmasiHapus(id, nama) {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data " + nama + "?");
            if (konfirmasi) {
                window.location.href = "proses.php?aksi=hapus&id=" + id;
            }
        }
    </script>
    </body>
</html>