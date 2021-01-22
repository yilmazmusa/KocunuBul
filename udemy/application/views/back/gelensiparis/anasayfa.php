<!DOCTYPE html>
<html>
<?php $this->load->view('back/include/head');?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('back/include/header');?>
  <?php $this->load->view('back/include/sidebar');?>
  <div class="content-wrapper">
      <?php $this->load->view('back/gelensiparis/breadcrumb.php');?>
      <?php $this->load->view('back/gelensiparis/main_content.php');?>
  </div>
  <?php $this->load->view('back/include/footer.php');?>
</div>
<?php $this->load->view('back/include/script.php');?>
</body>
</html>
