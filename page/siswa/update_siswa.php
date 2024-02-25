<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Update Induk Siswa</font></h1>
</div>
<!-- end  page header -->
</div>
<div class="row">
                <div class="col-lg-12">
<?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($mysqli,"select * from data_siswa where id_siswa = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
?>
                 
                    <form action="" method="post">
                  
                    <!--Collapsible Accordion Panel Group   -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Himpunan Data Induk Siswa
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-danger">
                                    <div class="panel-heading" style="background-color: #f50057;">
                                        <h4 class="panel-title">
                                            <a style="color: white; text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <i class="fa fa-user"></i> Data Pribadi</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="col-lg-12">

                    <!-- Form Elements -->

       
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>1. NIS</label>
                                            <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'] ?>">
                                            <input class="form-control" type="text" name="nis" value="<?php echo $data['nis'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>2. Nama Lengkap</label>
                                            <input class="form-control" type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>">
                                        </div>
                                           <div class="form-group">
                                            <label>3. Nama Panggilan</label>
                                            <input class="form-control" type="text" name="namap" value="<?php echo $data['namap'] ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>4. Jenis Kelamin</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="kelamin" id="optionsRadiosInline1" value="Laki-laki" checked> Laki-laki
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="kelamin" id="optionsRadiosInline2" value="Perempuan">Perempuan
                                        </label>
                                    </div>
                                       <div class="form-group">
                                            <label>5. Tempat Tanggal Lahir</label>
                                            <input class="form-control" type="text" name="tpl" value="<?php echo $data['tpl'] ?>"> <br>
                                            <input class="form-control" type="date" name="tgl" value="<?php echo $data['tgl'] ?>">                                           
                                        </div>
                                         <div class="form-group">
                                            <label>6. Agama</label>
                                                <select name="agama"  class="form-control">
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="budha">Budha</option>
                                                <option value="konghuchu">Konghuchu</option>
                                                </select>                                        
                                        </div>
                                          <div class="form-group">
                                            <label>7. Kewarganegaraan</label>
                                            <input class="form-control" type="text" name="warga" value="<?php echo $data['warga'] ?>">
                                        </div>
                                          <div class="form-group">
                                            <label>8. Suku Bangsa</label>
                                            <input class="form-control" type="text" name="suku" value="<?php echo $data['suku'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>9. Diterima Tanggal</label>
                                            <input class="form-control" type="date" name="t_skl" value="<?php echo $data['t_skl'] ?>">
                                        </div>
                                          <div class="form-group">
                                            <label>10. Pindah Dari</label>
                                            <input class="form-control" type="text" name="pindahan" value="<?php echo $data['pindahan'] ?>">
                                        </div>
                                           <div class="form-group">
                                            <label>11. Anak Ke</label>
                                            <input class="form-control" type="number" name="anakke" value="<?php echo $data['anakke'] ?>">
                                        </div>
                                              <div class="form-group">
                                            <label>12. Bahasa Sehari-hari</label>
                                            <input class="form-control" type="text" name="bhs" value="<?php echo $data['bhs'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>13.  Alamat , Telp, KodePos</label>
                                            <textarea name="alamat_siswa" class="form-control" rows="3"><?php echo $data['alamat_siswa'] ?></textarea>
                                        </div> 
                                       
                                  
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>14. Siswa Tinggal Dengan</label>
                                            <input class="form-control" type="text" name="tinggal_siswa" value="<?php echo $data['tinggal_siswa'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>15. Jarak Rumah Ke Sekolah</label>
                                            <input class="form-control" type="text" name="jarak" value="<?php echo $data['jarak'] ?>">
                                        </div>
                                           <div class="form-group">
                                            <label>16. Berangkat Sekolah Menggunakan</label>
                                            <input class="form-control" type="text" name="berangkat" value="<?php echo $data['berangkat'] ?>">
                                        </div>
                                            <div class="form-group">
                                            <label>17. Kendaraan Pribadi yang dimiliki</label>
                                            <input class="form-control" type="text" name="kendaraan" value="<?php echo $data['kendaraan'] ?>">
                                        </div>
                                       <div class="form-group">
                                            <label>18. Kondisi Penerangan Rumah</label>
                                            <input class="form-control" type="text" name="kondisilmp" value="<?php echo $data['kondisilmp'] ?>">                                       
                                        </div>
                                         <div class="form-group">
                                            <label>19. Kondisi Tempat Tinggal</label>
                                            <input class="form-control" type="text" name="kondisirmh" value="<?php echo $data['kondisirmh']; ?>">                                       
                                        </div>
                                          <div class="form-group">
                                            <label>20. Kondisi Ruang Tidur</label>
                                            <input class="form-control" type="text" name="ruangtidur" value="<?php echo $data['ruangtidur']; ?>">                                       
                                        </div>                                        
                                          <div class="form-group">
                                            <label>21. Lingkungan Tempat Tinggal</label>
                                            <input class="form-control" type="text" name="lingkungan" value="<?php echo $data['lingkungan'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>22. Telpon Siswa</label>
                                            <input class="form-control" type="number" name="telpon_siswa" value="<?php echo $data['telpon_siswa'] ?>">
                                        </div> 
                                         <div class="form-group">
                                            <label>23. E-Mail</label>
                                            <input class="form-control" type="email" name="email" value="<?php echo $data['email'] ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>24. Username</label>
                                            <input class="form-control" type="text" name="username" value="<?php echo $data['username'] ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>25. Password</label>
                                            <input class="form-control" type="text" name="password" value="<?php echo $data['password'] ?>">
                                        </div>
                                          
                                    
                                </div>
                    
                   
                     <!-- End Form Elements -->


                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading" style="background-color: #f50057;">
                                        <h4 class="panel-title">
                                            <a style="color: white;text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-users"></i> Data Orang </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                              <!-- Form Elements --> 
                                <?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($mysqli,"select * from data_orangtua where id_orangtua = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
?>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>1. Nama Ayah</label>
                                            <input class="form-control" type="text" name="ayah" value="<?php echo $data['ayah'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>2. Tempat Lahir Ayah</label>
                                            <input class="form-control" type="text" name="tl" value="<?php echo $data['tl'] ?>">
                                        </div>  
                                         <div class="form-group">
                                            <label>3.Tanggal Lahir Ayah</label>
                                            <input class="form-control" type="date" name="tgl_a" value="<?php echo $data['tgl_a'] ?>">
                                        </div>                                         

                                            <div class="form-group">
                                            <label>4. Agama Ayah</label>
                                                <select name="agama"  class="form-control">
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="budha">Budha</option>
                                                <option value="konghuchu">Konghuchu</option>
                                                </select>
                                            </select>                                         
                                        </div>
                                        <div class="form-group">
                                            <label>5. Pendidikan Terakhir Ayah</label>
                                              <select class="form-control" name="pddk_a">
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP Sederajat</option>
                                                <option value="SMA">SMA/MA Sederajat</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>                                         
                                        </div>
                                        <div class="form-group">
                                        <label>6. Status Dalam Keluarga</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status_keluarga" id="optionsRadiosInline1" value="Ayah" checked> Ayah
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status_keluarga" id="optionsRadiosInline2" value="Ibu">Ibu
                                        </label>
                                         <label class="radio-inline">
                                            <input type="radio" name="status_keluarga" id="optionsRadiosInline2" value="Anak">Anak
                                        </label>
                                    </div>
                                    <div class="form-group">
                                            <label>7.Pekerjaan Ayah</label>
                                            <input class="form-control" type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                                        </div> 
                                           <div class="form-group">
                                            <label>8.Penghasilan Ayah</label>
                                            <input class="form-control" type="number" name="penghasilan_a" value="<?php echo $data['penghasilan_i'] ?>">
                                        </div> 
                                        <div class="form-group">
                                            <label>9.Alamat Ayah</label>
                                            <textarea name="alamat_a" class="form-control" rows="3"><?php echo $data['alamat_a'] ?></textarea>
                                        </div> 
                                           <div class="form-group">
                                            <label>10.Telpon Ayah</label>
                                            <input class="form-control" type="text" name="telpon_a" value="<?php echo $data['telpon_a'] ?>">
                                        </div> 
                                       
                                  
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>11. Nama Ibu</label>
                                            <input class="form-control" type="text" name="ibu" value="<?php echo $data['ibu'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>12. Tempat Lahir Ibu</label>
                                            <input class="form-control" type="text" name="tl_i" value="<?php echo $data['tl_i'] ?>">
                                        </div>  
                                         <div class="form-group">
                                            <label>13.Tanggal Lahir Ibu</label>
                                            <input class="form-control" type="date" name="tgl_i" value="<?php echo $data['tgl_i'] ?>">
                                        </div>                                         

                                            <div class="form-group">
                                            <label>14. Agama Ibu</label>
                                              <select name="agma_i"  class="form-control">
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="budha">Budha</option>
                                                <option value="konghuchu">Konghuchu</option>
                                                </select>
                                            </select>                                         
                                        </div>
                                        <div class="form-group">
                                            <label>15. Pendidikan Terakhir Ibu</label>
                                            <select class="form-control" name="pddk_i">
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP Sederajat</option>
                                                <option value="SMA">SMA/MA Sederajat</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>                                         
                                        </div>                                        
                                    <div class="form-group">
                                            <label>17.Pekerjaan Ibu</label>
                                            <input class="form-control" type="text" name="pekerjaan_i" value="<?php echo $data['pekerjaan_i'] ?>">
                                        </div> 
                                           <div class="form-group">
                                            <label>18.Penghasilan Ibu</label>
                                            <input class="form-control" type="number" name="penghasilan_i" value="<?php echo $data['penghasilan_i'] ?>">
                                        </div> 
                                        <div class="form-group">
                                            <label>19.  Alamat Ibu</label>
                                            <textarea name="alamat_i" class="form-control" rows="3"><?php echo $data['alamat_i'] ?></textarea>
                                        </div> 
                                           <div class="form-group">
                                            <label>20.Telpon Ibu</label>
                                            <input class="form-control" type="text" name="telpon_i" value="<?php echo $data['telpon_i'] ?>">
                                        </div> 
                                       
                                    
                                </div>
                    
                   
                     <!-- End Form Elements -->


                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading" style="background-color: #f50057;">
                                        <h4 class="panel-title">
                                            <a style="color: white; text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-users"></i> Data Saudara</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                <?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($mysqli, "select * from data_saudara where id_saudara = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
?>
                                  <table class="table table-striped">
                                                <b>Data Saudara Saudara</b>
                                                 <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Umur</th>
                                                        <th>Gender</th>
                                                        <th>Pendidikan</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Agama</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><input class="form-control" type="text" name="nm" value="<?php echo $data['nm'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="umur" value="<?php echo $data['umur'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="jk" value="<?php echo $data['jk'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="pddk" value="<?php echo $data['pddk'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="krj" value="<?php echo $data['krj'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="agm" value="<?php echo $data['agm'] ?>"></td>
                                                    </tr>
                                                     <tr>
                                                        <td>2</td>
                                                        <td><input class="form-control" type="text" name="nm1" value="<?php echo $data['nm1'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="umur1" value="<?php echo $data['nm1'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="jk1" value="<?php echo $data['jk1'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="pddk1" value="<?php echo $data['pddk1'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="krj1" value="<?php echo $data['krj1'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="agm1" value="<?php echo $data['krj1'] ?>"></td>
                                                    </tr>
                                                     <tr>
                                                        <td>3</td>
                                                        <td><input class="form-control" type="text" name="nm2" value="<?php echo $data['nm2'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="umur2" value="<?php echo $data['umur2'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="jk2" value="<?php echo $data['jk2'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="pddk2" value="<?php echo $data['pddk2'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="krj2" value="<?php echo $data['krj2'] ?>"></td>
                                                        <td><input class="form-control" type="text" name="agm2" value="<?php echo $data['agm2'] ?>"></td>
                                                    </tr>
                                                </tbody>  
                                            </table>


                           

                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <br>

                         <center>
                            <input type="submit" name="edit" class="btn btn-info" value="Simpan Perubahan">
                         </center>
                        </div>
                    </div>
                     <!--End Collapsible Accordion Panel Group   -->
                       </form>
                       
                       <!-- UPDATE DATA-->
<?php 
include '../koneksi/-koneksi.php';
if (@$_POST['edit']) {
    // adat siswa
$id_siswa = @$_POST['id_siswa'];
@$nis = mysqli_real_escape_string($mysqli,$_POST['nis']);
@$nama_siswa = mysqli_real_escape_string($mysqli, $_POST['nama_siswa']);
@$namap = mysqli_real_escape_string($mysqli,$_POST['namap']);
@$kelamin = mysqli_real_escape_string($mysqli, $_POST['kelamin']);
@$tpl = mysqli_real_escape_string($mysqli,$_POST['tpl']);
@$tgl = mysqli_real_escape_string($mysqli,$_POST['tgl']);
@$agama = mysqli_real_escape_string($mysqli,$_POST['agama']);
@$warga = mysqli_real_escape_string($mysqli,$_POST['warga']);
@$suku = mysqli_real_escape_string($mysqli,$_POST['suku']);
@$t_skl = mysqli_real_escape_string($mysqli,$_POST['t_skl']);
@$pindahan = mysqli_real_escape_string($mysqli,$_POST['pindahan']);
@$anakke = mysqli_real_escape_string($mysqli,$_POST['anakke']);
@$bhs = mysqli_real_escape_string($mysqli,$_POST['bhs']);
@$alamat_siswa = mysqli_real_escape_string($mysqli, $_POST['alamat_siswa']);
@$telpon_siswa = mysqli_real_escape_string($mysqli, $_POST['telpon_siswa']);
@$email = mysqli_real_escape_string($mysqli,$_POST['email']);
@$username = mysqli_real_escape_string($mysqli,$_POST['username']);
@$password = mysqli_real_escape_string($mysqli,$_POST['password']);
@$tinggal_siswa = mysqli_real_escape_string($mysqli, $_POST['tinggal_siswa']);
@$jarak = mysqli_real_escape_string($mysqli,$_POST['jarak']);
@$berangkat = mysqli_real_escape_string($mysqli,$_POST['berangkat']);
@$kendaraan = mysqli_real_escape_string($mysqli,$_POST['kendaraan']);
@$kondisilmp = mysqli_real_escape_string($mysqli,$_POST['kondisilmp']);
@$kondisirmh = mysqli_real_escape_string($mysqli,$_POST['kondisirmh']);
@$ruangtidur = mysqli_real_escape_string($mysqli,$_POST['ruangtidur']);
$lingkungan = mysqli_real_escape_string($mysqli,$_POST['lingkungan']);
//data data_orangtua
$ayah = mysqli_real_escape_string($mysqli,$_POST['ayah']);
$tl = mysqli_real_escape_string($mysqli,$_POST['tl']);
$tgl_a = mysqli_real_escape_string($mysqli,$_POST['tgl_a']);
$agama = mysqli_real_escape_string($mysqli,$_POST['agama']);
$pddk_a = mysqli_real_escape_string($mysqli,$_POST['pddk_a']);
$status_keluarga = mysqli_real_escape_string($mysqli,$_POST['status_keluarga']);
$pekerjaan = mysqli_real_escape_string($mysqli,$_POST['pekerjaan']);
$penghasilan_a = mysqli_real_escape_string($mysqli,$_POST['penghasilan_a']);
$alamat_a = mysqli_real_escape_string($mysqli,$_POST['alamat_a']);
$telpon_a = mysqli_real_escape_string($mysqli,$_POST['telpon_a']);
$ibu = mysqli_real_escape_string($mysqli,$_POST['ibu']);
$tl_i = mysqli_real_escape_string($mysqli,$_POST['tl_i']);
$tgl_i = mysqli_real_escape_string($mysqli,$_POST['tgl_i']);
$agma_i = mysqli_real_escape_string($mysqli,$_POST['agma_i']);
$pddk_i = mysqli_real_escape_string($mysqli,$_POST['pddk_i']);
$pekerjaan_i = mysqli_real_escape_string($mysqli,$_POST['pekerjaan_i']);
$penghasilan_i = mysqli_real_escape_string($mysqli,$_POST['penghasilan_i']);
$alamat_i = mysqli_real_escape_string($mysqli,$_POST['alamat_i']);
$telpon_i = mysqli_real_escape_string($mysqli,$_POST['telpon_i']);
// data saudara
$nm = mysqli_real_escape_string($mysqli,$_POST['nm']);
$umur = mysqli_real_escape_string($mysqli,$_POST['umur']);
$jk = mysqli_real_escape_string($mysqli,$_POST['jk']);
$pddk = mysqli_real_escape_string($mysqli,$_POST['pddk']);
$krj = mysqli_real_escape_string($mysqli,$_POST['krj']);
$agm = mysqli_real_escape_string($mysqli,$_POST['agm']);

$nm1 = mysqli_real_escape_string($mysqli,$_POST['nm1']);
$umur1 = mysqli_real_escape_string($mysqli,$_POST['umur1']);
$jk1 = mysqli_real_escape_string($mysqli, $_POST['jk1']);
$pddk1 = mysqli_real_escape_string($mysqli,$_POST['pddk1']);
$krj1 = mysqli_real_escape_string($mysqli,$_POST['krj1']);
$agm1 = mysqli_real_escape_string($mysqli,$_POST['agm1']);

$nm2 = mysqli_real_escape_string($mysqli,$_POST['nm2']);
$umur2 = mysqli_real_escape_string($mysqli,$_POST['umur2']);
$jk2 = mysqli_real_escape_string($mysqli,$_POST['jk2']);
$pddk2 = mysqli_real_escape_string($mysqli,$_POST['pddk2']);
$krj2 = mysqli_real_escape_string($mysqli,$_POST['krj2']);
$agm2 = mysqli_real_escape_string($mysqli,$_POST['agm2']);

 $sql=mysqli_query($mysqli," UPDATE data_siswa SET nis='$nis',
 nama_siswa='$nama_siswa',
 namap='$namap',
 kelamin='$kelamin',
 tpl='$tpl',
 tgl='$tgl',
 agama='$agama',
 warga='$warga',
 suku='$suku',
 t_skl='$t_skl',
 pindahan='$pindahan',
 anakke='$anakke',
 bhs='$bhs',
 alamat_siswa='$alamat_siswa',
 telpon_siswa='$telpon_siswa',
 email='$email',
 username='$username',
 password='$password',
 tinggal_siswa='$tinggal_siswa',
 jarak='$jarak',
 berangkat='$berangkat',
 kendaraan='$kendaraan',
 kondisilmp='$kondisilmp',
 kondisirmh='$kondisirmh',
 ruangtidur='$ruangtidur',
 lingkungan='$lingkungan' WHERE id_siswa='$id_siswa' ");
$sql1=mysqli_query($mysqli,"UPDATE data_orangtua SET nis='$nis',
    ayah='$ayah',
    tl='$tl',
    tgl_a='$tgl_a',
    agama='$agama',
    pddk_a='$pddk_a',
    status_keluarga='$status_keluarga',
    pekerjaan='$pekerjaan',
    penghasilan_a='$penghasilan_a',
    alamat_a='$alamat_a',
    telpon_a='$telpon_a',
    ibu='$ibu',
    tl_i='$tl_i',
    tgl_i='$tgl_i',
    agma_i='$agma_i',
    pddk_i='$pddk_i',
    pekerjaan_i='$pekerjaan_i',
    penghasilan_i='$penghasilan_i',
    alamat_i='$alamat_i',
    telpon_i='$telpon_i' WHERE id_orangtua='$id_siswa' ");

$sql2=mysqli_query($mysqli," UPDATE data_saudara SET nm='$nm',
    umur='$umur',
    jk='$jk',
    pddk='$pddk',
    krj='$krj',
    agm='$agm',
    nm1='$nm1',
    umur1='$umur1',
    jk1='$jk1',
    pddk1='$pddk1',
    krj1='$krj1',
    agm1='$agm1',
    nm2='$nm2',
    umur2='$umur2',
    jk2='$jk2',
    pddk2='$pddk2',
    krj2='$krj2',
    agm2='$agm2' WHERE id_saudara = '$id_siswa'");
?>
<script>
alert(" Sukses ! Data berhasil Di Ubah!");     
</script>
<?php 


}

 ?>






                </div>
            </div>
