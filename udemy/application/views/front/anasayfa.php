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
  <?php $this->load->view('front/include/head.php'); ?>
  <?php $this->load->view('front/include/style.php'); ?>

</head>
<body class="common-home">
  <!-- mobile -->
  <?php $this->load->view('front/include/mobile'); ?>

  <!--#mobile  -->
<div id="page">
<div class="shadow"></div>
<div class="toprow-1">
<a class="swipe-control" href="#"><i class="fa fa-align-justify"></i></a>
</div>
<!-- header -->
  <?php $this->load->view('front/include/header.php'); ?>

<!--#header  -->

<!-- mobile-cat -->
  <?php $this->load->view('front/include/mobile_cat.php'); ?>

<!--#mobile-cat  -->

<div class="header_modules"></div>
<div id="container">
<div class="container">
<div class="row">
<aside id="column-left" class="col-sm-3 ">

  <!-- categories -->
  <?php $this->load->view('front/include/categories.php'); ?>

  <!--#categories  -->

  <!-- user -->
  <?php $this->load->view('front/include/user.php'); ?>

  <!--#user  -->

  <!-- specials -->
  <?php $this->load->view('front/include/specials.php'); ?>

  <!--#specials  -->

  <!-- best-seller -->
  <?php $this->load->view('front/include/best_seller.php'); ?>

  <!--#best-seller  -->

</aside>
<div id="content" class="col-sm-9">
<!-- galeri -->
<?php $this->load->view('front/include/gallery.php'); ?>

<!--#galeri  -->

<!-- banner -->
<?php $this->load->view('front/include/banner.php'); ?>

<!--#banner  -->

<!-- latest -->


<?php $this->load->view('front/include/featured.php'); ?>
<!--#latest  -->

<!-- featured -->

<?php $this->load->view('front/include/latest.php'); ?>


<!--#featured  -->
</div>
</div>
</div>
</div>
<!-- footer -->
<?php $this->load->view('front/include/footer.php'); ?>

<!--#footer  -->
<!-- script -->
<?php $this->load->view('front/include/script.php'); ?>

<!--#script  -->
</div>
</body>
</html>
