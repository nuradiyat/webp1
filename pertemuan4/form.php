<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
            padding: 20px 30px;
            width: 250px;
            gap: 8px;
            /* background-color: rgb(0, 0, 0); */
            backdrop-filter: blur(50px);
        }

        form hr {
            height: 1px;
            width: 100%;
            background-color: black;
            outline: none;
        }
    </style>
</head>
<body>
    <form action="metodproses.php" method="post">
        <h3>Buku tamu</h3>
        <p>Komentar dan saran anda sangat kami butuh kan <br>
        untuk meningkatkan kewalitas situs kami
        </p>
        <hr>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <label for="email">Masukan email</label>
        <input type="email" name="email" id="email">
        <label for="komen">Komentar</label>
        <textarea name="komen" id="komen" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>