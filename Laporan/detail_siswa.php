<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />

    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <!-- CUSTOM STYLES -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

</head>
<body>

<?php
include '../koneksi/-koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($mysqli, "select * from data_siswa where id_siswa = '$kdsis'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql);
?>
<div class="row">
<div class="col-md-12">
<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading">
<center>
<img src="../assets/img/logosmkk.png" alt="" width="100" class="img-responsive" style="border-radius: 7%;"> <br>
<b>LAPORAN DATA HIMPUNAN SISWA</b> <br>
<b>SMK N 10 SURABAYA</b>
</center>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                   <tr>
                        <th><b style="color: red;"> DATA PRIBADI</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Nis</th>
                        <th>:</th>
                        <th><?php echo $data['nis']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Nama Legkap</th>
                        <th>:</th>
                        <th><?php echo $data['nama_siswa']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Nama Panggilan</th>
                        <th>:</th>
                        <th><?php echo $data['namap']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                        <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?php echo $data['kelamin']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <th>:</th>
                        <th><?php echo $data['tpl']; ?>, <?php echo $data['tgl']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Kewarganegaraan</th>
                        <th>:</th>
                        <th><?php echo $data['warga']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                     <tr>
                        <th>Suku Bangsa</th>
                        <th>:</th>
                        <th><?php echo $data['suku']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Diterima Tanggal</th>
                        <th>:</th>
                        <th><?php echo $data['t_skl']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                     <tr>
                        <th>Bahasa Sehari-hari</th>
                        <th>:</th>
                        <th><?php echo $data['bhs']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                     <tr>
                        <th>Anak Ke</th>
                        <th>:</th>
                        <th><?php echo $data['anakke']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Alamat Siwa</th>
                        <th>:</th>
                        <th><?php echo $data['alamat_siswa']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Telepon Siswa</th>
                        <th>:</th>
                        <th><?php echo $data['telpon_siswa']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>E-Mail</th>
                        <th>:</th>
                        <th><?php echo $data['email']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Siswa Tinggal Dengan</th>
                        <th>:</th>
                        <th><?php echo $data['tinggal_siswa']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Jarak Ke Sekolah</th>
                        <th>:</th>
                        <th><?php echo $data['jarak']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Berangkat Sekolah Menggunakan</th>
                        <th>:</th>
                        <th><?php echo $data['berangkat']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                        <?php
                    include '../koneksi/-koneksi.php';
                    $kdsis = @$_GET['kdsis'];
                    $sql = mysqli_query($mysqli,"select * from data_orangtua where id_orangtua = '$kdsis'") or die(mysqli_error($mysqli));
                    $data = mysqli_fetch_array($sql);
                    ?>
                     <tr>
                        <th><b style="color: red;">DATA ORANG TUA</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><b style="color: red;">DATA AYAH</b></th>
                    </tr>
                      <tr>
                        <th>Nama Ayah</th>
                        <th>:</th>
                        <th><?php echo $data['ayah']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                      <tr>
                        <th>TTL Ayah</th>
                        <th>:</th>
                        <th><?php echo $data['tl']; ?>, <?php echo $data['tgl']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Agama Ayah</th>
                        <th>:</th>
                        <th><?php echo $data['agama']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                       <tr>
                        <th>Pendidikan Terakhir Ayah</th>
                        <th>:</th>
                        <th><?php echo $data['pddk_a']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Satatus Dalam Keluarga</th>
                        <th>:</th>
                        <th><?php echo $data['status_keluarga']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Pekerjaan Ayah</th>
                        <th>:</th>
                        <th><?php echo $data['pekerjaan']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Penghasilan Perbulan</th>
                        <th>:</th>
                        <th><?php echo $data['penghasilan_a']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Alamat Ayah</th>
                        <th>:</th>
                        <th><?php echo $data['alamat_a']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Telepon Ayah</th>
                        <th>:</th>
                        <th><?php echo $data['telpon_a']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                 
                    <tr>
                        <th><b style="color: red;">DATA ORANG TUA</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><b style="color: red;">DATA IBU</b></th>
                    </tr>
                      <tr>
                        <th>Nama Ibu</th>
                        <th>:</th>
                        <th><?php echo $data['ibu']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                      <tr>
                        <th>TTL Ibu</th>
                        <th>:</th>
                        <th><?php echo $data['tl_i']; ?>, <?php echo $data['tgl_i']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Agama Ibu</th>
                        <th>:</th>
                        <th><?php echo $data['agma_i']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                       <tr>
                        <th>Pendidikan Terakhir Ibu</th>
                        <th>:</th>
                        <th><?php echo $data['pddk_i']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                       <tr>
                        <th>Pekerjaan Ibu</th>
                        <th>:</th>
                        <th><?php echo $data['pekerjaan_i']; ?></th>
                        <th></th>_
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Penghasilan Perbulan</th>
                        <th>:</th>
                        <th><?php echo $data['penghasilan_i']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Alamat Ibu</th>
                        <th>:</th>
                        <th><?php echo $data['alamat_i']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                       <tr>
                        <th>Telepon Ibu</th>
                        <th>:</th>
                        <th><?php echo $data['telpon_i']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    include '../koneksi/-koneksi.php';
                    $kdsis = @$_GET['kdsis'];
                    $sql = mysqli_query($mysqli,"select * from data_saudara where id_saudara = '$kdsis'") or die(mysqli_error($mysqli));
                    $data = mysqli_fetch_array($sql);
                    ?>
                     <tr>
                        <th><b style="color: red;">DATA SAUDARA</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><b style="color: red;">DATA SAUDARA 1</b></th>
                    </tr>
                      <tr>
                        <th>Nama Saudara</th>
                        <th>:</th>
                        <th><?php echo $data['nm']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Umur</th>
                        <th>:</th>
                        <th><?php echo $data['umur']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?php echo $data['jk']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Pendidikan</th>
                        <th>:</th>
                        <th><?php echo $data['pddk']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Pekerjaan</th>
                        <th>:</th>
                        <th><?php echo $data['krj']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Agama</th>
                        <th>:</th>
                        <th><?php echo $data['agm']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                    <tr>
                        <th><b style="color: red;">DATA SAUDARA</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><b style="color: red;">DATA SAUDARA 2</b></th>
                    </tr>
                      <tr>
                        <th>Nama Saudara</th>
                        <th>:</th>
                        <th><?php echo $data['nm1']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Umur</th>
                        <th>:</th>
                        <th><?php echo $data['umur1']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?php echo $data['jk1']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Pendidikan</th>
                        <th>:</th>
                        <th><?php echo $data['pddk1']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Pekerjaan</th>
                        <th>:</th>
                        <th><?php echo $data['krj1']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Agama</th>
                        <th>:</th>
                        <th><?php echo $data['agm1']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                    <tr>
                        <th><b style="color: red;">DATA SAUDARA</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><b style="color: red;">DATA SAUDARA 3</b></th>
                    </tr>
                      <tr>
                        <th>Nama Saudara</th>
                        <th>:</th>
                        <th><?php echo $data['nm2']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Umur</th>
                        <th>:</th>
                        <th><?php echo $data['umur2']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?php echo $data['jk2']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Pendidikan</th>
                        <th>:</th>
                        <th><?php echo $data['pddk2']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Pekerjaan</th>
                        <th>:</th>
                        <th><?php echo $data['krj2']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                     <tr>
                        <th>Agama</th>
                        <th>:</th>
                        <th><?php echo $data['agm2']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 

            </table>
        </div>

    </div>

</div>
 <!-- End  Kitchen Sink -->

</div>
    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
        <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script>

    
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>