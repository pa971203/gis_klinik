<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
  <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title><?= $title ?></title>
  <link rel="apple-touch-icon" href="<?= base_url('assets/') ?>images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/') ?>images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>vendors/css/charts/chartist.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN CHAMELEON  CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/app-lite.css">
  <!-- END CHAMELEON  CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/pages/dashboard-ecommerce.css">
  <!-- END Page Level CSS-->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <!-- BEGIN Custom CSS-->
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  <!-- fixed-top-->
  
  <?php $this->load->view('Layout/TopHeader'); ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <!-- sidebar -->
  <?php $this->load->view('Layout/Sidebar'); ?>
  <!-- endsidebar -->

  <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-wrapper-before"></div>
     <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title"><?= $title ?></h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active"><?= $title ?>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- Chart -->
      <!-- eCommerce statistic -->
      <?php $this->load->view('Pages/' . $pages) ?>
      <!--/ eCommerce statistic -->

      <!-- Statistics -->

      <!--/ Statistics -->
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- footer -->
<?php $this->load->view('Layout/Footer'); ?>
<!-- end footer -->

<!-- BEGIN VENDOR JS-->
<script src="<?= base_url('assets/') ?>vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?= base_url('assets/') ?>vendors/js/charts/chartist.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="<?= base_url('assets/') ?>js/core/app-menu-lite.js" type="text/javascript"></script>
<script src="<?= base_url('assets/') ?>js/core/app-lite.js" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?= base_url('assets/') ?>js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
 <?php !empty($script) ? $this->load->view('Pages/' . $script) : '' ?>
</body>
</html>