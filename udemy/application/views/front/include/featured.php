<div class="box latest">
<div class="box-heading">
<h3>Cok Satan Eğitimler</h3></div>
<div class="box-content">
<div class="latest-scroll">
<?php $bilgi = uruncek(); foreach ($bilgi as $bilgi) {
if ($bilgi['katID']=='1' AND $bilgi['durum']=='1') { ?>
<div>
<div class="product-thumb transition maxheight1">
<div class="quick_info">
<div id="quickview_latest_1" class="quickview-style">
<div>
<div class="left col-sm-4">
<div class="quickview_image image">
<a href="<?php echo base_url('kisiselgelisimdetay/'); $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
</div>
</div>
<div class="right col-sm-8">
<h2><?php echo $bilgi['title']; ?></h2>
<div class="inf">
<div class="price">
<span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="clear"></div>
<div class="rating text-center">
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
<div class="col-sm-12">
<div class="quickview_description description">
<?php echo $bilgi['aciklama']; ?>
</div>
</div>
</div>
</div>
</div>
<div class="sale">İncele</div>
<div class="image">
<a href="<?php echo base_url('kisiselgelisimdetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="" title="" class="img-responsive"/></a>
</div>
<div class="caption">
<div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
<div class="name">
<a href="<?php echo base_url('kisiselgelisimdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
</div>
<div class="description">
<?php echo word_limiter($bilgi['aciklama'],25); ?>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
<a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
<i class="flaticon-tick7"></i>
</a>
</div>
<div class="rating text-center">
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
<div class="clear"></div>
</div>
</div>
<?php }elseif ($bilgi['katID']==2 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('spordetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('spordetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('spordetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==3 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('egitimdetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('egitimdetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('egitimdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==4 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('programlamayazilimdetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('programlamayazilimdetay/'); echo $bilgi['sef']; ?>">
  <img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('programlamayazilimdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==5 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('grafiktasarimdetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>"
   class="img-responsive" src="<?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('grafiktasarimdetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('grafiktasarimdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==6 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('ascilikdetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('ascilikdetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>"title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('ascilikdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==7 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('hobielsanatlaridetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('hobielsanatlaridetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('hobielsanatlaridetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==8 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('dilegitimidetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('dilegitimidetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('dilegitimidetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==9 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('muzikveenstrumandetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('muzikveenstrumandetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('muzikveenstrumandetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==10 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('bilisimveteknolojidetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('bilisimveteknolojidetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="" title="" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('bilisimveteknolojidetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==11 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('saglikveyasamdetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('saglikveyasamdetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('saglikveyasamdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==12 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('kulturvesanatdetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('kulturvesanatdetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('kulturvesanatdetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>

<?php }elseif ($bilgi['katID']==13 AND $bilgi['durum']=='1') { ?>
  <div>
  <div class="product-thumb transition maxheight1">
  <div class="quick_info">
  <div id="quickview_latest_1" class="quickview-style">
  <div>
  <div class="left col-sm-4">
  <div class="quickview_image image">
  <a href="<?php echo base_url('ozelgunurunleridetay/'); echo $bilgi['sef']; ?>"><img alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive" src=" <?php echo base_url(); echo $bilgi['tmb1']; ?>"/></a>
  </div>
  </div>
  <div class="right col-sm-8">
  <h2><?php echo $bilgi['title']; ?></h2>
  <div class="inf">
  <div class="price">
  <span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  </div>
  <div class="clear"></div>
  <div class="rating text-center">
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
  <div class="col-sm-12">
  <div class="quickview_description description">
  <?php echo $bilgi['aciklama']; ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="sale">İncele</div>
  <div class="image">
  <a href="<?php echo base_url('ozelgunurunleridetay/'); echo $bilgi['sef']; ?>"><img src="<?php echo base_url(); echo $bilgi['tmb1']; ?>" alt="<?php echo $bilgi['title']; ?>" title="<?php echo $bilgi['title']; ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price"><span class="price-new"><?php echo $bilgi['fiyat']; ?> TL</span></div>
  <div class="name">
  <a href="<?php echo base_url('ozelgunurunleridetay/'); echo $bilgi['sef']; ?>"><?php echo $bilgi['title']; ?></a>
  </div>
  <div class="description">
  <?php echo word_limiter($bilgi['aciklama'],25); ?>
  </div>
  </div>
  <div class="cart-button text-center">
  <button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
  <i class="flaticon-shopping232"></i>
  </button>
  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
  <i class="flaticon-tick7"></i>
  </a>
  </div>
  <div class="rating text-center">
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
  <div class="clear"></div>
  </div>
  </div>


<?php } } ?>
</div>
</div>
</div>
