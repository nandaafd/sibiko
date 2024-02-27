<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Perizinan Siswa</font></h1>
</div>
<!-- end  page header -->


<div class="row">
<div class="col-lg-12">
	<!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#f50057;color: white;">
        <b><i class="fa fa-table"></i> DAFTAR DATA PERIJINAN SISWA </b>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
        	<a href="?page=guru&action=add_perijinan" class="btn btn-danger"><i class="fa fa-edit"></i> Tambah Perijinan Baru</a>  <br>
                <table class="table table-striped table-hover" id="dataTables-example">
                    <thead>
                         <tr>
                            <th>No.</th>
                            <th>Pemberi Izin</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Untuk</th>
                            <th>Alasan</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                        include '../koneksi/-koneksi.php';
                        $sql = mysqli_query($mysqli, "select * from tb_izin") or die (mysqli_error($mysqli));
                        $no=1;
                        while ($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['p_ijin']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['kelas']; ?></td>
                            <td><?php echo $data['hari']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['untuk']; ?></td>
                            <td><?php echo $data['alasan']; ?></td>
                            <td>
                                <a href="?page=guru&action=update_perijinan&no=<?php echo $data['no']; ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
								<a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=del_perijinan&kdgr=<?php echo $data['no']; ?>">
								<button type="" class="btn btn-danger" style="background-color:#f50057;"><i class="fa fa-times"></i></button></a>
                            </td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <!--End Advanced Tables -->

</div>
</div>





