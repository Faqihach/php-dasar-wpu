<?php
// mengecek apakah sudah submit apa belum
if ( isset($_POST["submit"]) ) {

    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar lanjutkan
        header("Location: admin.php");
        exit;
    
    } else {
        // jika salah redirect ke hal sebelumnya
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Selamat datang</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;" >Username atau Password salah!</p>
    <?php endif?>

    <ul>
    <form action="" method="post">
        <li>
        <label for="username">Masukkan username : </label>
        <input type="text" name="username" id="username">
        </li>

        <li>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
        </li>

        <button type="submit" name="submit">Login</button>
    </form>
    </ul>
</body>
</html>