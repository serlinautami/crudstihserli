<?php
include 'koneksi.php';
//ambil data 

$query=mysql_query("SELECT * FROM menumaster");

//$cek=mysql_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
  <title>menu master buku</title>
  <style>
    body{
      background: #ffc0cb;
    }
    h1{
      text-align: center;
    }
    .buttonedit{
      background: pink;
      color: black;
      padding:5px;
    }
    .buttondelete{
      background: pink;
      padding: 5px;
      color: black;
    }
    .buttonback{
      background: #ffc0cb;
      margin: 12px;
      padding: 7px;
      color: black;
      position: relative;
      top:10px;
      left: 925px;
    }
    .buttontambah{
      background: #ffc0cb;
      margin: 12px;
      padding: 7px;
      color: black;
      position: relative;
      top:10px;
      left: 908px;
    }
    .buttoncari{
      background: pink;
      padding: 5px;
      color: black;
      position: relative;
      top:10px;
      left: 300px;
    }
    input[type="text"]{
      position: relative;
      top:10px;
      left: 290px;
      padding: 5px;
      background: pink;
    }
    table{
      text-align: center;
      margin: auto;
      font-size: 20px;
      background: #fff;
    }
  </style>
</head>
<body>
	<h1>Input Data Guru</h1>
	<form action="hasilcari.php" method="post">
		<input type="text" name="txtcari" autofocus placeholder="cari nama guru" autocomplete="off">
	<button type="submit" name="cari" class="buttoncari">search</button>
</form>
	<a href="index.php"><button type="submit" class="buttonback">back</button></a>
<a href="tambah.php"><button class="buttontambah">add data</button></a>
	<table  border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>no</th>
			<th>kodewalikelas</th>
			<th>nama guru</th>
			<th>kelas</th>
			<th>tahunajaran</th>
			<th>aksi</th>
		</tr>
		<?php $i=1;?>
			<?php while ($row=mysql_fetch_assoc($query)):?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["kodewalikelas"];?></td>
			<td><?= $row["namaguru"];?></td>
			<td><?= $row["kelas"]; ?></td>
			<td><?= $row["tahunajaran"];?></td>
			<td>
				 <a href="edit.php?kodewalikelas=<?php echo $row['kodewalikelas'];?>"><button class="buttonedit">EDIT</button></a>
				<a href="hapus.php?kodewalikelas=<?php echo $row["kodewalikelas"];?>" onclick="return confirm('anda yakin ingin dihapus'??)"><button class="buttondelete">HAPUS</button></a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endwhile;?>
	</table>
</body>
