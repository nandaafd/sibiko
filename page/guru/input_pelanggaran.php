<div class="row">
<!-- Page Header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Pelanggaran</font></h1>
</div>
<!--End Page Header -->
</div>   
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">

  <div class="col-xs-12 col-md-12">
    <div class="panel panel-default">
<div class="panel-heading" style="background-color: #f50057; color:white;">
    <b><i class="fa fa-edit"></i> INPUT PELANGGARAN</b>
</div>
<div class="panel-body">
<form role="form" action="" method="post">
<div class="form-group">
<label>Nama Siswa</label>
<select class="form-control show-tick" name="nm_siswa" data-live-search="true">
<option>-Pilih Siswa-</option>
<?php 
include '../koneksi/-koneksi.php';
$nama_siswa = mysqli_query($mysqli,"SELECT nama_siswa FROM data_siswa");
while($hasil = mysqli_fetch_array($nama_siswa)){
echo "<option>$hasil[nama_siswa]</option>";
}
?>
</select>
</div>


<div class="form-group">
<label>Jenis Pelanggaran</label>
<select name="nm_pelanggaran" class="form-control" onchange="changeValue(this.value)" >
	<?php
	$siswa=mysqli_query($mysqli,"select * from setup_jenis_pelanggaran");
	$jsArray = "var dtSwa = new Array();\n";
	while ($row = mysqli_fetch_array($siswa)) {    
	echo '<option value="' . $row['nama_jenis'] . '">' . $row['nama_jenis'] . '</option>';    
	$jsArray .= "dtSwa['" . $row['nama_jenis'] . "'] = {nama:'" . addslashes($row['nama_jenis']) . "',jrsn:'".addslashes($row['point'])."'};\n";    
	}      
	?>                             
</select> 
<label></label>
<input type="text" name="nm_pelanggaran" id="id_jenis" class="form-control"/> </br>
<label>Point</label>
<input type="text" name="poin" id="point" class="form-control"/>
		
</div>
<script type="text/javascript">    
<?php echo $jsArray; ?>  
function changeValue(nim){  
document.getElementById('id_jenis').value = dtSwa[nim].nama;  
document.getElementById('point').value = dtSwa[nim].jrsn;

};  
</script> 
<div class="form-group">
<label>Tanggal Kejadian</label>
<input type="date" name="tgl_kejadian" class="form-control"/>
</div>
<div class="form-group">
<label>Jenis Sanksi</label>
<select class="form-control show-tick" name="nm_sanksi" data-live-search="true">
<?php 
include '../koneksi/-koneksi.php';
$nm_sanksi = mysqli_query($mysqli,"SELECT nama_sanksi FROM setup_jenis_sanksi");
while($hasil = mysqli_fetch_array($nm_sanksi)){
echo "<option>$hasil[nama_sanksi]</option>";
}
?>
</select>

</div>
<div class="form-group"> 
<label>Keterangan</label>
<textarea class="form-control" name="ket">
</textarea>
</div>

<div class="form-group">
<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
<input type="reset" value="Reset" class="btn btn-danger">
</div>
</form>
<?php
 include '../koneksi/-koneksi.php';
$nm_siswa = @$_POST['nm_siswa'];
$nm_pelanggaran = @$_POST['nm_pelanggaran'];
$nm_sanksi = @$_POST['nm_sanksi'];
$poin = @$_POST['poin'];
$tgl_kejadian = @$_POST['tgl_kejadian'];
$ket = @$_POST['ket'];
$simpan = @$_POST['simpan'];
if ($simpan){
if ($nm_siswa == "" || $nm_pelanggaran == "" || $poin == "") {
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysqli_query($mysqli, "INSERT INTO tbl_siswa_pelanggaran VALUES ('id_pelanggaran','$nm_siswa','$nm_pelanggaran','$nm_sanksi','$poin','$tgl_kejadian','$ket')") or die(mysqli_error($mysqli));
?>

<script type="text/javascript">
alert(" Sukses !", "Data berhasil disimpan!", "success")
window.location.href="?page=guru&action=viewpel";     
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

