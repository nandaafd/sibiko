

<?php
include '../koneksi/-koneksi.php';
$kdgr = @$_GET['kdgr'];
mysqli_query($mysqli,"delete from setup_jenis_sanksi where id_sanksi = '$kdgr'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=viewjen";       
 </script>