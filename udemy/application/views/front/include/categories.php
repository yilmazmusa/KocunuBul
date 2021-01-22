<div class="box category info">
<div class="box-heading">
<h3><i class="flaticon-show5"></i>Kategoriler</h3>
</div>
<div class="box-content">
<div class="box-category">
<ul class="menu">

<?php

$kategoriler = kategoricek(); foreach ($kategoriler as $kategori) {
if($kategori['id']==1){ ?>

<li><a href="<?php echo base_url('kisiselgelisim'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>

<?php }elseif ($kategori['id']==2){ ?>
<li><a href="<?php echo base_url('spor'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==3){ ?>
<li><a href="<?php echo base_url('egitim'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==4){ ?>
<li><a href="<?php echo base_url('programlamayazilim'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==5){ ?>
<li><a href="<?php echo base_url('grafiktasarim'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==6){ ?>
<li><a href="<?php echo base_url('ascilik'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==7){ ?>
<li><a href="<?php echo base_url('hobielsanatlari'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==8){ ?>
<li><a href="<?php echo base_url('dilegitimi'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==9){ ?>
<li><a href="<?php echo base_url('muzikveenstruman'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==10){ ?>
<li><a href="<?php echo base_url('bilisimveteknoloji'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==11){ ?>
<li><a href="<?php echo base_url('saglikveyasam'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==12){ ?>
<li><a href="<?php echo base_url('kulturvesanat'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>
<?php }elseif ($kategori['id']==13){ ?>
<li><a href="<?php echo base_url('ozelgunurunleri'); ?>"><i class="fa fa-chevron-right"></i> <?php echo $kategori['titlem']; ?></a></li>

<?php } } ?>








</ul>
</div>
</div>
</div>
