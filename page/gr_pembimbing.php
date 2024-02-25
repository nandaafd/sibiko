<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Atur Pembimbing</font></h1>
                </div>
                 <!-- end  page header -->
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-8">
    <div class="panel panel-default">
<div class="panel-heading" style="background-color: #f50057; color:white;">
    <b><i class="fa fa-edit"></i> INPUT GURU PEMBIMBING</b>
</div>
<div class="panel-body">
<form role="form" action="" method="post">

<div class="form-group">
<select class="form-control show-tick" name="nama_guru" data-live-search="true">
<option> -Pilih Guru-</option>
<?php 
include '../koneksi/-koneksi.php';
$nama_guru = mysql_query("SELECT nama_guru FROM data_guru");
while($hasil = mysql_fetch_array($nama_guru)){
echo "<option>$hasil[nama_guru]</option>";
}
?>
</select>
</div>
<div class="form-group">
<select class="form-control show-tick" name="nama_siswa" data-live-search="true">
<option>-Pilih Siswa-</option>
<?php 
include '../koneksi/-koneksi.php';
$nama_siswa = mysql_query("SELECT nama_siswa FROM data_siswa");
while($hasil = mysql_fetch_array($nama_siswa)){
echo "<option>$hasil[nama_siswa]</option>";
}
?>
</select>
</div>
<div class="form-group">
<select class="form-control show-tick" name="nama_kelas" data-live-search="true">
    <option>-Pilih Kelas-</option>

<?php 
include '../koneksi/-koneksi.php';
$nama_kelas = mysql_query("SELECT nama_kelas FROM setup_kelas");
while($hasil = mysql_fetch_array($nama_kelas)){
echo "<option>$hasil[nama_kelas]</option>";
}
?>
</select>
</div>
    <div class="form-group">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
        <input type="reset" value="Reset" class="btn btn-danger">
    </div>
</form>
<?php
 include '../koneksi/-koneksi.php';
$nama_guru = @$_POST['nama_guru'];
$nama_siswa = @$_POST['nama_siswa'];
$nama_kelas = @$_POST['nama_kelas'];
$simpan = @$_POST['simpan'];
if ($simpan){
if ($nama_guru == "" || $nama_siswa == "" || $nama_kelas == "") {
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysql_query("INSERT INTO setup_pembimbing VALUES ('id_kelas','$nama_guru','$nama_siswa','$nama_kelas')") or die(mysql_error());
?>

<script type="text/javascript">
alert(" Sukses !", "Data berhasil disimpan!", "success");     
</script>

<?php
}
}
?>


</div>
</div>
      
  </div>
  <div class="col-xs-12 col-md-2"></div>
</div>


<div class="row">
                <div class="col-lg-12">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #f50057; color:white;">
                            <b> <i class="fa fa-table"></i> DAFTAR PEMBIMBING</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Siswa</th>
                                            <th>Nama Guru</th>
                                            <th>Kelas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysql_query("select * from setup_pembimbing") or die (mysql_error());
                                        $no=1;
                                        while ($data = mysql_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama_guru']; ?></td>
                                            <td><?php echo $data['nama_siswa']; ?></td>
                                            <td><?php echo $data['kelas']; ?></td>
                                     
                                            <td>
                                                <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=delpem&kdgr=<?php echo $data['id_pemb']; ?>">
                                                <button type="" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--  End  Striped Rows Table  -->
                </div>
