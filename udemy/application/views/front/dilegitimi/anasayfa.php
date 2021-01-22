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
<title>KoçunuBUL | Dil Eğitimi </title>
<meta name="description" content="Dil Eğitimi " />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="<?php echo base_url(); ?>assets/front/image/favicon.ico" rel="icon" />
<?php $this->load->view('front/include/style'); ?>
</head>
<body class="product-category">
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
<aside id="column-left" class="col-sm-3 ">
<?php $this->load->view('front/include/categories'); ?>
<?php $this->load->view('front/include/user'); ?>
<?php $this->load->view('front/include/specials'); ?>
<?php $this->load->view('front/include/best_seller'); ?>
</aside>
<div id="content" class="col-sm-9">
<?php $this->load->view('front/dilegitimi/breadcrumb'); ?>
<?php $this->load->view('front/dilegitimi/main_content.php'); ?>
</div>
</div>
</div>
</div>
<?php $this->load->view('front/include/footer'); ?>
<?php $this->load->view('front/include/script'); ?></div>
</body>
</html>
