

<?php
include '../koneksi/-koneksi.php';
$id = @$_GET['kdgr'];
mysqli_query($mysqli,"delete from tb_izin where no = '$id'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=view_perijinan";       
 </script>