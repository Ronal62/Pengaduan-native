<?php
session_start();
$nik        = $_SESSION['nik'];
$username   = $_SESSION['username'];
include 'koneksi.php';
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title></title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="css/custom.css" />
   <!-- calendar file css -->
   <link rel="stylesheet" href="js/semantic.min.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page general_elements">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->

         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           <ul>
                              <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                              <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                              <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                           </ul>
                           <ul class="user_profile_dd">
                              <li>
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profile.html">My Profile</a>
                                    <a class="dropdown-item" href="settings.html">Settings</a>
                                    <a class="dropdown-item" href="help.html">Help</a>
                                    <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <h2>Halaman Form pengaduan</h2>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="col-sm-12">
                     <div class="card">

                        <div class="card-body">
                           <h5>Form pengaduan</h5>
                           <hr>
                           <div class="row">
                              <div class="col-md-12">
                                 <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Judul pengaduan</label>
                                       <input type="text" class="form-control" name="judul" placeholder="">
                                       <div class="form-group">
                                          <label for="exampleInputPassword1">isi laporan</label>
                                          <textarea type="text" class="form-control" name="isi_laporan" placeholder="Enter lokasi">
                                        </textarea>
                                       </div>
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Gambar</label>
                                          <input type="file" class="form-control" name="foto" placeholder="Enter gambar">

                                       </div>

                                       <button type="submit" value="submit" name="simpan" class="btn btn-primary">submit</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- footer -->
                     <div class="container-fluid">
                        <div class="footer">
                           <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                        </div>
                     </div>
                  </div>
                  <!-- end dashboard inner -->
               </div>
            </div>
            <!-- model popup -->
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">
                        Modal body..
                     </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end model popup -->
         </div>
         <!-- jQuery -->
         <script src="js/jquery.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <!-- wow animation -->
         <script src="js/animate.js"></script>
         <!-- select country -->
         <script src="js/bootstrap-select.js"></script>
         <!-- owl carousel -->
         <script src="js/owl.carousel.js"></script>
         <!-- chart js -->
         <script src="js/Chart.min.js"></script>
         <script src="js/Chart.bundle.min.js"></script>
         <script src="js/utils.js"></script>
         <script src="js/analyser.js"></script>
         <!-- nice scrollbar -->
         <script src="js/perfect-scrollbar.min.js"></script>
         <script>
            var ps = new PerfectScrollbar('#sidebar');
         </script>
         <!-- custom js -->
         <script src="js/custom.js"></script>
         <!-- calendar file css -->
         <script src="js/semantic.min.js"></script>
</body>

</html>
<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_pengaduan_masyarakat");
if (mysqli_connect_errno()) {
   echo "Gagal melakukan koneksi ke MySQL:" . sql_error($koneksi, _LINE_);
}
?>
<?php
if (isset($_POST['simpan'])) {
   $judul = $_POST['judul'];
   $isi_laporan = $_POST['isi_laporan'];
   $nik = $_SESSION['nik'];
   $status = '0';

   $target_dir = '../foto/';
   $target_file = $target_dir . basename($_FILES['foto']['name']);
   if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
      $query = "insert into pengaduan values (
              NULL,
              NOW(),
              '$nik',
              '$judul',
              '$isi_laporan',
              '$target_file',
              '$status'
              )";
      $q = mysqli_query($koneksi, $query);
      if ($q) {

         echo '<script>alert("Data Berhasil Terkirim."); document.location="data_pengaduan.php";</script>';
      } else {
         echo '<div class="alert alert-warning">data berhasil di kirim.</div>';
      }
   }
}

?>