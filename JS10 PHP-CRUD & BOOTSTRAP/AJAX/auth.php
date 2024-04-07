<?php
// Membuat token Kemanan Ajax Request <Csrftoken>
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
