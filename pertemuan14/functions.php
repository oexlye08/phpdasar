<?php 
//koneksi ke DB
$db = mysqli_connect("localhost", "root", "", "phpdasar");


function query ($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}


function tambah($data){
	global $db;

	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	

	//upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}


	$query = "INSERT INTO mahasiswa 
	VALUES
	('', '$nama', '$nrp', '$email', '$jurusan', '$gambar' )
	";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apkaah tidak ada gambar  yang di upload

	if ($error === 4) {
		echo "<script>

		alert ('Pilih gambar dulu');
		</script>";

		return false;
	}

	// cek apakah yang di upload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower( end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>

		alert ('Pilih gambar dulu yang bener');
		</script>";

		return false;
	}

	//cek jka gambar terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script>

		alert ('Terlalu besar');
		</script>";
		return false;
	}

	//lolos pengecekan gambar siap di upload
	//generated nama file baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;

}

function hapus($id){
	global $db;

	mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($db);
}

function ubah($data){
	global $db;

	$id = $data["id"];

	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	//cek apakah user pilih gambar baru atau  tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}


	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				nrp = '$nrp',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
				WHERE id = $id
				";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);

}

function cari($keyword){
	$query = "SELECT * FROM mahasiswa
				WHERE
				nama LIKE '%$keyword%' OR 
				nrp LIKE '%$keyword%' OR 
				email LIKE '%$keyword%' OR 
				jurusan LIKE '%$keyword%'
	";

	return query($query);
}

function registrasi($data){
	global $db;

	$username = strtolower(stripcslashes($data["username"])) ;
	$password = mysqli_real_escape_string($db, $data["password"]);
	$password2 = mysqli_real_escape_string($db, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert ('sudah ada username');
		 		</script>";
		 		return false;
	}

	//cek konfirm password
	if ($password !== $password2) {
		echo "<script>
				alert('password tidak sesuai');
			  </script>";
			  return false;
	}

	//encrypt password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke db
	mysqli_query($db, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($db);
}

 ?>