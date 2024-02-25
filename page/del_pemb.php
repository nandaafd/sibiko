

<?php
include '../koneksi/-koneksi.php';
$kdgr = @$_GET['kdgr'];
mysqli_query($mysqli,"delete from setup_pembimbing where id_pemb = '$kdgr'") or die(mysqli_error($mysqli,));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru";       
 </script>