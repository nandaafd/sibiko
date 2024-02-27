     <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Guru</font></h1>
                </div>
                <!--End Page Header -->
            </div>            

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  
    <?php 
        if ($data['photo'] != null) {
    ?>
        <img src="../photo_guru/<?php echo $data ['photo'];?>" onerror="this.src='../photo_guru/nopic.jpg'" height="40" width="40" align="middle" style="border-radius: 100%;"> 
    <?php
        }else {
    ?>
        <img src="../photo_guru/nopic.jpg" onerror="this.src='../photo_guru/nopic.jpg'" height="40" width="40" align="middle" style="border-radius: 100%;"> 
    <?php
        }
    ?>
    Haii ..
    <b style="color: red;"><?php echo $data ['nama_guru']; ?></b> Anda Login pada <a href="#" class="alert-link"><b><?php echo date (" d F Y") ?></b></a>.
</div>
<?php
include '../koneksi/-koneksi.php';
$guru =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM data_guru"));
$siswa =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM tbl_siswa_pelanggaran"));
$kelas =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM tbl_siswa_pelanggaran"));
?>

<div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #4fc3f7;">
                            <i class="fa fa-users fa-3x"></i>
                            <h3><?php echo "".$guru." ";?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="?page=guru&action=view_guru" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Data Guru</b>

                            </a></span>                            
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #4e342e; color: white;">
                            <i class="fa fa-list-alt fa-3x"></i>
                            <h3><?php echo "".$siswa." ";?> </h3>
                        </div>
                        <div class="panel-footer">
                             <span class="panel-eyecandy-title"><a href="?page=guru&action=viewpel" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Data Pelanggaran</b>

                            </a></span>  
                        </div>
                    </div>
            </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #d500f9;">
                            <i class="fa fa-print fa-3x"></i>
                            <h3><?php echo "".$siswa." ";?></h3>
                        </div>
                        <div class="panel-footer">
                             <span class="panel-eyecandy-title"><a href="?page=laporan" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Data Laporan</b>

                            </a></span> 
                        </div>
                    </div>
                </div>
               <center>
                    <h1><b>SELAMAT DATANG</b> </h1>
                    <h2><b>SISTEM INFORMASI HIMPUNAN DATA BK</b> </h2>
                    <h3><b>SMKN 10 SURABAYA</b> </h3>
               </center>

               </div>
