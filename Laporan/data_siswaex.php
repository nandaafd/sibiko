<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN HIMPUNAN DATA SISWA.xls");?>


<center>
<b style="font-size: 27px;">LAPORAN DATA HIMPUNAN SISWA</b> <br>
<b style="font-size: 25px;">SMK N 10 SURABAYA</b>
</center>
<br>
<br>
<table border="1" style="border-collapse: collapse;">
<thead>
    <tr style="background-color: dodgerblue; color: white;">
        <th>No</th>
        <th>NIS</th>
        <th>Nama Siwa</th>
        <th>TTL</th>
        <th>Gender</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Email</th>
        <th>Tinggal Siswa</th>
        <th>Jarak Sekolah</th>
        <th>Berangkat Sekolah</th>
        <th>Kendaraan</th>
        <th>Penerangan Rumah</th>
        <th>Kondisi Rumah</th>
        <th>Ruangan Tidur</th>
        <th>Lingkungan Rumah</th>
    </tr>
</thead>
<tbody>
    <?php
    include '../koneksi/-koneksi.php';
    $sql = mysqli_query($mysqli,"select * from data_siswa") or die (mysqli_error($mysqli));
    $no=1;
    while ($data = mysqli_fetch_array($sql)){
    ?>
    <tr class="odd gradeX">
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['nama_siswa']; ?></td>
        <td><?php echo $data['tpl']; ?>,<?php echo $data['tgl']; ?></td>
        <td><?php echo $data['kelamin']; ?></td>
        <td><?php echo $data['agama']; ?></td>
        <td><?php echo $data['alamat_siswa']; ?></td>
        <td><?php echo $data['telpon_siswa']; ?></td>
        <td><?php echo $data['email']; ?></td> 
        <td><?php echo $data['tinggal_siswa']; ?></td> 
        <td><?php echo $data['jarak']; ?></td>  
        <td><?php echo $data['berangkat']; ?></td> 
        <td><?php echo $data['kendaraan']; ?></td> 
        <td><?php echo $data['kondisilmp']; ?></td> 
        <td><?php echo $data['kondisirmh']; ?></td> 
        <td><?php echo $data['ruangtidur']; ?></td>  
        <td><?php echo $data['lingkungan']; ?></td>                                     
    </tr>
    <?php } ?>
  
</tbody>
</table>
<p align="right">
<b>Surabaya,<?php echo date (" d F Y") ?></b><br>
<b>Kepala Sekolah</b><br> <br> <br> <br>
<b style="text-decoration: underline">H. Kamus, S.Pd., M.Pd</b><br>
NIP.1971040332000031004
</p>

                    
        