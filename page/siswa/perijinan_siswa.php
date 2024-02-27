<div class="row">
 <!--  page header -->
<div class="col-lg-12">
    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Perijinan Siswa</font></h1>
</div>
 <!-- end  page header -->

         	<form action="" method="post">
<div class="row">
 <!--Default Pannel, Primary Panel And Success Panel   -->


        	</div>
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: white; color:black;">
                            <b> DATA PERIJINAN MENINGGALKAN SEKOLAH</b>
                        </div>

                        <div class="panel-body">
                        	<label>Diberikan ijin kepada</label>
                        	<input type="text" name="p_ijin" class="form-control" >
                        </div>

                        <div class="panel-body">
						    <label>Nama</label>
                        	<input type="text" name="nama" class="form-control" >
                        </div>

						<div class="panel-body">
						    <label>Kelas</label>
                        	<input type="text" name="kelas" class="form-control" > 
                        </div>
						 
						<div class="panel-body">
						    <label>Hari, Tanggal</label>
							<input class="form-control" type="text" name="hari" > <br>
                            <input class="form-control" type="date" name="tanggal">    
                        </div>

                        <div class="panel-body">
						    <label>Untuk</label>
                        	<select name="untuk"  class="form-control">
                                                <option value="Pulang">Pulang</option>
                                                <option value="Terlambat">Terlambat</option>
                                                <option value="Keluar">Keluar</option>
                                                </select>     
                        </div>

						<div class="panel-body">
						    <label>Alasan</label>
                        	<input type="text" name="alasan" class="form-control" >
                        </div>
						
                        <div class="panel-body">
                        	<input type="submit" name="simpan" class="btn btn-info" value="Simpan">

                        </div>
                    </div>
                </div>

        </div>
    </div>

</div>
</div>
</form>
<?php
 include '../koneksi/-koneksi.php';


$p_ijin = @$_POST['p_ijin'];
$nama = @$_POST['nama'];
$kelas = @$_POST['kelas'];
$hari = @$_POST['hari'];
$tanggal = @$_POST['tanggal'];
$untuk = @$_POST['untuk'];
$alasan = @$_POST['alasan'];

$simpan = @$_POST['simpan'];

if ($simpan==""){
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysqli_query($mysqli, "INSERT INTO tb_izin VALUES ('no', '$p_ijin','$nama','$kelas','$hari','$tanggal','$untuk','$alasan')") or die(mysqli_error($mysqli));
?>

<script type="text/javascript">
alert(" Sukses !", "Data berhasil disimpan!", "success");     
</script>

<?php
}
?>

