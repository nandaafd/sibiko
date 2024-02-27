<?php
session_start();
if (@$_SESSION['admin']) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />

    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <!-- CUSTOM STYLES -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="../assets/plugins/jquery-3.2.1.min.js"></script>
      <script src="../assets/plugins/highcharts.js"></script>
      <script src="../assets/plugins/highcharts-3d.js"></script>
        <script src="https://code.highcharts.com/highcharts.src.js"></script>
                <script src="../assets/code/highcharts.js"></script>
<script src="../assets/code/highcharts-3d.js"></script>
<script src="../assets/code/modules/exporting.js"></script>

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
if (@$_SESSION['admin']) {
$sesi = @$_SESSION['admin'];
}

$sql = mysqli_query($mysqli, "select * from tb_admin where id_admin = '$sesi'") or die(mysqli_error($mysqli));
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
                        <br>  
                        
                                             
                        </div>
                        <!--end user image section-->
                    </li>
               
                    <li class="">
                        <a href="?page" style="font-size: 18px;"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                     <!--<li class="">
                        <a href="?page=admin&action=profile" style="font-size: 18px;"><i class="fa fa-user fa-fw"></i> Profile</a>
                    </li>-->
                     <li>
                        <a href="#" style="font-size: 18px;"> <i class="fa fa-table fa-fw"></i> Himpunan Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                              <li>
                                <a href="?page=siswa" style="font-size: 15px;"><i class="fa fa-edit"></i> + Data Siswa</a>
                            </li>
                            <li>
                               <a href="?page=admin&action=addguru" style="font-size: 15px;"> <i class="fa fa-edit"></i> + Data Guru</a>
                            </li>                          
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#" style="font-size: 18px;"><i class="fa fa-table fa-fw"></i> View Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                                <li>
                                <a href="?page=admin&action=data_siswa" style="font-size: 15px;"><i class="fa fa-list-alt"></i>  Data Siswa</a>
                            </li>
                            <li>
                                <a href="?page=admin" style="font-size: 15px;"> <i class="fa fa-list-alt"></i></i> Data Guru</a>
                            </li> 
                            <li>
                                <a href="?page=admin&action=data_perijinan" style="font-size: 15px;"> <i class="fa fa-list-alt"></i></i> Data Perizinan Siswa</a>
                            </li>
                             <li>
                                <a href="?page=guru&action=view_sos" style="font-size: 15px;"> <i class="fa fa-list-alt"></i></i> Data Sosiometri</a>
                            </li> 
                            </li> 
                               <li>
                                <a href="?page=admin&action=pesan" style="font-size: 15px;"> <i class="fa fa-list-alt"></i></i> Pesan User</a>
                            </li>                                           
                        </ul>
                        <!-- second-level-items -->
                    </li>
                         <li>
                        <a href="#" style="font-size: 18px;"><i class="fa fa-th fa-fw"></i> View Grafik<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                                <li>
                                <a href="?page=grafik" style="font-size: 15px;"><i class="fa fa-list-alt"></i>  Grafik Sosiometri</a>
                            </li>                               
                               <li>
                                <a href="?page=grafik&action=pie" style="font-size: 15px;"> <i class="fa fa-list-alt"></i></i> Gender Siswa</a>
                            </li>
                             <!--<li>
                                <a href="?page=grafik&action=chart" style="font-size: 15px;"> <i class="fa fa-list-alt"></i></i> Grafik Sosiometri Googel</a>
                            </li> -->                     
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#" style="font-size: 18px;"><i class="fa fa-gear fa-fw"></i> Setup Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                               <a href="?page=guru" style="font-size: 15px;"><i class="fa fa-user fa-fw"></i> Setup Pembimbing</a>
                            </li>
                            <li>
                                 <a href="?page=guru&action=kelas" style="font-size: 15px;"><i class="fa fa-home fa-fw"></i> Setup Kelas</a>
                            </li>
                              <li>
                                 <a href="?page=guru&action=pelanggaran" style="font-size: 15px;"><i class="fa fa-ban"></i> Setup Pelanggaran</a>
                            </li>
                              <li>
                                 <a href="?page=guru&action=sanksi" style="font-size: 15px;"><i class="fa fa-compress"></i> Setup Sanksi</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#" style="font-size: 18px;"><i class="fa fa-print fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                             <li>
                                <a href="?page=laporan" style="font-size: 15px;"> <i class="fa fa-file"></i> Laporan Data Siswa</a>
                            </li>
                              <li>
                                <a href="?page=laporan&action=laporan_guru" style="font-size: 15px;"> <i class="fa fa-file"></i> Laporan Data Guru</a>
                            </li>
                             <li>
                                <a href="?page=laporan&action=lap_pel" style="font-size: 15px;"> <i class="fa fa-file"></i> Laporan Pelanggaran</a>
                            </li>
                            <li>
                                <a href="?page=laporan&action=lap_perijinan" style="font-size: 15px;"> <i class="fa fa-file"></i> Laporan Perijinan</a>
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

        	if ($page=="admin") {
        		if ($action=="") {
        			include '../page/data_guru.php';
        			# code...
        		}elseif ($action=="data_siswa") {
        			include '../page/data_siswa.php';
                }elseif ($action=="data_perijinan") {
        			include '../page/data_perijinan.php';
        		}elseif ($action=="del_guru") {
        			include '../page/del_guru.php';
                }elseif ($action=="del_perijinan") {
        			include '../page/del_perijinan.php';
        		}elseif ($action=="input_sis") {
                    include '../page/input_siswa.php';
                }elseif ($action=="addguru") {
                    include '../page/tambah_guru.php';
                    # code...
                }elseif ($action=="profile") {
                    include '../page/profile_admin.php';
                    # code...
                }elseif ($action=="pesan") {
                    include '../page/view_pesan.php';
                    # code...
                }elseif ($action=="delpes") {
                    include '../page/dell_pesan.php';
                    # code...
                }
        		# code...
        	}elseif ($page=="siswa") {
        		if ($action=="") {
        			include '../page/tambah_siswa.php';
        			# code...
        		}elseif ($action=="hapus") {
        			include '../page/del_siswa.php';
        			# code...
        		}elseif ($action=="detail") {
                    include '../page/detail_siswa.php';
                    # code...
                }elseif ($action=="edit") {
                    include '../page/edit_siswa.php';
                    # code...addguru
                }elseif ($action=="del") {
                    include '../page/del_siswa.php';
                    # code...
                }
        		# code...
        	}elseif ($page=="guru") {
        		if ($action=="") {
                    include '../page/gr_pembimbing.php';
                }elseif ($action=="kelas") {
                     include '../page/data_kelas.php';
                }elseif ($action=="detail") {
                    include '../page/guru/detail_guru.php';
                }elseif ($action=="delkelas") {
                     include '../page/del_kelas.php';
                }elseif ($action=="delpem") {
                     include '../page/del_pemb.php';
                }elseif ($action=="pelanggaran") {
                     include '../page/pelanggaran.php';
                }elseif ($action=="sanksi") {
                     include '../page/sanksi.php';
                }elseif ($action=="del_pel") {
                     include '../page/del_pel.php';
                }elseif ($action=="del_sanksi") {
                     include '../page/del_sanksi.php';
                }elseif ($action=="view_sos") {
                     include '../page/view_sosiometri.php';
                }elseif ($action=="view_sosid") {
                     include '../page/detail_sosiometri.php';
                }
        	}elseif ($page=="laporan") {
                if ($action=="") {
                    include '../Laporan/laporan_siswa.php';
                }elseif ($action=="print_id") {
                    include '../Laporan/detail_siswa.php';
                }elseif ($action=="laporan_guru") {
                    include '../Laporan/laporan_guru.php';
                }elseif ($action=="lap_pel") {
                    include '../Laporan/laporan_pelanggaran.php';
                }
                elseif ($action=="lap_perijinan") {
                    include '../Laporan/laporan_perijinan.php';
                }
            }elseif ($page=="grafik") {
                if ($action=="") {
                    include '../grafik/grafik_sosiometri.php';
                }elseif ($action=="chart") {
                    include '../grafik/chart_goggle.php';
                }elseif ($action=="pie") {
                    include '../grafik/pie_chart.php';
                }elseif ($action=="lap_pel") {
                    include '../Laporan/laporan_pelanggaran.php';
                }
            }elseif ($page=="") {
                include'../page/home.php';
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