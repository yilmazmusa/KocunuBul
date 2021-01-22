<div class="box specials">
<div class="box-heading">
<h3>Popüler Spor Eğitimleri</h3></div>
<div class="box-content">
<div class="product-layout">
<div class="bestseller-slider">
<?php $bilgi = uruncek(); foreach ($bilgi as $bilgi) {
if ($bilgi['katID']==2 AND $bilgi['durum']=='1') { ?>
<div>
<div class="product-thumb transition equal-height-767">
<div class="sale">İncele</div>
<div class="image">
<a href="<?php echo base_url('spordetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['mini1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
</div>
<div class="caption">
<div class="price">
<span class="price-new"><?php echo $bilgi['fiyat']; ?> ₺</span>
</div>
<div class="name">
<a href="<?php echo base_url('spordetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
</div>
<div class="rating">
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
</div>
</div>
<div class="cart-button">
</div>
<div class="clear"></div>
</div>
</div>
<?php } } ?>
</div>
</div>
</div>
</div>
