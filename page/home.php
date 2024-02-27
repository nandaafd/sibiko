     <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Administrator</font></h1>
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
    <b style="color: red;"><?php echo $data ['nama_lengkap']; ?></b> Anda Login pada <a href="#" class="alert-link"><b><?php echo date (" d F Y") ?></b></a>.
</div>
<?php
include '../koneksi/-koneksi.php';
$guru =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM data_guru"));
$siswa =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM data_siswa"));
$kelas =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM setup_kelas"));
$pelanggaran =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM setup_jenis_pelanggaran"));
$sanksi =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM setup_jenis_sanksi"));
?>


<div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #4fc3f7; color: white;">
                            <i class="fa fa-user fa-3x"></i>
                            <h3><?php echo "".$guru." ";?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="?page=admin" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Data Guru</b>

                            </a></span>                            
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #d500f9; color: white;">
                            <i class="fa fa-users fa-3x"></i>
                            <h3><?php echo "".$siswa." ";?> </h3>
                        </div>
                        <div class="panel-footer">
                             <span class="panel-eyecandy-title"><a href="?page=admin&action=data_siswa" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Data Siswa</b>

                            </a></span>  
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #f50057; color: white;">
                            <i class="fa fa fa-home fa-3x"></i>
                            <h3><?php echo "".$kelas." ";?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="?page=guru&action=kelas" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Data Kelas</b>
                            </a></span> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #e53935; color: white;">
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
                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #3e2723; color: white;">
                            <i class="fa fa-ban fa-3x"></i>
                            <h3><?php echo "".$pelanggaran." ";?></h3>
                        </div>
                        <div class="panel-footer">
                             <span class="panel-eyecandy-title"><a href="?page=guru&action=pelanggaran" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Jenis Pelanggaran</b>

                            </a></span> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: #29b6f6; color: white;">
                            <i class="fa fa-compress fa-3x"></i>
                            <h3><?php echo "".$sanksi." ";?></h3>
                        </div>
                        <div class="panel-footer">
                             <span class="panel-eyecandy-title"><a href="?page=guru&action=sanksi" style="text-decoration: none; color: black;"> 
                                <b>Jumlah Jenis Sanksi</b>

                            </a></span> 
                        </div>
                    </div>
                </div>

               </div>