
<div class="box account info">
<div class="box-heading">
<h3>Hesabım</h3>
</div>
<div class="box-content">
<ul>
<?php $info=$this->session->userdata('uyeinfo'); if($this->session->userdata('uyegiris')){ ?>
<li><a href="#"><i class="fa fa-chevron-right"></i> Bilgilerim</a></li>
<li><a href="#"><i class="fa fa-chevron-right"></i> Siparişlerim</a></li>
<li><a href="<?php echo base_url('iptalislemi'); ?>"><i class="fa fa-chevron-right"></i> İptal Talebi</a></li>
<li><a href="<?php echo base_url('degisim'); ?>"><i class="fa fa-chevron-right"></i> İade Talebi</a></li>
<li><a href="<?php echo base_url('anasayfa/cikis'); ?>"><i class="fa fa-chevron-right"></i> Çıkış Yap</a></li>

<?php }else { ?>
<li><a href="<?php echo base_url('kayit'); ?>"><i class="fa fa-chevron-right"></i> Kayıt Ol</a></li>
<li><a href="<?php echo base_url('giris'); ?>"><i class="fa fa-chevron-right"></i> Giriş Yap</a></li>
<li><a href="#" data-toggle="modal" data-target="#register-modal"><i class="fa fa-chevron-right"></i> Koç Olarak Başvur</a></li>
<?php } ?>
</ul>
</div>
</div>



<!-- register-modal starts -->
<div class="modal fade" id="register-modal">

	<div class="modal-dialog">

		<div class="modal-content modal-form-sm register">

			<div class="modal-header">

				<h5> Kayıt Ol</h5>

				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>

			</div>

			<div class="modal-body">

				<form action="" method="POST">

					<div class="form-group">

						<label class="form-control-label font-weight-bold">Adınızı Giriniz</label>

						<input type="text" name="adi" class="form-control" placeholder="Adınızı Giriniz">

					</div>

					<div class="form-group">

						<label class="form-control-label font-weight-bold">Soyadınızı Giriniz</label>

						<input type="text" name="soyadi" class="form-control" placeholder="Soyadınızı Giriniz">

					</div>

					<div class="form-group">

						<label class="form-control-label font-weight-bold">Kullanıcı Adı</label>

						<input type="text" name="kullanici" class="form-control" placeholder="Kullanıcı Adınızı Giriniz">

						<small class="form-text text-muted">Not! Kullanıcı Adı kayıttan sonra değiştirilemez</small>
					</div>

					<div class="form-group">

						<label class="form-control-label font-weight-bold">Şifre</label>

						<input type="text" name="sifre" class="form-control" placeholder="Şifre">

					</div>


					<div class="form-group">

						<label class="form-control-label font-weight-bold">E-Mail</label>

						<input type="text" name="email" class="form-control" placeholder="Email Adresinizi Giriniz">

					</div>

					<div class="form-group">

						<label class="form-control-label font-weight-bold">Resim</label>

						<input type="file" name="resim" class="form-control" placeholder="Resim Giriniz">

					</div>

					<div class="form-group">

						<label class="form-control-label font-weight-bold">Telefon</label>

						<input type="text" name="telefon" class="form-control" placeholder="Telefon">

					</div>

					<div class="form-group">

						<label class="form-control-label font-weight-bold">Şehir</label>

						<input type="text" name="sehir" class="form-control" placeholder="Şehir">

					</div>


					<input type="submit" name="register" class="btn btn-success btn-block" value="Kayıt Ol">

				</form>

			</div>

		</div>

	</div>

</div>
<!-- Register Modal ends -->
