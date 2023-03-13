<div class="card-body">
  <form method="POST" action="">
    <div class="row">
      <div class="col-md-6">
        <select class="form-control" name="tgl_pengaduan">
          <option value="">-- Pilih Tanggal --</option>
          <?php
          $qr = mysqli_query($koneksi, "SELECT tgl_pengaduan FROM pengaduan WHERE nik='$nik' GROUP BY tgl_pengaduan");
          while ($r = mysqli_fetch_assoc($qr)) {
          ?>
            <option value="<?= $r['tgl_pengaduan'] ?>"><?= $r['tgl_pengaduan'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    <hr>
    <div class="col-sm-6">
      <div class="form-group">
        <button type="submit" value="submit" name="cek" class="btn btn-primary">Lihat Data</button>
      </div>
    </div>
    </center>
  </form>

</div>

<?php
if (isset($_POST['cek'])) {
  $tanggal = $_POST['tgl_pengaduan'];
?>
  <div class="row justify-content-center">
    <div class="col-md-10 ftco-animate">
      <table class="table">
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
</div>