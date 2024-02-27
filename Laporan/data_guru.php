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
<b>LAPORAN DATA HIMPUNAN GURU</b> <br>
<b>SMK N 10 SURABAYA</b>
</center>
    </div>
       <div class="table-responsive">                    
    <div class="panel-body">
        <div class="table-responsive">
             <table class="table table-striped table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Gender</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi/-koneksi.php';
                    $sql = mysqli_query($mysqli,"select * from data_guru") or die (mysqli_error($mysqli));
                    $no=1;
                    while ($data = mysqli_fetch_array($sql)){
                    ?>
                    <tr class="odd gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nip']; ?></td>
                        <td><?php echo $data['nama_guru']; ?>, <?php echo $data['gelar']; ?></td>
                        <td><?php echo $data['tempat_lahir']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
                        <td><?php echo $data['kelamin']; ?></td>
                        <td><?php echo $data['agama']; ?></td>
                        <td><?php echo $data['alamat_guru']; ?></td>
                        <td><?php echo $data['telpon_guru']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td> 
                            <?php 
                                if ($data['photo'] != null) {
                            ?>
                            <img src="../photo_guru/<?php echo $data['photo'];?>" onerror="this.src='../photo_guru/nopic.jpg'" height="40" width="40" align="middle" style="border-radius: 100%;">
                            <?php
                                }else {
                            ?>
                            <img src="../photo_guru/nopic.jpg" onerror="this.src='../photo_guru/nopic.jpg'" height="40" width="40" align="middle" style="border-radius: 100%;">
                            <?php
                                }
                            ?>
                        </td>
                        <td>
                              <a href="../Laporan/detail_guru.php?kdsis=<?php echo $data['id_guru']; ?> "><button type="" class="btn btn-info"><i class="fa fa-print"></i> Print</button></a> 
                            
                        </td>
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