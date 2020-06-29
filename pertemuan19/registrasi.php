<?php 
require 'functions.php';

if (isset($_POST["register"])) {
	

	if (registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user berhasil di tambahkan');
			</script>";
	} else {
		echo mysqli_error($db);
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style >
		label{
			display: block;
		}
	</style>
</head>
<body>

	<h1>Registrasi</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">confirm password :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register">Register</button>
			</li>
		</ul>
		
	</form>

</body>
</html>