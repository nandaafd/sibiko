<?php
session_start();
if (@$_SESSION['guru']) {
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Halaman Guru</title>
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
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($mysqli,"select * from data_guru where id_guru = '$sesi'") or die(mysqli_error($mysqli));
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
                        <img src="../assets/img/logosmk.png" alt="" width="210" class="img-responsive" style="border-radius: 7%;">

                        </center>  
                        
                                             
                        </div>
                        <!--end user image section-->
                    </li>
               
                    <li class="">
                        <a href="?page" style="font-size: 18px;"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="?page=guru&action=update" style="font-size: 18px;"> <i class="fa fa-edit fa-fw"></i> Update Data</a>
                        <!-- second-level-items -->
                    </li>
                      <li>
                        <a href="?page=guru&action=detail" style="font-size: 18px;"> <i class="fa fa-edit fa-fw"></i> Detail Data</a>
                        <!-- second-level-items -->
                    </li> 
                    <li>
                        <a href="#" style="font-size: 18px;"> <i class="fa fa-table fa-fw"></i> Kegiatan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li>
                            <a href="?page=guru" style="font-size: 15px;"><i class="fa fa-edit"></i> + Input Pelanggaran Siswa</a>
                        </li>
                            <li>
                            <a href="?page=guru&action=add_guru" style="font-size: 15px;"><i class="fa fa-edit"></i> + Input Data Guru</a>
                        </li>
                    <li>
                        <a href="?page=guru&action=jenis" style="font-size: 15px;"> <i class="fa fa-table fa-fw"></i>+ Jenis Pelanggaran</a>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="?page=guru&action=viewjen" style="font-size: 15px;"> <i class="fa fa-table fa-fw"></i>+ Jenis Sanksi</a>
                        <!-- second-level-items -->
                    </li>                        
                        </ul>
                        <!-- second-level-items -->
                    </li> 
                     <li>
                        <a href="#" style="font-size: 18px;"> <i class="fa fa-table fa-fw"></i> View Data <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=guru&action=viewpel" style="font-size: 15px;"><i class="fa fa-edit"></i> Data Pelanggaran</a>
                            </li> 
                              <li>
                                <a href="?page=guru&action=sos" style="font-size: 15px;"><i class="fa fa-edit"></i> Data Sosiometri</a>
                            </li>  
                            <li>
                                <a href="?page=guru&action=sos" style="font-size: 15px;"><i class="fa fa-edit"></i> Data Izin Siswa</a>
                            </li>  
                              <li>
                                <a href="?page=guru&action=view_guru" style="font-size: 15px;"><i class="fa fa-edit"></i> Data Guru</a>
                            </li>                    
                        </ul>
                        <!-- second-level-items -->
                    </li>  
                      <li>
                        <a href="#" style="font-size: 18px;"> <i class="fa fa-print fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                <a href="?page=laporan" style="font-size: 15px;"><i class="fa fa-print"></i> Laporan Pelanggaran</a>
                            </li> 
                              <li>
                                <a href="?page=laporan&action=laporan_guru" style="font-size: 15px;"> <i class="fa fa-print"></i> Laporan Guru</a>
                            </li>                    
                        </ul>
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

        	if ($page=="guru") {
        		if ($action=="") {
        			include '../page/guru/input_pelanggaran.php';
        			# code...
        		}elseif ($action=="jenis") {
        			include '../page/guru/pelanggaran.php';
        		}elseif ($action=="viewpel") {
        			include '../page/guru/view_pelanggaran.php';
        		}elseif ($action=="viewjen") {
                    include '../page/guru/sanksi.php';
                }elseif ($action=="del_pel") {
                    include '../page/guru/del_pel.php';
                    # code...
                }elseif ($action=="del_jen") {
                    include '../page/guru/del_jenpel.php';
                    # code...
                }elseif ($action=="del_sank") {
                    include '../page/guru/del_sank.php';
                    # code...
                }elseif ($action=="view_guru") {
                    include '../page/guru/data_guru.php';
                    # code...
                }elseif ($action=="add_guru") {
                    include '../page/guru/tambah_guru.php';
                    # code...
                }elseif ($action=="sos") {
                    include '../page/guru/view_sosiometri.php';
                    # code...
                }elseif ($action=="update") {
                    include '../page/guru/update_guru.php';
                    # code...
                }elseif ($action=="detail") {
                    include '../page/guru/detail_guru.php';
                    # code...
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
                include'../page/home_guru.php';
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

echo "<script>
window.location='../login.php';</script>";

}



