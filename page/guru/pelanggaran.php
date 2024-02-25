<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Setup Pelanggaran</font></h1>
</div>
<!-- end  page header -->

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-12 col-md-12">
    <div class="panel panel-default">
<div class="panel-heading" style="background-color: #f50057; color:white;">
    <b><i class="fa fa-edit"></i> INPUT JENIS PELANGGARAN</b>
</div>
<div class="panel-body">
<form role="form" action="" method="post">

    <div class="form-group">
        <label>Kode Pelaggaran</label>
        <input class="form-control" name="id_jenis" id="disabledInput" type="text" placeholder="Kode Pelangaran" disabled>
    </div>
    <div class="form-group">
        <label>Nama Pelangaran</label>
        <input type="text" class="form-control" placeholder="Nama Pelangaran" name="nama_jenis">
    </div>
    <div class="form-group">
        <label>Jumlah Point</label>
        <input class="form-control" type="number" placeholder="Jumlah Point" name="point">
    </div>
    <div class="form-group">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
        <input type="reset" value="Reset" class="btn btn-danger">
    </div>
</form>
<?php
 include '../koneksi/-koneksi.php';
$nama_jenis = @$_POST['nama_jenis'];
$point = @$_POST['point'];

$simpan = @$_POST['simpan'];

if ($simpan){
if ($nama_jenis == "") {
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysqli_query($mysqli,"INSERT INTO setup_jenis_pelanggaran VALUES ('id_jenis','$nama_jenis','$point')") or die(mysqli_error($mysqli));
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
</div>


<div class="row">
                <div class="col-lg-12">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #f50057; color:white;">
                            <b><i class="fa fa-table"></i> DAFTAR JENIS PELANGGARAN</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Pelanggaran</th>
                                            <th>Nama Pelanggaran</th>
                                            <th>Jumlah Point</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	    <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysqli_query($mysqli,"select * from setup_jenis_pelanggaran") or die (mysqli_error($mysqli));
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_jenis']; ?></td>
                                            <td><?php echo $data['nama_jenis']; ?></td>
                                            <td><?php echo $data['point']; ?></td>
                                            <td>
												<a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=del_jen&kdgr=<?php echo $data['id_jenis']; ?>">
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
