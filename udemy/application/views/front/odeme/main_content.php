
<h1>Satın Alım İşlemleri</h1>

<form class="form-horizontal" action="<?php echo base_url('sepet/satinalim'); ?>" method="post">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a href="#collapse-payment-bank" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed"> Ödeme Seçimi <i class="fa fa-caret-down"></i></a>
</h4>
</div>
<div class="panel-collapse collapse" id="collapse-payment-bank">
<div class="panel-body">
<div class="radio">
<h3>Kredi Kartı Bilgileri</h3>
</div>
<table class="table table-bordered">
<thead>
<tr>
<td class="text-center">Kart Numarası</td>
<td class="text-center">Son Kullanma Tarihi</td>
<td class="text-center">CCV</td>
</tr>
</thead>
<tbody>

<tr>
<td class="text-center"><input type="text" name="kkno"></td>
<td class="text-center"><input type="text" name="skt"></td>
<td class="text-center"><input type="text" name="ccv"></td>
</tr>

</tbody>
</table>

</div>


<div class="panel-body">
<div class="radio">
<h3>Banka Bilgileri</h3>
</div>
<table class="table table-bordered">
<thead>
<tr>
<td class="text-center">Banka Adı</td>
<td class="text-center">Şube</td>
<td class="text-center">IBAN</td>
<td class="text-center">Hesap No</td>
</tr>
</thead>
<tbody>
<?php $banka = bankasec(); foreach ($banka as $banka) { ?>
<tr>
<td class="text-center"><input type="radio" name="bankaadi" value="<?php echo $banka['title']; ?>"> <?php echo $banka['title']; ?></td>
<td class="text-center"><?php echo $banka['sube']; ?></td>
<td class="text-center"><?php echo $banka['iban']; ?></td>
<td class="text-center"><?php echo $banka['hesapno']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>

<p style="color:red; font-weight:bold">Not : Ödeme Yapacağınız Bankayı Belirleyip IBAN Numaralarına EFT ya da Havale Yaptıktan sonra</p>
<p style="color:red; font-weight:bold"> Dekonttaki İsim Soyisim ile Banka Adını Ödeme Türünü İletişim Formundan bildirmeniz gerekmektedir.</p>
</div>
</div>
</div>
<div class="buttons clearfix">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="buttons">
<div class="pull-right">
<input type="submit" value="İşleme Devam Et" id="button-confirm" class="btn btn-primary">
</div>
</div>
</div>
</div>
</form>
