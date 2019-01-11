<?php

	
	$kode=$_POST['kodewalikelas'];
	$namaguru=$_POST['namaguru'];
	$kelas=$_POST['kelas'];
	$tahun=$_POST['tahunajaran'];
	

		include 'koneksi.php';

		//mengisi data k.database
	$sql="insert into menumaster (kodewalikelas,namaguru,kelas,tahunajaran) values ('$kode','$namaguru','$kelas','$tahun')";
	
	$query=mysql_query ($sql) or die("query salah");


?><script type="text/javascript">
				alert("selamat data berhasil diinput !!");
				window.location.href="menumaster.php";
			</script>
