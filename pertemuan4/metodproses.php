<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <section>
        <h1>Data komentar</h1>
        <hr>
        <br>
        <?php
        echo "Nama anda     : $_POST[nama] <br><br>";
        echo "Email anda    : $_POST[email] <br><br>";
        echo "Komentar anda : $_POST[komen] <br><br>";
        ?>
        <a href="form.php">Kembali</a>
    </section>
</body>
</html>