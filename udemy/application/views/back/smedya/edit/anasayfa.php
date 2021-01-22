
<!DOCTYPE html>
<html>

<?php $this->load->view('back/include/head');?>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php $this->load->view('back/include/header');?>
  <?php $this->load->view('back/include/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

      <?php $this->load->view('back/smedya/edit/breadcrumb.php');?>

      <?php $this->load->view('back/smedya/edit/main_content.php');?>


  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('back/include/footer.php');?>


</div>

<?php $this->load->view('back/include/script.php');?>

<!-- ./wrapper -->

</body>
</html>
