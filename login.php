<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div class="container">
        <h1>login</h1>
        <form method="POST" action="proseslogin.php">
            <input type="text" name="username" placeholder="Masukkan Username" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <button type="submit" class="btn">Submit</button>
            <p>Silahkan Daftar <a href="register.php">Disini</a></p>
        </form>
    </div>
</body>
</html>