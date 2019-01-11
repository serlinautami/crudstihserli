<?php include'koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>SERLINA UTAMI</title>
	
<style >
		
nav{
	width: 100%;
	background:#fff;
	height:50px;

}
ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
	
}
body{
	font-family: sans-serif;
	background-size: cover;
	background-color: #ffc0cb;
	height:100%;
    overflow:hidden; 

}

ul li{
	float: left;
	width: 200px;
	height:40px;
	opacity: .8;
	line-height: 40px;
	text-align: center;
	font-size: 20px;


}
ul li a {
	color: black;
	text-decoration: none;
	display: block;
    text-decoration:none;
    color:#ffc0cb;
}
ul li a:hover{
	background: green;
	border-color:green;
	color:black;
}
ul li ul li{
	display: none;
}
ul li:hover ul li{
	display: block;

}
table{
	width:120px;
	margin: auto;
	padding: 5px;
	background: #fff;

}
		.footer{
	height: 40px;
	background: #FFF;
	color:black;
	line-height: 50px;
	margin: 10px;
	text-align: center;
}

	</style>
</head>
<body>
	<div id="artikel"><h1><center> Selamat Datang Di Beranda Serli</center></h1><br>
<br>
</div>
	</div>
<nav>
		<ul>
			<li><a href="berandainput.php">BERANDA</a></li>
			<li><a href="menumaster.php">MENU INPUT</a></li>
			<li><a href="logout.php" onclick="return confirm('apa anda ingin keluar?')">LOG OUT</a></li>
		</ul>
	</nav>
		<table border="1" align="center" background=#fff; size="1">
			<tr>
				<td align="center">Profil Pemilik</td></tr><br>
				<tr>
					<td><h2><pre>
					<br>
	<img align="center" src="IMG_20181009_110755.jpg" width="150" height="150"><br>
Assalamualaikum Wr.Wb
Apliksi CRUD dikelola oleh:
Nama 	:serlina utami
Status	:mahasiswi
Jurusan	:Sistem Informasi
Wassalamualaikum Wr.Wb
					</pre></h2></td>
				</tr>		
		</table>
		<div id="footer" class="footer">
			Copyright & copy :2018 designed by serlina utami
		</div>

	
</body>
</html>
