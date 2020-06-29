<?php 

require 'functions.php';

//cek apkah tombol submit sudah du tekan
if (isset($_POST["submit"])) {
	
	//cek apakah data berhasil atau tidak
	if (tambah ($_POST) > 0) {
		echo "
		<script>
			alert('Data berhasil di tambah');
			document.location.href = 'index.php';
		</script>
		";
	} else{
		echo "
		<script>
			alert('Data berhasil di tambah');
			document.location.href = 'index.php';
		</script>
		";
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data Mahasiswa</title>
</head>
<body>

	<h1>Tambah data mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required="">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required="">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required="">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required="">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required="">
			</li>
			<li>
				<button type="submit" name="submit">Submit</button>
			</li>
		</ul>

	</form>

</body>
</html>