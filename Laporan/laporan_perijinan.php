<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057"> Laporan Data Perijinan</font></h1>
</div>
<!-- end  page header -->


<div class="row">
<div class="col-lg-12">
	<!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#f50057;color: white;">
        <b><i class="fa fa-print"></i> LAPORAN DATA PERIZINAN </b>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
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
                            <th>Print</th>
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
                                <a href="../Laporan/detail_izin_siswa.php?kdsis=<?php echo $data['no']; ?> "><button type="" class="btn btn-info"><i class="fa fa-print"></i> Print</button></a> 
                            </td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
        <center>
        <a class="btn btn-danger" href="../Laporan/data_perijinan.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Live Print</a>
        <a class="btn btn-success" href="../Laporan/data_perijinanex.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Export Excell</a>
        </center>
            
        </div>
    </div>
    <!--End Advanced Tables -->
    
</div>
</div>

