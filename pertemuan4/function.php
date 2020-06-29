<?php 
function salam($waktu = "datang", $nama =  "admin"){
	return "Selamat $waktu, $nama";
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan funtion</title>
 </head>
 <body>
 	<h1> <?= salam(); ?></h1>

 </body>
 </html>