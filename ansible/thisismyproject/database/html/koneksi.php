<?php
$db_host = "192.168.100.70";
$db_user = "myuser";
$db_pass = "123456";
$db_name = "project";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>

