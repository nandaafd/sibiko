

<?php
include '../koneksi/-koneksi.php';
$kdsis = @$_GET['kdsis'];
mysqli_query($mysqli,"delete from data_siswa where id_siswa = '$kdsis'") or die(mysqli_error($mysqli));
mysqli_query($mysqli,"delete from data_orangtua where id_orangtua = '$kdsis'") or die(mysqli_error($mysqli));
mysqli_query($mysqli,"delete from data_saudara where id_saudara = '$kdsis'") or die(mysqli_error($mysqli));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=siswa";       
 </script>