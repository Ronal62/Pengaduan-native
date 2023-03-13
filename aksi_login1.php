<?php
include 'koneksi.php';
// session_start();
$username = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['username']));
$password = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['password']));
$sql  = mysqli_query($koneksi, " SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password' ");
$row      = mysqli_fetch_assoc($sql);
$cek    = mysqli_num_rows($sql);
if ($cek == 1) {
		session_start();
    $_SESSION['nik']                 = $row['nik'];
    $_SESSION['nama']                = $row['nama'];
    $_SESSION['username']            = $row['username'];
    $_SESSION['password']            = $row['password'];
    $_SESSION['telp']                = $row['telp'];

    echo "
		<script>
        alert('Login Berhasil');
		window.location = 'media.php';
		</script>
		";
		
} else {
    echo "
		<script>
		alert('maaf login anda salah');
		window.location = 'login.php';
		</script>
		";
}
