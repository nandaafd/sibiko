<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057"> Laporan Data Siswa</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b><i class="fa fa-print"></i> LAPORAN HIMPUNAN DATA SISWA</b>                            
                        </div>
                           <div class="table-responsive">                    
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Email</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysqli_query($mysqli,"select * from data_siswa") or die (mysqli_error($mysqli));
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nis']; ?></td>
                                            <td><?php echo $data['nama_siswa']; ?></td>
                                            <td><?php echo $data['tpl']; ?>,<?php echo $data['tgl']; ?></td>
                                            <td><?php echo $data['alamat_siswa']; ?></td>
                                            <td><?php echo $data['telpon_siswa']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td>
                                            <a href="../Laporan/detail_siswa.php?kdsis=<?php echo $data['id_siswa']; ?> "><button type="" class="btn btn-danger"><i class="fa fa-print"></i> Print</button></a>                                               
                                            </td>
                                        </tr>
                                        <?php } ?>
                                      
                                    </tbody>
                                </table>                                
                            </div>
                             <center>
                                 <a class="btn btn-danger" href="../Laporan/data_siswa.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Live Print</a>
                                 <a class="btn btn-success" href="../Laporan/data_siswaex.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Export Excell</a>
                            
                             </center>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

