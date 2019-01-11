<!DOCTYPE html>
<html>
<head>
	<title>add</title>
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
		<h2>INPUT DATA</h2>
		<form action="tambahproses.php" method="post">
			<tr>
			<td>KODE 		:</td><br><td><input type="text" name="kodewalikelas"  style="width:200px; padding: 5px;"></td><br>
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
			<td>TAHUN      :</td><br><td><input type="text" name="tahunajaran" style="width:200px; padding: 5px;"></td><br>
		</tr>
		<tr>
			<td><button type="submit" name="submit" class="submit">INPUT</button></td>
		</tr>
		</form>
</body>
</html>
