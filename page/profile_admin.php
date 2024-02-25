<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Profil Admin</font></h1>
</div>
<!-- end  page header -->


<?php
if (@$_SESSION['admin']) {
$sesi = @$_SESSION['admin'];
}

$sql_formulir = mysql_query("select * from tb_admin where id_admin = '$sesi'") or die(mysql_error());
$data = mysql_fetch_array($sql_formulir);
?>
<div class="row">
<div class="col-md-10">
<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#f50057; color: white;">
    	<b><i class="fa fa-user"></i> Profil Admin </b>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
            	   <tr>
                        <th></th>
                        <th></th>
                        <th><img src="../photo_guru/<?php echo $data ['photo'];?>" height="80" width="80" align="middle" style="border-radius: 100%;"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                 
                      <tr>
                        <th>Username</th>
                        <th>:</th>
                        <th><?php echo $data['username']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                      <tr>
                        <th>Password</th>
                        <th>:</th>
                        <th><?php echo $data['password']; ?></th>
                        <th></th>
                        <th></th>
                        <th> </th>
                    </tr>
                        <tr>
                        <th>Nama Lengkap</th>
                        <th>:</th>
                        <th><?php echo $data['nama_lengkap']; ?></th>
                        <th></th>
                        <th></th>
                        <th> </th>
                    </tr>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
