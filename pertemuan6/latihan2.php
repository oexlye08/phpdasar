<?php 
$mahasiswa = [["Oki s", "54654654", "oki@sulton.com", "TKJ"],
["Oki su", "54654654", "oki@sulton.com", "TKJ"]];


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
 		<li><?= $mhs[0] ?></li>
 		<li><?= $mhs[1] ?></li>
 		<li><?= $mhs[2] ?></li>
 		<li><?= $mhs[3] ?></li>
 	</ul>
 	<?php endforeach ?>
 </body>
 </html>