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
<a href="#" data-image="<?php echo base_url(); echo $bilgi['resim1'] ?>"
data-zoom-image="<?php echo base_url(); echo $bilgi['resim1'] ?>">
<img src="<?php echo base_url(); echo $bilgi['mini1'] ?>"/>
</a>
</li>
<li>
<a href="#" data-image="<?php echo base_url(); echo $bilgi['resim2']; ?>"
data-zoom-image="<?php echo base_url(); echo $bilgi['resim2']; ?>">
<img src="<?php echo base_url(); echo $bilgi['mini2']; ?>"/>
</li>
<li>
<a href="#" data-image="<?php echo base_url(); echo $bilgi['resim3']; ?>"
data-zoom-image="<?php echo base_url(); echo $bilgi['resim3']; ?>">
<img src="<?php echo base_url(); echo $bilgi['mini3']; ?>"/>
</li>
<li>
<a href="#" data-image="<?php echo base_url(); echo $bilgi['resim4']; ?>"
data-zoom-image="<?php echo base_url(); echo $bilgi['resim4']; ?>">
<img src="<?php echo base_url(); echo $bilgi['mini4']; ?>"/>
</li>
</ul>
</div>
<div class="image">
<img id="gallery_zoom" class="resim" value="<?php echo base_url(); echo $bilgi['mini1']; ?>" src="<?php echo base_url(); echo $bilgi['resim1']; ?>" data-zoom-image="<?php echo base_url(); echo $bilgi['resim1']; ?>" />
</div>
</div>
<div id="full_gallery">
<ul id="gallery">
<li>
<a href="<?php echo base_url(); echo $bilgi['resim1']; ?>" data-something="something" data-another-thing="anotherthing"><img src="<?php echo base_url(); echo $bilgi['resim1']; ?>" title="<?php echo base_url(); echo $bilgi['title']; ?>"
alt="<?php echo $bilgi['title']; ?>"/></a>
</li>
<li>
<a href="<?php echo base_url(); echo $bilgi['resim2']; ?>" data-something="something1" data-another-thing="anotherthing1"><img src="<?php echo base_url(); echo $bilgi['resim2']; ?>" title="<?php echo base_url(); echo $bilgi['title']; ?>"
alt="<?php echo $bilgi['title']; ?>"/></a>
</li>
<li>
<a href="<?php echo base_url(); echo $bilgi['resim3']; ?>" data-something="something1" data-another-thing="anotherthing1"><img src="<?php echo base_url(); echo $bilgi['resim3']; ?>" title="<?php echo base_url(); echo $bilgi['title']; ?>"
alt="<?php echo base_url(); echo $bilgi['title']; ?>"/></a>
</li>
</li>
<li>
<a href="<?php echo base_url(); echo $bilgi['resim4']; ?>" data-something="something1" data-another-thing="anotherthing1"><img src="<?php echo base_url(); echo $bilgi['resim4']; ?>" title="<?php echo base_url(); echo $bilgi['title']; ?>"
alt="<?php echo base_url(); echo $bilgi['title']; ?>"/></a>
</li>
</li>
</ul>
</div>
</div>
<div class="col-sm-7 col-lg-5 product_page-right">
<div class="general_info product-info">
<h1 class="product-title baslik" value="<?php echo $bilgi['title']; ?>"><?php echo $bilgi['title']; ?></h1>
<div class="rating-section product-rating-status">
<div class="rating">
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
</div>
</div>
<div class="price-section">
<span class="price-new fiyat" value="<?php echo $bilgi['fiyat']; ?>"><?php echo $bilgi['fiyat']; ?></span>
<div class="reward-block">
</div>
</div>
<?php echo $bilgi['bilgi']; ?>
</div>
<div id="product">
<div class="form-group form-horizontal">
<input type="hidden" name="product_id" class="product_id" value="id"/>

<?php if ($info = $this->session->userdata('uyegiris')){ ?>
<input type="hidden" class="uyeid" value="#">
<button type="button" id="button-cart" productid="<?php echo $bilgi['id']; ?>" value="<?php echo $bilgi['id']; ?>" class="btn btn-add addToCart">Sepete Ekle</button>
<?php }else{ ?>
<a href="<?php echo base_url('giris'); ?>" class="btn btn-primary" id="button-cart">Satın Almak için Giriş Yap</a>
<?php } ?>

</div>
</div>
</div>
</div>
<div id="tab-description" class="product-desc product-section">
<h3 class="product-section_title">Özellikler</h3>
<?php echo $bilgi['aciklama']; ?>
<div class="clearfix"></div>
</div>
<div id="tab-review" class="product-reviews product-section">
<div id="review">
<?php $yorum = yorumlar(); foreach ($yorum as $yorum) { if($yorum['url']=="http://localhost/kocunubul/udemy/ascilikdetay/"){ ?>
<h3 class="product-section_title">Yorumlar ( <?php $urunid = $bilgi['id']; echo yorumcek($urunid); ?> )</h3>
<div class="review-item">
<div class="row">
<div class="col-sm-3">
<div class="review-score">
<?php for($i=0;$yorum['rating'] > $i;$i++){ ?>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
<?php } ?>
</div>
<div class="review-author"><strong><?php echo $yorum['adsoyad']; ?> </strong></div>
<div class="review-date"></div>
</div>
<div class="col-sm-9">
<?php echo $yorum['yorum']; ?>
</div>
</div>
</div>
<?php }else{ ?>
<div class="row">
<h3 class="product-section_title">Yorumlar ( 0 )</h3>
Bu ürüne ait henüz yorum bulunmuyor..
</div>
<?php } } ?>
<div class="text-right"></div>
</div>
<form action="<?php echo base_url('anasayfa/yorumlar'); ?>" method="POST" class="form-horizontal">
<div id="review"></div>
<div class="review-form-title">
<h3 class="product-section_title" id="reviews_form_title">Yorum Yazın</h3>
</div>
<div class="product-review-form" id="reviews_form">

<div class="form-group required">
<label class="control-label col-sm-2 col-sm-offset-2" for="input-name">İsim Soyisim</label>
<div class="col-sm-6">
<input type="text" name="adsoyad" id="input-name" required class="form-control">
</div>
</div>
<div class="form-group required">
<label class="control-label col-sm-2 col-sm-offset-2" for="input-review">Yorumunuz</label>
<div class="col-sm-6">
<textarea name="yorum" rows="5" id="input-review" required class="form-control"></textarea>
</div>
</div>
<div class="form-group required">
<label class="control-label col-sm-2 col-sm-offset-2">Oyunuz</label>
<div class="col-sm-6">&nbsp;&nbsp;&nbsp; Kötü&nbsp;
<input type="radio" name="rating" value="1"/>&nbsp;
<input type="radio" name="rating" value="2"/>&nbsp;
<input type="radio" name="rating" value="3"/>&nbsp;
<input type="radio" name="rating" value="4"/>&nbsp;
<input type="radio" name="rating" required value="5"/>&nbsp;İyi
</div>
</div>
<div class="form-group">
<div class="col-sm-9 col-sm-offset-3">
<div class="pull-right">
<button type="submit" id="button-review" class="btn btn-primary">Yorum Yap</button>
<input type="hidden" name="urunid" value="<?php echo $bilgi['id']; ?>">
<input type="hidden" name="url" value="<?php echo base_url('ascilikdetay/'); ?>">
<input type="hidden" name="link" value="<?php echo $bilgi['sef']; ?>">
<input type="hidden" name="ip" value="<?php echo GetIP(); ?>">
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
