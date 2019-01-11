<!DOCTYPE html>
<html>
<head>
	<title>LOG OUT</title>
	<style>
	body{
		background: pink;
	}
	
</style>
</head>
<body>
<?php
session_start();
session_destroy();
?>
	<script type="text/javascript">
				alert("selamat anda berhasil keluar !!");
				window.location.href="../menumaster.php";
	</script>

</body>
</html>
