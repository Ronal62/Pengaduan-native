<?php
include 'koneksi.php';
?>

<?php
if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $sql = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp')");
    if ($sql) {
        echo "
        <script>
        alert('Admin berhasil disimpan');
        window.location='login.php';
        </script>
        ";
    }
}
?>