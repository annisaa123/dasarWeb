<!DOCTYPE html>
<html>
<head>
    <title>Multi-upload Gambar</title>
</head>
<body>
    <h2>Unggah Gambar</h2>
    <form action="proses_upload_gambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple="multiple" accept="image/*" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>