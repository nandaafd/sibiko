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
<i class="fa fa-users"></i> HIMPUNAN DAT GURU
</div>

<div class="row">
  <div class="col-xs-12 col-md-12">
    <div class="panel panel-danger">
<div class="panel-heading" style="background-color: #f50057; color:white;">
    <center><b>INPUT DATA GURU</b></center>
</div>
<div class="panel-body">
	<div class="col-lg-12">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="col-lg-12">                        
                                                        <div class="form-group">
                                                          <label>NIP</label>
                                                          <input type="text" class="form-control" id="nip" name="nip"/>
                                                        </div>
                                                    </div>
                                                
                                                      
                                                        <div class="col-lg-6">
                                                        <div class="form-group">
                                                          <label>Nama Guru </label>
                                                          <input type="text" class="form-control" id="nama_guru" name="nama_guru" />
                                                        </div>
                                                    </div>
                                              
                                                        
                                                        <div class="col-lg-6">  
                                                        <div class="form-group">
                                                          <label>Gelar </label>
                                                          <input type="text" class="form-control" id="gelar" name="gelar"/>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-6">  
                                                        <div class="form-group">
                                                          <label>Tempat Lahir </label>
                                                          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" />
                                                        </div>
                                                    </div>
                                                        <div class="col-lg-6">  
                                                        <div class="form-group">
                                                          <label>Tanggal Lahir </label>
                                                          <input type="date" name="tanggal_lahir" class="form-control"/>                 
                                                        </div>
                                                    </div>
                                                        <div class="col-lg-6">  
                                                        <div class="form-group">
                                                          <label>Agama</label>
                                                          <select name="agama"  class="form-control">
                                                              <option value="islam">Islam</option>
                                                              <option value="kristen">Kristen</option>
                                                              <option value="katolik">Katolik</option>
                                                              <option value="budha">Budha</option>
                                                              <option value="konghuchu">Konghuchu</option>
                                                            </select>                      
                                                        </div>
                                                    </div>

                                                        
                                                        <div class="col-lg-6">  
                                                        <div class="form-group">
                                                          <label>Kelamin</label>
                                                          <select name="kelamin"  class="form-control">
                                                              <option value="laki-laki">Laki-laki</option>
                                                              <option value="perempuan">Perempuan</option>
                                                            </select>                      
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">                        
                                                        <div class="form-group">
                                                          <label>Alamat</label>

                                                          <textarea id="alamat_guru" name="alamat_guru" cols="" rows="" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                        
                                                        <div class="col-lg-6">  
                                                        <div class="form-group">
                                                          <label>Telpon </label>
                                                          <input type="text" class="form-control" id="telpon_guru" name="telpon_guru" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">  
                                                        
                                                        <div class="form-group">
                                                          <label>Email </label>
                                                          <input type="text" class="form-control" id="email" name="email"/>
                                                        </div>
                                                    </div>
                                                        
                                                        <div class="col-lg-12"> 
                                                        <div class="form-group">
                                                          <label>Photo</label>
                                                            <input type="file" name="photo" size="30"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">                         
                                                        <div class="form-group">
                                                          <label>Username</label>
                                                          <input type="text" class="form-control" id="username" name="username"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6"> 
                                                        
                                                        <div class="form-group">
                                                          <label>Password</label>
                                                          <input type="password" class="form-control" id="password" name="password" /> *
                                                        </div>
                                                    </div>
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
$id_guru     = @$_POST['id_guru'];
$nama_guru    = @$_POST['nama_guru'];
$nip      = @$_POST['nip'];
$kelamin = @$_POST['kelamin'];
$alamat_guru = @$_POST['alamat_guru'];
$telpon_guru = @$_POST['telpon_guru'];
$username = @$_POST['username'];
$password   = @$_POST['password'];
$gelar  = @$_POST['gelar'];
$tempat_lahir = @$_POST['tempat_lahir'];
$tanggal_lahir = @$_POST['tanggal_lahir'];
$agama = @$_POST['agama'];
$email = @$_POST['email'];

$sumber = @$_FILES['photo']['tmp_name'];
$target = '../photo_guru/';
$nama_gambar = @$_FILES['photo']['name'];

$simpan_data = @$_POST['simpan'];
if ($simpan_data) {

if ($nip == "" || $nama_guru == "" || $kelamin == "" || $tempat_lahir == "" || $tanggal_lahir== "" || $agama== "" || $gelar== "" || $telpon_guru== "" ||$email== "" ||$nama_gambar == ""){

?>
<script>alert("Inputan tidak boleh kosong !!");</script>
<?php                   

} else{

$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if ($pindah) {
$sql=mysql_query("insert into data_guru values ('$id_guru','$nama_guru','$nip','$kelamin','$alamat_guru','$telpon_guru' ,'$username','$password','$gelar','$tempat_lahir','$tanggal_lahir','$agama','$email','$nama_gambar')") or die (mysql_error());

?>
<script>
alert(" Sukses !Data berhasil disimpan!")

window.location.href="?page=admin";

</script>
<?php
} else{

?><script>
alert("Oops...gambar gagal disimpan  !!");</script>         

<?php
}

}

} 

?>
            </div>



</div>
</div>
      
  </div>

</<div>
	
</div>