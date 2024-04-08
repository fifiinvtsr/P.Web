<?php
function antiinjection($koneksi, $data)
{
    if (!$koneksi->connect_errno) {
        if (!empty($data)) {
            $filter_sql = mysqli_real_escape_string($koneksi, $data);
            return $filter_sql;
        } else {
            return '';
        }
    } else {
        die("Koneksi database gagal: " . $koneksi->connect_error);
    }
}
?>
