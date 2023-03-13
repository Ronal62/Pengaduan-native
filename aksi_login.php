<?php
include 'koneksi.php';
// session_start();
$username = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['username']));
$password = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['password']));
$sql  = mysqli_query($koneksi, " SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password' ");
// $row      = mysqli_fetch_assoc($sql);
$cek    = mysqli_num_rows($sql);

if ($cek > 0) {

	$data = mysqli_fetch_assoc($sql);

	// cek jika user login sebagai admin
	if ($data['level'] == "petugas") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

		// cek jika user login sebagai pegawai
	} else if ($data['level'] == "masyarakat") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "masyarakat";
		// alihkan ke halaman dashboard pegawai
		header("location:media.php");
	} else {
		echo "
		<script>
		alert('maaf login anda salah');
		window.location = 'login.php';
		</script>
		";
	}
} else {
	header("location:index.php?pesan=gagal");
}
