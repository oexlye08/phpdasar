<?php 
$mahasiswa = [["oki sulton", 545454, "TKJ", "oki@sulton.com"],
["oki s", 545454, "TKJ", "oki@sulton.com"]]

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 3</title>
 </head>
 <body>

 	<h1>Daftar mahasiswa</h1>

 	<?php foreach($mahasiswa as $mhs) : ?>
 	<ul>
 		<li>Nama : <?= $mhs[0]; ?></li>

 		<li>NRP : <?= $mhs[1]; ?></li>

 		<li>Jurusan : <?= $mhs[2]; ?></li>

 		<li>Email : <?= $mhs[3]; ?></li>
 	</ul>
 <?php endforeach ?>
 
 </body>
 </html>