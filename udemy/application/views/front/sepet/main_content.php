<h1>Alışveriş Sepetiniz</h1>
<?php echo $this->session->flashdata('durum'); ?>
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<td class="text-center">Resim</td>
<td class="text-center">Eğitim Adı</td>
<td class="text-center">Adedi</td>
<td class="text-center">Fiyatı</td>
<td class="text-center">Toplam</td>
</tr>
</thead>
<tbody>
<?php $count = 0;
foreach ($this->cart->contents() as $items) { ?>
<form action="<?php echo base_url('sepet/update'); ?>" method="post">
<tr>
<td class="text-center">
<div class="image"><img src="<?php  echo $items['mini1']; ?>" alt="<?php echo $items['name']; ?>" title="<?php echo $items['name']; ?>" class="img-thumbnail" /></div>
</td>
<td class="text-left"><?php echo $items['name']; ?></td>
<td class="text-center">
<div class="input-group btn-block" style="max-width: 250px;">
<p class="clearfix"><input name="qty" type="text" uid="<?php echo $items['rowid']; ?>" value="<?php echo $items['qty']; ?>" class="form-control cart-q text-center float-none quantity" /></p>
<div>
<input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
<button type="submit" title="Güncelle" class="btn btn-primary btn-block" style="margin-bottom:5px;"><i class="fa fa-refresh"></i></button>
</form>
<form action="<?php echo base_url('sepet/remove');?>" method="post">
<input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
<button type="submit" title="Sepetten Çıkar" class="btn btn-danger btn-block"><i class="fa fa-times-circle"></i></button>
</form>
</div>
</div>
</td>
<td class="text-right"><div class="price"><?php echo $items['price']; ?> TL</div></td>
<td class="text-right"><div class="price price-total"><?php echo $items['subtotal']; ?> TL</div></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

</div>
<?php if ($count == 0 ){ ?>
<p>Sepetinizde eğitim bulunmuyor.</p>
<div class="buttons">
<div class="pull-right"><a href="<?php echo base_url('anasayfa'); ?>" class="btn btn-primary">Alışverişe Başla</a></div>
</div>
<?php }else{ ?>
<div class="row">
<div class="col-sm-12">
<table class="table table-bordered">
<tr>
<td class="text-right"><strong>Sepetteki Eğitim Adedi :</strong></td>
<td class="text-right"><div class="price price-total"> <?php echo count($this->cart->contents());  ?> Adet</div></td>
</tr>
<tr>
<td class="text-right"><strong>Sepet Toplamı :</strong></td>
<td class="text-right"><div class="price price-total"><?php echo $this->cart->total(); ?> TL</div></td>
</tr>
</table>
</div>
</div>
<div class="buttons">
<div class="pull-left"><a href="<?php echo base_url('anasayfa'); ?>" class="btn btn-default">Alışverişe Devam Et</a></div>
<div class="pull-right"><a href="<?php echo base_url('odeme'); ?>" class="btn btn-primary">Satın Al</a></div>
</div>
</div>
<?php } ?>
</div>
</div>
