
<h2>Değişim İşlemi</h2>
<?php echo $this->session->flashdata('hata'); ?>
<div class="row">
<div class="col-sm-12"><div class="table-responsive">
  <legend>İptal Talep Formu</legend>
  <form action="<?php echo base_url('anasayfa/degisimformu'); ?>" method="post" class="form-horizontal">
  <fieldset>
    <div class="form-group required">
      <label class="col-sm-2 control-label">İsim Soyisim </label>
      <div class="col-sm-10">
        <input type="text" name="adsoyad" required value="" placeholder="İsim Soyisim" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label">Telefon</label>
      <div class="col-sm-10">
        <input type="number" name="telefon" required value="" placeholder="Telefon" class="form-control">
      </div>
    </div>


    <div class="form-group required">
      <label class="col-sm-2 control-label">Ödeme Şekli</label>
      <div class="col-sm-10">
        <p>Ödemenizi <b style="color:red">Banka Havalesi ya da Kapıda Ödeme </b> Şeklinde Buraya Giriniz.</p>
        <input type="text" name="odeme" required value="" placeholder="Ödeme Şekli" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label">Ürün Adı</label>
      <div class="col-sm-10">
        <p>Siparişlerim Bölümünde <b style="color:red">ÜRÜN İSMİNİ</b> Buraya Giriniz.</p>
        <input type="text" name="urunadi" required value="" placeholder="Ürün Adı" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label">Değişim Talebi</label>
      <div class="col-sm-10">
        <textarea type="text" name="degisim" required placeholder="Değişim Nedeniniz" class="form-control"></textarea>
        <input type="hidden" name="ip" value="<?php echo GetIP(); ?>">
      </div>
    </div>
  </fieldset>
  <div class="buttons clearfix">
    <div class="pull-left"><a href="<?php echo base_url(); ?>" class="btn btn-default">Vazgeç</a>
    </div>
    <div class="pull-right">
      <input type="submit" value="Gönder" class="btn btn-primary">
    </div>
  </div>
</form>
    </div>
  </div>
</div>
