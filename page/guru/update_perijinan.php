<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Update Data Perijinan</font></h1>
</div>
<!-- end  page header -->

<div class="row">
<div class="col-lg-12">
<?php
$no = $_GET['no'];

$sql_formulir = mysqli_query($mysqli,"select * from tb_izin where no = '$no'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
?>
<div class="panel panel-default" style="margin:20px 20px;">
<div class="panel-heading">
        <b><i class="fa fa-table"></i> EDIT DATA PERIJINAN</b>
</div>
    <div class="table-responsive">                    
<div class="panel-body">
<form action="" method="post">
    <div class="mb-3">
        <input type="hidden" name="no" class="form-control" value="<?php echo $data['no'];?>"/>
        <label for="exampleInputEmail1" class="form-label">Pemberi Izin</label>
        <input type="text" class="form-control" name="p_ijin" value="<?php echo $data['p_ijin'];?>">
    </div>
    <br/>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'];?>">
    </div>
    <br/>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kelas</label>
        <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'];?>">
    </div>
    <br/>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Hari</label>
        <input type="text" class="form-control" name="hari" value="<?php echo $data['hari'];?>">
    </div>
    <br/>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal'];?>">
    </div>
    <br/>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Untuk</label>
        <select name="untuk"  class="form-control">
            <option <?php $data['untuk'] == 'Pulang' ? 'selected' : '' ?> value="Pulang">Pulang</option>
            <option <?php $data['untuk'] == 'Terlambat' ? 'selected' : '' ?> value="Terlambat">Terlambat</option>
            <option <?php $data['untuk'] == 'Keluar' ? 'selected' : '' ?> value="Keluar">Keluar</option>
        </select>
    </div>
    <br/>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alasan</label>
        <input type="text" class="form-control" name="alasan" value="<?php echo $data['alasan'];?>">
    </div>
    <br>             
    <center>
        <input type="submit" name="update" value="SIMPAN" class="btn btn-info">
    </center>
                    
</form>
<?php 
    if (isset($_REQUEST['update'])) {
        $no = $_REQUEST['no'];
        $p_ijin = $_REQUEST['p_ijin'];
        $nama = $_REQUEST['nama'];
        $kelas = $_REQUEST['kelas'];
        $hari = $_REQUEST['hari'];
        $tanggal = $_REQUEST['tanggal'];
        $untuk = $_REQUEST['untuk'];
        $alasan = $_REQUEST['alasan'];
        
        mysqli_query($mysqli,"UPDATE tb_izin SET p_ijin='$p_ijin',nama='$nama',kelas='$kelas',
        hari='$hari',tanggal='$tanggal',untuk='$untuk',alasan='$alasan' WHERE no='$no'") or die(mysqli_error($mysqli));
        ?>
        <script>
            alert(" Sukses !.. Data berhasil Di Ubah!")
            window.location.href="?page=guru&action=view_perijinan";     
        </script>
<?php
    }
?>
</div>
    </div>
</div>
</div>