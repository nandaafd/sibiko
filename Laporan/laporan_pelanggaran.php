<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057"> Laporan Data Pelanggaran</font></h1>
</div>
<!-- end  page header -->


<div class="row">
<div class="col-lg-12">
	<!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#f50057;color: white;">
        <b><i class="fa fa-print"></i> LAPORAN DATA PELANGGARAN </b>
        </div>
        <div class="panel-body">
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
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
        <center>
              <a class="btn btn-info" href="../Laporan/data_pelangaran_pdf.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Cetak PDF</a>
        <a class="btn btn-danger" href="../Laporan/data_pelanggaran.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Live Print</a>
        <a class="btn btn-success" href="../Laporan/data_pelanggaranex.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Export Excell</a>
        </center>
            
        </div>
    </div>
    <!--End Advanced Tables -->
    
</div>
</div>

