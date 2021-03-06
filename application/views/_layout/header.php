<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url(); ?>asset/bower_components/jquery/dist/jquery.min.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>"><i class="fa fa-book fa-fw"></i>Sistem Pencatatan Akuntansi</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="<?php echo base_url() ?>barang/laporan_transaksi "><i class="fa fa-book fa-fw"></i> Laporan</a></li>
				<li><a href="<?php echo base_url() ?>auth/logout "><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url() ?>barang/list_barang"><i class="fa fa-table fa-fw"></i> Tabel Stok Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>barang/masuk"><i class="fa fa-inbox fa-fw"></i> Barang Masuk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>barang/keluar"><i class="fa fa-share fa-fw"></i> Barang Keluar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>pelanggan/input"><i class="fa fa-edit fa-fw"></i> Input Pelanggan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>pelanggan/list_pelanggan"><i class="fa fa-table fa-fw"></i> List Pelanggan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>anggota_kelompok/index"><i class="fa fa-users fa-fw"></i> Anggota Kelompok</a>
                        </li>
                        <li class="sidebar-search">
                            <img src="<?php echo base_url() ?>asset/logo.jpeg" width="100%" alt="">
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>