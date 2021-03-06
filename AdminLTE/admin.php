<?php 
session_start();
include 'common/header.php';
include 'controller/backend/user_controller.php';
include 'controller/backend/product_controller.php';
?>
  <!-- Left side column. contains the logo and sidebar -->
 
  <?php include 'common/sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        <?php 
          $user = new UserController();
          $user->handleRequest();
          $pd = new ProductController();
          $pd->handleRequest();
        ?>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>
