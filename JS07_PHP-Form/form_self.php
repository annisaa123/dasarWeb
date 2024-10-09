<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>

    <?php
    // Inisialisasi variabel
    $nama = "";
    $namaErr = "";

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];

        // Validasi nama (contoh: pastikan nama tidak kosong)
        if (empty($nama)) {
            $namaErr = "Nama harus diisi!";
        } else {
            echo "Data berhasil disimpan: " . htmlspecialchars($nama);
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($nama); ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>