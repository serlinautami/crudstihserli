<?php
include 'koneksi.php';

$sql= "SELECT * FROM menumaster WHERE kodewalikelas='$_GET[kodewalikelas]'";

$query=mysql_query($sql) or die("query salah");

	$row=mysql_fetch_assoc($query);

?>
	
	<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<style>
	h2{
			font-family: arial;
			text-align: center;

		}
		body{
			background-color: #ffc0cb;
		}
		form{
			width: 350px;
			margin: auto;
			font-size: 20px;
			background: #00ffff;
			text-align: center;
		}
		select{
			font-size: 20px;
			padding: 10px;
			margin: 10px;
			position: relative;
			right: 10px;
		}
		.submit{
			padding: 15px 15px 15px 15px;
			margin: 5px;
			position: relative;
			right: 5px;
			background: blue;
			color: white;
		}
	</style>
</head>
<body>
	
		<h2>EDIT DATA</h2>
		<form action="update.php" method="post">
			<tr>
			<td>KODE 		:</td><br><td><input type="text" name="kodewalikelas" value="<?php echo $row['kodewalikelas'];?>" style="width:200px; padding: 5px;"></td><br>
		</tr>
		<tr><br>
			<td>NAMA GURU     :</td>
			<td>
				<select name="namaguru" value="<?php echo $row['namaguru'];?>" >
					<option>serlina</option>
				    <option>eko</option>
				    <option>idham</option>
				    <option>budi</option>
				</select>
		<tr><br>
			<td> KELAS      :</td>
			<td>
				<select name="kelas" value="<?php echo $row['kelas'];?>" >
					<option>1A</option>
				    <option>1B</option>
				    <option>1C</option>
				    <option>2A</option>
				    <option>2B</option>
					<option>2C</option>
					<option>3A</option>
					<option>3B</option>
					<option>3C</option>
				</select>
			</td><br>
		</tr>
		<tr>
			<td>TAHUN      :</td><br><td><input type="text" name="tahunajaran" value="<?php echo $row['tahunajaran'];?>"  style="width:200px; padding: 5px;"></td><br>
		</tr>
		<tr>
			<td><button type="submit" name="submit" class="submit">UPDATE</button></td>
		</tr>
		</form>
</body>
</html>
