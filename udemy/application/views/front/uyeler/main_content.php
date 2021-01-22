<h1>Kayıt Formu</h1>
<p>Eğer hesabınız varsa, lütfen <a href="<?php echo base_url('giris'); ?>"><b>TIKLAYINIZ..</b></a>.</p>
<?php echo $this->session->flashdata('hata'); ?>
<form action="<?php echo base_url('anasayfa/kayitol'); ?>" method="post" class="form-horizontal">
<fieldset id="account">
<legend>Kişisel Bilgiler</legend>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-firstname">İsim Soyisim</label>
<div class="col-sm-10">
<input type="text" name="adsoyad" value="" placeholder="İsim Soyisim" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
<div class="col-sm-10">
<input type="email" name="email" value="" placeholder="E-Mail" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-telephone">Telefon</label>
<div class="col-sm-10">
<input type="number" name="telefon" value="" placeholder="Telefon" required class="form-control" />
<input type="hidden" name="ip" value="<?php echo GetIP(); ?>">
</div>
</div>

</fieldset>
<fieldset id="address">
<legend>Adres Bilgileri</legend>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-address-1">Adres</label>
<div class="col-sm-10">
<textarea name="adres" rows="8" cols="80" required class="form-control"></textarea>
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label">Şehir</label>
<div class="col-sm-10">
<input type="text" name="il" value="" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label">İlçe</label>
<div class="col-sm-10">
<input type="text" name="ilce" value="" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label">Mahalle</label>
<div class="col-sm-10">
<input type="text" name="mahalle" value="" required class="form-control" />
</div>
</div>

</fieldset>
<fieldset>
<legend>Şifreniz</legend>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-password">Şifre</label>
<div class="col-sm-10">
<input type="password" name="sifre" value="" placeholder="Şifre" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-confirm">Şifre Tekrar</label>
<div class="col-sm-10">
<input type="password" name="confirm" value="" placeholder="Şifre Tekrarı" required class="form-control" />
</div>
</div>
</fieldset>
<div class="buttons">
<div class="pull-right"><span class="mg-add">Sözleşmeyi Okudum <a href="" class="agree"><b>Gizlilik Sözleşmesi</b></a></span>
<input type="checkbox" name="agree" value="1" required /> &nbsp; <input type="submit" value="Kayıt Ol" class="btn btn-primary" />
</div>
</div>
</form>
