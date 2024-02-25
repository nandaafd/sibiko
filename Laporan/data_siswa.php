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
<b>LAPORAN DATA HIMPUNAN SISWA</b> <br>
<b>SMK N 10 SURABAYA</b>
</center>

                        </div>
                       
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Gender</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysqli_query($mysqli,"select * from data_siswa") or die (mysqli_error($mysqli));
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nis']; ?></td>
                                            <td><?php echo $data['nama_siswa']; ?></td>
                                            <td><?php echo $data['tpl']; ?>,<?php echo $data['tgl']; ?></td>
                                            <td><?php echo $data['kelamin']; ?></td>
                                            <td><?php echo $data['agama']; ?></td>
                                            <td><?php echo $data['alamat_siswa']; ?></td>
                                            <td><?php echo $data['telpon_siswa']; ?></td>
                                            <td><?php echo $data['email']; ?></td>                                       
                                        </tr>
                                        <?php } ?>
                                      
                                    </tbody>
                                </table>
                    
        


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