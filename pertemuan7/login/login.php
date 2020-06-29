<?php 
//cek apakah tombol submit sudah di tekan

if (isset($_POST["submit"])) {
	//cek username dan password
	if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
		//jika benar redirec ke halaman admin
			header("Location: admin.php");
			exit;
	}else{
	//jika salah tampilkan laporan
		$error = true;

	}
}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php if (isset($error)) :?>
<p style="color: red; font-style: italic;">username / password salah</p>
<?php endif ?>
	<h1>Login Admin</h1>

	<ul>
	<form action="" method="POST">

		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>

		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>

		<li>
			<button type="submit" name="submit">Login</button>
		</li>

	</form>
	</ul>

</body>
</html>