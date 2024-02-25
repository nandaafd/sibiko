<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Kelas</font></h1>
                </div>
                 <!-- end  page header -->

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-8">
    <div class="panel panel-default">
<div class="panel-heading" style="background-color: #f50057; color:white;">
    <b>INPUT DATA KELAS</b>
</div>
<div class="panel-body">
<form role="form" action="" method="post">

    <div class="form-group">
        <label>Kode Kelas</label>
        <input class="form-control" name="id_kelas" id="disabledInput" type="text" placeholder="Kode Kelas" disabled>
    </div>
    <div class="form-group">
        <label>Nama Kelas</label>
        <input class="form-control" placeholder="Masukkan Nama Kelas" name="nama_kelas">
    </div>
    <div class="form-group">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
        <input type="reset" value="Reset" class="btn btn-danger">
    </div>
</form>
<?php
 include '../koneksi/-koneksi.php';
$nama_kelas = @$_POST['nama_kelas'];

$simpan = @$_POST['simpan'];

if ($simpan){
if ($nama_kelas == "") {
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysqli_query($mysqli,"INSERT INTO setup_kelas VALUES ('id_kelas','$nama_kelas')") or die(mysqli_error($mysqli));
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
                            <b>DAFTAR KELAS</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Kelas</th>
                                            <th>Nama Kela</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	    <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysqli_query($mysqli,"select * from setup_kelas") or die (mysqli_error($mysqli));
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_kelas']; ?></td>
                                            <td><?php echo $data['nama_kelas']; ?></td>
                                            <td>
												<a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=delkelas&kdgr=<?php echo $data['id_kelas']; ?>">
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
