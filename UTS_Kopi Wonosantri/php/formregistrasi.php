<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_repeat = $_POST["password_repeat"];

    if ($password == $password_repeat) {
        header("Location: login.php");
        exit;
    } else {
        echo "Password tidak cocok. Silakan ulangi kembali.";
    }
}
?>
