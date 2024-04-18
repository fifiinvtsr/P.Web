<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat Form Login</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="wrapper">
    <div class="title-text">
        <div class="title login">Form Login</div>
    </div>
    <div class="form-container">
        <div class="form-inner">
            <form action="sessionLoginProses.php" method="POST" class="login">
                <div class="field">
                    <input type="text" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="field btn">
                    <input type="submit" name="login" value="Login">
                </div>
                <div class="signup-link">Belum punya akun? <a href="sessionRegisterForm.php">Daftar sekarang</a></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
