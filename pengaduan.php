<?php

include 'koneksi.php';
include 'header.php';

?>

<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="index.html" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">GrowMark</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="media.php" class="nav-item nav-link ">Home</a>
                    <a href="pengaduan.php" class="nav-item nav-link active">Pengaduan</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="project.html" class="nav-item nav-link">Projects</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Quotation</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="media.php" class="btn btn-primary rounded-pill py-2 px-3">Hai!! <?php echo $_SESSION['nama']; ?></a>
                    <a href="index.php" class="btn btn-primary rounded-pill py-2 px-3">Sign Out</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Pengaduan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Pengaduan</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Project Start -->
<div class="container-xxl pt-5">
    <div class="container">

        <div class="container-xxl py-5 " style="display: flex;">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="fs-5 fw-medium text-primary">Data Pengaduan</p>
                        <h1 class="display-5 mb-4">Seluruh Data PENGADUAN ada di sini silahkan di cek !!</h1>
                        <!-- <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                            <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </span>
                            <span class="fs-5 fw-medium mx-4">+012 345 6789</span>
                        </a> -->
                    </div>
                    <div class="row py-5 mx-auto ">
                        <form action="" method="POST" class="py-3 col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="mb-4">History Pengaduan</h2>
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="service" name="tgl_pengaduan">
                                            <option value="">--- Pilih Tanggal ---</option>
                                            <?php
                                            $qr = mysqli_query($koneksi, "SELECT tgl_pengaduan FROM pengaduan WHERE nik='$nik' GROUP BY tgl_pengaduan ");
                                            while ($r = mysqli_fetch_assoc($qr)) {
                                            ?>
                                                <option value="<?= $r['tgl_pengaduan'] ?>"><?= $r['tgl_pengaduan'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <label for="service">Choose A Service</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit" value="submit" name="cek">Lihat Data</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <form action="" method="POST" enctype="multipart/form-data" class="py-3 col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="mb-4">Form Pengaduan</h2>
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pengaduan">
                                        <label for="judul">Judul Pengaduan</label>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Isi Laporan Anda " id="isi_laporan" name="isi_laporan" style="height: 130px"></textarea>
                                        <label for="isi_laporan">Isi Laporan Anda</label>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control " style="cursor: pointer;" name="foto" id="foto" placeholder="Pengaduan">
                                        <label for="foto">Gambar</label>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit" value="submit" name="simpan">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- TABLE HISTORY -->
                        <?php
                        if (isset($_POST['cek'])) {
                            $tanggal = $_POST['tgl_pengaduan'];
                        ?>
                            <h3 class="mt-5 mb-3 text-center">TABEL HISTORY</h3>
                            <div class="row justify-content-center">
                                <div class="col- ftco-animate">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Tanggapan</th>
                                                <th>Judul</th>
                                                <th>Tanggapan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE tgl_pengaduan='$tanggal' AND nik='$nik'");
                                            while ($row = mysqli_fetch_assoc($data)) {
                                            ?>
                                                <td><?= $row['tgl_pengaduan'] ?></td>
                                                <td><?= $row['judul'] ?></td>
                                                <td><?= $row['isi_laporan'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($row['status'] == '0') {
                                                        echo "<span class='label label-danger'>NULL</span>";
                                                    } else if ($row['status'] == 'Proses') {
                                                        echo "<span class='label label-warning'>Proses</span>";
                                                    } else {
                                                        echo "<span class='label label-success'>Selesai</span>";
                                                    }

                                                    ?>
                                                </td>
                                        </tbody>
                                    <?php
                                            }
                                    ?>
                                    </table>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- END TABLE HISTORY -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Project End -->

<?php
include 'footer.php';
?>

<?php
// $koneksi = mysqli_connect("localhost", "root", "", "db_pengaduan");
// if (mysqli_connect_errno()) {
//     echo "Gagal melakukan koneksi ke MySQL:" . sql_error($koneksi, _LINE_);
// }
?>

<?php
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi_laporan = $_POST['isi_laporan'];
    $nik = $_SESSION['nik'];
    $status = '0';

    $target_dir = 'foto/';
    $target_file = $target_dir . basename($_FILES['foto']['name']);
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
        $query = "INSERT INTO pengaduan VALUES (NULL,NOW(),'$nik','$judul','$isi_laporan','$target_file','$status')";
        $q = mysqli_query($koneksi, $query);
        if ($q) {

            echo '<script>alert("Data Berhasil Terkirim."); document.location="pengaduan.php";</script>';
        } else {
            echo '<div class="alert alert-warning">data berhasil di kirim.</div>';
        }
    }
}

?>