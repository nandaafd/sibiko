<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Pelanggaran</font></h1>
</div>
<!-- end  page header -->


<div class="row">
<div class="col-lg-12">
	<!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#f50057;color: white;">
        <b><i class="fa fa-table"></i> DAFTAR DATA PELANGGARAN </b>
        </div>
        <div class="panel-body">
        	<a href="?page=guru"><button class="btn btn-danger"><i class="fa fa-edit"></i> Pelanggar Baru</button></a> <br> <br>
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="dataTables-example">
                    <thead>
                         <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Pelanggaran</th>
                            <th>Sanksi</th>
                            <th>Jumlah Point</th>
                            <th>Tanggal Kejadian</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                        include '../koneksi/-koneksi.php';
                        $sql = mysqli_query($mysqli, "select * from tbl_siswa_pelanggaran") or die (mysqli_error($mysqli));
                        $no=1;
                        while ($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nm_siswa']; ?></td>
                            <td><?php echo $data['nm_pelanggaran']; ?></td>
                            <td><?php echo $data['nm_sanksi']; ?></td>
                            <td><?php echo $data['poin']; ?></td>
                            <td><?php echo $data['tgl_kejadian']; ?></td>
                            <td><?php echo $data['ket']; ?></td>
                            <td>
								<a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=del_pel&kdgr=<?php echo $data['id_pelanggaran']; ?>">
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

