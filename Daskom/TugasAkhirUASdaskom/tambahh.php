

<?php

include "config.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$address = $_POST['adress'];
$komen = $_POST['comment'];

mysqli_query($conn, "INSERT INTO contact VALUES('$id', '$nama','$email', '$address', '$komen')");

header("location:index.php?data=berhasil_ditambah");

?>