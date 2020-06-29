<?php 
//koneksi ke DB
$db = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa / query
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//ambil data(fetch) mahasiswa dari object result
//4 cara fetching
//mysqli_fetch_row() //mengembalikan arrey numerik
//mysqli_fetch_assoc() // mengembalikan array asosiative
//mysqli_fetch_array() //menampilkan array numerik dan asosiatif
//mysqli_fetch_object() //berupa object

// while ( $mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i = 1; ?>
		<?php while($row = mysqli_fetch_assoc($result)): ?>
		<tr>
			<td><?= $i++?></td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
		</tr>

	<?php endwhile; ?>

	</table>

</body>
</html>