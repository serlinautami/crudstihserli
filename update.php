<?php
include 'koneksi.php';

    $kode=$_POST['kodewalikelas'];
	$nama=$_POST['namaguru'];
	$kelas=$_POST['kelas'];
	$tahun=$_POST['tahunajaran'];
mysql_query("UPDATE menumaster SET namaguru='$nama',kelas='$kelas',tahunajaran='$tahun' WHERE kodewalikelas='$kode'");
?>
<script type="text/javascript">
				alert("selamat data berhasil diupdate !!");
				window.location.href="menumaster.php";
</script>
