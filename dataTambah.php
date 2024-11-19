<?php
include 'connection.php';
// if(isset($_POST['submit'])) {
    $nama_kota = $_POST['Name'];
    $asal_negara = $_POST['CountryCode'];
    $wilayah = $_POST['District'];
    $total_populasi = $_POST['Population'];
    
    include 'connection.php';
    // var_dump($_POST);
    $sql = "insert into city (Name, CountryCode, District, Population) values('$nama_kota','$asal_negara', '$wilayah', '$total_populasi')";
    $result = mysqli_query($mConnection,$sql);
    
    echo "data berhasil ditambahkan. <a href='index.php'>View Users</a>";
// }
?>