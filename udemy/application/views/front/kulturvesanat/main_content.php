<div class="row">
<?php foreach ($bilgi as $bilgi) { $result = 0; if($bilgi['durum']=='1') { ?>
<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="product-thumb maxheight1">
<div class="image">
<a href="<?php echo base_url('kulturvesanatdetay/'); echo $bilgi['sef']; ?>">
<img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/>
</a>
</div>
<div>
<div class="caption">
<div class="price price-product">
<span class="price-new"><?php echo $bilgi['fiyat']; ?> ₺</span>
</div>
<div class="name name-product">
<a href="<?php echo base_url('kulturvesanatdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
</div>
<div class="description">
<?php echo word_limiter($bilgi['aciklama'],25); ?>
</div>
</div>
<div class="cart-button">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="rating">
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
</div>
</div>
<div class="clear"></div>
</div>
</div>

<?php }else { ?>
<div class="product-layout product-grid col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Bilgi <br>Kategoriye Henüz Ürün Eklenmemiş </div>
</div>
<?php } } ?>

</div>
<div class="row">
<div class="col-sm-12 text-right">

<?php echo $linkler; ?>
</div>
</div>
</div>
</div>
</div>
