<div class="container">
<div class="row">
<?php echo $this->session->flashdata('hata'); ?>
<div id="content" class="col-sm-12 product_page">
<div class="row product-content-columns">
<div class="col-sm-5 col-lg-7 product_page-left">
<div id="default_gallery" class="product-gallery">
<div class="image-thumb">
<ul id="image-additional">
<li>
<!--

-->
</a>
</li>

</ul>
</div>

<div class="container">
  <div class="row">

      <div class="col-md-3">
          <img src="<?php echo base_url(); echo $bilgi['resim'] ?>"/ style="height: 310px; weight: 400px;">
      </div>

      <div class="col-md-3 text-center"><br>
          <h3>Koçun Adı ve Soyadı</h3>
          <h2  class="text-muted"><?php echo  $bilgi['adsoyad'] ?></h2>

      </div>

      <div class="col-md-4 text-right"><br>
          <h3>Koç İlgi Alanları</h3>
          <h2 class="text-muted">      Grafik ve Tasarım</h2>
      </div>

      <div class="col-md-8 text-center"><br>
          <h3 class="text-danger">Koçun Özellikleri</h3>
          <p  style="font-size: 15px;  color:#98c1e0"><i class="fa fa-user"></i>Uzmanımız Sinan Erkan, geleceğe yönelik projelerde <br> daha başarılı

              olmanız için size en uygun kursları vermek için emrinize amadedir.

          </p>
      </div>

      <div class="col-md-8 text-center"><br>
          <h3 class="text-danger">Koçun Yaşadığı Şehir</h3>
          <h4><?php echo $bilgi['sehir'] ?></h4>
      </div>

  </div>
</div>

</div>
</div>
</div>
</div>
