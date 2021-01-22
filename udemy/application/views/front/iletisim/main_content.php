<h2>İletişim Formu</h2>
<?php echo $this->session->flashdata('hata'); ?>

<div class="row">
<div class="col-sm-12">
<form action="<?php echo base_url('anasayfa/mesajiletim'); ?>" method="post" class="form-horizontal">
<fieldset>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-name">İsim Soyisim	</label>
<div class="col-sm-10">
<input type="text" required name="adsoyad" class="form-control">
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-email">E-mail Adresi</label>
<div class="col-sm-10">
<input type="email" required name="email" class="form-control">
<input type="hidden" name="ip" value="<?php echo GetIp(); ?>"> 
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-email">Konu</label>
<div class="col-sm-10">
<input type="text" required name="konu" class="form-control">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="input-enquiry">Mesajınız</label>
<div class="col-sm-10">
<textarea name="mesaj" required rows="10" class="form-control"></textarea>
</div>
</div>
</fieldset>
<div class="buttons">
<div class="pull-right">
<input class="btn btn-primary" type="submit" name="Gönder">
</div>
</div>
</form>
</div>
</div>
</br>