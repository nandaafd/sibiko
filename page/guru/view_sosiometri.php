<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Sosiometri</font></h1>
</div>
<!-- end  page header -->


<div class="row">
<div class="col-lg-12">
	<!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#f50057;color: white;">
        <b><i class="fa fa-table"></i> DAFTAR DATA SOSIOMETRI </b>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table" id="dataTables-example">
                    <thead>
                         <tr>
                            <th>Nama Siswa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                        include '../koneksi/-koneksi.php';
                        $sql = mysqli_query($mysqli, "select * from setup_sosiometri") or die (mysqli_error($mysqli));
                        $no=1;
                        while ($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td>
                            	<a href="?page=guru&action=view_sos&kdsis=<?php echo $data['id_sosiometri'];?>" class="btn btn-lg btn-info btn-block" width="200px"><?php echo $data['nama_siswa']; ?></a>
                            	<!--<a href="" style="font-size: 23px;"><code><?php echo $data['nama_siswa']; ?></code></a>--> 
                            </td>
                            <td><a href="?page=guru&action=del_sos&kdsis=<?php echo $data['id_sosiometri']; ?>">
                                <button class="btn btn-danger"><i class="fa fa-times"></i> Hapus</button>
                            </a> </td>
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

