<div class="row">
 <!--  page header -->
<div class="col-lg-12">
    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Sosiometri</font></h1>
</div>
 <!-- end  page header -->

         	<form action="" method="post">
<div class="row">
 <!--Default Pannel, Primary Panel And Success Panel   -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #f50057; color:white;">
            <i class="fa fa-info"></i>
        </div>
        <div class="panel-body">
        	<div class="form-group">
				<label> Siapa Nama Kamu ??
				<select class="form-control show-tick" name="nama_siswa" data-live-search="true">
				<?php 
				include '../koneksi/-koneksi.php';
				$nama_siswa = mysqli_query($mysqli, "SELECT nama_siswa FROM data_siswa");
				while($hasil = mysqli_fetch_array($nama_siswa)){
				echo "<option>$hasil[nama_siswa]</option>";
				}
				?>
				</select>
				</label>
        	</div>
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: white; color:black;">
                            <b><i class="fa fa-envelope"></i> Isilah Pertanyaan Berikut !! </b>
                        </div>
                        <div class="panel-body">
                        	<label>1. Tuliskan nama teman sekelasmu yang paling kamu senangi dalam belajar ?<input type="text" name="teman1" class="form-control" placeholder="A."></label>
                        	<input type="text" name="teman2" class="form-control" placeholder="B.">
                        	<label> Alasannya :</label>                       
                        	<textarea class="form-control" name="alasan_teman"></textarea>
                        </div>
                          <div class="panel-body">
                        	<label>2. Tuliskan nama teman sekelasmu yang paling kamu senangi dalam bermain ?<input type="text" name="bermain1" class="form-control" placeholder="A."></label>
                        	<input type="text" name="bermain2" class="form-control" placeholder="B.">
                        	<label> Alasannya :</label>                       
                        	<textarea class="form-control" name="alasan_bermain"></textarea>
                        </div>
                          <div class="panel-body">
                        	<label>3. Tuliskan nama teman sekelasmu yang tidak kamu sukai ?<input type="text/submit/hidden/button/etc" name="tidaksuka1" class="form-control" placeholder="A."></label>
                        	<input type="text" name="tidaksuka2" class="form-control" placeholder="B.">
                        	<label> Alasannya :</label>                       
                        	<textarea class="form-control" name="alasan_tidaksuka"></textarea>
                        </div>
                           <div class="panel-body">
                        	<label>4. Tuliskan nama teman yang menyenangkan untuk diajak kerjasama ?<input type="text" name="menyenangkan1" class="form-control" placeholder="A."></label>
                        	<input type="text" name="menyenangkan2" class="form-control" placeholder="B.">
                        	<label> Alasannya :</label>                       
                        	<textarea class="form-control" name="alasan_menyenangkan"></textarea>
                        </div>
                         <div class="panel-body">
                        	<label>5. Tuliskan nama temanmu yang selalu siap membantu dan memberi dukungan?<input type="text" name="dukungan1" class="form-control" placeholder="A."></label>
                        	<input type="text" name="dukungan2" class="form-control" placeholder="B.">
                        	<label> Alasannya :</label>                       
                        	<textarea class="form-control" name="alasan_dukungan"></textarea>
                        </div>
                        <div class="panel-body">
                        	<input type="submit" name="simpan" class="btn btn-info" value="Simpan">

                        </div>
                    </div>
                </div>

        </div>
        <div class="panel-footer" style="background-color: #f50057; color:white;">
            Panel Footer
        </div>
    </div>

</div>
</div>
</form>
<?php
 include '../koneksi/-koneksi.php';

$nama_siswa = @$_POST['nama_siswa'];
$teman1 = @$_POST['teman1'];
$teman2 = @$_POST['teman2'];
$alasan_teman = @$_POST['alasan_teman'];
$bermain1 = @$_POST['bermain1'];
$bermain2 = @$_POST['bermain2'];
$alasan_bermain = @$_POST['alasan_bermain'];
$tidaksuka1 = @$_POST['tidaksuka1'];
$tidaksuka2 = @$_POST['tidaksuka2'];
$alasan_tidaksuka = @$_POST['alasan_tidaksuka'];
$menyenangkan1 = @$_POST['menyenangkan1'];
$menyenangkan2 = @$_POST['menyenangkan2'];
$alasan_menyenangkan = @$_POST['alasan_menyenangkan'];
$dukungan1 = @$_POST['dukungan1'];
$dukungan2 = @$_POST['dukungan2'];
$alasan_dukungan = @$_POST['alasan_dukungan'];

$simpan = @$_POST['simpan'];

if ($simpan){
if ($teman1 == "") {
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysqli_query($mysqli, "INSERT INTO setup_sosiometri VALUES ('id_sosiometri','$nama_siswa','$teman1','$teman2','$alasan_teman','$bermain1','$bermain2','$alasan_bermain','$tidaksuka1','$tidaksuka2','$alasan_tidaksuka','$menyenangkan1','$menyenangkan2','$alasan_menyenangkan','$dukungan1','$dukungan2','$alasan_dukungan')") or die(mysqli_error($mysqli));
?>

<script type="text/javascript">
alert(" Sukses !", "Data berhasil disimpan!", "success");     
</script>

<?php
}
}
?>