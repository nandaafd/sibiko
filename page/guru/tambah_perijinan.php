<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Input Data Guru</font></h1>
                </div>
                 <!-- end  page header -->

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->


<div class="col-lg-12">

<!--Collapsible Accordion Panel Group   -->
<div class="panel panel-default">
<div class="panel-heading">
<i class="fa fa-users"></i> HIMPUNAN DATA PERIJINAN
</div>

<div class="row">
  <div class="col-xs-12 col-md-12">
    <div class="panel panel-danger">
<div class="panel-heading" style="background-color: #f50057; color:white;">
    <center><b>INPUT DATA PERIJINAN</b></center>
</div>
<div class="panel-body">
	<div class="col-lg-12">
          <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                  <input type="hidden" name="no" class="form-control"/>
                  <label for="exampleInputEmail1" class="form-label">Pemberi Ijin</label>
                  <input type="text" class="form-control" name="p_ijin">
              </div>
              <br/>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                  <input type="text" class="form-control" name="nama">
              </div>
              <br/>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kelas</label>
                  <input type="text" class="form-control" name="kelas">
              </div>
              <br/>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Hari</label>
                  <input type="text" class="form-control" name="hari">
              </div>
              <br/>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
              </div>
              <br/>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Untuk</label>
                  <select name="untuk"  class="form-control">
                      <option value="Pulang">Pulang</option>
                      <option value="Terlambat">Terlambat</option>
                      <option value="Keluar">Keluar</option>
                  </select>
              </div>
              <br/>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alasan</label>
                  <input type="text" class="form-control" name="alasan">
              </div>
              <br>
              <center>
                  <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
                  <input type="reset" value="RESET" class="btn btn-danger">
              </center>

          </form>
                  
                  <!--
                  <i>
                  <p> * Data induk tidak disarankan untuk dihapus jika sistem sudah berjalan. 
                  <br>* Disarankan hanya untuk update atau insert. 
                  <br>* Karena Data yang lama akan menjadi history
                  </p>
                  </i>
                  <br>
                  -->
                  
                  </div>
              </div>
          </div>
      </div>
        <!-- End Form Elements -->
      </div>
      </div>
    
      </form>

    </div>
               
            
<?php 
  include '../koneksi/-koneksi.php';
  $p_ijin = @$_POST['p_ijin'];
  $nama = @$_POST['nama'];
  $kelas = @$_POST['kelas'];
  $hari = @$_POST['hari'];
  $tanggal = @$_POST['tanggal'];
  $untuk = @$_POST['untuk'];
  $alasan = @$_POST['alasan'];

  $simpan_data = @$_POST['simpan'];
  if ($simpan_data) {

  if ($p_ijin == "" || $nama == "" || $kelas == "" || $hari == "" || $tanggal== "" || $untuk== "" || $alasan== ""){

?>
  <script>alert("Inputan tidak boleh kosong !!");</script>
<?php                   

} else{

  $sql=mysqli_query($mysqli,"insert into tb_izin values ('','$p_ijin','$nama','$kelas','$hari','$tanggal','$untuk' ,'$alasan')") or die (mysqli_error($mysqli));

?>
<script>
alert(" Sukses !Data berhasil disimpan!")

window.location.href="?page=guru&action=view_perijinan";

</script>

<?php
}

}


?>
            </div>



</div>
</div>
      
  </div>

</<div>
	
</div>