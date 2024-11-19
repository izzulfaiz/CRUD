<?php
    $host = "localhost";
    $user = "192410101139";
    $pass = "secret";
    $data = "uts192410101139";    

    $mConnection = mysqli_connect($host, $user, $pass, $data);

    if (mysqli_connect_errno())
    {
        echo "Maaf, Koneksi ke database gagal :".mysqli_connect_error();
    }
?>
