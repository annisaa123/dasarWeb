<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Aman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 500px;
        }
        h2 {
            color: #333;
        }
        label {
            font-weight: bold;
        }
        .message {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h2>Input Aman</h2>
    <form action="html_aman.php" method="post">
        <label for="input">Masukkan data:</label><br>
        <input type="text" id="input" name="input" required><br><br>
        <label for="email">Masukkan email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan dan sanitasi input
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Validasi sederhana: pastikan input tidak kosong
        if (!empty($input)) {
            echo "<div class='message'><p>Data yang dimasukkan: " . $input . "</p></div>";
        } else {
            echo "<div class='message'><p style='color: red;'>Input tidak boleh kosong!</p></div>";
        }

        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='message'><p>Email yang valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p></div>";
            // Lanjutkan dengan pengolahan email yang aman
        } else {
            echo "<div class='message'><p style='color: red;'>Email tidak valid. Silakan coba lagi.</p></div>";
        }
    }
    ?>
</body>
</html>