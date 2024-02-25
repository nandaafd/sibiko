

<?php
include '../koneksi/-koneksi.php';
$kdsis = @$_GET['kdsis'];
mysqli_query($mysqli,"delete from setup_sosiometri where id_sosiometri = '$kdsis'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=sos";       
 </script>