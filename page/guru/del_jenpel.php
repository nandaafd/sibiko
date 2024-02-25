

<?php
include '../koneksi/-koneksi.php';
$kdgr = @$_GET['kdgr'];
mysqli_query($mysqli, "delete from setup_jenis_pelanggaran where id_jenis = '$kdgr'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=jenis";       
 </script>