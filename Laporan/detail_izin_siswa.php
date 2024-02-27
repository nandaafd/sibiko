<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Core CSS - Include witd every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-tdeme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <!-- CUSTOM STYLES -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

</head>
<body>

<?php
include '../koneksi/-koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($mysqli, "select * from tb_izin where no = '$kdsis'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($sql);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
                <div class="row mt-4">
                    <div class="col d-flex justify-content-center">
                        <div class="row w-75">
                            <div class="col-2 d-flex justify-content-end">
                                <img src="../assets/img/logosmkk.png" alt="" width="50px" class="" style="border-radius: 7%;">
                            </div>
                            <div class="col-10 pe-5 text-center">
                                <h5 class="fw-bold">PEMERINTAH PROPINSI JAWA TIMUR <br> DINAS PENDIDIKAN</h5>
                                <div class="">
                                    SEKOLAH MENENGAH KEJURUAN NEGERI 10 SURABAYA <br>
                                    JL. KEPUTIH TEGAL. FAX, TELP 5839581 Email : info@smkn10surabaya.sch.id <br>
                                    SURABAYA. Kode Pos 60111
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="height:10px;">
                <div class="">
                    <div class="text-center">
                        <div class="h5">SURAT IZIN MENINGGALKAN SEKOLAH</div>
                    </div>
                    <div>
                        <div class="px-4">
                            <div class="my-4 ms-5">
                                <table> 
                                        <tr>
                                            <td class="w-25">Diberikan Ijin Kepada</td>
                                            <td style="width: 15px;">:</td>
                                            <td><?php echo $data['p_ijin']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?php echo $data['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kelas</td>
                                            <td>:</td>
                                            <td><?php echo $data['kelas']; ?></td>

                                        </tr> 
                                            <tr>
                                            <td>Hari/Tanggal</td>
                                            <td>:</td>
                                            <td><?php echo $data['hari']; ?>, <?php echo date("d M Y", strtotime($data['tanggal'])); ?></td>
                        
                                        </tr>
                                        <tr>
                                            <td>Untuk</td>
                                            <td>:</td>
                                            <td>Meninggalkan sekolah jam ke ....... Pk. .............
                                                <br/> Kembali ke sekolah +/- jam ke ....... Pk. ............
                                            </td>
            
                                        </tr>
                                        <tr>
                                            <td>Alasan</td>
                                            <td>:</td>
                                            <td><?php echo $data['alasan']; ?></td>

                                        </tr>  
                                </table>
                            </div>
                        </div>
                    
                    </div>
                    <div class="row ms-3 mt-5">
                        <div class="col text-center">
                            <p>Mengetahui, <br>
                                Orang tua/Wali/Instansi/Lembaga
                            </p>
                            <div class="" style="height: 50px;"></div>
                            <p class="text-center">.......................................</p>
                        </div>
                        <div class="col">
                            <p></p>
                            <p> Guru Mata Diklat/Piket/BK</p>
                                <div class="" style="height: 55px;"></div>
                            <p>.................................................</p>
                        </div>
                        <div class="col">
                            <p>Surabaya, <?php echo date('d M Y') ?><br>
                                    Siswa Yang Bersangkutan
                                </p>
                                <div class="" style="height: 50px;"></div>
                            <p>.................................................</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    <!-- Core Scripts - Include witd every page -->
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

    <style>
        /* CSS untuk menghilangkan border pada tabel */
        table {
            border-collapse: collapse; /* Menggabungkan border */
            border: none; /* Tidak ada border */
        }
        td, td {
            border: none; /* Tidak ada border pada sel atau header */
            padding: 8px; /* Tambahan: Menambahkan jarak antara konten dan tepi sel */
        }
    </style>
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>