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
$sql = mysqli_query($mysqli,"select * from data_guru where id_guru = '$kdsis'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql);
?>
<div class="row">
<div class="col-md-12">
<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading">
<center>
<img src="../assets/img/logosmkk.png" alt="" width="100" class="img-responsive" style="border-radius: 7%;"> <br>
<b>LAPORAN DATA HIMPUNAN GURU</b> <br>
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
                        <th>NIP</th>
                        <th>:</th>
                        <th><?php echo $data['nip']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Nama Guru</th>
                        <th>:</th>
                        <th><?php echo $data['nama_guru']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Gelar</th>
                        <th>:</th>
                        <th><?php echo $data['gelar']; ?></th>
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
                        <th><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Agama</th>
                        <th>:</th>
                        <th><?php echo $data['agama']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                     <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <th><?php echo $data['alamat_guru']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Email</th>
                        <th>:</th>
                        <th><?php echo $data['email']; ?></th>
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