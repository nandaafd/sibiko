
			<h3 class="heading-agileinfo">Kontak Kami<span>SMKN 1 SURABAYA</span></h3>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-4 agile_info_mail_img_info">
					<div class="address-grid">
						<h4>Kontak <span>Kami</span></h4>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Telephone </p><span>085648816717</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Mail </p><a href="smkn10.bksby@gmail.com">smkn10.bksby@gmail.com</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Location</p><span>ln. Keputih Tegal No. 54, Keputih, Kec. Sukolilo, Surabaya</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits_w3layouts_nav_right contact">
							<div class="social two">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 agile_info_mail_img">
					<div class="well">
<iframe class="responsive" src="https://www.google.com/maps/embed?pb=!4v1519407764738!6m8!1m7!1sZQZ6_5ZhCnB9pxACWyHI5g!2m2!1d-0.1509513378734464!2d100.5684495396471!3f0!4f0!5f1.1924812503605782" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

				</div>
				<div class="clearfix"> </div>				
				<div class="w3layouts_mail_grid">
					<h4>Tinggalkan Pesan disini !!</h4> <br>
					<form action="" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="nama" placeholder="Masukkan nama anda">
							<input type="email" name="email" placeholder="masukkan E-mail yang valid">
							<input type="text" name="telp" placeholder="Masukkan Telpon">
							<input type="text" name="subjek" placeholder=" Judul Pesan">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<textarea name="pesan" placeholder="Pesan Disini..." required=""></textarea>
							<input type="submit" value="Kirim Pesan" name="kirim">
					
						</div>
						<div class="clearfix"> </div>

					</form>
					<?php
					include 'koneksi/-koneksi.php';
$nama = @$_POST['nama'];
$email = @$_POST['email'];
$telp = @$_POST['telp'];
$subjek = @$_POST['subjek'];
$pesan = @$_POST['pesan'];
$tanggal = date("Y-m-d H:i:s");

$simpan = @$_POST['kirim'];

if ($simpan){
if ($nama == "" || $email == "") {
?>
<script type="text/javascript">             
alert("Oops...Inputan tidak boleh kosong !!");
</script>
<?php

}else{
mysql_query("INSERT INTO tb_pesan VALUES ('','$nama','$email','$telp','$subjek','$pesan','$tanggal')") or die(mysql_error());
?>

<script type="text/javascript">
alert(" Sukses , PESAN TERKIRIM");     
</script>

<?php
}



}
?>

		
</div>
</div>
</div>
	<!-- //mid-services -->
