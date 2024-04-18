<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'user@example.com' && $password === 'password') {
        $_SESSION['email'] = $email;

        header("Location: welcome.php");
        exit();
    } else {
        echo "Email atau password salah!";
    }
}
?>
