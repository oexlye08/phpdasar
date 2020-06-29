<?php 
//array asociative
//key nya adalah string yang kita buat sendiri

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

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>List Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach ($mahasiswa as $mhs) :?>
 	<ul>
 		<li>
 			<img src="img/<?= $mhs["gambar"]; ?>">
 		</li>
 		<li>Nama : <?= $mhs["nama"] ?></li>
 		<li>NRP : <?= $mhs["nrp"] ?></li>
 		<li>Email : <?= $mhs["email"] ?></li>
 		<li>Jurusan : <?= $mhs["jurusan"] ?></li>
 	</ul>
 	<?php endforeach ?>
 </body>
 </html>