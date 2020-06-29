<?php 

require 'functions.php';

//mengambil data dar URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apkah tombol submit sudah du tekan
if (isset($_POST["submit"])) {
	
	//cek apakah data berhasil di ubah atau tidak
	if (ubah($_POST) > 0) {
		echo "
		<script>
			alert('Data berhasil di ubah');
			document.location.href = 'index.php';
		</script>
		";
	} else{
		echo "
		<script>
			alert('Data gagal di ubah');
			document.location.href = 'index.php';
		</script>
		";
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Mahasiswa</title>
</head>
<body>

	<h1>Ubah data mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"];?>">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required="" value="<?= $mhs["nrp"];?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required="" value="<?= $mhs["nama"];?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required="" value="<?= $mhs["email"];?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required="" value="<?= $mhs["jurusan"];?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required="" value="<?= $mhs["gambar"];?>">
			</li>
			<li>
				<button type="submit" name="submit">Update</button>
			</li>
		</ul>

	</form>

</body>
</html>