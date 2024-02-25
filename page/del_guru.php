

<?php
include '../koneksi/-koneksi.php';
$kdgr = @$_GET['kdgr'];
mysqli_query($mysqli,"delete from data_guru where id_guru = '$kdgr'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin";       
 </script>