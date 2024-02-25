<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Setup Sanksi</font></h1>
                </div>
                 <!-- end  page header -->

<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading" style="background-color: #f50057; color:white;">
    <b><i class="fa fa-edit"></i> INPUT JENIS SANKSI</b>
</div>
<div class="panel-body">
<form role="form" action="" method="post">

    <div class="form-group">
        <label>Kode Sanksi</label>
        <input class="form-control" name="id_sanksi" id="disabledInput" type="text" placeholder="Kode Sanksi" disabled>
    </div>
    <div class="form-group">
        <label>Nama Sanksi</label>
        <input type="text" class="form-control" placeholder="Nama Sanksi" name="nama_sanksi">
    </div>
    <div class="form-group">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
        <input type="reset" value="Reset" class="btn btn-danger">
    </div>
</form>
<?php
 include '../koneksi/-koneksi.php';
$nama_sanksi = @$_POST['nama_sanksi'];
$point = @$_POST['point'];

$simpan = @$_POST['simpan'];

if ($simpan){
if ($nama_sanksi == "") {
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysql_query("INSERT INTO setup_jenis_sanksi VALUES ('id_sanksi','$nama_sanksi')") or die(mysql_error());
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


                <div class="col-lg-12">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #f50057; color:white;">
                            <b><i class="fa fa-table"></i> DAFTAR JENIS SANKSI</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Sanksi</th>
                                            <th>Nama Sanksi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysql_query("select * from setup_jenis_sanksi") or die (mysql_error());
                                        $no=1;
                                        while ($data = mysql_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_sanksi']; ?></td>
                                            <td><?php echo $data['nama_sanksi']; ?></td>
                                            <td>
                                                <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=del_sanksi&kdgr=<?php echo $data['id_sanksi']; ?>">
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
