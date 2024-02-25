<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Detail Sosiometri</font></h1>
                </div>

                	<?php
include '../koneksi/-koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($mysqli,"select * from setup_sosiometri where id_sosiometri ='$kdsis'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql);
?>
<div class="row">
<div class="col-md-12">
<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#f50057; color: white;">
    Detail Sosiometri Siswa
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                    <tr>
                        <th>Nama Siswa</th>
                        <th>:</th>
                        <th><?php echo $data['nama_siswa']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Pertanyaan 1</th>
                        <th>:</th>
                        <th>
                          <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               Tuliskan nama teman sekelasmu yang paling kamu senangi dalam belajar ?
                            </div>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th></th>
                        <th></th>
                        <th>
                        <b style="color: red;">Jawaban !!</b> <br>
                        A. <?php echo $data['teman1']; ?> <br>
                        B. <?php echo $data['teman2']; ?> <br>
                        <code>
                        	Alasan : " <?php echo $data['alasan_teman']; ?> "
                        </code>
                          </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Pertanyaan 2</th>
                        <th>:</th>
                        <th>
                         <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Tuliskan nama teman sekelasmu yang paling kamu senangi dalam bermain ?
                            </div>

                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th></th>
                        <th></th>
                           <th>
                           <b style="color: red;">Jawaban !!</b> <br>
                           A. <?php echo $data['bermain1']; ?> <br>
                        B. <?php echo $data['bermain2']; ?> <br>
                        <code>
                        	Alasan : " <?php echo $data['alasan_bermain']; ?> "
                        </code>
                          </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                       <tr>
                        <th>Pertanyaan 3</th>
                        <th>:</th>
                        <th>
                         <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                          

                        Tuliskan nama teman sekelasmu yang tidak kamu sukai ?
                            </div></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th></th>
                        <th></th>
                           <th>
                           <b style="color: red;">Jawaban !!</b> <br>
                           A. <?php echo $data['tidaksuka1']; ?> <br>
                        B. <?php echo $data['tidaksuka2']; ?> <br>
                        <code>
                        	Alasan : " <?php echo $data['alasan_tidaksuka']; ?> "
                        </code>
                          </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                       <tr>
                        <th>Pertanyaan 4</th>
                        <th>:</th>
                        <th>
                         <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Tuliskan nama teman yang menyenangkan untuk diajak kerjasama ?                        

                            </div></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th></th>
                        <th></th>
                           <th>
                           <b style="color: red;">Jawaban !!</b> <br>
                           A. <?php echo $data['menyenangkan1']; ?> <br>
                        B. <?php echo $data['menyenangkan2']; ?> <br>
                        <code>
                        	Alasan : " <?php echo $data['alasan_menyenangkan']; ?> "
                        </code>
                          </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                       <tr>
                        <th>Pertanyaan 5</th>
                        <th>:</th>
                        <th>
                         <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Tuliskan nama temanmu yang selalu siap membantu dan memberi dukungan?
                            </div></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th></th>
                        <th></th>
                           <th>
                           <b style="color: red;">Jawaban !!</b> <br>
                           A. <?php echo $data['dukungan1']; ?> <br>
                        B. <?php echo $data['dukungan2']; ?> <br>
                        <code>
                        	Alasan : " <?php echo $data['alasan_dukungan']; ?> "
                        </code>
                          </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>                  
                    

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
