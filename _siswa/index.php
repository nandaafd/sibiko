 <?php

session_start();
if (@$_SESSION['siswa']) {
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />

    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <!-- CUSTOM STYLES -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="../assets/img/logo1.png" alt="" class="img-responsive" />

                </a>

            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
<?php
include '../koneksi/-koneksi.php';
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql = mysqli_query($mysqli,"select * from data_siswa where id_siswa = '$sesi'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql);
?>
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown --> 

                <li class="dropdown">

                    <a onclick="return confirm('Yakin ingin Keluar ??')" class="dropdown-toggle" href="logout.php">
                        <i class="fa fa-sign-out fa-3x"></i>
                    </a>
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section"> 
                        <br>                                                
                        <center>
                        <img src="../assets/img/logosmkk.png" alt="" width="180" class="img-responsive" style="border-radius: 7%;">

                        </center>  
                        
                                             
                        </div>
                        <!--end user image section-->
                    </li>
               
                    <li class="">
                        <a href="?page" style="font-size: 18px;"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="?page=siswa" style="font-size: 18px;"> <i class="fa fa-user fa-fw"></i> Sosiometri</a>
                    </li> 
                     <li>
                        <a href="?page=siswa&action=update" style="font-size: 18px;"> <i class="fa fa-edit fa-fw"></i> Update Data Diri</a>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="?page=siswa&action=detail" style="font-size: 18px;"> <i class="fa fa-users fa-fw"></i> Detail Data</a>
                        <!-- second-level-items -->
                    </li> 
                    <li>
                        <a href="?page=siswa&action=perijinan" style="font-size: 18px;"> <i class="fa fa-edit fa-fw"></i> Perijinan</a>
                        <!-- second-level-items -->
                    </li>                    
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
        	<!-- INI UNTUK ISI DINAMIS-->
        	<?php 
        	$page=@$_GET['page'];
        	$action=@$_GET['action'];

        	if ($page=="siswa") {
        		if ($action=="") {
        			include '../page/siswa/sosiometri.php';
        			# code...
        		}elseif ($action=="update") {
        			include '../page/siswa/update_siswa.php';
        		}elseif ($action=="detail") {
                    include '../page/siswa/detail_siswa.php';
                }elseif ($action=="perijinan") {
                    include '../page/siswa/perijinan_siswa.php';
                }
        	}elseif ($page=="laporan") {
                if ($action=="") {
                    include '../Laporan/laporan_pelanggaran.php';
                    # code...
                }elseif ($action=="print_id") {
                    include '../Laporan/detail_siswa.php';
                }elseif ($action=="laporan_guru") {
                    include '../Laporan/laporan_guru.php';
                }
                # code...
            }elseif ($page=="") {
                include'../page/home_siswa.php';
                # code...
            }else{
                echo "Data Tidak Ditemukan !!";
            }


        	 ?>

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
        <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script>

</body>

</html>





<?php
} else{
echo "<script> window.location='../login.php';</script>";

}
