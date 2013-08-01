<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7">   <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8">          <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9">                 <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js">                        <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard</title>
    <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('styles/admin/css/bootstrap.min.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('styles/admin/css/bootstrap-responsive.min.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('styles/admin/css/font-awesome.min.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('styles/admin/css/style.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('styles/admin/css/calendar.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('styles/admin/css/theme.css');?>">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('styles/admin/css/font-awesome-ie7.min.css');?>">
    <![endif]-->

    <script src="<?php echo base_url('scripts/admin/vendor/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
</head>

<body>
<!-- BEGIN WRAP -->
<div id="wrap">
    <!-- BEGIN TOP BAR -->
    <div id="top">
        <?php $this->load->view('admin/ui_components/top_navigation_bar'); ?>
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER.head -->
    <header class="head">
        <div class="search-bar">
         <?php $this->load->view('admin/ui_components/search_bar'); ?>
        </div>
        <!-- ."main-bar -->
        <div class="main-bar">
            <?php $this->load->view('admin/ui_components/main_bar'); ?>
        </div>
        <!-- /.main-bar -->
    </header>
    <!-- END HEADER.head -->

    <!-- BEGIN LEFT  -->
    <?php $this->load->view('admin/ui_components/left_menu_cpanel'); ?>
    <!-- END LEFT -->