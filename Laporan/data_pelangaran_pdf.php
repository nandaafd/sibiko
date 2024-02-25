<?php ob_start(); ?>
<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse; 
			table-layout:fixed;width: 600px;
		}
		table td {
			word-wrap:break-word;
			width: 20%;
		}
	</style>
</head>
<body>

<h5 style="text-align: center;">
<img src="../assets/img/logosmkk.png" alt="" width="50"> <br>
<b>LAPORAN DATA PELANGGARAN SISWA</b> <br>
SMK N 10 SURABAYA</h5>
<hr border="1px">
<table border="1">
<tr>
	<th>Nama Siswa</th>
	<th>Pelanggaran</th>
	<th>Sanksi</th>
	<th>Point</th>
	<th>Tanggal Kejadian</th>
	<th>Keterangan</th>
</tr>
<?php
// Load file koneksi.php
include "../koneksi/+connection.php";
 
$query = "SELECT * FROM tbl_siswa_pelanggaran"; // Tampilkan semua data gambar
$sql = mysqli_query($connection, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['nm_siswa']."</td>";
        echo "<td>".$data['nm_pelanggaran']."</td>";
        echo "<td>".$data['nm_sanksi']."</td>";
        echo "<td>".$data['poin']."</td>";
        echo "<td>".$data['tgl_kejadian']."</td>";
        echo "<td>".$data['ket']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
  <p align="right">
<b>Surabaya,<?php echo date (" d F Y") ?></b><br>
<b>Kepala Sekolah</b><br> <br> <br> <br>
<b style="text-decoration: underline">H. Kamus, S.Pd., MM</b><br>
NIP.197104032000031004
</p>


</body>
</html>

<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Siswa.pdf', 'D');
?>