<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN HIMPUNAN DATA PELANGGARAN SISWA.xls");?>


<center>
<b style="font-size: 27px;">LAPORAN DATA HIMPUNAN PERIJINAN SISWA</b> <br>
<b style="font-size: 25px;">SMK N 10 SURABAYA</b>
</center>
<br>
<br>
             <table border="1" style="border-collapse: collapse;">
             <thead>
                         <tr>
                            <th>No.</th>
                            <th>Pemberi Izin</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Untuk</th>
                            <th>Alasan</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                        include '../koneksi/-koneksi.php';
                        $sql = mysqli_query($mysqli, "select * from tb_izin") or die (mysqli_error($mysqli));
                        $no=1;
                        while ($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['p_ijin']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['kelas']; ?></td>
                            <td><?php echo $data['hari']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['untuk']; ?></td>
                            <td><?php echo $data['alasan']; ?></td>
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