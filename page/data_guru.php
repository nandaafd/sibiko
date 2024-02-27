<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Guru</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b><i class="fa fa-table"></i> HIMPUNAN DATA GURU</b>
                        </div>
                           <div class="table-responsive">                    
                        <div class="panel-body">
                            <p align="left">
                                <button type="" class="btn btn-danger" data-toggle="modal" data-target="#largeModal"> <i class="fa fa-edit"></i> Tambah Data</button>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>Nama</th>
                                            <th style="width: 25%;">Alamat</th>
                                            <th>Telp</th>
                                            <th>Foto</th>
                                            <th>Action</th>
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
                                            <td><?php echo $data['alamat_guru']; ?></td>
                                            <td><?php echo $data['telpon_guru']; ?></td>
                                            <td> 
                                                
                                                <?php 
                                                    if ($data['photo'] != null) {
                                                ?>
                                                <img src="../photo_guru/<?php echo $data ['photo'];?>" onerror="this.src='../photo_guru/nopic.jpg'" height="40" width="40" align="middle" style="border-radius: 100%;">
                                                <?php
                                                    }else {
                                                ?>
                                                <img src="../photo_guru/nopic.jpg" onerror="this.src='../photo_guru/nopic.jpg'" height="40" width="40" align="middle" style="border-radius: 100%;">
                                                <?php
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" data-toggle="modal" class="btn btn-info" data-target="#edit<?php echo $data['id_guru'];?>"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('Yakin ingin hapus data ini ??')" class="btn btn-danger" href="?page=admin&action=del_guru&kdgr=<?php echo $data['id_guru']; ?>"><i class="fa fa-times"></i></a>
                                                    <a href="?page=guru&action=detail&kdguru=<?php echo $data['id_guru']; ?> "><button type="" class="btn btn-success"><i class="fa fa-search"></i></button></a>
                                                </div>

<!--- Modal EDIT-->
<div class="modal fade" id="edit<?php echo $data['id_guru'];?>" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="defaultModalLabel"><i class="fa fa-edit"></i> Edit Data Guru</h4>
</div>
    <form action="" method="post">

<div class="modal-body">
<div class="row clearfix">

    <!-- isi-->

<table class="table table-striped table-hover">
<tr>
    <th>Nip</th>
    <th>:</th>
    <th>
        <input type="hidden" name="id_guru" class="form-control" value="<?php echo $data['id_guru'];?>"/>
     <input type="text" name="nip" class="form-control" value="<?php echo $data['nip'];?>"/></th>
    <th></th>
    <th></th>
    <th></th>
</tr>
  <tr>
    <th>Nama Guru</th>
    <th>:</th>
    <th> <input type="text" name="nama_guru" class="form-control" value="<?php echo $data['nama_guru'];?>"/></th>
     <th>Gelar</th>
    <th>:</th>
    <th> <input type="text" name="gelar" class="form-control" value="<?php echo $data['gelar'];?>"/></th>
</tr>
  <tr>
    <th>Tempat Lahir</th>
    <th>:</th>
    <th> <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir'];?>"/></th>
    <th>Tanggal Lahir</th>
    <th>:</th>
    <th> <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir'];?>"/></th>
    <th></th>
    <th></th>
</tr>
  <tr>
    <th>Jenis Kelamin</th>
    <th>:</th>
    <th>
    <select name="kelamin"  class="form-control">
    <option value="laki-laki">Laki-laki</option>
    <option value="perempuan">Perempuan</option>
    </select>  </th>
    <th>Agama</th>
    <th>:</th>
    <th> 
        <select name="agama"  class="form-control">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="budha">Budha</option>
        <option value="konghuchu">Konghuchu</option>
        </select>  
    </th>
</tr>
</tr>
  <tr>
    <th>Telepon</th>
    <th>:</th>
    <th> <input type="text" name="telpon_guru" class="form-control" value="<?php echo $data['telpon_guru'];?>"/></th>
    <th>Email</th>
    <th>:</th>
    <th> <input type="text" name="email" class="form-control" value="<?php echo $data['email'];?>"/></th>
    <th></th>
    <th></th>
</tr>
  <tr>
    <th>Username</th>
    <th>:</th>
    <th> <input type="text" name="username" class="form-control" value="<?php echo $data['username'];?>"/></th>
    <th>Password</th>
    <th>:</th>
    <th> <input type="text" name="password" class="form-control" value="<?php echo $data['password'];?>"/></th>
    <th></th>
    <th></th>
</tr>


</table>



   

        
     


</div>
</div>

<div class="modal-footer">
<input type="submit" name="update" class="btn btn-info" value="UPDATE">
<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
</div>
</form>
<?php 
 // Script update data
    if (isset($_REQUEST['update'])) {
        $id_guru = $_REQUEST['id_guru'];  
        $nama_guru = $_REQUEST['nama_guru'];  
        $nip = $_REQUEST['nip'];  
        $kelamin = $_REQUEST['kelamin'];
        $telpon_guru = $_REQUEST['telpon_guru'];  
        $username = $_REQUEST['username'];
        $password=$_REQUEST['password']; 
        $gelar = $_REQUEST['gelar'];
        $tempat_lahir = $_REQUEST['tempat_lahir'];  
        $tanggal_lahir = $_REQUEST['tanggal_lahir'];        
        $agama = $_REQUEST['agama']; 
        $email = $_REQUEST['email'];  

        mysqli_query($mysqli,"UPDATE data_guru SET 
    nama_guru='$nama_guru',nip='$nip',kelamin='$kelamin',telpon_guru='$telpon_guru',username='$username',password='$password',gelar='$gelar',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',agama='$agama',email='$email'
    WHERE id_guru='$id_guru'") or die(mysqli_error($mysqli));
          ?>
<script>
    alert(" Sukses !.. Data berhasil Di Ubah!")
    window.location.href="?page=admin";     
</script>
<?php 
}
 ?>




</div>
</div>
</div>
<!-- Akhir Modal Edit-->





                                                
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








            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel"> Inputan Data Guru</h4>
                        </div>
                        <div class="modal-body">
                            

                                        <div class="row">
                                        <div class="col-lg-12">
                                        <!-- Form Elements -->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
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
                           
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                        </div>

                    </div>
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
$sql=mysqli_query($mysqli,"insert into data_guru values ('$id_guru','$nama_guru','$nip','$kelamin','$alamat_guru','$telpon_guru' ,'$username','$password','$gelar','$tempat_lahir','$tanggal_lahir','$agama','$email','$nama_gambar')") or die (mysqli_error($mysqli));

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
