<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN PELANGGARAN.xls");?>
<center>
<b style="font-size: 27px;">LAPORAN DATA PELANGGARAN SISWA</b> <br>
<b style="font-size: 25px;">SMK N 10 SURABAYA</b>
</center>
<br>
<br>
<table border="1" style="border-collapse: collapse;">
<thead>
     <tr>
        <th>No.</th>
        <th>Nama Siswa</th>
        <th>Pelanggaran</th>
        <th>Sanksi</th>
        <th>Jumlah Point</th>
        <th>Tanggal Kejadian</th>
        <th>Keterangan</th>
    </tr>
</thead>
<tbody>
        <?php
    include '../koneksi/-koneksi.php';
    $sql = mysqli_query($mysqli,"select * from tbl_siswa_pelanggaran") or die (mysqli_error($mysqli));
    $no=1;
    while ($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nm_siswa']; ?></td>
        <td><?php echo $data['nm_pelanggaran']; ?></td>
        <td><?php echo $data['nm_sanksi']; ?></td>
        <td><?php echo $data['poin']; ?></td>
        <td><?php echo $data['tgl_kejadian']; ?></td>
        <td><?php echo $data['ket']; ?></td>
    </tr>
    <?php } ?> 
</tbody>
</table>
<p align="right">
<b>Limapuluh Kota,<?php echo date (" d F Y") ?></b><br>
<b>Kepala Sekolah</b><br> <br> <br> <br>
<b style="text-decoration: underline">DASRIZAL</b><br>
NIP.96303101988031005 
</p>
