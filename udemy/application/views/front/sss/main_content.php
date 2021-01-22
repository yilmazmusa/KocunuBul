<div class="row about-page">
<div class="col-sm-12">
<h3>Sık Sorulan Sorular</h3>
<?php $no = 1; $bilgi = sss(); foreach ($bilgi as $bilgi) { ?>
<span class="dropcap"><?php echo $no++; ?></span>
<div class="extra-wrap">
<h4><?php echo $bilgi['title']; ?></h4>
<p><?php echo $bilgi['aciklama']; ?></p>
</div>
<div class="clear"></div>
<?php } ?>
</div>
</div>
