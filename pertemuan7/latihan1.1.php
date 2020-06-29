<?php 
//SIPERGLOBAL
//varaible global milik php
//merupakan array asosiativ

$mahasiswa = [[
			"nama" => "Oki Sulton", 
			"nrp" => "45555",
			"email" => "Oki@sulton.com",
			"jurusan" => "TKJ",
			"gambar" => "a.png"],
		[
			"nama" => "Oki s", 
			"nrp" => "453543543",
			"email" => "Oki@sulton.com",
			"jurusan" => "TKJ",
			"gambar" => "b.png"]
		];

//$_GET

var_dump($_GET);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>

 	<h1>DaftarMahasiswa</h1>

 	<ul>

 	<?php foreach ($mahasiswa as $mhs):?>

 		<li>
			<a href="latihan2.php?nama=<?= $mhs ["nama"];?>&nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"> 
 				<?= $mhs["nama"]; ?>
 			</a>
 				
 		</li>


 	<?php endforeach ?>

 	</ul>
 
 </body>
 </html>