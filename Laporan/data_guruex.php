<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN HIMPUNAN DATA GURU.xls");?>


<center>
<b style="font-size: 27px;">LAPORAN DATA HIMPUNAN GURU</b> <br>
<b style="font-size: 25px;">SMK N 10 SURABAYA</b>
</center>
<br>
<br>
             <table border="1" style="border-collapse: collapse;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Gender</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi/-koneksi.php';
                    $sql = mysqli_query($mysqli,"select * from data_guru") or die (mysqli_error($mysqli));
                    $no=1;
                    while ($data = mysqli_fetch_array($sql)){
                    ?>
                    <tr class="odd gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nip']; ?></td>
                        <td><?php echo $data['nama_guru']; ?>, <?php echo $data['gelar']; ?></td>
                        <td><?php echo $data['tempat_lahir']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
                        <td><?php echo $data['kelamin']; ?></td>
                        <td><?php echo $data['agama']; ?></td>
                        <td><?php echo $data['alamat_guru']; ?></td>
                        <td><?php echo $data['telpon_guru']; ?></td>
                        <td><?php echo $data['email']; ?></td>
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