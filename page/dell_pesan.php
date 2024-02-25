

<?php
include '../koneksi/-koneksi.php';
$kdpes = @$_GET['kdpes'];
mysqli_query($mysqli,"delete from tb_pesan where id = '$kdpes'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=pesan";       
 </script>