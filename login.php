<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">            
                <font face="arial" color="#FFFFFF" size="+2">SISTEM INFORMASI HIMPUNAN DATA BK</font>
         
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                       <center>
                <img src="assets/img/logoku.png" alt="" width="150">
            </center>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" name="postform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="user" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <select name="level" class="form-control">
                                        <option value=""> -Pilih Hak Akses-</option>
                                        <option value="admin"> ADMIN </option>
                                        <option value="guru"> GURU </option>
                                        <option value="siswa"> SISWA </option>
                                       
                                    </select>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Login" name="login" class="btn btn-lg btn-info btn-block">
                                <br>
                                <a href="index.php" class="btn btn-lg btn-danger btn-block"><i class="fa fa-home"></i> Back Home</a>
                            </fieldset>
                        </form>
                        <!-- AWAL: KODING LOGIN -->
<?php
session_start();
include"koneksi.php";
if (@$_POST['login']) {
$user = mysqli_real_escape_string($db, $_POST['user']);
$pass = mysqli_real_escape_string($db, $_POST['pass']);
$level = mysqli_real_escape_string($db, $_POST['level']);
  if ($level == 'admin') {
      $sql = mysqli_query($db,"SELECT * FROM tb_admin WHERE username ='$user' AND password='$pass' ") or die($db -> $error) ;
      $data = mysqli_fetch_array($sql);
      $id = $data [0];
      $cek = mysqli_num_rows($sql);

      if ($cek >0 ){
      $_SESSION['admin'] = $id;
      ?>
      <script type="text/javascript">
      alert(" Sukses ...", " selamat anda berhasil masuk!!:(", "success");
      window.location.href="_admin";   
      </script>
      <?php              
      }else{
      ?>
      <script type="text/javascript">                  
      swal(" Login Gagal ...", " periksa kembali username dan password anda!!", "error");
      </script> 
      <?php

      }

  } else  if ($level == 'guru') { 
              $sql = mysqli_query($db,"SELECT * FROM data_guru WHERE username ='$user' AND password='$pass' ") or die($db -> $error) ;
              $data = mysqli_fetch_array($sql);
              $id = $data [0];
              $cek = mysqli_num_rows($sql);

              if ($cek >0 ){
              $_SESSION['guru'] = $id;
              ?>
              <script type="text/javascript">
              alert(" Sukses ...", " selamat anda berhasil masuk!!:(", "success");
              window.location.href="_guru";   
              </script>
              <?php              
              }else{
              ?>
              <script type="text/javascript">                  
              alert(" Login Gagal ...", " periksa kembali username dan password anda !!", "error");
              </script> 
              <?php

              }

  } else  if ($level == 'siswa') {
              $sql = mysqli_query($db,"SELECT * FROM data_siswa WHERE username ='$user' AND password='$pass' ") or die($db -> $error) ;
              $data = mysqli_fetch_array($sql);
              $id = $data [0];
              $cek = mysqli_num_rows($sql);

              if ($cek >0 ){
              $_SESSION['siswa'] = $id;
              ?>
              <script type="text/javascript">
              alert(" Sukses ...", " selamat anda berhasil masuk!!:(", "success");
              window.location.href="_siswa";   
              </script>
              <?php              
              }else{
              ?>
              <script type="text/javascript">                  
              swal(" Login Gagal ...", " periksa kembali username dan password anda !!", "error");
              </script> 
              <?php

              }
}
}
?>

  <!-- end: CODING LOGIN -->


                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
