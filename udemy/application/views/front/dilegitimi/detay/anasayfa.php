<?php $info = $this->session->userdata('info'); ?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="tr">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KoçunuBUL | <?php echo $bilgi['title']; ?></title>
<meta property="og:url"           content="<?php echo base_url('dilegitimidetay/'); echo $bilgi['sef']; ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="UDEMY | <?php echo $bilgi['title']; ?>" />
<meta property="og:description"   content="Codeigniter ile Eticaret Eğitim Serisi" />
<meta property="og:image"         content="<?php echo base_url(); echo $bilgi['resim1']; ?>" />
<meta name="description" content="<?php echo $bilgi['title']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="<?php echo base_url(); ?>assets/front/image/favicon.ico" rel="icon" />
<?php $this->load->view('front/include/style'); ?>
</head>
<body class="product-product">
  <?php $this->load->view('front/include/mobile'); ?>

<div id="page">
<div class="shadow"></div>
<div class="toprow-1">
<a class="swipe-control" href="#"><i class="fa fa-align-justify"></i></a>
</div>
<?php $this->load->view('front/include/header'); ?>

<?php $this->load->view('front/include/mobile_cat'); ?>

<div class="header_modules"></div>
<div id="container">
<div class="container">
<div class="row">
<div id="content" class="col-sm-12">
<?php $this->load->view('front/dilegitimi/detay/breadcrumb'); ?>
<?php $this->load->view('front/dilegitimi/detay/main_content'); ?>
</div>
</div>
</div>
</div>
<?php $this->load->view('front/include/footer'); ?>
<?php $this->load->view('front/include/script'); ?>

<!-- script -->
</div>
</body>
</html>
