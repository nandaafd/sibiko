

<?php
include '../koneksi/-koneksi.php';
$no = @$_GET['no'];
mysqli_query($mysqli,"delete from tb_izin where no = '$no'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=data_perijinan";       
 </script>