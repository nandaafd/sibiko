<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Siswa</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b><i class="fa fa-table"></i> HIMPUNAN DATA SISWA</b>
                        </div>
                           <div class="table-responsive">                    
                        <div class="panel-body">
                            <p align="left">
                                <a href="?page=siswa"><button type="" class="btn btn-info"> <i class="fa fa-edit"></i> Tambah Data</button></a>
                            </p>
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
                                            <th>Action</th>
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
                                            <td><a style=" color: red;" href="?page=siswa&action=detail&kdsis=<?php echo $data['id_siswa']; ?>"><?php echo $data['nis']; ?> </a></td>
                                            <td><?php echo $data['nama_siswa']; ?></td>
                                            <td><?php echo $data['tpl']; ?>,<?php echo $data['tgl']; ?></td>
                                            <td><?php echo $data['alamat_siswa']; ?></td>
                                            <td><?php echo $data['telpon_siswa']; ?></td>
                                            <td>
                                                <a href="?page=siswa&action=detail&kdsis=<?php echo $data['id_siswa']; ?> "><button type="" class="btn btn-success"><i class="fa fa-search"></i></button></a>
                                                <a href="?page=siswa&action=edit&kdsis=<?php echo $data['id_siswa']; ?> "><button type="" class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                <a href="?page=siswa&action=del&kdsis=<?php echo $data['id_siswa']; ?> "><button type="" class="btn btn-danger"><i class="fa fa-times"></i></button></a>                                                
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

