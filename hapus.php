<?php
include 'koneksi.php';
$kode=$_GET['kodewalikelas'];

mysql_query("DELETE FROM menumaster WHERE kodewalikelas='$kode'")or die(mysql_error());

header("location:menumaster.php");

?>
