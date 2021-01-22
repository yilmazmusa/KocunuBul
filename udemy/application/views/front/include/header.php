<header class="header">
<div class="container">
<div class="box-right">
<div class="pull-right box-language">
</div>
<div class="box-currency">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-3 col-xs-6">
<div id="logo" class="logo">
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/front/image/Adsız.png" title="KoçunuBUL"  alt="KoçunuBUL" class="img-responsive"/></a>
</div>
</div>
<div class="col-sm-3 col-xs-3">
<div class="search">
<input type="text" name="term" id="arama" placeholder="Eğitim Adını Yazınız.." />
<button type="button" class="button-search">  Eğitim Arama</button>
<div class="clear"></div>
</div>
</div>

<div class="col-sm-3 col-xs-3">
<div class="search">
<input type="text" name="term2" id="arama2" placeholder="Koç Adını Yazınız.." />
<button type="button" class="button-search">Koç Arama</button>
<div class="clear"></div>
</div>
</div>

<div class="col-sm-3">
<div class="phone hidden-xs">
<ul class="social-list">

<li><a href="#" target="_blank" rel="nofollow"><i class="flaticon-facebook56"></i></a></li>
<li><a href="#" target="_blank" rel="nofollow"><i class="flaticon-twitter47"></i></a></li>
<li><a href="#" target="_blank" rel="nofollow"><i class="flaticon-instagram16"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9">
<nav id="top" class="top_panel">
<div id="top-links" class="nav">
<ul class="list-inline">
<li class="first">
<a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i><span class="hidden-sm"></span></a>
</li>
<li>
<a href="<?php echo base_url('gizlilik'); ?>" id="wishlist-total" title="Gizlilik Sözleşmesi"><i class="fa fa-shield"></i>
<span class="hidden-sm">Gizlilik Sözleşmesi</span></a>
</li>
<li>
<a href="<?php echo base_url('satis'); ?>" title="Satış Sözleşmesi"><i class="fa fa-bookmark"></i>
<span class="hidden-sm">Satış Sözleşmesi</span></a>
</li>
<li>
<a href="<?php echo base_url('sss'); ?>" title="S.S.S"><i class="fa fa-question-circle"></i>
<span class="hidden-sm">S.S.S</span></a>
</li>
<li>
<a href="<?php echo base_url('garanti'); ?>" title="Garanti ve İade"><i class="fa fa-retweet"></i>
<span class="hidden-sm">Garanti ve İade</span></a>
</li>
<li>
<a href="<?php echo base_url('iletisim'); ?>" title="İletişim"><i class="fa fa-envelope"></i>
<span class="hidden-sm">İletişim</span></a>
</li>
</ul>
<div class="box-cart">
<div id="cart" class="cart">
<button type="button" data-toggle="dropdown">
<i class="flaticon-shopping232"></i>
<?php if(!empty($this->session->userdata('uyegiris'))){ ?>
<span id="cart-total3" class="cart-total3 hidden-xs cart-count"><?php echo count($this->cart->contents()); ?> ürün</span>
<?php }else{ ?>
<span id="cart-total3" class="cart-total3 hidden-xs cart-count">0 ürün</span>
<?php } ?>
<span class="fa fa-angle-down"></span>
</button>
<ul class="dropdown-menu pull-right">
<li>
<p class="text-center"><a href="<?php echo base_url('sepet'); ?>">Sepete Git</a></p>
</li>
</ul>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
</header>
