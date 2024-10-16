<?php
// Lokasi penyimpanan gambar yang diunggah
$targetDirectory = "uploads/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['images']) && $_FILES['images']['name'][0]) {
    $totalFiles = count($_FILES['images']['name']);

    // Loop melalui semua gambar yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Cek apakah file adalah gambar
        $check = getimagesize($_FILES['images']['tmp_name'][$i]);
        if ($check !== false) {
            // Pindahkan file yang digunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "$fileName bukan file gambar.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>