<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Laporan Data Guru</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b><i class="fa fa-print"></i> LAPORAN HIMPUNAN DATA GURU</b>
                        </div>
                           <div class="table-responsive">                    
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysqli_query($mysqli,"select * from data_guru") or die (mysqli_error($mysqli));
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nip']; ?></td>
                                            <td><?php echo $data['nama_guru']; ?>, <?php echo $data['gelar']; ?></td>
                                            <td><?php echo $data['tempat_lahir']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
                                            <td><?php echo $data['kelamin']; ?></td>
                                            <td><?php echo $data['alamat_guru']; ?></td>
                                            <td><?php echo $data['telpon_guru']; ?></td>
                                            
                                            <td>
                                                  <a href="../Laporan/detail_guru.php?kdsis=<?php echo $data['id_guru']; ?> "><button type="" class="btn btn-info"><i class="fa fa-print"></i> Print</button></a> 
                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                             <center>
                                 <a class="btn btn-danger" href="../Laporan/data_guru.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Live Print</a>
                                 <a class="btn btn-success" href="../Laporan/data_guruex.php" style="font-size: 20px;"><i class="fa fa-print" style="font-size: 25px;"></i> Export Excell</a>
                            
                             </center>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>




            </div>
        </div>
