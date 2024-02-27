<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
<center>
<img src="../assets/img/logosmkk.png" alt="" width="100" class="img-responsive" style="border-radius: 7%;"> <br>
<b>LAPORAN DATA HIMPUNAN PERIZINAN SISWA</b> <br>
<b>SMK N 10 SURABAYA</b>
</center>
    </div>
       <div class="table-responsive">                    
    <div class="panel-body">
        <div class="table-responsive">
        <table class="table table-striped table-hover" id="dataTables-example">
                    <thead>
                         <tr>
                            <th>No.</th>
                            <th>Pemberi Izin</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Untuk</th>
                            <th>Alasan</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                        include '../koneksi/-koneksi.php';
                        $sql = mysqli_query($mysqli, "select * from tb_izin") or die (mysqli_error($mysqli));
                        $no=1;
                        while ($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['p_ijin']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['kelas']; ?></td>
                            <td><?php echo $data['hari']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['untuk']; ?></td>
                            <td><?php echo $data['alasan']; ?></td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
        </div>
        
    </div>
</div>
<!--End Advanced Tables -->
</div>
</div>


    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
        <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script>

    
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>