<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Update Data Diri</font></h1>
</div>
<!-- end  page header -->

<div class="row">
                <div class="col-lg-8">
<?php
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql_formulir = mysqli_query($mysqli,"select * from data_guru where id_guru = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql_formulir);
?>
                    <form action="" method="post">
                  
                    <!--Collapsible Accordion Panel Group   -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Update Data Diri Guru
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

       
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>1. NIP</label>
                                            <input class="form-control" type="text" name="nip" value="<?php echo $data['nip']; ?> ">
                                        </div>
                                        <div class="form-group">
                                            <label>2. Nama Guru</label>
                                            <input class="form-control" type="text" name="nama_guru" value="<?php echo $data['nama_guru']; ?> ">
                                        </div>
                                           <div class="form-group">
                                            <label>3. Gelar</label>
                                            <input class="form-control" type="text" name="gelar" value="<?php echo $data['gelar']; ?> ">
                                        </div>
                                       <div class="form-group">
                                            <label>5. Tempat Lahir</label>
	                                    	<input class="form-control" type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?> ">                                         
                                        </div>
                                           <div class="form-group">
                                            <label>5. Tanggal Lahir</label>
	                                    	<input class="form-control" type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?> ">                                           
                                        </div>
                                             <div class="form-group">
                                        <label>4. Jenis Kelamin</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="kelamin" id="optionsRadiosInline1" value="Laki-laki" <?php if ($data['kelamin'] == 'Laki-laki') {echo "checked";} ?>> Laki-laki
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="kelamin" id="optionsRadiosInline2" value="Perempuan" <?php if ($data['kelamin'] == 'Perempuan') {echo "checked";} ?>>Perempuan
                                        </label>
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
                                            <label>7. E-mail</label>
	                                    	<input class="form-control" type="text" name="email" value="<?php echo $data['email']; ?> ">
                                        </div>
                                          <div class="form-group">
                                            <label>8. Username</label>
	                                    	<input class="form-control" type="text" name="username" value="<?php echo $data['username']; ?> ">
                                        </div>
                                        <div class="form-group">
                                            <label>9. Password</label>
	                                    	<input class="form-control" type="text" name="password" value="<?php echo $data['password']; ?> ">
                                        </div>
                                         
                                </div>
                    
                   
                     <!-- End Form Elements -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</form>
</div>
</div>