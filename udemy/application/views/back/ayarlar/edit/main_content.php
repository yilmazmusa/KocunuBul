<section class="content">

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Genel Ayarlar Düzenleme Formu</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="<?php echo base_url('yonetim/gayarguncelle'); ?>" method="post">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Site Başlığı</label>

          <div class="col-sm-10">
            <input type="text" name="title" value="<?php echo $bilgi['site_title'] ?>" class="form-control">
            <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Site Telefon</label>

          <div class="col-sm-10">
            <input type="number" name="tlf" value="<?php echo $bilgi['site_tlf'] ?>" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Site Tanım</label>

          <div class="col-sm-10">
            <input type="text" name="desc" value="<?php echo $bilgi['site_desc'] ?>" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Site Anahtar Kelimeler</label>

          <div class="col-sm-10">
            <input type="text" name="keyw" value="<?php echo $bilgi['site_keyw'] ?>" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Site Bilgi</label>

          <div class="col-sm-10">
            <input type="text" name="bilgi" value="<?php echo $bilgi['site_bilgi'] ?>" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Site Adres</label>

          <div class="col-sm-10">
            <textarea name="adres" rows="8" id="editor1" cols="80"><?php echo $bilgi['site_adres'] ?></textarea>
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo base_url('yonetim/genelayarlar'); ?>"type="submit" class="btn btn-warning">Vazgeç</a>
        <button type="submit" class="btn btn-info pull-right">Güncelle</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>

</section>
