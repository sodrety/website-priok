<html>
    <head>
        <meta charset="UTF-8">
        <title>Karantina Tanjung Priok</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <!-- <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" /> -->
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/bootstrap-daterangepicker-master/daterangepicker.css') ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/select2/dist/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/sweetalert/src/sweetalert.css') ?>" rel="stylesheet" type="text/css" />
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!--tambahkan custom css disini-->
        
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- fancy box -->
        <link href="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.css') ?>" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url('assets/jQuery/jquery.min.js') ?>"></script>

        <script src="<?php echo base_url('assets/moment/min/moment.min.js') ?>"></script>

        <script src="<?php echo base_url('assets/bootstrap-daterangepicker-master/daterangepicker.js') ?>"></script>

        <script src="<?php echo base_url('assets/select2/dist/js/select2.full.min.js".js') ?>"></script>

        <script defer src="<?php echo base_url('assets/fontawesome-free-5.0.7/svg-with-js/js/fontawesome-all.js') ?>"></script>

        <script  src="<?php echo base_url('assets/chart.js/dist/Chart.bundle.min.js') ?>"></script>

        <script  src="<?php echo base_url('assets/chart.js/dist/Chart.bundle.js') ?>"></script>

        <script src="<?php echo base_url('assets/redirect/jquery.redirect.js')?>"></script>
		
        <script src="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.js')?>"></script>
		
        <script src="<?php echo base_url('ckeditor/ckeditor.js')?>"></script>

        <script src="<?php echo base_url('assets/marquee/jquery.marquee.min.js')?>"></script>

        <style>

            .ticker li{
                display:inline;
                margin-left:50px;
            }

            #pengumuman{
                background-color:red;
            }
            
        </style>
    </head>
    <body class="hold-transition">
    <!-- Site wrapper -->
    <!-- <body class="hold-transition skin-blue sidebar-mini"> -->
    <div class="wrapper">

    <div class="bar" id="topb">
        <div class="bar">
            <img src="<?php echo base_url('img/logo-bbkp.png')?>">
        </div>
    </div>
    <div id="pengumuman">
        Pengumuman
        <ul class="ticker">
            <li class="news-item"><a href="#">This is the 1st latest news item.</a></li>
            <li class="news-item"><a href="#">This is the 2nd latest news item.</a></li>
            <li class="news-item"><a href="#">This is the 3rd latest news item.</a></li>
            <li class="news-item"><a href="#">This is the 4th latest news item.</a></li>
        </ul>      
    </div>

    <nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="#">HOME</a></li>
					<li><a href="products.html">SHOP</a></li>
					<li><a href="blog.html">BLOG</a></li>
					<li><a href="blog-single.html">ARTICLE</a></li>
					<li class="dropdown">
						<a href="#">
							PAGES
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						   <li><a  href="#">Action</a></li>
						    <li><a  href="#">Another action</a></li>
						    <li><a  href="#">Something else here</a></li>
						    <li><a  href="#">Separated link</a></li>
						</ul>
					</li> <!-- End of /.dropdown -->

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->

<script type="text/javascript">
    $(function () {
        $('.ticker').marquee({
            pauseOnHover: true,
            speed:90
        });
    });
</script>
    
    