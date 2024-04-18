<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($email == "user@example.com" && $password == "password123") {

        header("Location: dashboard.php");
        exit;
    } else {
        echo "Login gagal. Cek kembali email dan password Anda.";
    }
}
?>
