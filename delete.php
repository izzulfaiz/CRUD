<?php
include 'connection.php';
echo "ini delete";
$id = $_GET["id"];
$sql = "DELETE FROM city WHERE ID=$id";
mysqli_query($mConnection,$sql);
header("Location:index.php");
?>