<?php $info = $this->session->userdata('uyeinfo');?>
<h1>Ödeme İşlemleri</h1>
<?php echo $this->session->flashdata('durum'); ?>
<div class="panel-body">
<div class="radio">
<h3>Sepet Bilgileri</h3>
</div>
<form action="<?php echo base_url('anasayfa/odemebitis'); ?>" method="post">
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>

</thead>
<tbody>

</tbody>
</table>

<table class="table table-bordered table-hover">
<thead>
<tr>
<td class="text-left">Ürün Adı</td>
<td class="text-right">Adedi</td>
<td class="text-right">Fiyatı</td>
<td class="text-right">Toplam</td>
</tr>
</thead>
<tbody>

<?php $count = 0;
foreach ($this->cart->contents() as $items) { ?>
<tr>
<td class="text-left"><?php echo $items['name']; ?></td>
<td class="text-right" style="font-weight:bold; font-size:16px"><?php echo $items['qty']; ?></td>
<input type="hidden" name="adet" value="<?php echo $items['qty']; ?>">
<td class="text-right" style="font-weight:bold; font-size:16px"><?php echo $items['price']; ?> TL</td>
<input type="hidden" name="fiyat" value="<?php echo $items['price']; ?>">
<td class="text-right" style="color:black; font-weight:bold; font-size:16px"><?php echo $items['subtotal']; ?> TL</td>
<input type="hidden" name="toplam" value="<?php echo $items['subtotal']; ?>">
</tr>
<?php $count++; } ?>
</tbody>
<tfoot>
<tr>
<td colspan="3" class="text-right"><strong>Sepetteki Ürün Adedi :</strong></td>
<td class="text-right" style="color:black; font-weight:bold; font-size:16px"><?php echo count($this->cart->contents()); ?></td>
<input type="hidden" name="adet" value="<?php echo count($this->cart->contents()); ?>">
<input type="hidden" name="urunID" value="<?php echo $items['id']; ?>">
<input type="hidden" name="uyeID" value="<?php echo $info->id; ?>">
<input type="hidden" name="urunadi" value="<?php echo $items['name']; ?>">
</tr>
<tr>
<td colspan="3" class="text-right"><strong>Sepet Toplamı :</strong></td>
<td class="text-right" style="color:red; font-weight:bold; font-size:20px"><?php echo $this->cart->total(); ?> TL</td>
<input type="hidden" name="toplamtutar" value="<?php echo $this->cart->total(); ?>">
</tr>
</tfoot>

</table>
</div>
<div class="buttons">
<div class="pull-right">
<input type="submit" value="Ödeme İşlemini Onayla" id="button-confirm" class="btn btn-primary">
</div>
</div>
</div>
</div>
</form>
</div>
