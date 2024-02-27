<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Perijinan</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b><i class="fa fa-table"></i> HIMPUNAN DATA PERIJINAN SISWA</b>
                        </div>
                           <div class="table-responsive">                    
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi/-koneksi.php';
                                        $sql = mysqli_query($mysqli,"select * from tb_izin") or die (mysqli_error($mysqli));
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['p_ijin']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['kelas']; ?></td>
                                            <td><?php echo $data['hari']; ?></td>
                                            <td><?php echo $data['tanggal']; ?></td>
                                            <td><?php echo $data['untuk']; ?></td>
                                            <td><?php echo $data['alasan']; ?></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#edit_perijinan<?php echo $data['no'];?>" data-id="<?php echo $data['no']; ?>" id="btn-edit-perijinan" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                                <a href="?page=admin&action=del_perijinan&no=<?php echo $data['no']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><button type="" class="btn btn-danger"><i class="fa fa-times"></i></button></a>                                                
                                            </td>
                                        </tr>
                                        <div class="modal fade" tabindex="-1" id="edit_perijinan<?php echo $data['no'];?>">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-edit"></i> Edit Data Perijinan</h5>
                                                </div>
                                                <form action="" method="post">
                                                <div class="modal-body">
                                                    <div class="px-3">
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
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" name="update" class="btn btn-info" value="UPDATE">
                                                </div>
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
                                                            window.location.href="?page=admin&action=data_perijinan";     
                                                        </script>
                                                <?php
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            </div>

                                        <?php } ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

            <!-- modal -->


