     <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Siswa</font></h1>
                </div>
                <!--End Page Header -->
            </div>            

<div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Haii ..
<b style="color: red;"><?php echo $data ['nama_siswa']; ?></b> Anda Login pada <a href="#" class="alert-link"><b><?php echo date (" d F Y") ?></b></a>.
</div>
<?php
include '../koneksi/-koneksi.php';
$guru =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM data_guru"));
$siswa =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM tbl_siswa_pelanggaran"));
$kelas =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM tbl_siswa_pelanggaran"));
?>

<div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="?page=siswa" style="text-decoration: none; color: black;"> 
                                <b>Sosiometri</b>

                            </a></span>                            
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-list-alt fa-3x"></i>
                        </div>
                        <div class="panel-footer">
                             <span class="panel-eyecandy-title"><a href="?page=siswa&action=update" style="text-decoration: none; color: black;"> 
                                <b>Update Data Diri</b>

                            </a></span>  
                        </div>
                    </div>
            </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="panel-footer">
                             <span class="panel-eyecandy-title"><a href="?page=siswa&action=detail" style="text-decoration: none; color: black;"> 
                                <b>Detail Data</b>

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