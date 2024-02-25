<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Detail Data Siswa</font></h1>
</div>
<!-- end  page header -->
</div>
<?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($mysqli,"select * from data_siswa where id_siswa = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
?>
<div class="row">
<div class="col-md-10">
<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#f50057; color: white;">
        BERIKUT DETAIL DATA  >> <b><?php echo $data['nis']; ?> || <?php echo $data['nama_siswa']; ?></b>
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
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($mysqli, "select * from data_orangtua where id_orangtua = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
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
                        <th><?php echo $data['tl']; ?>, <?php echo $data['tgl_a']; ?></th>
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
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($mysqli, "select * from data_saudara where id_saudara = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
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
 <div class="col-md-2">
                <?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($mysqli,"select * from data_siswa where id_siswa = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
?>

<a href="../Laporan/detail_siswa.php?kdsis=<?php echo $data['id_siswa']; ?>" style="text-decoration: none;"><button class="btn btn-lg btn-info btn-block"><i class="fa fa-edit"></i> Print Data</button></a>
 </div>